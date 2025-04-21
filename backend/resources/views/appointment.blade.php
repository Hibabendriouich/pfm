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
        
    .popup {
        display: none; /* Hidden by default */
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4); /* Black background with opacity */
    }
    
    .popup-content {
        background-color: white;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        border-radius: 10px;
        text-align: center;
    }
    
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
    
    .hidden {
        display: none;
    }
    .appointment-form {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .appointment-form h1 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .appointment-form form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 15px;
    }

    .appointment-form select, .appointment-form input {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 5px;
        outline: none;
        transition: border-color 0.3s ease-in-out;
    }

    .appointment-form select:focus, .appointment-form input:focus {
        border-color: #007bff;
    }

    .appointment-form button {
        background-color: #007bff;
        color: white;
        font-size: 18px;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        grid-column: span 2;
    }

    .appointment-form button:hover {
        background-color: #0056b3;
    }

    /* Mobile responsiveness */
    @media (max-width: 767px) {
        .appointment-form {
            padding: 20px;
        }

        .appointment-form form {
            grid-template-columns: 1fr;
        }
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
                <a href="/" class="nav-item nav-link">A propos</a>
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
                <h1 class="display-3 text-white animated zoomIn">Rendez-vous</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->


   <!-- Appointment Start -->
   <div class="container-fluid bg-primary bg-appointment mb-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top: 90px;">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4">Derrière chaque soin, il y a une histoire de passion et de dévouement.</h1>
                    <p class="text-white mb-0"> Nous vous offrons des soins de santé personnalisés, accessibles et adaptés aux besoins de chaque patient, en combinant expertise médicale et technologies modernes.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                    <h1 class="text-white mb-4">Rendez-vous</h1>
                    <form action="{{ route('rdv.store') }}" method="POST">
    @csrf <!-- CSRF Token -->
    <div>
        <label for="service">Service</label>
        <select id="Service" name="service" required>
        <option value="">Sélectionnez un service</option>
                <option value="Dentisterie générale">Dentisterie générale</option>
                <option value="Pédodontie">Pédodontie</option>
                <option value="Orthodontie">Orthodontie</option>
                <option value="Chirurgie dentaire">Chirurgie dentaire</option>
                </select>
    </div>


    <div>
        <label for="name">Nom</label>
        <input type="text" id="name" name="nom" required>
    </div>

    <div>
        <label for="telephone">Telephone</label>
        <input type="text" id="telephone" name="telephone" required>
    </div>

    <div>
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required>
    </div>

    <div>
        <label for="heure">Heure</label>
        <input type="time" id="heure" name="heure" required>
    </div>

    <button type="submit">Submit</button>
</form>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif



                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->

    

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
                        <a class="text-light mb-2" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>A propos</a>
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
<script>
 const emailrdv = document.getElementById("emailrdv");
const name = document.getElementById("name");
const rdvBtn = document.getElementById("rdv");
const popupMessage = document.getElementById("popup-message");

rdvBtn.addEventListener("click", (event) => {
    event.preventDefault(); 
    
    // Get values and validate
    const mail = emailrdv.value.trim();
    const fullName = name.value.trim();
    const date = document.querySelector('input[type="date"]').value;
    const time = document.querySelector('input[type="time"]').value;

    // Function to show Bootstrap modal
    const showPopup = (message) => {
        popupMessage.textContent = message;
        const popupModal = new bootstrap.Modal(document.getElementById("popupModal"));
        popupModal.show();
    };

    // Validate email
    if (mail === '') {
        showPopup("Veuillez entrer votre numéro de téléphone.");
        return;
    }

    // Validate name
    if (fullName === '') {
        showPopup("Veuillez entrer votre nom.");
        return;
    }

    // Validate date and time
    if (!date) {
        showPopup("Veuillez selectionner une date");
        return;
    }

    if (!time) {
        showPopup("Veuillez selectionner l'heure");
        return;
    }

    // If all validations pass
    showPopup("Vous serez appelé pour confirmer votre rendez-vous!");
});


</script>

</body>

</html>