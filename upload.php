<?php
ob_start();
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$new_file_name = "/var/www/jcrandell.com/uploads/upload.glb";

// Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {
   $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
     if($check !== false) {
         echo "File is a .glb - " . $check["mime"] . ".";
             $uploadOk = 1;
	       unlink("/var/www/jcrandell.com/uploads/upload.glb");
               } else {
                   echo "File is not a .glb." . $check["mime"];
                       $uploadOk = 0;
                         }
                         }

                         // Check if file already exists
           //              if (file_exists($target_file)) {
           //                echo "Sorry, file already exists.";
            //                 $uploadOk = 0;
            //                 }

                             // Check file size (20MB)
                             if ($_FILES["fileToUpload"]["size"] > 20000000000) {
                               echo "Sorry, your file is too large.";
                                 $uploadOk = 0;
                                 }

                                 // Allow certain file formats
                                 if($imageFileType != "glb" && $imageFileType != "glb" && $imageFileType != "glb"
                                 && $imageFileType != "glb" ) {
                                   echo "Sorry, only .glb files are allowed.";
                                     $uploadOk = 0;
                                     }

                                     // Check if $uploadOk is set to 0 by an error
                                     if ($uploadOk == 0) {
                                       echo "Sorry, your file was not uploaded.";
                                       // if everything is ok, try to upload file
                                       } else {
                                         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                             echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
				     $oldname = glob("/var/www/jcrandell.com/uploads/*.glb");
				     $exactoldname = $oldname[0];
				     rename($exactoldname, $new_file_name);
				     echo "filename changed to upload.glb";
				     header("location: https://www.jcrandell.com");
                                               } else {
                                                   echo "Sorry, there was an error uploading your file.";
                                                     }
                                                     }
                                                     ?>
