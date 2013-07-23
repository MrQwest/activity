<?php
	// This takes a get of location and postcode to put into a json file for use with https://github.com/MrQwest/activity
	
	/* Example use:
	

	
	*/
	
	
	$file_name = 'activ.json'; // Location of JSON file
	$location = $_GET['location']; // Gets the location from url
	$postcode = $_GET['postcode']; // Gets the post code

	$file = file_get_contents($file_name); // Gets the contents of a file
	$json = json_decode($file, true); // Decodes the file - the true sets it as an array
	$json[$location] = $postcode; // Adds the location and post code to the array

	$json = json_encode($json); // Re-endodes the arry as json

	file_put_contents($file_name, $json); // Puts it back in the file
	?>