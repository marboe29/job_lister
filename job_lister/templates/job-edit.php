<?php include 'inc/header.php'; ?>

<!--ref job-create.php but for editing-->
<form method="POST" action="edit.php?id=<?php echo $job->id; ?>" style="text-align: center; margin-left: 35%; margin-right: 35%; margin-top: 5%;">
    <h2 class="page-header">Edit Job Listing</h2>
        <hr><br>
    <!--adding values to inputs to receive its data types-->        
        <div class="form-group">
            <label> Company </label>
            <input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
        </div>

        <div class="form-group">
        <label> Category </label>
            <select type="text" class="form-control" name="category">
            <option value="0">Choose Category</option>
            <!--category feild method to receive its data type-->
                <?php foreach($categories as $category): ?>
                        <?php if($job->category_id == $category->id) : ?>
                            <option value="<?php echo $category->id; ?>" selected>
                            <?php echo $category->name; ?></option>
                        <?php else: ?>
                            <option value="<?php echo $category->id; ?>">
                            <?php echo $category->name; ?></option>
                        <?php endif; ?>              
                <?php endforeach; ?>
            <!--what ever the category_id is it be selected-->
            </select>
        </div>

        <div class="form-group">
            <label> Job title </label>
            <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
        </div>

        <div class="form-group">
            <label> Description </label>
            <textarea type="text" class="form-control" name="description"><?php echo $job->description; ?></textarea>
        </div>

        <div class="form-group">
            <label> location </label>
            <input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
        </div>

        <div class="form-group">
            <label> Salary </label>
            <input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
        </div>

        <div class="form-group">
            <label> Contact user </label>
            <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
        </div>

        <div class="form-group">
            <label> Contact email </label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
        </div>
        <input type="submit" class="btn btn-secondary" value="Submit &raquo;" name="submit">
        <a href="index.php" type="cancel" class="btn btn-secondary"> Cancel &raquo;</a>
      </form> <br><hr> 

<?php include 'inc/footer.php'; ?>