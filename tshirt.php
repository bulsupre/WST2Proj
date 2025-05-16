<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="tshirt.css">

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
        <h1>T-Shirts & Hoodies</h1>
        <p>Perfect for any Potterhead's wardrobe! Indulge in the spellbinding charm of these t-shirts and hoodies, 
featuring captivating designs inspired by iconic scenes, spells, houses and characters.</p>
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
                    <img src="Images/Gryffindor-shirt.png" alt="">
                    <p>Gryffindor T-shirt</p>
                </div>
                
                <div class="grid-item">
                    <img src="Images/Slytherin-shirt.png" alt="">
                    <p>Slytherin T-shirt</p>
                </div>

                <div class="grid-item">
                    <img src="Images/Ravenclaw-shirt.png" alt="">
                    <p>Ravenclaw T-shirt</p>
                </div>

                <div class="grid-item">
                    <img src="Images/Hufflepuff-shirt.png" alt="">
                    <p>Hufflepuff T-shirt</p>
                </div>

                <div class="grid-item">
                    <img src="Images/Griffyndor-hoodie.png" alt="">
                    <p>Gryffindor Hoodie</p>
                </div>

                <div class="grid-item">
                    <img src="Images/Slytherin-hoodie.png" alt="">
                    <p>Slytherin Hoodie</p>
                </div>
            </div>

            <div class="grid-set" id="grid-set-2">

                <div class="grid-item">
                    <img src="Images/Ravenclaw-hoodie.png" alt="">
                    <p>Ravenclaw Hoodie</p>
                </div>
                
                <div class="grid-item">
                    <img src="Images/Hufflepuff-hoodie.png" alt="">
                    <p>Hufflepuff Hoodie</p>
                </div>

            </div>

        <!-- Pagination -->
        <div class="pagination">
            <button onclick="changeSlide(-1)">&#60;</button>
            <button class="page-btn active" onclick="showSlide(1)">1</button>
            <button class="page-btn" onclick="showSlide(2)">2</button>
            <button onclick="changeSlide(1)">&#62;</button>
        </div>


    </div>
    
    <script>
        let currentSlide = 1;
        const totalSlides = 2;

        function showSlide(slideIndex) {
        const sets = document.querySelectorAll('.grid-set');
        const pageButtons = document.querySelectorAll('.page-btn');
        sets.forEach(set => set.classList.remove('active'));
        pageButtons.forEach(btn => btn.classList.remove('active'));

        if (slideIndex < 1) slideIndex = 1;
        if (slideIndex > totalSlides) slideIndex = totalSlides;

        sets[slideIndex - 1].classList.add('active');
        pageButtons[slideIndex - 1].classList.add('active');
        currentSlide = slideIndex;
        }

        function changeSlide(direction) {
        showSlide(currentSlide + direction);
        }
  </script>
</body>
</html>