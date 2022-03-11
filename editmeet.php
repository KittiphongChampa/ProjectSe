<?php
	include('conn.php');
	
	$meetid=$_GET['meetid'];
	
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

	
	mysqli_query($conn,"update meeting set title='$title', head='$head', numattend='$numattend', listname='$listname', roomid='$roomid', start='$start', end='$end', addequipment='$addequipment', remark='$remark', meetfile='$meetfile' where meetid='$meetid'");
	header('location:addroom.php');
