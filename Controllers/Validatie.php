<?php

function checkRequired($fields) {
    foreach($fields as $name) {
        if(required($name)) {
            global $values;
            $values[$name] = $_POST[$name];
        } else {
            global $errors;
            $errors[$name] = "Dit veld is verplicht in te vullen";
        }
    }
}
function required($name) {
    if(isset($_POST[$name]) && !empty($_POST[$name])) {
        return true;
    } else {
        return false;
    }
}
function checkEmail($check){
    global $errors;
    global $values;
    if(!required($check)) {
        $errors[$check] = "Dit veld is verplicht in te vullen";

    } else {
        $values[$check] = $_POST[$check];
    }
}
function checkNaam($check){
    global $errors;
    global $values;
    if(!required($check)) {
        $errors[$check] = "Dit veld is verplicht in te vullen";

    } else {
        $values[$check] = $_POST[$check];
    }
}
function checkPass($check){
    global $errors;
    global $values;
    if(!required($check)) {
        $errors[$check] = "Dit veld is verplicht in te vullen";

    } else {
        $values[$check] = $_POST[$check];
    }
}
function checkPassConfirm($check){
    global $errors;
    global $values;
    if(!required($check)) {
        $errors[$check] = "Dit veld is verplicht in te vullen";

    } elseif($values[$check]!== $values["newloginPass"]){
        $errors["passConfirm"] = "komt niet overreen met passwoord";
    }
    else {
        $values[$check] = $_POST[$check];
    }
}
?>
