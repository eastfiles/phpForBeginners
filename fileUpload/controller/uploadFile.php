<?php

if( isset($_POST['send']) ){
    $file =  $_FILES['image'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $resultArray = explode('.', $fileName);
    $fileExtension = strtolower( end($resultArray) );

    $pichaExtensions = array('png', 'jpg', 'jpeg');

    if( in_array($fileExtension, $pichaExtensions) ){
        if( $fileSize <= 2000_000){
            if( $fileError !== 0 ){
                echo "error imepatinakana";
            }else{
                $fileNewName = uniqid('', true).'.'.$fileExtension;

                $destination = "../uploads/".$fileNewName;

                if ( move_uploaded_file($fileTmpName, $destination) ){
                     echo "file uploaded";
                }else{
                    echo "file Error, not uploaded";
                }
            }
        }else{
            echo "size sio sawa";
        }
    }else{
        echo "sio picha";
    }

}else{
    echo "form haijaja";
}

?>