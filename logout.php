<?php
session_start();
session_destroy();
require 'constants.php';
ob_start();
header("Location: /login.php");