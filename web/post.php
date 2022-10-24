<?php

declare(strict_types=1);

session_start();

$_SESSION['username'] = $_POST['username'];

header('Location: /');
