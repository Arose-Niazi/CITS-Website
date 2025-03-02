<?php
/*(// Access the $_FILES global variable for this specific file being uploaded
// and create local PHP variables from the $_FILES array of information
$fileName = $_FILES["uploaded_file"]["name"]; // The file name
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["uploaded_file"]["type"]; // The type of file it is
$fileSize = $_FILES["uploaded_file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["uploaded_file"]["error"]; // 0 for false... and 1 for true
$fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName); // filter the $filename
$kaboom = explode(".", $fileName); // Split file name into an array using the dot
$fileExt = end($kaboom); // Now target the last array element to get the file extension

$skipFileUpdate = false;
// START PHP Image Upload Error Handling --------------------------------
if (!$fileTmpLoc) { // if file not chosen
   $skipFileUpdate = true;
} else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes
    echo "ERROR: Your file was larger than 5 Megabytes in size.";
    unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
    exit();
} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
     // This condition is only if you wish to allow uploading of specific file types    
     echo "ERROR: Your image was not .gif, .jpg, or .png.";
     unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
     exit();
} else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
    echo "ERROR: An error occured while processing the file. Try again.";
    exit();
}
// END PHP Image Upload Error Handling ----------------------------------
// Place it into your "uploads" folder mow using the move_uploaded_file() function
if(!$skipFileUpdate)
{
    unlink("Images/Imagesmembers/$ID$Img.jpg");
    $Img++;
    $fileName = $ID.$Img.".".$kaboom[1];
    $moveResult = move_uploaded_file($fileTmpLoc, "Images/Imagesmembers/$fileName");
    // Check to make sure the move result is true before continuing
    if ($moveResult != true) {
        echo "ERROR: File not uploaded. Try again.";
        exit();
    }
    // Include the file that houses all of our custom image functions
    include_once("includes/ak_php_img_lib_1.0.php");
    // ---------- Start Universal Image Resizing Function --------
    $target_file = "Images/Imagesmembers/$fileName";
    $resized_file = "Images/Imagesmembers/$fileName";
    $wmax = 500;
    $hmax = 500;
    ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
    // ----------- End Universal Image Resizing Function ----------
    // ---------- Start Convert to JPG Function --------
    if (strtolower($fileExt) != "jpg") {
        $target_file = "Images/Imagesmembers/$fileName";
        $new_jpg = "Images/Imagesmembers/".$ID.$Img.".jpg";
        ak_img_convert_to_jpg($target_file, $new_jpg, $fileExt);
        if($kaboom[1] != "jpg") unlink($target_file);
    }
}   */

// Access the $_FILES global variable for this specific file being uploaded
    // and create local PHP variables from the $_FILES array of information
    $fileName = $_FILES["uploaded_file"]["name"]; // The file name
    $fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["uploaded_file"]["type"]; // The type of file it is
    $fileSize = $_FILES["uploaded_file"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["uploaded_file"]["error"]; // 0 for false... and 1 for true
    $fileName = preg_replace('#[^a-z.0-9]#i', '', $fileName); // filter the $filename
    $kaboom = explode(".", $fileName); // Split file name into an array using the dot
    $fileExt = end($kaboom); // Now target the last array element to get the file extension
    $basic_path = "Images/Imagesmembers/";
    if($fileExt == "jpeg") $fileExt = "jpg";

    $skipFileUpdate = false;
    // START PHP Image Upload Error Handling --------------------------------
    if (!$fileTmpLoc) { // if file not chosen
        $skipFileUpdate = true;
    } else if($fileSize > 5242880) { // if file size is larger than 5 Megabytes
        //echo "ERROR: Your file was larger than 5 Megabytes in size.";
        unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
        //exit();
    } else if (!preg_match("/.(gif|jpg|png|jpeg)$/i", $fileName) ) {
        // This condition is only if you wish to allow uploading of specific file types
        echo "ERROR: Your image was not .gif, .jpg, .jpeg, or .png.";
        unlink($fileTmpLoc); // Remove the uploaded file from the PHP temp folder
        //exit();
    } else if ($fileErrorMsg == 1) { // if file upload error key is equal to 1
        //echo "ERROR: An error occured while processing the file. Try again.";
        //exit();
    }
    // END PHP Image Upload Error Handling ----------------------------------
    // Place it into your "uploads" folder mow using the move_uploaded_file() function
    if(!$skipFileUpdate) {
        if(file_exists($basic_path . $ID . $Img . ".jpg")) unlink($basic_path . $ID . $Img . ".jpg");
        $Img++;
        $fileName = $ID . $Img . "." . $fileExt;
        $moveResult = move_uploaded_file($fileTmpLoc, $basic_path.$fileName);
        // Check to make sure the move result is true before continuing
        if ($moveResult != true) {
            echo "ERROR: File not uploaded. Try again.";
            exit();
        }
        // Include the file that houses all of our custom image functions
        include_once("imageUploadFun.php");
        // ---------- Start Universal Image Resizing Function --------
        $target_file = $basic_path . $fileName;
        $resized_file = $basic_path . $fileName;
        $wmax = 500;
        $hmax = 500;
        ak_img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt);
        // ----------- End Universal Image Resizing Function ----------
        // ---------- Start Convert to JPG Function --------
        if (strtolower($fileExt) != "jpg") {
            $target_file =  $basic_path.$fileName;
            $new_jpg = $basic_path. $ID . $Img . ".jpg";
            ak_img_convert_to_jpg($target_file, $new_jpg, $fileExt);
            if ($kaboom[1] != "jpg") unlink($target_file);
        }
    }
?>
