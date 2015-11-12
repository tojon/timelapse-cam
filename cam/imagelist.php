<?php

//PHP SCRIPT: imagelist.php
Header("content-type: application/x-javascript");

// This function gets the filenames of all files
// in the img dir and ouputs them as a js array
function returnimages()
{
    $start  = 0;
    $images = glob('img/*.jpg');    // Valid files in the image dir
    $total  = count($images);       // Total images in the image dir

    while ($start < $total)
    {
        $filename = ($images[$start]);
        echo 'dirArray['.$start.']="'.$filename .'";';   // Add to the array
        $start++;
    }
}

echo 'var dirArray=new Array();';       // Create the array
returnimages()                          // Build the array

?>
