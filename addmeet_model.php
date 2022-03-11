<?php
	include('conn.php');
	
	$title=$_POST['title'];
	$head=$_POST['head'];
	$numattend=$_POST['numattend'];
	$listname=$_POST['listname'];
	$roomid=$_POST['roomid'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$addequipment=$_POST['addequipment'];
	// $userid=$_POST['location'];
	$remark=$_POST['remark'];
	$meetfile=$_POST['meetfile'];

	
	mysqli_query($conn,"insert into meeting (title, head, numattend, listname, roomid, start, end, addequipment, remark, meetfile) values ('$title', '$head', '$numattend', '$listname', '$roomid', '$start', '$end', '$addequipment', '$remark', '$meetfile')");
	header('location:addmeet.php');


?>