<?php
$tamirci_id = $menu[2];
$tamirciler = $db->query("select * from tamirci where is_id=$tamirci_id")
?>

<h2><?php
foreach($tamirciler as $tamirci){
    echo $tamirci["ad"];
}
?></h2>