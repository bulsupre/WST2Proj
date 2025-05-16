<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="robes.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"/>


</head>
<body>

    <nav class="navbar navbar-expand-lg custom-navbar navbar-dark sticky-top">
    <div class="container-fluid px-4">
        <a class="navbar-brand d-flex align-items-center me-3" href="#home">
        <img src="Images/Logo w_ Name.png" alt="Logo" class="logo-img" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
        </ul>
        <div class="d-flex align-items-center">
            <form class="d-flex me-3 search-bar" role="search">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
            </form>
            <div class="d-flex align-items-center gap-3">
            <a href="#" class="text-white"><i class="fas fa-heart"></i></a>
            <a href="#" class="text-white"><i class="fas fa-shopping-cart"></i></a>
            <a href="#" class="text-white"><i class="fas fa-bell"></i></a>
            <a href="#" class="text-white"><i class="fas fa-user-circle fa-lg"></i></a>
            </div>
        </div>
        </div>
    </div>
    </nav>

    <div class="mt-5">
        <div class="wands d-flex flex-column text-center align-items-center">
        <h1>Hogwarts House Robes</h1>
        <p>Feel like a true member of your chosen house in these replica Harry Potter Robes, true to those seen in the films. 
Wear the iconic colours and emblems of Gryffindor, Slytherin, Ravenclaw or Hufflepuff with pride!</p>
        </div>
    </div>

    <div class="mt-2 ms-5 d-flex flex-row">

    <div class="options d-inline-block">
        <a href="wands.php">Wands</a><br>
        <hr>
        <a href="robes.php">Robes</a><br>
        <hr>
        <a href="tshirt.php">Shirts&#47;Hoodies</a><br>
        <hr>
        <a href="books.php">Books</a><br>
        <hr>
        <a href="">Toys</a><br>
        <hr>
        <a href="">Pins</a><br>
    </div>

    <div class="prod">
        <div class="grid-container">

            <div class="grid-set active" id="grid-set-1">

                <div class="grid-item">
                    <img src="Images/Gryffindor-robe.png" alt="">
                    <p>Gryffindor Robe</p>
                </div>
                
                <div class="grid-item">
                    <img src="Images/Slytherin-robe.png" alt="">
                    <p>Slytherin Robe</p>
                </div>

                <div class="grid-item">
                    <img src="Images/Ravenclaw-robe.png" alt="">
                    <p>Ravenclaw</p>
                </div>

                <div class="grid-item">
                    <img src="Images/Hufflepuff-robe.png" alt="">
                    <p>Hufflepuff Robe</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>