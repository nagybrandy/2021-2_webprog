<?php
include('legostorage.php');
$legoStorage = new LegoStorage();

$id = $_GET['id'];
$set = $legoStorage->findById($id);
$set['archived'] = true;
$legoStorage->update($id, $set);
header('Location: index.php');
