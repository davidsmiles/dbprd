<?php

if (isset($_POST["action"]) && $_POST["action"]) {
    $action = trim($_POST["action"]);

    switch ($action) {
        case "change-theme":
            $status = $_POST["status"];

            if ($status == "dark") {
                setcookie("theme", "", time() - 60 * 60 * 24 * 365, "/");
                unset($_COOKIE["theme"]);
                setcookie("theme", "dark", time() + 60 * 60 * 24 * 365, "/");
            } else {
                setcookie("theme", "", time() - 60 * 60 * 24 * 365, "/");
                unset($_COOKIE["theme"]);
                setcookie("theme", "white", time() + 60 * 60 * 24 * 365, "/");
            }

            echo $status;

            break;

        default:
            print_r($_POST);
            break;
    }
}
