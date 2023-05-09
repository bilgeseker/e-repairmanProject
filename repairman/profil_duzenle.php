<?php
$kullanici_id = $menu[2];
$kullanici = $db->query("select * from kullanici where id=$kullanici_id")->fetch();
$iller = $db->query("select * from iller")->fetchAll();

if ($_POST) {
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $email = $_POST["email"];
    $adres = $_POST["adres"];
    $telefon = $_POST["telefon"];
    $il = $_POST["il"];

    if (!empty($_FILES['resim']['name']) && !empty($_FILES['resim']['tmp_name'])) {
        $kaynakResim = $_FILES['resim']['tmp_name'];
        $path = $_FILES['resim']['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $dosyaResim = time() . rand(1, 100) . "." . $ext;
        $hedefResim = "upload/" . $dosyaResim;
        if (file_exists($hedefResim)) {
            $hmzResim = substr(md5(uniqid(rand())), 0, 8);
            $hedefResim = "upload/" . $hmzResim . '-' . $dosyaResim;
            $dosyaResim = $hmzResim . '-' . $dosyaResim;
        }
        move_uploaded_file($kaynakResim, $hedefResim);
        // echo 'Yüklenen dosya adı: <a href="./upload/' . $dosyaResim . '" target="_blank">' . $dosyaResim . '</a>';
        $upload_sql = " image = '$dosyaResim', ";
        $db_guncelle = "
            update kullanici set 
            $upload_sql
            ad = '$ad',
            soyad = '$soyad',
            email = '$email',
            telefon = '$telefon',
            adres = '$adres',
            il = '$il'
    		where id = '$kullanici_id' limit 1";
    } else{
        $db_guncelle = "
            update kullanici set 
            ad = '$ad',
            soyad = '$soyad',
            email = '$email',
            telefon = '$telefon',
            adres = '$adres',
            il = '$il'
    		where id = '$kullanici_id' limit 1";
    }
    if($db->query($db_guncelle)){
        $duzenle = 1;
    }else{
        $suzenle = 0;
    }
}

?>
<form action="http://localhost/repairman/profil_duzenle/<?= $kullanici["id"] ?>" method="post">
    <div style="margin-top: 140px;"></div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" width="200px"
                        height="200px" alt="Profile Picture" class="rounded-circle">
                    <div class="mt-3">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="resim">Photo:</label>
                            <input type="file" class="form-control" id="resim" name="resim">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h1>Edit Profile</h1>
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
                            <td><input type="text" class="form-control border-0" name="ad"
                                    value="<?= $kullanici["ad"] ?>">
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Surname</th>
                            <td><input type="text" class="form-control border-0" name="soyad"
                                    value="<?= $kullanici["soyad"] ?>">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td><input type="text" class="form-control border-0" name="email"
                                    value="<?= $kullanici["email"] ?>">
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">Phone</th>
                            <td><input type="text" class="form-control border-0" name="telefon"
                                    value="<?= $kullanici["telefon"] ?>">
                            </td>

                        </tr>
                        <tr>
                    </tbody>
                </table>
                <hr>
                <h2>Address</h2>
                <div style="background: #e7eaf6; height:auto; border-radius: 5px; ">

                    <p><input type="text" class="form-control border-0" style="background: #e7eaf6; padding: 15px;"
                            value="<?= $kullanici["adres"] ?>" name="adres"></p>

                </div>
                <div class="input-group mb-1">
                    <label class="input-group-text" for="inputGroupSelect01"
                        style="background-color: #ebecf0;">City</label>
                    <select class="form-select" id="il" name="il">
                        <option value="0" selected disabled>
                            Select City
                        </option>
                        <?php
                        foreach ($iller as $il) {
                            echo '<option value="' . $il["il_no"] . '">' . $il["il"] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <!-- <a href="http://localhost/repairman/kullanici_profil/<?=$_SESSION["kullanici_id"]?>">
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