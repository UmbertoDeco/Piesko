<?php
define("BASE_DIR", "D:\\xampp\\htdocs\\ProjektPiesko");

// MysqliDb
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", null);
define("DB_NAME", "piesko");

// Users
define("USER_USERNAME_MAX", 32);
require_once BASE_DIR."\init.php";

// Session
define("TOKEN_HASH_ALGO", "sha3-256");
