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
        .container1 {
            max-width: 800px;
            margin: auto;
            text-align: center;
        }
        .steps {
            display: flex;
            justify-content: space-between;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .step1, .step2, .step3, .step4, .step5, .step6 {
            flex: 1;
            color: white;
            margin: 0 10px;
            padding: 20px;
            border-radius: 5px;
            position: relative;
        }
        .step1{
            background-color: #89929f;
        }
        .step2{
            background-color: #a2cbf7;
        }
        .step3{
            background-color: rgb(124, 184, 248);
        }
        .step4{
            background-color: rgb(89, 160, 236);
        }
        .step5{
            background-color: #076ad4;
        }
        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            right: -15px;
            top: 50%;
            width: 30px;
            height: 2px;
            background: white;
            transform: translateY(-50%);
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
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i><a href="mailto:H&F@gmail.com" style="color: white;">H&F@gmail.com</a></p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i><a href="tel:+212 534999999" style="color: white;">+212 534999999</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="{{ '/' }}" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>H&F</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ '/' }}" class="nav-item nav-link active">Accueil</a>
                <a href="{{ '/about' }}" class="nav-item nav-link">A propos</a>
                <a href="{{ '/service' }}" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ '/team' }}" class="dropdown-item">Profils Médecins</a>
                        <a href="{{ '/temoignages' }}" class="dropdown-item">Témoignages</a>
                        <a href="{{ '/appointment' }}" class="dropdown-item">Rendez-vous</a>
                        <a href="{{ '/ressources' }}" class="dropdown-item">Ressources utiles</a>
                    </div>
                </div>
                <a href="{{ '/connexion' }}" class="nav-item nav-link">Connexion</a>
            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <a href="{{ '/appointment' }}" class="btn btn-primary py-2 px-4 ms-3">Rendez-vous</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Recherche par mot-clé">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Services</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container1">
        <h1>Procédure:</h1><br>
        <ul class="steps">
            <li class="step1">
                <strong>Étape 1:</strong> Informations Personnelles
            </li>
            <li class="step2">
                <strong>Étape 2:</strong> Choisir un Service
            </li>
            <li class="step3">
                <strong>Étape 3:</strong> Choisir une Date et Heure
            </li>
            <li class="step4">
                <strong>Étape 4:</strong> Consultation
            </li>
            <li class="step5">
                <strong>Étape 5:</strong> Paiement
            </li>
        </ul>
    </div>

    <div class="container py-5">
        <h2 align="center">Nos Services</h2>
        <br>
        <!-- Service Cards -->
        <div class="row g-5">
            <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.3s">
                <div class="rounded-top overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/images/service-1.jpg') }}" alt="Dentisterie Générale">
                </div>
                <div class="position-relative bg-light rounded-bottom text-center p-4">
                    <h5 class="m-0">Dentisterie Générale</h5>
                </div>
            </div>
            <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.6s">
                <div class="rounded-top overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/images/service-2.jpg') }}" alt="Implants Dentaires">
                </div>
                <div class="position-relative bg-light rounded-bottom text-center p-4">
                    <h5 class="m-0">Implants Dentaires</h5>
                </div>
            </div>
            <div class="col-md-3 service-item wow zoomIn" data-wow-delay="0.9s">
                <div class="rounded-top overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/images/service-3.jpg') }}" alt="Orthodontie">
                </div>
                <div class="position-relative bg-light rounded-bottom text-center p-4">
                    <h5 class="m-0">Orthodontie</h5>
                </div>
            </div>
            <div class="col-md-3 service-item wow zoomIn" data-wow-delay="1.2s">
                <div class="rounded-top overflow-hidden">
                    <img class="img-fluid" src="{{ asset('assets/images/service-4.jpg') }}" alt="Blanchiment Dentaire">
                </div>
                <div class="position-relative bg-light rounded-bottom text-center p-4">
                    <h5 class="m-0">Blanchiment Dentaire</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <!-- Left Section: Title and Description -->
                <div class="col-lg-6">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Tarifs</h5>
                        <h1 class="display-5 mb-0">Nous proposons des tarifs équitables pour les soins dentaires.</h1>
                    </div>
                    <p class="mb-4">
                        Chez nous, la transparence et l'accessibilité sont au cœur de nos services. Nous proposons des tarifs équitables pour garantir que chacun puisse bénéficier de soins dentaires de qualité, adaptés à ses besoins.
                    </p>
                    <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Appelez-nous pour prise de rendez-vous</h5>
                    <a href="tel:+212534999999">
                        <h1 class="wow fadeInUp" data-wow-delay="0.6s">+212 534999999</h1>
                    </a>
                </div>
                
                <!-- Image on the right -->
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/images/mission.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container py-5">
            <h2 class="text-center">Nos Tarifs</h2>
            <br>
            <div class="row text-center">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <img src="{{ asset('assets/images/dentisserieGeneral.PNG') }}" alt="Dentisterie Générale" class="img-fluid">
                            </div>
                            <h5 class="card-title">Dentisterie Générale</h5>
                            <p class="card-text">
                                Il est recommandé d'effectuer un examen dentaire tous les six mois pour garder vos dents en bon état.
                            </p>
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                <h5 class="text-primary m-0">300 MAD</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <img src="{{ asset('assets/images/DentisterieEsthétique.PNG') }}" alt="Dentisterie Esthétique" class="img-fluid">
                            </div>
                            <h5 class="card-title">Orthodontie</h5>
                            <p class="card-text">
                                L'orthodontie aligne vos dents pour un sourire harmonieux et améliore votre confort bucco-dentaire.
                            </p>
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                <h5 class="text-primary m-0">4000 MAD</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <img src="{{ asset('assets/images/ImplantsDentaires.PNG') }}" alt="Implants Dentaires" class="img-fluid">
                            </div>
                            <h5 class="card-title">Implants Dentaires</h5>
                            <p class="card-text">
                                Les restaurations d'implants dentaires ont une apparence et une sensation si naturelles.
                            </p>
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                <h5 class="text-primary m-0">650 MAD</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <img src="{{ asset('assets/images/BlanchimentDentaire.PNG') }}" alt="Blanchiment Dentaire" class="img-fluid">
                            </div>
                            <h5 class="card-title">Blanchiment Dentaire</h5>
                            <p class="card-text">
                                Le blanchiment des dents est l'une des nombreuses procédures en dentisterie esthétique.
                            </p>
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                <h5 class="text-primary m-0">2000 MAD</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form id="newsletter-form" class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" id="email" class="form-control border-white p-3" placeholder="Votre Email">
                        <button class="btn btn-dark px-4">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Newsletter Modal -->
    <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="popupModalLabel">Vous êtes désormais abonné(e) !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="popupMessage">
                    <!-- Message will be inserted here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Liens</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="{{ '/' }}"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="{{ '/about' }}"><i class="bi bi-arrow-right text-primary me-2"></i>A propos</a>
                        <a class="text-light mb-2" href="{{ '/service' }}"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
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
            e.preventDefault();
            
            const email = document.getElementById("email").value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const popupMessage = document.getElementById("popupMessage");
            
            if (!emailRegex.test(email)) {
                popupMessage.textContent = "Veuillez entrer une adresse e-mail valide.";
            } else {
                popupMessage.textContent = "Restez connecté(e) pour notre prochaine newsletter pleine de contenu intéressant, d'astuces et d'offres !";
            }
            
            const popupModal = new bootstrap.Modal(document.getElementById('popupModal'));
            popupModal.show();
        });
    </script>
</body>
</html>