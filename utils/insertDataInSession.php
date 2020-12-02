<?php 

function insertDataInSession($space, $name) : void 
{
    $_SESSION[$space] = $name;

}