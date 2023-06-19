<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="hu">
    <?php include_once 'components/header.php' ?>
<body>
    <?php include_once 'components/headerNav.php' ?>

    <div class="container">
        <?php 
            if (isset($_SESSION['uname'])) {
                echo '<h2 class="text-center">Üdvözlöm kedves '.$_SESSION['uname'].'! Rangod: '.$_SESSION['type'].'</h2>';
            }
            else {
                echo '<h1 class="text-center">Még nincs belépve hozzon létre egy fiókot vagy lépjen be!</h1>
                        <div class="container text-center">
                            <a class="d-inline-block nav-link text-center" href="login.php">
                                <i class="bi bi-box-arrow-in-right icon"></i>
                                <p class="icon-text">Belépés</p>
                            </a>
                            <a class="d-inline-block nav-link text-center" href="signup.php">
                                <i class="bi bi-person-plus icon"></i>
                                <p class="icon-text">Regisztráció</p>
                            </a>
                        </div>';
            }
        ?>

        <div id="uzenetek">
            <div id="good" class="alert alert-success m-3 d-none" role="alert">Gratulálok! Sikeres regisztráció!</div>
            <div id="goodLogin" class="alert alert-success m-3 d-none" role="alert">Gratulálok! Sikeres belépés!</div>
        </div>

        <?php
            // Error messages
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "noneBelepes") {
                    echo '<script type="text/javascript">removeHideClass("goodLogin");</script>';
                }
                else if ($_GET["error"] == "noneReg") {
                    echo '<script type="text/javascript">removeHideClass("good");</script>';
                }
            }
        ?>

        <main>
            <section id="about" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Rólunk</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec velit feugiat, tincidunt metus sed, condimentum nisl. Aliquam erat volutpat.</p>
                    </div>
                    <div class="col">
                        <div id="carouselExampleIndicators" class="carousel slide w-75" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="img/image1.jpg" class="d-block w-100 h-25">
                                </div>
                                <div class="carousel-item">
                                <img src="img/image2.jpg" class="d-block w-100 h-25">
                                </div>
                                <div class="carousel-item">
                                <img src="img/image3.jpg" class="d-block w-100 h-25">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
            </section>

            

            <section id="comments" class="py-5">
            <div class="container">
                <h2 class="text-center">Rólunk írták</h2>
                <div id="commentCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <div class="card mb-4">
                        <div class="card-body">
                        <p class="card-text text-center comment">"Great service! I'm loving it!"</p>
                        <p class="card-text text-center"><img class="kep-comment" src="img/blank-user.png" alt=""><em> - John</em></p>
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <div class="card mb-4">
                        <div class="card-body">
                        <p class="card-text text-center comment">"Excellent quality and fast delivery!"</p>
                        <p class="card-text text-center"><img class="kep-comment" src="img/blank-user.png" alt=""><em> - Mary</em></p>
                        </div>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <div class="card mb-4">
                        <div class="card-body">
                        <p class="card-text text-center comment">"Amazing experience. Highly recommended!"</p>
                        <p class="card-text text-center"><img class="kep-comment" src="img/blank-user.png" alt=""><em> - David</em></p>
                        </div>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#commentCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black; background-color: black;"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#commentCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="color: black; background-color: black;"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
            </section>

            <section id="contact" class="py-5 bg-light">
            <?php
                if (isset($_POST['contactSubmit'])) {
                    echo 'Még fejlesztés alatt van :D';
                    // $to = 'norbert.ujj@gmail.com'; // Replace with your email address
                    // $subject = 'New Email from Website';
                    // $name = $_POST['name'];
                    // $email = $_POST['email'];
                    // $message = $_POST['message'];

                    // $headers = "From: $name <$email>" . "\r\n";
                    // $headers .= "Reply-To: $email" . "\r\n";

                    // $success = mail($to, $subject, $message, $headers);

                    // if ($success) {
                    //     echo "Email sent successfully!";
                    // } else {
                    //     echo "Failed to send email. Please try again.";
                    // }
                }
            ?>
            <div class="container">
                <h2 class="text-center">Contact</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3" name="message" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" name="contactSubmit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </section>
        </main>

    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
    <footer class="bg-dark text-light text-center py-3">
        <div class="container">
        &copy; 2023 Your Company. All rights reserved.
        </div>
    </footer>
</body>
</html>