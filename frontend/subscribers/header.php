<?php
session_start();
require_once('../../classes.php');

if (empty($user = unserialize($_SESSION["user"]))) {
  header("location:../../index.php?msg=required_auth");
}