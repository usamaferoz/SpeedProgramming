<?php
/**
 * Created by PhpStorm.
 * User: feroz
 * Date: 1/8/2018
 * Time: 12:37 PM
 */


$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("mydba", $connection); // Selecting Database
//Fetching Values from URL
$name2=$_POST['name1'];
$password2=$_POST['password1'];

//Insert query
$query = mysql_query("insert into form_element(name, password) values ('$name2','$password2')");
echo "Form Submitted Succesfully";
mysql_close($connection); // Connection Closed
?>