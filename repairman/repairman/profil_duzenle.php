<?php
$kullanici_id = $menu[3];
$kullanici = $db->query("select * from tamirci where id=$kullanici_id limit 1")->fetch();
$isler = $db->query("select * from isTablo")->fetchAll();
if ($_POST) {
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $adres = $_POST["adres"];
    $is = $_POST["is_id"];
    $hakkimda = $_POST["hakkimda"];

    $query = "
    update tamirci set
    ad = '$ad',
    soyad = '$soyad',
    email = '$email',
    telefon = '$telefon',
    adres = '$adres',
    is_id = '$is',
    hakkimda = '$hakkimda' where id = '$kullanici_id' limit 1
    ";

    if ($db->query($query)) {
        $duzenle = 1;
    } else {
        $duzenle = 0;
    }
}
?>

<form action="http://localhost/repairman/repairman/profil_duzenle/<?=$_SESSION["kullanici_id"]?>" method="post">
    <div class="container" style="margin-top: 150px;">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="https://via.placeholder.com/150x150" alt="Profile Picture" class="rounded-circle">
                </div>
                <div
                    style=" background: #e7eaf6; width: 220px;height:400px; margin-left: 100px; margin-top: 30px; border-style: groove; padding: 5px;">
                    <h4 style="text-align: center; font-size: larger; margin-top: 10px;">About me
                        <hr>
                    </h4>
                    <textarea class="form-control border-0" name="hakkimda" style=" background: #e7eaf6; width: 200px;height:300px;"><?= $kullanici["hakkimda"] ?></textarea>

                </div>
            </div>
            <div class="col-md-8">
                <h1>E-Repairman Profile</h1>
                <?php
                if ($duzenle) {
                    echo '
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" role="alert">
                                  Update Successful
                                </div>
                            </div>
                        </div>
                        ';
                }
                ?>
                <hr>
                <h2>Contact Information</h2>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">Name</th>
                            <td>
                                <input type="text" class="form-control border-0" name="ad"
                                    value="<?= $kullanici["ad"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Surname</th>
                            <td>
                                <input type="text" class="form-control border-0" name="soyad"
                                    value="<?= $kullanici["soyad"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>
                                <input type="text" class="form-control border-0" name="email"
                                    value="<?= $kullanici["email"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Phone</th>
                            <td>
                                <input type="text" class="form-control border-0" name="telefon"
                                    value="<?= $kullanici["telefon"] ?>">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <h2>Certifications</h2>
                <ul class="list-group">
                    <li class="list-group-item">Certification 1</li>
                    <li class="list-group-item">Certification 2</li>
                    <li class="list-group-item">Certification 3</li>
                </ul>
                <hr>
                <h2>Specialization</h2>
                <select class="form-select" id="is_id" name="is_id">
                    <option value="">Select Job</option>
                    <?php
                    foreach ($isler as $is) {
                        echo '<option value="' . $is["id"] . '">' . $is["is_adi"] . '</option>';
                    }
                    ?>
                </select>


                <hr>
                <div style="background: #e7eaf6; height:auto; border-radius:5px; padding: 15px;">
                    <p>
                        <input type="text" class="form-control border-0" style="background: #e7eaf6; height:auto;"
                            name="adres" value="<?= $kullanici["adres"] ?>">
                    </p>

                </div>
                <div>
                    <!-- <a href="http://localhost/repairman/repairman/tamirci_profil/<?= $_SESSION["kullanici_id"] ?>">
                        <button class="btn btn-primary"
                            style="margin-top: 50px;margin-bottom: 20px; border:none; background: #113f67; height: 50px ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                            </svg>
                            Back
                        </button>
                    </a> -->
                    <input type="submit" class="btn button_style"
                        style="border:none; margin-top: 50px; color:white; margin-bottom: 20px;background: #113f67; height: 50px"
                        value="Update" name="guncelle">
                </div>
                <small class></small>
            </div>
        </div>
    </div>
</form>