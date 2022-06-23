<?php

include "server_connect.php";

if(isset($_POST["addExparince"])){
    $companyName = $_POST['companyName'];
    $shortBio = $_POST['shortBio'];
    $startJob = $_POST['startJob'];
    $endJob = $_POST['endJob'];
    
    if(empty($companyName) || empty($shortBio) || empty($startJob) || empty($endJob)){
        echo "All File Required";
    }else{
        $insert_edu = "INSERT INTO `experience`(`company_name`, `short_bio`, `start_jobe_date`, `end_jobe_date`) VALUES ('{$companyName}','{$shortBio}','{$startJob}','{$endJob}')";
        $insert_edu_data = mysqli_query($db_config, $insert_edu);
        if($insert_edu_data == true){
            echo  "Insert Success";
        }else{
            echo "Insert Fail";
            
        }
    }
    // header("location: ../exparience.php");
}


?>