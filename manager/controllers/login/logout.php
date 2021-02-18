<?php
if (!empty($_SESSION)) {
    session_destroy();
}
require('manager/controllers/login/login.php');