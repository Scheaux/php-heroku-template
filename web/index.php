<?php

declare(strict_types=1);

include 'vendor/autoload.php';

session_start();

if (isset($_SESSION['username'])) {
  echo 'Logged in as ' . $_SESSION['username'];
  echo '<br>';
  echo '<a href="web/exit.php">exit</a>';
} else {
  include 'index.html';
}
