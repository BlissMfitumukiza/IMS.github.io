<?php
// php IMS Connection
define("servername","127.0.0.1");
define("username","root");
define("password","");
define("database","ims_sys");
$con = new mysqli(servername,username,password,database);
if ($con==true) {
    //print("Message connection");
}
else{
    die("not connected");
}

?>