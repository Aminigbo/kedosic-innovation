<?php 

session_start();

// $dbservername = 'localhost';
 
//  $dbusername = 'vichilee_vhcluser';
 
//  $dbpassword = 'vchluserpassword1';
 
//  $dbname = 'vichilee_vchl';
 


$dbservername = 'localhost';
 
 $dbusername = 'root';
 
 $dbpassword = '';
 
 $dbname = 'kedosic'; 

 $conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);