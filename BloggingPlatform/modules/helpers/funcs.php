<?php
/*
 * Project: CST-126-Blog-Project v.0.3
 * Module Name: helpers v.0.2
 * Author: Daniel Cender
 * Date: March 31, 2019
 * Synopsis: This script includes general purpose helper methods.
 * TODO: Fix bugs that occur when including this file in another script...
 */

include 'db.php';
include 'session.php';

function isAdmin() {
    $userId = getUserId();
    $conn = dbConnect();
    
    $result = $conn->query("SELECT * FROM user WHERE RoleID = 2 AND ID = $userId");
    if($result->num_rows == 1) {
        return true;
    }
    return false;
}

