<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];

    // Check if username is "abc"
    if ($username == "abc") {
        echo "verified";
    } else {
        echo "error";
    }
}
?>