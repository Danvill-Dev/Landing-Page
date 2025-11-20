<?php

if($_REQUEST) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    die();
}else{
    echo "<p>Nenhum dado recebido.</p>";
}

