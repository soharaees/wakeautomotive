<?php
require('../header.php');
$qry = "update appointment set aconfirmation=1 where aid = ".$_GET['myid'].";";

if($conn->query($qry))
{
	header('location:viewall.php');
}
?>