<?php

/* Get the name of the uploaded file */
$filename = $_FILES['fileupload']['name'];

/* choose where to save the uploaded file */
$location = "Assets/VRObjects/".$filename;

/* Save the uploaded file to the local filesystem */
/*if (*/ move_uploaded_file($_FILES['fileupload']['tmp_name'], $location);/* ) {
	echo 'Success';
} else {
	echo 'Failure';
}
 */
?>
