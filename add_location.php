<?php

require("db.php");

if(isset($_POST['lat']) && isset($_POST['lng']) && isset($_POST['description']) && isset($_FILES['image']))
{
	$con = mysqli_connect ("localhost", 'root', '','demo');

    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }

    $lat = mysqli_real_escape_string($con, $_POST['lat']);
    $lng = mysqli_real_escape_string($con, $_POST['lng']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $target_dir = "uploads/";
	$target_file = $target_dir . md5(time() . basename($_FILES["image"]["name"])) . '.png';
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}

	// Check file size
	if ($_FILES["image"]["size"] > 2000000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		$query = "INSERT INTO locations(lat, lng, description,image) VALUES('$lat', '$lng', '$description', '$target_file');";

		$result = mysqli_query($con, $query);

		if($result)
		{
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		        echo "Location Added.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }

		    return;
		}

    	echo 'Failed to add location';
	}
}
