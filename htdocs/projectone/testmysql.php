<?php
 
$dbname = 'projectone';
$dbuser = 'root';
$dbpass = '123456';
$dbhost = '192.168.56.44';
 
$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");
 
$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);
$tblCnt = 0;
 
while($tbl = mysqli_fetch_array($result)) {
 $tblCnt++;
}
 
if (!$tblCnt) {
 echo "There are no tables<br />\n";
} else {
 echo "There are $tblCnt tables<br />\n";
}
