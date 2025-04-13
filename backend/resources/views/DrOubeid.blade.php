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

   


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow">
                    <!-- Image -->
                    <div class="text-center mt-4">
                        <a href="/team"> <img src="{{ asset('assets/images/oubeid.webp') }}" alt="Dr. Oubeid Allah Hlal" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                        </a>
                       </div>
                    <!-- Details -->
                    <div class="card-body text-center">
                        <h5 class="card-title text-uppercase mb-1">Dr. Oubeid Allah Hlal</h5>
                        <p class="text-muted mb-3">Chirurgie dentaire, Parodontie</p>
                        
                    </div>
                    <!-- Biographie Section -->
                    <div class="card-body">
                        <h5 class="card-title text-center">Biographie</h5>
                        <p>
                            Dr. Oubeid Allah Hlal est un chirurgien(ne)-dentiste passionné par la santé bucco-dentaire et spécialisé dans les traitements chirurgicaux avancés. Diplômé en chirurgie dentaire de [Nom de l’université], il/elle a poursuivi une formation approfondie en chirurgie orale et maxillo-faciale à [Nom de l’université ou de l’institut].

                            Avec une expertise de 25 ans, Dr. Oubeid Allah Hlal maîtrise un large éventail de procédures dentaires, allant des soins de routine aux interventions chirurgicales complexes, notamment :
                            
                            Les extractions de dents de sagesse incluses ou impactées.
                            La pose d’implants dentaires pour restaurer les dents manquantes.
                            Les greffes osseuses pour les patients ayant une perte osseuse.
                            La chirurgie parodontale pour traiter les maladies des gencives.
                            Les traitements des kystes ou lésions buccales.
                            Les chirurgies esthétiques et reconstructrices liées à la cavité buccale.
                            Connu pour son approche douce et rassurante, Dr. Oubeid Allah Hlal s’efforce de minimiser l’anxiété des patients en expliquant chaque étape du traitement et en garantissant leur confort. Il/elle privilégie l’utilisation des technologies de pointe pour assurer des résultats précis et durables.
                            
                            Engagé dans une démarche d’amélioration continue, Dr. Oubeid Allah Hlal participe régulièrement à des conférences et séminaires pour rester à la pointe des innovations en chirurgie dentaire. Cette volonté d’excellence lui permet de proposer des soins basés sur les meilleures pratiques et les avancées scientifiques les plus récentes.
                            
                            En dehors de sa pratique clinique, Dr. Oubeid Allah Hlal est également impliqué dans [mentionner une activité, par exemple : "la sensibilisation à la santé bucco-dentaire", "la recherche scientifique", ou "le bénévolat pour des causes médicales"].
                            
                            Sa passion pour la chirurgie dentaire et son dévouement envers ses patients font de Dr. Oubeid Allah Hlal un professionnel respecté et apprécié, contribuant à redonner aux patients le sourire et la confiance qu’ils méritent.                        </p>
                    </div>
                    <!-- Formation & Expérience Section -->
                    <div class="card-body">
                        <h5 class="card-title text-center">Formation & Expérience</h5>
                        <ul>
                            <li><strong>Formation :</strong> Diplôme en chirurgie dentaire de la Faculté de Médecine et Pharmacie de Casablanca</li>
                            <li><strong>Expérience :</strong> 14 ans en tant que spécialiste en parodontie et chirurgie dentaire.</li>
                            <li><strong>Postes :</strong> Responsable des soins parodontaux à Dentcare.</li>
                        </ul>
                    </div>
                    <!-- Services Médicaux Offerts Section -->
                    <div class="card-body">
                        <h5 class="card-title text-center">Services Médicaux Offerts</h5>
                        <ul>
                            <li><strong>Chirurgie Dentaire :</strong> Traitement des maladies buccales et interventions chirurgicales.</li>
                            <li><strong>Parodontie :</strong> Soins et traitements des gencives et des tissus de soutien des dents.</li>
                            <li><strong>Implants Dentaires :</strong> Pose et suivi d'implants dentaires pour les patients nécessitant une réhabilitation dentaire.</li>
                            <li><strong>Esthétique Dentaire :</strong> Blanchiment dentaire et restauration esthétique des dents.</li>
                        </ul>
                    </div>
                    <!-- Horaires de Consultation Section -->
                    <div class="card-body">
                        <h5 class="card-title text-center">Horaires de Consultation</h5>
                        <ul>
                            <li><strong>Lundi - Vendredi :</strong> 8h00 - 20h00</li>
                            <li><strong>Samedi :</strong> 10h00 - 16h00</li>
                        </ul>
                    </div>
                    <!-- Social Icons -->
                    <div class="d-flex justify-content-center pb-3">
                        <a href="https://www.facebook.com/?locale=fr_FR" class="btn btn-primary btn-sm mx-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/" class="btn btn-primary btn-sm mx-1"><i class="fab fa-instagram"></i></a>
                        <a href="https://x.com/?lang=fr" class="btn btn-primary btn-sm mx-1"><i class="fab fa-twitter"></i></a>
                        <a href="https://fr.linkedin.com/" class="btn btn-primary btn-sm mx-1"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <!-- Contact Info -->
                    <div class="card-footer bg-light text-center">
                        <p class="mb-1"><i class="fas fa-phone"></i> +212 5 24 49 81 67</p>
                        <p class="mb-1"><i class="fas fa-envelope"></i> oubeid@gmail.com</p>
                        <p class="mb-0"><i class="fas fa-globe"></i> www.oubeid.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <br>
    <br>

<!-- Newsletter Start -->
<div class="container-fluid position-relative pt-5 wow fadeInUp" id="news" data-wow-delay="0.1s" style="z-index: 1;">
    <div class="container">
        <div class="bg-primary p-5">
            <form class="mx-auto" style="max-width: 600px;">
                <div class="input-group">
                    <input type="text" id="email" class="form-control border-white p-3" placeholder="Entrez votre adresse email">
                    <button id="ins" class="btn btn-dark px-4">S'inscrire</button>
                </div>
            </form>
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
                    <a class="text-light mb-2" href="#act"><i class="bi bi-arrow-right text-primary me-2"></i>Actualités</a>
                    <a class="text-light" href="'/connexion'"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
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
</body>

</html>