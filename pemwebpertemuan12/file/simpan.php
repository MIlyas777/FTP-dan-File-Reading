<?php
$nama       = trim($_POST['nama']);
$namafile   = "file/$nama.txt";
$isi        = trim($_POST['isi']);
$_file      = fopen($namafile, "w");
fwrite($file, $isi);
fclose($file);
header('Location: index.php?notif=true&file=' . $namafile);
