<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="hu">
    <?php include_once 'components/header.php' ?>
    <style>
    .about-section {
      padding: 50px 0;
      background-color: #f8f9fa;
    }

    .about-section h2 {
      margin-bottom: 40px;
      text-align: center;
    }

    .team-member {
      text-align: center;
      margin-bottom: 10px;
    }

    .team-member img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .team-member h3 {
      margin-bottom: 10px;
    }

    .team-member p {
      color: #6c757d;
    }
  </style>
<body>
    <?php include_once 'components/headerNav.php' ?>

    <div class="container">
        <main>
            <section class="about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="text-center">Our Story</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec mi a ex venenatis congue sed ac
                            metus. Morbi lacinia justo lorem, non iaculis ligula congue ut. Nulla facilisi. Sed vitae metus ac mi
                            consectetur tempus at eget justo. In lobortis mauris ut ipsum dignissim posuere. Sed suscipit arcu id
                            nulla dignissim, ut efficitur urna tincidunt.</p>
                            <p>Morbi eleifend sem ac est euismod bibendum. Phasellus rhoncus scelerisque lorem, id interdum lectus
                            dapibus ac. Vestibulum ultrices urna in condimentum fermentum. Fusce efficitur augue ut lacus finibus
                            vestibulum. Etiam maximus consectetur dolor, at sagittis velit iaculis id. Duis sed tincidunt tortor.
                            Nullam dignissim pharetra orci, ac cursus quam posuere id.</p>
                            <p>Nulla id feugiat lacus. Suspendisse condimentum commodo malesuada. Aenean iaculis nunc eget ante
                            luctus, et scelerisque elit rutrum. Proin nec eros sagittis, malesuada felis ut, consequat quam.
                            Phasellus sit amet varius erat, ut eleifend velit. Morbi et erat et nulla congue rutrum. Aliquam
                            bibendum, lorem id faucibus commodo, metus urna commodo tortor, nec tempor sapien risus id risus.</p>
                        </div>
                    </div>
                    <h2>About Us</h2>
                    <div class="row">
                    <div class="col-lg-4 team-member">
                        <img src="img/blank-user.png" class="kep-comment" alt="Team Member 1">
                        <h3>John Doe</h3>
                        <p>CEO</p>
                    </div>
                    <div class="col-lg-4 team-member">
                        <img src="img/blank-user.png" class="kep-comment" alt="Team Member 2">
                        <h3>Jane Smith</h3>
                        <p>COO</p>
                    </div>
                    <div class="col-lg-4 team-member">
                        <img src="img/blank-user.png" class="kep-comment" alt="Team Member 3">
                        <h3>David Johnson</h3>
                        <p>CFO</p>
                    </div>
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
        
    </div>
        
        
    <footer class="bg-dark text-light text-center py-3">
        <div class="container">
            &copy; 2023 Your Company. All rights reserved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>