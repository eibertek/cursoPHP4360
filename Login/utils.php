<?php
function validateUser(){    
    if(validate() && $_POST['user'] === 'pepe' 
    &&  $_POST['passd'] === 'pepe') {
        return true;
    }
    return false; 
}

function validate(){
    if(count($_POST) > 0) {
        return true;
    }
    return false; 
}


?>