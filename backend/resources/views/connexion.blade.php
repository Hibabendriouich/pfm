<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>DentCare - Dental Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
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
                <a href="/" class="nav-item nav-link active">Accueil</a>
                <a href="/inscription" class="nav-item nav-link">Inscription</a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center mt-5" id="container">
        <div class="row shadow-lg rounded">
            <!-- Espace Administrateur -->
            <div class="col-md-6 bg-white p-5">
                <h1 class="text-primary text-center mb-4">Espace Administrateur</h1>
                <form action="#" id="adminForm">
                    <div class="mb-3">
                        <label for="adminEmail" class="form-label">Identifiant:</label>
                        <input type="text" id="adminEmail" class="form-control" placeholder="Ex: admin" required>
                    </div>
                    <div class="mb-3">
                        <label for="adminPassword" class="form-label">Mot de passe:</label>
                        <input type="password" id="adminPassword" class="form-control" placeholder="Entrez votre mot de passe" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Connexion</button>
                    </div>
                </form>
            </div>

            <!-- Espace Participant -->
            <div class="col-md-6 text-white p-5" style="background: linear-gradient(to right, #609ed1, #1a2570);">
                <h1 class="text-center mb-4">Espace Patient</h1>
                <div class="text-center mb-4">
                    <a href="https://www.facebook.com/?locale=fr_FR" class="social mx-2"><i class="fab fa-facebook-f" style="color: white;"></i></a>
                    <a href="https://fr.linkedin.com/" class="social mx-2"><i class="fab fa-linkedin-in" style="color: white;"></i></a>
                    <a href="https://www.instagram.com/" class="social mx-2"><i class="fab fa-instagram" style="color: white;"></i></a>
                </div> 
                <form action="#" id="participantForm">
                    <div class="mb-3">
                        <label for="participantEmail" class="form-label">Identifiant:</label>
                        <input type="text" id="participantEmail" class="form-control" placeholder="Ex: patient" required>
                    </div>
                    <div class="mb-3">
                        <label for="participantPassword" class="form-label">Mot de passe:</label>
                        <input type="password" id="participantPassword" class="form-control" placeholder="Entrez votre mot de passe" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-light">Connexion</button>
                    </div>
                    <div class="text-center mt-3">
                        <b>Vous n'avez pas un compte ?</b>
                        <a href="/inscription" class="text-warning">Créer votre compte</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Main Container End -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script de redirection -->
    <script>
        // Admin form submission
        document.getElementById('adminForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const email = document.getElementById('adminEmail').value;
            const password = document.getElementById('adminPassword').value;

            // Vérification des identifiants pour l'admin
            if (email === 'admin' && password === '123') {
                window.location.href = 'indexadmin.html'; // Page Admin
            } else {
                alert('Identifiants incorrects');
            }
        });

        // Participant form submission
        document.getElementById('participantForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const email = document.getElementById('participantEmail').value;
            const password = document.getElementById('participantPassword').value;

            // Vérification des identifiants pour le patient
            if (email === 'patient' && password === '456') {
                window.location.href = 'profil_patient.html'; // Page Patient
            } else {
                alert('Identifiant ou mot de passe incorrects');
            }
        });
    </script>
</body>

</html>
