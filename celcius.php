<?php
    $fTemp = $_POST['fahTemp'];

    $grau = ($fTemp - 32) * 5/9;

    echo $grau;
?>