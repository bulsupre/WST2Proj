<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container vh-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="login col-md-6 d-flex justify-content-center">
                <form>
                    <h1 class="fw-bold">LOGIN YOUR ACCOUNT</h1>
                    <div class="mt-5 mb-3">
                        <label for="exampleInputEmail1" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                        <input type="password" class="box form-control" id="exampleInputPassword1">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <div class="d-flex justify-content-between">
                            <label class="form-check-label fw-bold" for="exampleCheck1 fw-bold">Remember Me</label>
                            <a class="remember fw-bold" href="fpass.php">forgot your password &#63;</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary fw-bold">LOGIN</button>
                    </div>
                </form>
            </div>

            <div class=" logo col-md-6 d-flex flex-column align-items-center">
                <img src="Images/logo.png" class="logoPic img-fluid" alt="Logo">
                <p class="fw-bold">Welcome Back Wizard &#x21;</p>
            </div>

        </div>
    </div>
</body>
</html>