<?php
require ('../header.php');
$qry="update contact set contactresponse='responded' where cid= ".$_GET['myid'].";";

if($conn->query($qry)){
    header('location:contact-view.php');
}
?>