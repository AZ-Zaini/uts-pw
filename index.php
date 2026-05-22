<?php

$nama = isset($_GET['nama']) ? $_GET['nama'] : "Akhmad Jaini";


echo "Halo, " . htmlspecialchars($nama) . "!";
?>
