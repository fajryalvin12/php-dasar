<?php

    // gunakan session_start() di halaman atau file lain agar nilai superglobal $_SESSION dapat diakses
    session_start();

    echo $_SESSION["nama"];

?>