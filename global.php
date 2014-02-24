<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function connectDB($user, $password)
{
    $mysqli = new mysqli("localhost", $user, $password);

    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    //set the default client character set 
    mysqli_set_charset($mysqli, 'utf-8');

    ///Connect to Nest_DB Database
    /* change db to world db */
    mysqli_select_db($mysqli, "Nest_DB");
    
    return $mysqli;
}

function getcurrentusername()
{
    return "nestadmin";
}

function getcurrentuserpw(){
    return "nestadminpw";
}

class address{
        var $street, $area, $city, $PIN;
        public function __construct($street, $area, $city, $PIN){
            $this->street = $street;
            $this->area = $area;
            $this->city = $city;
            $this->PIN = $PIN;
        }
};
?>
