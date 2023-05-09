<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Log In</title>
    <!-- <base href="localhost/repairman/"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="text-center">


    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -125px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Log In</h2>
                        <form method="post" action="">
                            <div class="row  d-flex justify-content-center">
                                <!-- Mail input -->
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <!-- Şifre input -->
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="sifre" name="sifre">
                                        <label for="sifre">Password</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-block mb-4" name="giris"
                                        style="background-color: #343c6d; color: #fff;">
                                        Log in
                                    </button>
                                    <p><a href="http://localhost/repairman/repairman/kayit" style="text-decoration:none; color: #343c6d;" class="link-underline-primary">Sign Up</a></p>
                                    <p><a href="http://localhost/repairman/anasayfa" style="text-decoration:none; color: #343c6d;" class="link-underline-primary">Home Page</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>