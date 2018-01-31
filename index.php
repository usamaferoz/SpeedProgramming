<?php
/**
 * Created by PhpStorm.
 * User: feroz
 * Date: 1/8/2018
 * Time: 12:10 PM
 */


if($_POST){
    $data_base_name = htmlspecialchars ($_POST['portal1']);
    if($_POST['name1']=='' || strlen($_POST['name1']) > 20){echo "name is not valid";}else{$name= htmlspecialchars($_POST['name1']);}
    if($_POST['password1']=='' || strlen($_POST['password1']) > 20){echo "password is not valid";}else{$pass= htmlspecialchars($_POST['password1']);}

    $connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
    $db = mysql_select_db($data_base_name, $connection); // Selecting Database
    $query = mysql_query("insert into users(name, password) values ('$name','$pass')");
    echo "Form Submitted Succesfully";
    mysql_close($connection); // Connection Closed

    $keywords = $result = preg_replace('/[ ,]+/', '-', trim($_POST['keyword1']));

    $my_file = $data_base_name.'_keywords.txt';
    $handle1 = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file
    fclose($handle1);

    $handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
    $data = htmlspecialchars($_POST['name1']).' '.$keywords;
    fwrite($handle, $data);

    fclose($handle);


}else{
    header("Location: /newproj/form.php");
    exit();
}