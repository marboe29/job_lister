<?php include_once 'config/init.php'; ?>

<?php

$job = new Job;


$template = new Template('templates/frontpage.php');

//if theirs a category in the URL sets value to it, if not sets to null
$category = isset($_GET['category']) ? $_GET['category'] : null;

    if($category){

        $template->jobs = $job->getByCategory($category);
        $template->title = 'jobs for '. $job->getCategory($category)->name;

    }else{

        $template->title = 'lastest jobs';
        $template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;