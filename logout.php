<?php
session_start();
session_destroy();
header('location:./'); //auto cari file index.php