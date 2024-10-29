<?php

$conn = mysqli_connect("localhost", "root", "", "cargo");


$track = $_GET['tNumber'];
$invoice = $_GET['invoice'];
$rName = $_GET['rName'];
$rPhone = $_GET['rPhone'];
$rEmail= $_GET['rEmail'];
$rAddress = $_GET['rAddress'];
$sName = $_GET['sName'];
$sPhone = $_GET['sPhone'];
$sEmail = $_GET['sEmail'];
$sAddress = $_GET['sAddress'];
$item = $_GET['item'];
$itemNumber = $_GET['itemNumber'];
$destination = $_GET['destination'];
$datesent = $_GET['datesent'];
$deliverydate = $_GET['deliverydate'];
$first = $_GET['first'];
$second = $_GET['second'];
$third = $_GET['third'];
$status = $_GET['status'];



$sqli =  "INSERT INTO `form`( `track`, `invoice`, `receivers name`, `receivers phone`, `receivers email`, `receivers address`, `senders name`, `senders phone`, `senders email`, `senders address`, `item`, `number of item`, `destination`, `date sent`, `delivery date`, `first destination`, `second destination`, `third destination`, `status`)
 VALUES ('$track','$invoice','$rName','$rPhone','$rEmail','$rAddress','$sName','$sPhone','$sEmail','$sAddress','$item','$itemNumber','$destination','$datesent','$deliverydate','$first','$second','$third','$status')";


$result = mysqli_query($conn, $sqli);
header("location: upload.html");