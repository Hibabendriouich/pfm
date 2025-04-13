<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>H&F clinique dentaire</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
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



    <style>/* styles.css */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        h1 {
            text-align: center;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        table, th, td {
            border: 1px solid #ddd;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f4f4f4;
        }
        
        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            width: 300px;
        }
        
        label {
            font-weight: bold;
        }
        
        input, select, button {
            padding: 8px;
            font-size: 16px;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
        }
        </style>
</head>

<body>
    

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
        <a href="index1.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>H&F</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="/indexadmin" class="nav-item nav-link">Accueil</a>
                
                <a href="/gestion" class="nav-item nav-link ">Gestion des utilisateurs</a>

                <a href="/connexion"  class="nav-item nav-link active">Déconnexion</a>    
               
           
        </div>
    </nav>
    <!-- Navbar End -->




    <h1>Gestion des Utilisateurs</h1>
    
    <!-- Table des utilisateurs -->
    <table id="userTable" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Les utilisateurs seront insérés ici -->
        </tbody>
    </table>

    <!-- Formulaire d'ajout/modification -->

    <div align="center">
    <form id="userForm" >
        <input type="hidden" id="userId"  />
        <label for="userName">Nom:</label>
        <input type="text" id="userName" required />
        
        <label for="userEmail">Email:</label>
        <input type="email" id="userEmail" required />
        
        <label for="userRole">Rôle:</label>
        <select id="userRole" required>
            <option value="">Sélectionner un rôle</option>
            <option value="Patient">Patient</option>
            <option value="Dentiste généraliste">Dentiste généraliste</option>
            <option value="Dentiste chirurgien">Dentiste chirurgien</option>
            <option value="Pédodontiste">Pédodontiste</option>
            <option value="Orthodontiste">Orthodontiste</option>
        </select>
        
        <button type="submit">Enregistrer</button>
    </form>
    </div>
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
                    <a href="indexadmin.html" class="nav-item nav-link">Accueil</a>
                
                <a href="gestion.html" class="nav-item nav-link ">Gestion des utilisateurs</a>
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
    <script src="script.js"></script>
    <script>
        // script.js
let users = [];
let editingUserId = null;

// Références aux éléments HTML
const userTableBody = document.querySelector("#userTable tbody");
const userForm = document.getElementById("userForm");
const userIdInput = document.getElementById("userId");
const userNameInput = document.getElementById("userName");
const userEmailInput = document.getElementById("userEmail");
const userRoleSelect = document.getElementById("userRole");

// Afficher les utilisateurs dans la table
function displayUsers() {
    userTableBody.innerHTML = "";
    users.forEach((user, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${user.name}</td>
            <td>${user.email}</td>
            <td>${user.role}</td>
            <td>
                <button  onclick="editUser(${index})">Modifier</button>
                <button  style="background-color:red" onclick="deleteUser(${index})">Supprimer</button>
            </td>
        `;
        userTableBody.appendChild(row);
    });
}

// Ajouter ou modifier un utilisateur
userForm.addEventListener("submit", (e) => {
    e.preventDefault();

    const name = userNameInput.value.trim();
    const email = userEmailInput.value.trim();
    const role = userRoleSelect.value;

    if (!role) {
        alert("Veuillez sélectionner un rôle.");
        return;
    }

    if (editingUserId === null) {
        // Ajouter un nouvel utilisateur
        users.push({ name, email, role });
    } else {
        // Modifier un utilisateur existant
        users[editingUserId] = { name, email, role };
        editingUserId = null;
    }

    userForm.reset();
    displayUsers();
});

// Modifier un utilisateur
function editUser(index) {
    const user = users[index];
    userIdInput.value = index;
    userNameInput.value = user.name;
    userEmailInput.value = user.email;
    userRoleSelect.value = user.role;
    editingUserId = index;
}

// Supprimer un utilisateur
function deleteUser(index) {
    users.splice(index, 1);
    displayUsers();
}

// Initialisation
displayUsers();

    </script>



</body>

</html>