<?php
include_once 'header.php';
include_once 'locations_model.php';
?>


<div id="map"></div>

<!------ Include the above in your HEAD tag ---------->
<script>
    var map;
    var marker;
    var infowindow;
    var red_icon =  'http://maps.google.com/mapfiles/ms/icons/red-dot.png' ;
    var purple_icon =  'http://maps.google.com/mapfiles/ms/icons/purple-dot.png' ;
    var locations = <?php get_all_locations() ?>;

    function initMap() {
        var france = {lat: 6.8602, lng: 80.0535};
        infowindow = new google.maps.InfoWindow();
        map = new google.maps.Map(document.getElementById('map'), {
            center: france,
            zoom: 7
        });


        var i ; var confirmed = 0;
        for (i = 0; i < locations.length; i++) {

            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon :   locations[i][5] === '1' ?  red_icon  : purple_icon,
                html: document.getElementById('form')
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    confirmed =  locations[i][5] === '1' ?  'checked'  :  0;
                    $("#confirmed").prop(confirmed,locations[i][5]);
                    $("#id").val(locations[i][0]);
                    $("#description").val(locations[i][3]);
                    $("#image").attr("src", locations[i][4]);;
                    $("#form").show();
                    infowindow.setContent(marker.html);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

    function saveData() {
        var confirmed = document.getElementById('confirmed').checked ? 1 : 0;
        var id = document.getElementById('id').value;

        var fd = new FormData();

        fd.append('confirmed', confirmed);
        fd.append('id', id);

        $.ajax({
            url : 'confirm_location.php',
            type : 'POST',
            data : fd,
            processData: false,
            contentType: false,
            async: false,
            success : function(data) {              
                alert(data);

                if(data == "Location added.")
                {
                    infowindow.close();
                    window.location.reload(true);
                    return;
                }

                infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
                
            },
            error : function(request,error)
            {
                alert(error);
            }
        });


        // return;
        // var url = 'locations_model.php?confirm_location&id=' + id + '&confirmed=' + confirmed ;
        // downloadUrl(url, function(data, responseCode) {
        //     console.log(responseCode);
        //     console.log(data);
        //     console.log(data.length);
        //     if (responseCode === 200  && data.length > 1) {
        //         infowindow.close();
        //         window.location.reload(true);
        //     }else{
        //         infowindow.setContent("<div style='color: purple; font-size: 25px;'>Inserting Errors</div>");
        //     }
        // });
    }


    function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
            if (request.readyState == 1) {
                callback(request.responseText, request.status);
            }
        };

        request.open('GET', url, true);
        request.send(null);
    }


</script>

<div style="display: none" id="form">
    <table class="map1">
        <tr>
            <image id="image" src="" style="width: 250px; height: auto;">
            <input name="id" type='hidden' id='id'/>
            <td><a>Description:</a></td>
            <td><textarea disabled id='description' placeholder='Description'></textarea></td>
        </tr>
        <tr>
            <td><b>Confirm Location ?:</b></td>
            <td><input id='confirmed' type='checkbox' name='confirmed'></td>
        </tr>

        <tr><td></td><td><input type='button' value='Save' onclick='saveData()'/></td></tr>
    </table>
</div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?language=en&key=AIzaSyA-AB-9XZd-iQby-bNLYPFyb0pR2Qw3orw&callback=initMap">
</script>