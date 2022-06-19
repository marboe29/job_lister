<?php include_once 'config/init.php'; ?>

<?php

$job = new Job;
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])){
    
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

//ref create.php changeing to update values
    if($job->update($job_id, $data)){
    //redirect    
        header('location: index.php?success=your jobs been updated');
        exit();

    }else{

        header('location: index.php?failure=whoops that didnt work');
        exit();
    }
}


$template = new Template('templates/job-edit.php');
$template->job = $job->getJob($job_id);
$template->categories = $job->getCategories();

echo $template;