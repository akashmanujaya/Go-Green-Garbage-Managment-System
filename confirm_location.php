<?php

if(isset($_POST['confirmed']) && isset($_POST['id']))
{
	$con=mysqli_connect ("localhost", 'root', '','demo');

	if (!$con) {
	    die('Not connected : ' . mysqli_connect_error());
	}

	$id = mysqli_real_escape_string($con, $_POST['id']);
	$confirmed = mysqli_real_escape_string($con, $_POST['confirmed']);

	// update location with confirm if admin confirm.
	$query = "update locations set location_status = $confirmed WHERE id = $id ";

	$result = mysqli_query($con,$query);

	if ($result) {
	    echo 'Location added.';
	    return;
	}

	echo 'Can\'t add location';
}
else
{
	echo 'Please enter required fields';
}
