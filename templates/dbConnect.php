<?php
/**
 * Created by PhpStorm.
 * User: benajminw5409
 * Date: 10/26/2015
 * Time: 10:20 AM
 */

$mysqli = new mysqli("mysql.cis230.chesthighwalls.com", "admin_cis230", "Tw030395", "cis230chesthighwallsdb");
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$cache_buster = rand(10,1000);
?>