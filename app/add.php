<?php

include "../db_conf.php";

if (isset($_POST["title"])) {
    $title = $_POST["title"];


    $dbService->insert($title);

    header("Location: ../index.php");
}


