<?php include_once 'config/init.php'; ?>

<?php

$job = new Job;

if(isset($_POST['create'])){
    
//creats a array to set the values for job-create.php
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($job->create($data)){
    //redirect
        header('location: index.php?success=your jobs been listed');
        exit();

    }else{

        header('location: index.php?failure=whoops that didnt work');
        exit();
    }
}


$template = new Template('templates/job-create.php');

$template->categories = $job->getCategories();

echo $template;