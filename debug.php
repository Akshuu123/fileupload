<?php
// $server
// echo '<pre>';
// print_r($_SERVER);
// echo '<br>';

// // $globals
// echo '<pre>';
// print_r($GLOBALS);
// echo '<br>';

// $request
// echo '<pre>';
// print_r($_REQUEST);
// echo '<br>';

// // $post
// // $request
// echo '<pre>';
// print_r($_POST);
// echo '<br>';

// // get
// echo '<pre>';
// print_r($_GET);
// echo '<br>';

if ($_REQUEST['submit']){

     $dir = 'uploads2';
     if (file_exists($dir)) {
         $tmpname = $_FILES['file']['tmp_name'];
         $filename = $_FILES['file']['name'];
         if (move_uploaded_file($tmpname, $dir . '/' . $filename)) {
             echo 'uploaded successfllly';
         }
     } else {
         mkdir($dir);
         echo 'created successfullly';
     }
    // }
    echo '<pre>';
    // print_r($_FILES['file']);
    echo '<pre>';
    print_r($_FILES);
}