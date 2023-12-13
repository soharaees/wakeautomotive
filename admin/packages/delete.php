<?php
require('../header.php');
$qry = "update packages set pdeleted=1 where pid = ".$_GET['myid'].";";

if($conn->query($qry))
{
	header('location:view-all.php');
}
?>