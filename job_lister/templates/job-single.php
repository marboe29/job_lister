<?php include 'inc/header.php'; ?>

<!--page for job details-->
<form style="text-align: center; margin-left: 25%; margin-right: 25%; margin-top: 5%;">
<h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>
<small> Posted by <?php echo $job->contact_user; ?> on  <?php echo $job->post_date; ?></small>
<br><hr><br>
<p class="lead"><?php echo $job->description; ?></p>
<br>
<ul class="list-group">
    <li class="list-group-item"><strong>Company:</strong> <?php echo $job->company; ?></li>
    <li class="list-group-item"><strong>Salary:</strong> <?php echo $job->salary; ?></li>
    <li class="list-group-item"><strong>Contact email:</strong> <?php echo $job->contact_email; ?></li>
</ul>
<br>
<a class="btn btn-secondary" href="index.php"> Go back &raquo;</a>
<br><br><hr>
</form>


<div class="well" style="text-align:center;">
    <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-secondary"> Edit &raquo;</a>
    <form style="display:inline;" method="POST" action="job.php">
        <input type="hidden" name="del_id" value="<?php echo $job->id; ?> ">
        <input type="submit" class="btn btn-danger" value="Delete &raquo;">
    </form>
</div>
<hr>   
<?php include 'inc/footer.php'; ?>