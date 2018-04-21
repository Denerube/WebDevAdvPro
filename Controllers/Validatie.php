<?php
//uit werkcollege
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

function checkRequiredNewMonster($fields) {
    foreach($fields as $name) {
        if(required($name)) {
            global $requiredNewMonster;
            $requiredNewMonster[$name] = $_POST[$name];
        } else {
            global $errorsNewMonster;
            $errorsNewMonster[$name] = "Dit veld is verplicht in te vullen";
        }
    }
}
function requiredNewMonster($name) {
    if(isset($_POST[$name]) && !empty($_POST[$name])) {
        return true;
    } else {
        return false;
    }
}
function checkMonsterNaam($check){
    global $errorsNewMonster;
    global $valuesNewMonster;
    if(!required($check)) {
        $errorsNewMonster[$check] = "Dit veld is verplicht in te vullen";

    } else {
        $valuesNewMonster[$check] = $_POST[$check];
    }
}
function checkMonsterType($check){
    global $errorsNewMonster;
    global $valuesNewMonster;
    if(!required($check)) {
        $errorsNewMonster[$check] = "Dit veld is verplicht in te vullen";

    } else {
        $valuesNewMonster[$check] = $_POST[$check];
    }
}
function checkMonsterLevenspunten($check){
    global $errorsNewMonster;
    global $valuesNewMonster;
    if(!required($check)) {
        $errorsNewMonster[$check] = "Dit veld is verplicht in te vullen";

    } else {
        if(is_numeric($_POST[$check])){
        $valuesNewMonster[$check] = $_POST[$check];
        }
        else{
            $errorsNewMonster[$check] = "Moet een nummer zijn";
        }

    }
}
function checkMonsterSchildwaarde($check){
    global $errorsNewMonster;
    global $valuesNewMonster;
    if(!required($check)) {
        $errorsNewMonster[$check] = "Dit veld is verplicht in te vullen";

    } else {
        if(is_numeric($_POST[$check])){
            $valuesNewMonster[$check] = $_POST[$check];
        }
        else{
            $errorsNewMonster[$check] = "Moet een nummer zijn";
        }

    }
}
///////////////////////////////////////////////////////////////////////////////////////////////

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

    }
    else {
        $values[$check] = $_POST[$check];
    }
}
function checkPassOvereenKomst(){
    global $errors;
    global $values;
    if ($values["newloginPass"] == $values["newloginPassConfirm"]){
            // komen overeen doe niets

    }else{
            $errors["nietOvereen"] ="paswoorden komen niet overeen";
    }



}
?>
