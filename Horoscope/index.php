<?php
session_start();
//session_destroy();
include 'model/model.php';
$action=isset($_REQUEST['action'])?$action=$_REQUEST['action']:"";
include 'controllers/controller2.php';
