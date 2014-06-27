<?php 
include 'header.php';



$input = isset($_GET['page']) ? $_GET['page'] : '';
if ($input=="about") {
	require 'about.php';
} else if ($input=="contact") {
	require 'contacts.php';
}
else if ($input=="students") {
	require 'students.php';
}

include 'footer.php';
?>