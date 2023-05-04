<?php
$iller = $db->query("select * from iller")->fetchAll();
$isler = $db->query("select * from isTablo")->fetchAll();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Sign Up</title>
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
                        <h2 class="fw-bold mb-5">Sign up now</h2>
                        <form method="post" action="kayit">

                            <div class="row">

                                <!-- Ad input -->
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="text" class="form-control" id="ad" name="ad">
                                        <label for="floatingInput">Name</label>
                                    </div>
                                </div>

                                <!-- Soyad input -->
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating mb-3 mt-3">
                                        <input type="text" class="form-control" id="soyad" name="soyad">
                                        <label for="floatingInput">Surname</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Mail input -->
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email">
                                        <label for="floatingInput">Email</label>
                                    </div>
                                </div>

                                <!-- Şifre input -->
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="sifre" name="sifre">
                                        <label for="floatingInput">Password</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Adres input -->
                            <div class="form-outline mb-5">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="adres" name="adres">
                                    <label for="floatingInput">Address</label>
                                </div>
                            </div>

                            <!-- Telefon input -->
                            <div class="form-outline mb-5">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="telefon" name="telefon">
                                    <label for="floatingInput">Phone</label>
                                </div>
                            </div>

                            <div class="input-group mb-5">
                                <label class="input-group-text" for="inputGroupSelect01"
                                    style="background-color: #ebecf0;">City</label>
                                <select class="form-select" id="il" name="il">
                                    <option value="">Select City</option>
                                    <?php
                                    foreach ($iller as $il) {
                                        echo '<option value="' . $il["il_no"] . '">' . $il["il"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-group mb-5">
                                <label class="input-group-text" for="inputGroupSelect01"
                                    style="background-color: #ebecf0;">City</label>
                                <select class="form-select" id="is_id" name="is_id">
                                    <option value="">Select Job</option>
                                    <?php
                                    foreach ($isler as $is) {
                                        echo '<option value="' . $is["id"] . '">' . $is["is_adi"] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-block mb-4" name="kayit"
                                style="background-color: #343c6d; color: #fff;">
                                Sign up
                            </button>
                            <p><a href="giris" class="link-underline-primary">Log In</a></p>
                            <?php
                            if ($kayitEkle == 1) {
                                echo '
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-success" role="alert">
                                            Registration Successful
                                            </div>
                                        </div>
                                    </div>
                                    ';
                            }

                            ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>