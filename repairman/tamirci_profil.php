<?php
$tamirci_id = $menu[2];
$tamirci = $db->query("select * from tamirci where id =".$tamirci_id." limit 1")->fetch();
$is = $db->query("select * from isTablo where id=".$tamirci["is_id"]." limit 1")->fetch();
$il = $db->query("select * from iller where il_no=".$tamirci["il"]." limit 1")->fetch();
?>

<div class="container" style="margin-top: 150px;">
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="text-center">
                <img src="https://picsum.photos/200" alt="Profile Picture" class="rounded-circle">
            </div>
            <div
                style=" background: #e7eaf6; width: 220px;height:400px; margin-left: 90px; margin-top: 30px; border-style: groove; padding: 5px;">
                <h4 style="text-align: center; font-size: larger; margin-top: 10px;">About me
                    <hr>
                </h4>
                <p>
                    <?=$tamirci["hakkimda"]?>
                </p>
            </div>
        </div>
        <div class="col-md-8">
            <h1>E-Repairman Profile</h1>
            <hr>
            <h2>Contact Information</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td>
                        <?=$tamirci["ad"]?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Surname</th>
                        <td>
                        <?=$tamirci["soyad"]?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>
                        <?=$tamirci["email"]?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Phone</th>
                        <td>
                        <?=$tamirci["telefon"]?>
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
            <p>
            <?=$is["is_adi"]?>
            </p>

            <hr>
            <h2>Location</h2>
            <div style="background: #e7eaf6; height:auto; border-radius:5px; padding: 15px;">
                <p>
                <?=$il["il"]?>
                </p>

            </div>
            
            <?php
            if(isset($_SESSION["kullanici_id"])){
                echo '
                <a href="http://localhost/repairman/mesaj/'.$_SESSION["kullanici_id"].'"><button
                        class="btn btn-primary"
                        style="margin-top: 50px;margin-bottom: 20px;background: #113f67; height: 50px; border: none;">
                        <i class="fa-solid fa-pen-to-square"></i>
                        Send Message
                    </button></a>
                    ';
            }
            ?>
            <small class></small>
        </div>
    </div>
</div>