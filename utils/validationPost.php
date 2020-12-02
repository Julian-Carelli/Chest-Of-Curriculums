<?php 

function validationPost($name, $lastName, $profession, $email, $age, $placeOfResidence) : bool
{
    $post = (isset($_POST[$name]) && !empty($_POST[$name])) &&
            (isset($_POST[$lastName]) && !empty($_POST[$lastName])) &&
            (isset($_POST[$profession]) && !empty($_POST[$profession])) &&
            (isset($_POST[$email]) && !empty($_POST[$email])) &&
            (isset($_POST[$age]) && !empty($_POST[$age])) &&
            (isset($_POST[$placeOfResidence]) && !empty($_POST[$placeOfResidence]));
    
    return $post;

}