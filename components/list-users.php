<?php                    
$rootPath = $_SERVER['DOCUMENT_ROOT'];
require_once $rootPath . '/includes/dbh.inc.php';
require_once $rootPath . '/includes/functions.inc.php';

$users = getUsers($conn);

if (isset($_SESSION['type'])) {
    if ($_SESSION["type"] == "admin") {
        if ($users->num_rows > 0) {
            while($seged = $users->fetch_assoc()) {
                if ($seged["visible"] == 1 || $_SESSION["type"] == "admin") {
                    echo '<div class="card d-inline-block m-2" style="width: 18rem;">
                            <img src="../img/'.$seged['profileImg'].'" class="card-img-top d-none d-lg-block kep mx-auto mt-4" alt="'.$seged['name'].'">
                            <div class="card-body" style="height: 5rem">
                                <h5 class="card-title">'.$seged['name'].'</h5>
                                <p class="d-md-none d-lg-none d-lg-block">Felhasználónév: '.$seged['uname'].'</p>
                            </div>
                            <ul class="list-group list-group-flush d-none d-lg-block">
                                <li class="list-group-item">
                                    <h5>Felhasználónév</h5>
                                    <p>'.$seged['uname'].'</p>
                                </li>
                                <li class="list-group-item">
                                    <h5>Titulus</h5>
                                    <p>'.$seged['badge'].'</p>
                                </li>
                                <li class="list-group-item">
                                    <h5>Játékaim</h5>
                                    <ul>';
                                    $array = explode(",", $seged["hobby"]);

                                    if (count($array) === 1 && empty(trim($array[0]))) {
                                        echo "Még nincs feltöltve";
                                    } else {
                                        foreach ($array as $game) {
                                            $trimmedGame = trim($game);
                                            if (!empty($trimmedGame)) {
                                                echo "<li>$trimmedGame</li>";
                                            }
                                            else {
                                                echo "<li>-</li>";
                                            }
                                        }
                                    }


                        echo ' </ul></li>
                                <li class="list-group-item">
                                    <h5>Típus</h5>
                                    <p>'.$seged['visible'].'</p>
                                </li>
                            </ul>
                            <div class="card-body">
                                <button class="btn btn-primary" onclick="userEdit('.$seged["id"].')" class="card-link">Szerkesztés</button>
                                <button class="btn btn-primary" onclick="userDelete('.$seged["id"].')" class="card-link">Törlés</button>
                            </div>
                        </div>';
                }
            }
        }
    }
} else {
    if ($users->num_rows > 0) {
        while($seged = $users->fetch_assoc()) {
            if ($seged["visible"] == 1) {
                echo '<div class="card d-inline-block m-2" style="width: 18rem;">
                        <img src="../img/'.$seged['profileImg'].'" class="card-img-top d-none d-lg-block kep mx-auto mt-4" alt="'.$seged['name'].'">
                        <div class="card-body" style="height: 5rem">
                            <h5 class="card-title">'.$seged['name'].'</h5>
                            <p class="d-md-none d-lg-none d-lg-block">Felhasználónév: '.$seged['uname'].'</p>
                        </div>
                        <ul class="list-group list-group-flush d-none d-lg-block">
                            <li class="list-group-item">
                                <h5>Felhasználónév</h5>
                                <p>'.$seged['uname'].'</p>
                            </li>
                            <li class="list-group-item">
                                <h5>Titulus</h5>
                                <p>'.$seged['badge'].'</p>
                            </li>
                            <li class="list-group-item">
                                <h5>Játékaim</h5>
                                <ul>';
                                $array = explode(",", $seged["hobby"]);

                                if (count($array) === 1 && empty(trim($array[0]))) {
                                    echo "Még nincs feltöltve";
                                } else {
                                    foreach ($array as $game) {
                                        $trimmedGame = trim($game);
                                        if (!empty($trimmedGame)) {
                                            echo "<li>$trimmedGame</li>";
                                        }
                                        else {
                                            echo "<li>-</li>";
                                        }
                                    }
                                }


                    echo ' </ul></li>
                        </ul>
                    </div>';
            }
        }
    }
}
