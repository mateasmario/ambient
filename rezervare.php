<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ambient";
    ?>

    <meta charset="utf-8">
    <title>Rezervă o cameră - Ambient</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

<!-- Header Start -->
<div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Ambient</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">info@ambient.hotel</p>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">112</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.php" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Ambient</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.php" class="nav-item nav-link">Acasă</a>
                                <a href="despre.php" class="nav-item nav-link">Despre noi</a>
                                <a href="camere.php" class="nav-item nav-link">Camere</a>
                            </div>
                            <a href="rezervare.php" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-block">Rezervă o cameră<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Booking Start -->
        <form action="rezervare.php" method="POST">
            <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="bg-white shadow" style="padding: 35px;">
                        <div class="row g-2">
                            <div class="col-md-10">
                                <div class="row g-2">
                                    <div class="col-md-3">
                                        <div class="date" >

                                        <?php
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                echo '<input name="checkin" type="date" class="form-control datetimepicker-input"
                                                placeholder="Check in" value="' . $_POST['checkin'] . '"/>';
                                            }
                                            else {
                                                echo '<input name="checkin" type="date" class="form-control datetimepicker-input"
                                                placeholder="Check in" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" />';
                                            }
                                        ?>
                                                
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="date" id="date2" data-target-input="nearest">
                                            <?php
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                    echo '<input name="checkout" type="date" class="form-control datetimepicker-input"
                                                    placeholder="Check out" value="' . date("Y-m-d",strtotime($_POST['checkout'])) . '" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" />';
                                                }
                                                else {
                                                    echo '<input name="checkout" type="date" class="form-control datetimepicker-input"
                                                    placeholder="Check out" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" />';
                                                }
                                            ?>                                    
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select" name="tip">
                                            <?php
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                if ($_POST['tip'] == 'single') {
                                                    echo '<option value="single" selected>Cameră Single</option>';
                                                    echo '<option value="double">Cameră Double</option>';
                                                    echo '<option value="triple">Cameră Triple</option>';
                                                }
                                                else if ($_POST['tip'] == 'double') {
                                                    echo '<option value="single">Cameră Single</option>';
                                                    echo '<option value="double" selected>Cameră Double</option>';
                                                    echo '<option value="triple">Cameră Triple</option>';
                                                }
                                                else if ($_POST['tip'] == 'triple') {
                                                    echo '<option value="single">Cameră Single</option>';
                                                    echo '<option value="double">Cameră Double</option>';
                                                    echo '<option value="triple" selected>Cameră Triple</option>';
                                                }
                                                else {
                                                    echo '<option value="single" selected>Cameră Single</option>';
                                                    echo '<option value="double">Cameră Double</option>';
                                                    echo '<option value="triple">Cameră Triple</option>';
                                                }
                                            }
                                            else {
                                                echo '<option value="single" selected>Cameră Single</option>';
                                                echo '<option value="double">Cameră Double</option>';
                                                echo '<option value="triple">Cameră Triple</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary w-100">Caută</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- Booking End -->

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                if (mysqli_connect_errno()) {
                die("Eroare la conexiunea cu baza de date: " . $conn->connect_error);
                }

                $sql = "SELECT COUNT(*) as total FROM camera WHERE tip = '" . $_POST['tip'] . "'";
                $result = mysqli_query($conn, $sql);
                $data=mysqli_fetch_assoc($result);
                $total = $data['total'];

                $sql = "SELECT camera.id FROM camera WHERE camera.tip = '" . $_POST['tip'] . "'";
                $result = mysqli_query($conn, $sql);

                $total_ocupate = 0;
                
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sql = "SELECT COUNT(*) AS total_rezervari FROM rezervare WHERE (('" . $_POST['checkin'] . "' >= rezervare.check_in AND '". $_POST['checkin'] . "' <= rezervare.check_out) OR ('". $_POST['checkout'] . "' >= rezervare.check_in AND '". $_POST['checkout'] . "' <= rezervare.check_out)) AND rezervare.camera = " . $row['id'];
                        $result2 = mysqli_query($conn, $sql);

                        $data2 = mysqli_fetch_assoc($result2);
                        $total_rezervari = $data2['total_rezervari'];

                        if ($total_rezervari > 0) {
                            $total_ocupate++;
                        }
                    }
                }
            }
        ?>

        <!-- Booking Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Camere</h6>
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            echo '<h1 class="mb-5">Avem ' . ($total - $total_ocupate) . ' camere disponibile</span></h1>';
                        }
                        else {
                            echo '<h1 class="mb-5">Rezervați o cameră acum, ușor și rapid.</span></h1>';
                        }
                    ?>
                </div>
                <div class="row g-5">
                        <div class="col-lg-6">
                            <div class="row g-3">
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST' and $total - $total_ocupate > 0) {
                                        echo 'Am găsit cameră disponibilă pentru tine, ceea ce înseamnă că în curând vei avea parte și tu de experiența Ambient Hotels.<br><br>Pentru a putea efectua rezervarea, te rugăm să ne oferi câteva informații despre tine, și să menționezi dacă ai cerințe speciale de care să ne ocupăm.<br><br>Îți mulțumim pentru încrederea acordată!<br><br>';
                                        echo '<div class="wow fadeInUp" data-wow-delay="0.2s">';
                                        echo '    <form action="success.php" method="POST">';
                                        echo '<input type="hidden" name="checkin" value="' . $_POST['checkin'] . '">';
                                        echo '<input type="hidden" name="checkout" value="' . $_POST['checkout'] . '">';
                                        echo '<input type="hidden" name="tip" value="' . $_POST['tip'] . '">';
                                        echo '        <div class="row g-3">';
                                        echo '            <div class="col-md-6">';
                                        echo '                <div class="form-floating">';
                                        echo '                    <input type="text" class="form-control" name="prenume" id="prenume" placeholder="Prenume">';
                                        echo '                    <label for="prenume">Prenume</label>';
                                        echo '                </div>';
                                        echo '            </div>';
                                        echo '            <div class="col-md-6">';
                                        echo '                <div class="form-floating">';
                                        echo '                    <input type="text" class="form-control" name="nume" id="nume" placeholder="Nume">';
                                        echo '                    <label for="nume">Nume</label>';
                                        echo '                </div>';
                                        echo '            </div>';
                                        echo '            <div class="col-md-12">';
                                        echo '                <div class="form-floating">';
                                        echo '                    <input type="text" class="form-control" name="telefon" id="telefon" placeholder="Numărul tău de telefon">';
                                        echo '                    <label for="telefon">Numărul tău de telefon</label>';
                                        echo '                </div>';
                                        echo '            </div>';
                                        echo '            <div class="col-12">';
                                        echo '                <div class="form-floating">';
                                        echo '                    <textarea class="form-control" placeholder="Mențiuni" name="mentiuni" id="mentiuni" style="height: 100px"></textarea>';
                                        echo '                    <label for="mentiuni">Mențiuni</label>';
                                        echo '                </div>';
                                        echo '            </div>';
                                        echo '            <div class="col-12">';
                                        echo '                <button class="btn btn-primary w-100 py-3" type="submit">Rezervă acum</button>';
                                        echo '            </div>';
                                        echo '        </div>';
                                        echo '    </form>';
                                        echo '</div>';
        }
        else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo 'Nu s-au găsit camere pentru datele introduse de dumneavoastră. Asigurați-vă că ați introdus toate datele. În cazul în care datele sunt corecte, vă rugăm să selectați o altă perioadă de timp sau alt tip de cameră.<br><br>Ne cerem scuze pentru neplăcerea creată. Hotel Ambient încearcă să ofere o experiență satisfăcătoare tuturor clienților noștri, și de aceea suntem receptivi la feedback-ul primit de la fiecare dintre voi.<br><br>În cazul în care doriți să ne oferiți feedback sau să raportați o problemă tehnică, contactați <a href="mailto:info@ambient.hotel">info@ambient.hotel</a>.';
        }
        else {
            echo 'Selectați informațiile legate de cazare pentru a găsi rezultate, folosind controalele de mai sus.';
        }
        ?>
                    </div>
                    </div>
                </div>
            </div>
        <!-- Booking End -->


        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4">Abonați-vă la <span class="text-primary text-uppercase">Newsletter</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Introduceți adresa de e-mail">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Abonare</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">Ambient</h1></a>
                            <p class="text-white mb-0">
								Hotel Ambient - Cazări la prețuri rezonabile pentru tine și familia ta
							</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Tomnatic, Strada Corcodușelor, RO</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>112</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@ambient.hotel</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>