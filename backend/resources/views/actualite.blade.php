<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>H&F clinique dentaire</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/lib/twentytwenty/twentytwenty.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
       

        

        .calendar-title {
            font-size: 2em;
            margin-bottom: 15px;
            color: #333;
            text-align: center;
        }

        .calendar-month {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            justify-content: center;
            text-align: center;
            margin-top: 20px;
        }

        .calendar-day {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            margin: 5px;
            border-radius: 50%;
            background-color: #f1f1f1;
            text-align: center;
            font-weight: bold;
            color: #333;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .calendar-day:hover {
            background-color: #007bff;
            color: white;
        }

        .calendar-day.event {
            
            color: #007bff;

        }

        .calendar-day.blue {
            color: #007bff;
        }

        .carousel-control-prev, .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: transparent;
            border: none;
            color: #007bff;
            font-size: 2em;
        }

        .carousel-control-prev {
            left: -50px;
        }

        .carousel-control-next {
            right: -30px;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            filter: invert(1);
        }

        .carousel {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Heures d'ouverture: Lundi - Vendredi : 8h00 - 20h00, Samedi 10h00-16h00 </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2" ></i><a href="mailto:H&F@gmail.com" style="color: white;">H&F@gmail.com</a></p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2" ></i><a href="tel:+212 534999999" style="color: white;">+212 534999999</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>H&F</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/" class="nav-item nav-link ">Accueil</a>
                <a href="/about" class="nav-item nav-link">A propos</a>
                <a href="/service" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" >Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="/team" class="dropdown-item">Profils Médecins</a>
                        <a href="/appointment" class="dropdown-item">Rendez-vous</a>
                        <a href="/actualite" class="dropdown-item">Actualités</a>
                        <a href="/ressources" class="dropdown-item">Ressources utiles</a>
                    </div>
                </div>
                <a href="/connexion" class="nav-item nav-link">Connexion</a>
            </div>
            <a href="/appointment" class="btn btn-primary py-2 px-4 ms-3">Rendez-vous</a>
        </div>
    </nav>
    <!-- Navbar End -->


  


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Actualités et Événements</h1>
                
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s" id="act">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text text-center rounded p-5">
                        <h3><u>Campagne de Santé : Dépistage Gratuit</u></h3>
                        <p class="text-white mb-4">Dans le cadre de notre engagement pour votre bien-être, nous organisons une campagne de dépistage gratuit des maladies bucco-dentaires. Prévention, conseils et sensibilisation seront au rendez-vous.
                            <br>📅 Le 26 Janvier 2025
                            <br>📍 Clinique dentaire H&F
                            <br><strong style="color: rgba(9, 30, 62, .85);">Prenez soin de votre santé aujourd'hui pour un meilleur avenir.</strong></p>
                            <div class="button-container">
                                <a href="tel:+212 534999999" class="btn btn-dark py-3 px-5 text-center">Appelez-nous</a>
                            </div>                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <br>
    <br>
    <br>



    

    <!-- Calendar Carousel Start -->
    <h1 class="position-relative  text-primary text-uppercase" align="center">Calandrier des évènements:</h1>
    
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div id="calendarCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- December 2024 -->
                        <div class="carousel-item active">
                            <div class="calendar-container">
                                <h6 class="calendar-title">Decembre 2024</h6>
                                <div class="calendar-month">
                                    <div class="calendar-day blue">Dim</div>
                                    <div class="calendar-day blue">Lun</div>
                                    <div class="calendar-day blue">Mar</div>
                                    <div class="calendar-day blue">Mer</div>
                                    <div class="calendar-day blue">Jeu</div>
                                    <div class="calendar-day blue">Ven</div>
                                    <div class="calendar-day blue">Sam</div>
                                    <!-- December Days -->
                                    <div class="calendar-day"></div> <!-- Empty space for 1st of Dec -->
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day">1</div>
                                    <div class="calendar-day">2</div>
                                    <div class="calendar-day">3</div>
                                    <div class="calendar-day">4</div>
                                    <div class="calendar-day">5</div>
                                    <div class="calendar-day">6</div>
                                    <div class="calendar-day">7</div>
                                    <div class="calendar-day">8</div>
                                    <div class="calendar-day">9</div>
                                    <div class="calendar-day">10</div>
                                    <div class="calendar-day">11</div>
                                    <div class="calendar-day">12</div>
                                    <div class="calendar-day">13</div>
                                    <div class="calendar-day">14</div>
                                    <div class="calendar-day">15</div>
                                    <div class="calendar-day">16</div>
                                    <div class="calendar-day">17</div>
                                    <div class="calendar-day">18</div>
                                    <div class="calendar-day">19</div>
                                    <div class="calendar-day">20</div>
                                    <div class="calendar-day">21</div>
                                    <div class="calendar-day">22</div>
                                    <div class="calendar-day">23</div>
                                    <div class="calendar-day">24</div>
                                    <div class="calendar-day">25</div>
                                    <div class="calendar-day ">26</div>
                                    <div class="calendar-day">27</div>
                                    <div class="calendar-day">28</div>
                                    <div class="calendar-day">29</div>
                                    <div class="calendar-day">30</div>
                                    <div class="calendar-day">31</div>
                                </div>
                            </div>
                        </div>
            
                        <!-- January 2025 -->
                        <div class="carousel-item">
                            <div class="calendar-container">
                                <h6 class="calendar-title">Janvier 2025</h6>
                                <div class="calendar-month">
                                    <div class="calendar-day blue">Sam</div>
                                    <div class="calendar-day blue">Lun</div>
                                    <div class="calendar-day blue">Mar</div>
                                    <div class="calendar-day blue">Mer</div>
                                    <div class="calendar-day blue">Jeu</div>
                                    <div class="calendar-day blue">Ven</div>
                                    <div class="calendar-day blue">Sam</div>
                                    <!-- January Days -->
                                    <div class="calendar-day"></div> <!-- Empty space for 1st of Jan -->
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day blue" onclick="showEvent('6 January 2025: International Conference on Dental Medicine and Dental Surgery')">6</div>
                                    <div class="calendar-day">7</div>
                                    <div class="calendar-day">8</div>
                                    <div class="calendar-day">9</div>
                                    <div class="calendar-day">10</div>
                                    <div class="calendar-day">11</div>
                                    <div class="calendar-day">12</div>
                                    <div class="calendar-day">13</div>
                                    <div class="calendar-day">14</div>
                                    <div class="calendar-day">15</div>
                                    <div class="calendar-day">16</div>
                                    <div class="calendar-day">17</div>
                                    <div class="calendar-day">18</div>
                                    <div class="calendar-day">19</div>
                                    <div class="calendar-day">20</div>
                                    <div class="calendar-day">21</div>
                                    <div class="calendar-day">22</div>
                                    <div class="calendar-day">23</div>
                                    <div class="calendar-day">24</div>
                                    <div class="calendar-day">25</div>
                                    <div class="calendar-day event blue" onclick="showEvent('26 Janvier 2025: Campagne de Santé : Dépistage Gratuit')">26</div>
                                    <div class="calendar-day">27</div>
                                    <div class="calendar-day">28</div>
                                    <div class="calendar-day">29</div>
                                    <div class="calendar-day">30</div>
                                    <div class="calendar-day">31</div>
                                </div>
                            </div>
                        </div>
            
                        <!-- February 2025 -->
                        <div class="carousel-item">
                            <div class="calendar-container">
                                <h6 class="calendar-title">Fevrier 2025</h6>
                                <div class="calendar-month">
                                    <div class="calendar-day blue">Sam</div>
                                    <div class="calendar-day blue">Lun</div>
                                    <div class="calendar-day blue">Mar</div>
                                    <div class="calendar-day blue">Mer</div>
                                    <div class="calendar-day blue">Jeu</div>
                                    <div class="calendar-day blue">Ven</div>
                                    <div class="calendar-day blue">Sam</div>
                                    <!-- February Days -->
                                    <div class="calendar-day"></div> <!-- Empty space for 1st of Feb -->
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day"></div>
                                    <div class="calendar-day blue" onclick="showEvent('3 February 2025: International Conference on Dentistry and Dental Materials')">3</div>
                                    <div class="calendar-day">4</div>
                                    <div class="calendar-day">5</div>
                                    <div class="calendar-day">6</div>
                                    <div class="calendar-day">7</div>
                                    <div class="calendar-day">8</div>
                                    <div class="calendar-day">9</div>
                                    <div class="calendar-day">10</div>
                                    <div class="calendar-day">11</div>
                                    <div class="calendar-day">12</div>
                                    <div class="calendar-day">13</div>
                                    <div class="calendar-day">14</div>
                                    <div class="calendar-day">15</div>
                                    <div class="calendar-day">16</div>
                                    <div class="calendar-day">17</div>
                                    <div class="calendar-day">18</div>
                                    <div class="calendar-day">19</div>
                                    <div class="calendar-day">20</div>
                                    <div class="calendar-day">21</div>
                                    <div class="calendar-day">22</div>
                                    <div class="calendar-day">23</div>
                                    <div class="calendar-day">24</div>
                                    <div class="calendar-day">25</div>
                                    <div class="calendar-day">26</div>
                                    <div class="calendar-day">27</div>
                                    <div class="calendar-day">28</div>
                                </div>
                            </div>
                        </div>
            
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#calendarCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#calendarCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar Carousel End -->
   <!-- Newsletter Start -->
<div class="container-fluid position-relative pt-5 wow fadeInUp" id="news" data-wow-delay="0.1s" style="z-index: 1;">
    <div class="container">
        <div class="bg-primary p-5">
            <form id="newsletter-form" class="mx-auto" style="max-width: 600px;">
                <div class="input-group">
                    <input type="text" id="email" class="form-control border-white p-3" placeholder="Entrez votre adresse email">
                    <button id="ins" class="btn btn-dark px-4" type="submit">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap Modal -->
<div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="popupModalLabel">Vous êtes désormais abonné(e) ! </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="popupMessage">
                <!-- Le message sera injecté ici -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
    <div class="container pt-5">
        <div class="row g-5 pt-4">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Liens</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                    <a class="text-light mb-2" href="/about"><i class="bi bi-arrow-right text-primary me-2"></i>A propos</a>
                    <a class="text-light mb-2" href="/service"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                    <a class="text-light mb-2" href="/actualite"><i class="bi bi-arrow-right text-primary me-2"></i>Actualités</a>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Contactez-nous</h3>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Targa, Marrakech, Maroc</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i><a href="mailto:H&F@gmail.com">H&F@gmail.com</a></p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i><a href="tel:+212 534999999">+212 534999999</a></p>
            </div>
           
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Abonnez-vous</h3>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://x.com/?lang=fr"><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://www.facebook.com/?locale=fr_FR"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="https://fr.linkedin.com/"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13585.387078358628!2d-8.064703344851338!3d31.651731286461892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafebf94c148897%3A0x61b347810296585!2sClinique%20Le%20Marrakech!5e0!3m2!1sfr!2sma!4v1734200343470!5m2!1sfr!2sma" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-light py-4" style="background: #051225;">
    <div class="container">
        <div class="row g-0">
            <div class="col-md-12 text-center text-md-start">
               <marquee> <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">H&F</a>. Tous droits resérvés.</p></marquee>
            </div>
            
        </div>
    </div>
</div>
<!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/lib/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset('assets/lib/twentytwenty/jquery.twentytwenty.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    document.getElementById("newsletter-form").addEventListener("submit", function (e) {
    e.preventDefault(); // Empêche l'envoi du formulaire

    const email = document.getElementById("email").value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regex pour valider l'email

    const popupMessage = document.getElementById("popupMessage");

    if (!emailRegex.test(email)) {
        popupMessage.textContent = "Veuillez entrer une adresse e-mail valide.";
    } else {
        popupMessage.textContent = " Restez connecté(e) pour notre prochaine newsletter pleine de contenu intéressant, d'astuces et d'offres !";
    }

    // Afficher la modal
    const popupModal = new bootstrap.Modal(document.getElementById('popupModal'));
    popupModal.show();
});
</script>
    <!-- Custom JS to show alert on date click -->
    <script>
        function showEvent(eventDetails) {
            alert(eventDetails);
        }
    </script>
</body>

</html>