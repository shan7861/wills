<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    header('Content-type: text/html');
    header('Content-Disposition: attachment; filename="table.html"');

    echo $_POST['contents'];
}

?>
