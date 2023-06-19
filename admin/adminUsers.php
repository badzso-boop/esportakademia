<head>
    <?php include_once '../components/header.php' ?>
</head>

<?php
    session_start();
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "noneDelete") {
            echo '<script type="text/javascript">showAlert("Sikeres felhasználó törlés!", "adminUsers.php");</script>';
        }
        else if ($_GET["error"] == "noneEdit") {
            echo '<script type="text/javascript">showAlert("Sikeres felhasználó szerkesztés!", "adminUsers.php");</script>';
        }
    }
    include_once '../components/adminNav.php';
    echo '<script src="../js/script.js"></script>';
?>

<!-- LIST USERS -->
<div class="container">
    <?php include_once '../components/list-users.php'; ?>
</div>