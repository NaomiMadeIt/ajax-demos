<?php
$host = 'localhost';
$username = 'naomi_blog';
$password = 'SftaeE52AtKTxCAd';
$database = 'naomi_blog';
//connect to database
$db = new mysqli( $host, $username, $password, $database );
//if there was a problem connecting, kill the page
if ( $db->connect_errno > 0 ) {
  die( 'Cannot connect to Database.' . $db->connect_error );
}
