<?php

use LDAP\Result;

$connect = mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'mvc');
mysqli_set_charset(mysql: $connect, charset: 'utf8');

$sql = "select * from mon_an where ten = '$mon_an'";
$result = mysqli_query(mysql: $connect, query: $sql);

$each = mysqli_fetch_array(result: $result);