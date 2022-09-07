<?php

if ( filter_has_var(INPUT_POST, 'submit') ){
    $full_name = filter_input(INPUT_POST, 'full_name', FILTER_SANITIZE_STRING );
    $mail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $height = filter_input(INPUT_POST, 'height', FILTER_SANITIZE_NUMBER_INT);

    // print_r( array($full_name, ' ', $mail, ' ', $height));

//     if( preg_match("/^([a-zA-Z ]+)$/", $full_name) ){
//         if( filter_var($mail, FILTER_VALIDATE_EMAIL) ){
//            if( filter_var($height, FILTER_VALIDATE_INT) ){
//                 echo "integer is good";
//            }else{
//                 echo "integer is bad";
//            }
//         }else{
//             echo "email is bad";
//         }
//     }else{
//         echo "fullname is incorrect";
//     }

// }else{
//     echo "data haikupatikana";

$data = array(
    'name' => $full_name,
    'email' => $mail,
    'height' => $height,
);

$filter = array(
    'full_name' => array(
        'filter' => FILTER_CALLBACK,
        'options' => "ucwords"
    ),

    'email' => array(
        'filter' => FILTER_VALIDATE_EMAIL,
    ),

    'height' => array(
        'filter' => FILTER_VALIDATE_INT,
        'options' => array(
            'min_range' => 5,
            'max_range' => 1000,
        ),
    ),

);


// print_r( filter_var_array($data, $filter) );

// print_r( filter_input_array(INPUT_POST, $filter) );

// var_dump(filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL));

if( filter_input(INPUT_POST, "height", FILTER_VALIDATE_INT) ){
    echo "true";
}else{
    echo "false";
}


}

?>