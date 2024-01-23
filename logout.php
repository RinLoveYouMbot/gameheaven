<?php
//mengaktifkan session
session_start();

//menghapus semua session
session_destroy();

// mengalihkan halaman sambil mengirim pesan
header("location:index.php?pesan=logout");

?>
