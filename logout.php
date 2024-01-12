<?php

session_start();
require 'config/connection.php';
require 'config/authFunction.php';
setcookie('id', "", time() - (60 * 60 * 24 * 30), '/');
setcookie('key', "", time() - (60 * 60 * 24 * 30), '/');
session_destroy();
header('Location: ' . BASE_URL);
