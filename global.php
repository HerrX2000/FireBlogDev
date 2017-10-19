<?php
$db_host="localhost";
$db_user="root";
$db_psw="";
$db_name="blogdev";
$db_prefix="blog_";
$db_con = @new mysqli($db_host, $db_user, $db_psw, $db_name);
$db_con_pro = @mysqli_connect($db_host, $db_user, $db_psw, $db_name);
$db_link=@mysqli_connect($db_host, $db_user, $db_psw, $db_name); 
$db_link_i=@mysqli_connect($db_host, $db_user, $db_psw, $db_name);
$db_link_i_obj = @new mysqli($db_host, $db_user, $db_psw, $db_name);
$error_report=0;
\ini_set('display_errors', '0');
?>
