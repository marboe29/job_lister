<?php

//redirect function, takeing message/type and seting them into session values
function redirect($page = FALSE, $message = NULL, $message_type = NULL) {

    if (is_string ($page)) {
        $location = $page;
    }else{
        $location = $_SERVER ['SCRIPT_NAME'];
    }

    //ck for message and set
    if($message != NULL){
        $_SESSION['message'] = $message;
    }

    //ck for type and set
    if($message_type != NULL){
        $_SESSION['message_type'] = $message_type;
    }

    //redirect with header
    header ('location: '.$location);
        exit;
}

function displayMessage(){
//ck for a message in a session and assigns it
    if(!empty($_SESSION['message'])){
        $message = $_SESSION['message'];

            if(!empty($_SESSION['message_type'])){
                $message_type = $_SESSION['message_type'];
            //cks for error then outputs
                if($message_type == 'error') {
                    echo '<div class="alert alert-danger">' . $message . '</div>';
                }else{
                    echo '<div class="alert alert-success">' . $message . '</div>';
                }
            }
    //unsets the session values
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    }else{
        echo '';
    }
}