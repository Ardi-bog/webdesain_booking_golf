<?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
      switch ($page) {
        case 'jadwal':
          include 'jadwal.php';
          break;
        default:
          include 'home.php';
          break;
      }
    } else {
      include 'home.php';
    }
?>