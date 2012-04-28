<?php
header('Content-Type: text/plain');
if (isset($_SERVER['REMOTE_ADDR'])) {
    echo $_SERVER['REMOTE_ADDR'];
}
?>