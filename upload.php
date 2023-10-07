<?php
include_once 'db.php';

$status_mgs = '';

// file upload director
$targetDir = 'uploads/';

if (isset($_POST['submit'])) {
    if (!empty($_FILES["file"]["name"])) {
        echo '<pre />';
        // print_r($_FILES["file"]);

        $filename = basename($_FILES["file"]["name"]);

        $targetfilepath = $targetDir . $filename; //path bnaya diya

        $filetype = pathinfo($targetfilepath, PATHINFO_EXTENSION); //PATHINFO_EXTENSION e.g logo1.jpg jpg is (extension)
        // print_r($filetype); //return extension of file

        // extension jo allowed hain for upload
        $allowtypes = ['jpg', 'png', 'jpeg', 'gif'];
        if (in_array($filetype, $allowtypes)) {
            // upload file to server
            // move_uploaded_file(from ,to );
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetfilepath)) {
                //                                        filename , uploadfile time
                $insert = $conn->query("INSERT INTO images (file_name, uploaded_on) VALUES ('" . $filename . "', NOW())");
                if ($insert) {
                    echo
                        "<script>
                    alert('file uploaded successfully');
                    document.location.href = 'index.php';
                    </script>
                    ";
                } else {
                    echo 'please upload file';
                }
            }
        } else {
            echo 'this type extension does not allowed';
        }

    }
}
// in_array('deisired value', array()) check krta hai desired value 
// 