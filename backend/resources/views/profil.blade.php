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
        body {
            background-color: #f8f9fa;
        }
        .profil-section {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .profil-title {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
        }
        
    </style>
    <style>
        /* General Styles */
        body {
            background-color: #f8f9fa;
            font-family: 'Open Sans', sans-serif;
        }
    
        h2 {
            font-family: 'Jost', sans-serif;
            font-weight: 600;
            color: #007bff;
        }
    
       
        /* Profil Section */
        .profil-section {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 30px;
        }
        .profil-section p {
            margin-bottom: 10px;
            font-size: 16px;
        }
        .profil-section p strong {
            color: #007bff;
        }
    
        /* Ordonnance Link */
        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    
        /* Footer */
        .bg-dark {
            background-color: #051225 !important;
        }
        .bg-dark .text-light {
            color: #ddd !important;
        }
        .bg-dark .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .bg-dark .btn-primary:hover {
            background-color: #0056b3;
        }
        .bg-dark iframe {
            border-radius: 10px;
        }
        .marquee p {
            color: #ffffff;
            font-size: 14px;
        }
    
        /* Responsiveness */
        @media (max-width: 768px) {
            .navbar .btn-primary {
                margin-top: 10px;
            }
        }
    </style>
    
</head>
<body>
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
                        <a href="{{ '/temoignage' }}" class="dropdown-item">Témoignages</a>
                        <a href="{{ '/appointment' }}" class="dropdown-item">Rendez-vous</a>
                        <a href="{{ '/ressources' }}" class="dropdown-item">Ressources utiles</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <a href="{{ '/appointment' }}" class="btn btn-primary py-2 px-4 ms-3">Rendez-vous</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container my-5">
        <h2 class="text-center mb-4">Profil Patient</h2>

        <div id="profil" class="profil-section">
            <!-- Les informations du patient seront affichées ici -->
        </div>
    </div>
    <div class="container my-5">
        <u><a href="ordo.html"><h2 class="text-center mb-4 py-5">Demande d'ordonnance en ligne</h2></a></u>
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
                        <a class="text-light" href="{{ route('contact') }}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
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
    <script>
        // Fonction pour afficher les informations dans le profil
        function afficherProfil() {
            const profilSection = document.getElementById("profil");

            // Récupérer les données du localStorage
            const nom = localStorage.getItem("nom");
            const dateNaissance = localStorage.getItem("dateNaissance");
            const telephone = localStorage.getItem("telephone");
            const allergies = localStorage.getItem("allergies");
            const antecedents = localStorage.getItem("antecedents");
            const traitements = localStorage.getItem("traitements");
            const fumeur = localStorage.getItem("fumeur");
            const alcool = localStorage.getItem("alcool");

            // Afficher les informations dans la section profil
            profilSection.innerHTML = `
                <p><strong>Nom complet:</strong> ${nom}</p>
                <p><strong>Date de naissance:</strong> ${dateNaissance}</p>
                <p><strong>Numéro de téléphone:</strong> ${telephone}</p>
                <p><strong>Allergies:</strong> ${allergies}</p>
                <p><strong>Antécédents médicaux:</strong> ${antecedents}</p>
                <p><strong>Traitements en cours:</strong> ${traitements}</p>
                <p><strong>Fumeur:</strong> ${fumeur}</p>
                <p><strong>Consommation d'alcool:</strong> ${alcool}</p>
            `;
        }

        // Appeler la fonction pour afficher les données sauvegardées
        afficherProfil();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>