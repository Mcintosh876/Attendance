<?php 
$title = 'Gallary';
require_once 'includes/header.php';
require_once 'DB/conn.php';
$results = $crud->getGender();
?>




<?php require_once 'includes/footer.php';?>