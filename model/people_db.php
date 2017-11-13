<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function loginPeople($username,$password){
    //returns true if the username and password are a good match.  false if not
    global $db;
    $statement = $db->prepare('select people_id from people where username=:username and password = :password');
    $statement->bindValue(':username',$username);
    $statement->bindValue(':password',$password);
    $statement->execute();
    $array = $statement->fetch();
    $statement->closeCursor();
    if (empty($array['people_id'])){
        $result = false;
    } else
    {
        $result = $array;
    }
    return $result;    
}