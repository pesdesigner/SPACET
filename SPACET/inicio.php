<?php

    // ================================
    // inicio
    // ================================

    //verificar a sessão
    if(!isset($_SESSION['a'])){
        exit();
    }

?>

<p>INICIO</p>
<a href="?a=about">Sobre |</a>
<a href="?a=setup"> Setup</a>