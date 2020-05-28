<?php

//
/*
if(isset($_POST['file']))
{
    if(in_array($fileExtension, $allowedFileExtension))
    {
        //upload file;
    }else {
        return;
        //error, redirect
    }
} else {
    return;
    //error, redirect
}
*/

if(!isset($_POST['file']))
{
    return;
    //error, redirect
}

if(!in_array($fileExtension, $allowedFileExtension))
{
    return;

    //error, redirect
}

// Upload the file!
