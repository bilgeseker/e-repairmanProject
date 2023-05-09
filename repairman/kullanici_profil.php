<?php
$kullanici_id = $menu[2];
$kullanici = $db->query("select * from kullanici where id=$kullanici_id")->fetch();
?>
<div style="margin-top: 140px;"></div>
<div class="container">
  <div class="row mt-5">
    <div class="col-md-4">
      <div class="text-center">
        
        <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" width="200px" height="200px" alt="Profile Picture"  style="border-radius:50%;">
      </div>
    </div>
    <div class="col-md-8">
      <h1>Customer Profile</h1>
      <hr>
      <h2>Contact Information</h2>
      <table class="table table-bordered">
        <tbody>
        <tr>
          <th scope="row">Name</th>
          <td><?=$kullanici["ad"]?></td>
        </tr>
        <tr>
          <th scope="row">Surname</th>
          <td><?=$kullanici["soyad"]?></td>
        </tr>
        <tr>
          <th scope="row">Email</th>
          <td><?=$kullanici["email"]?></td>
        </tr>
        <tr>
          <th scope="row">Phone</th>
          <td><?=$kullanici["telefon"]?></td>
        </tr>
        <tr>
        </tbody>
      </table>
      <hr>
      <h2>Adress</h2>
      <div style="background: #e7eaf6; height:auto; border-radius:5px; padding: 15px;">
        <!-- <textarea name="adres" id="adres" cols="70" rows="3" style="border: none; background-color: #e7eaf6;"></textarea> -->
        <p><?=$kullanici["adres"]?></p>
        
        </div>
      <a href="http://localhost/repairman/profil_duzenle/<?=$_SESSION["kullanici_id"]?>"><button class="btn btn-primary" style="margin-top: 50px;margin-bottom: 20px;background: #113f67; height: 50px; border: none;">
        <i class="fa-solid fa-pen-to-square"></i>
        Edit Profile
      </button></a>

          <small class></small>
        </div>
      </div>
    </div>
  </div>
</div>