<?php
session_start();

require_once('./../../inc/config.php');
require_once('./../../inc/functions.php');

ensureUserIsAuthenticated();

echo $_SESSION['email'];
