<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// die;
if($_POST){
   if($_POST['operator']=='+'){
    $sum = $_POST['txtf'] + $_POST['txts'];
    echo $sum;
   }

}



?>