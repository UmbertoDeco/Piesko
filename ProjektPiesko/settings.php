<?php
define("BASE_DIR", "D:\\xampp\\htdocs\\ProjektPiesko");

// MysqliDb
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", null);
define("DB_NAME", "piesko");

//Auth
define("SESSION_COOKIE_NAME", "session");
define("PASS_HASH_ALGO", PASSWORD_ARGON2ID);
define("SESSION_EXPIRE_DAYS", 30);
// Users
define("USER_USERNAME_MAX", 32);
require_once BASE_DIR."\init.php";

// Session
define("TOKEN_HASH_ALGO", "sha3-256");
