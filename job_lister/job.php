<?php include_once 'config/init.php'; ?>
<br>
<?php

$job = new Job;

if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];

    if($job->delete($del_id)){
    //redirect    
        header('location: index.php?succcess=job removed');
        exit();

    }else{

        header('location: index.php?failure=job remains');
        exit();
    }
}

$template = new Template('templates/job-single.php');

//if theirs a category in the URL sets value to it, if not sets to null
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;