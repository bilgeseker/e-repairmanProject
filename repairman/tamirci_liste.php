<?php
$is_id = $menu[2];
$tamirciler = $db->query("select * from tamirci where is_id=$is_id")->fetchAll();
$iller = $db->query("select * from iller")->fetchAll();
if($_POST){
    $il_id = $_POST["secili_il"];
    $secili_tamirciler = $db->query("select * from tamirci where il=$il_id")->fetchAll();
}
?>
<div style="margin-top: 100px;"></div>
<div id="mySidebar" class="sidebar" style="background:white; margin-top: 100px;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa-solid fa-circle-xmark"></i></a>
  <form action="http://localhost/repairman/tamirci_liste/<?=$is_id?>" style="height:700px;" method="post">
    <br>
    <h3 style=" margin-left:20px;background: #a2a8d3; border-style: initial; border-radius: 5px; width: 300px;font-family: sans-serif; color:white; text-align: center;"><label for="sel2" class="form-label" style="flex-direction: column;">Chosee your province</label></h3>
    <h3><select multiple class="form-select" id="secili_il" name="secili_il" style="flex-direction: column; width: 300px; height: 200px; margin-left:20px; border-style: groove;">
    <?php
    foreach($iller as $il){
        echo '<option value="' . $il["il_no"] . '">' . $il["il"] . '</option>';
    }
    ?>
    </select></h3>
    <button class="btn" type="submit" style=" background: #a2a8d3; height: 50px; width: 100px; border-style: initial; margin-left: 100px; border-radius: 5px;">
      <i class="fa-solid fa-filter fa-xl" style="color:white; font-size: 15px;">Filter</i>
    </button></a>
  </form>
</div>


<div id="main">
  <button class="openbtn" onclick="openNav()"><i class="fa-solid fa-arrow-down-short-wide"></i></button>
</div>

<script>
  function openNav() {
    document.getElementById("mySidebar").style.width = "340px";
    document.getElementById("main").style.marginLeft = "250px";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
</script>

<div class="container-fluid mt-3" style="width: 1200px; height: 600px;  margin-left: 300px;">
    <div class="row">
        
        <div style="margin-bottom: 20px;"><h2>Repairmen</h2><hr></div>
        <?php
        if(!isset($il_id)){
            foreach ($tamirciler as $tamirci) {
                $is = $db->query("select * from isTablo where id=".$tamirci["is_id"]." limit 1")->fetch();
                $il = $db->query("select * from iller where il_no=".$tamirci["il"]." limit 1")->fetch();
                echo '<div class="col-lg-4 p-3">
                        <div class="card d-flex flex-column" style="width:200px; height: 360px;">
                            <img class="card-img-top" src="https://picsum.photos/200" alt="Card image"
                                style="width:50%;  margin-left: 50px; margin-top: 20px;">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center; font-size:18px;">' . $tamirci["ad"] . ' ' . $tamirci["soyad"] . '</h4><hr>
                                <p class="card-text">⊛ ' . $is["is_adi"] . '</p>
                                <p class="card-text">⊛ ' . $il["il"] . '</p>
                                <a href="http://localhost/repairman/tamirci_profil/'.$tamirci["id"].'" class="align-self-end btn btn-primary" style="background-color: #a2a8d3; margin-left: 30px; border:none;">See Profile</a>
                            </div>
                        </div>
                    </div>';
                }
        } else{
            foreach ($secili_tamirciler as $tamirci) {
                $is = $db->query("select * from isTablo where id=".$tamirci["is_id"]." limit 1")->fetch();
                $il = $db->query("select * from iller where il_no=".$tamirci["il"]." limit 1")->fetch();
                echo '<div class="col-lg-4 p-3">
                        <div class="card d-flex flex-column" style="width:200px; height: 360px;">
                            <img class="card-img-top" src="https://picsum.photos/200" alt="Card image"
                                style="width:50%;  margin-left: 50px; margin-top: 20px;">
                            <div class="card-body">
                                <h4 class="card-title" style="text-align:center; font-size:18px;">' . $tamirci["ad"] . ' ' . $tamirci["soyad"] . '</h4><hr>
                                <p class="card-text">⊛ ' . $is["is_adi"] . '</p>
                                <p class="card-text">⊛ ' . $il["il"] . '</p>
                                <a href="http://localhost/repairman/tamirci_profil/'.$tamirci["id"].'" class="align-self-end btn btn-primary" style="background-color: #a2a8d3; margin-left: 30px; border:none;">See Profile</a>
                            </div>
                        </div>
                    </div>';
                }
        }
        ?>
    </div>
</div>