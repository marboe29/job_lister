<?php include 'inc/header.php'; ?>

<!--page for createing job-->
<form method="POST" action="create.php" style="text-align: center; margin-left: 35%; margin-right: 35%; margin-top: 5%;">
    <h2 class="page-header">Create Job Listing</h2>
        <hr><br>
        
        <div class="form-group">
            <label> Company </label>
            <input type="text" class="form-control" name="company">
        </div>

        <div class="form-group">
            <label> Category </label>
                <select type="text" class="form-control" name="category">
                    <option value="0">Choose Category</option>
                        <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>">
                <?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
        </div>

        <div class="form-group">
            <label> Job title </label>
            <input type="text" class="form-control" name="job_title">
        </div>

        <div class="form-group">
            <label> Description </label>
            <textarea type="text" class="form-control" name="description"></textarea>
        </div>

        <div class="form-group">
            <label> location </label>
            <input type="text" class="form-control" name="location">
        </div>

        <div class="form-group">
            <label> Salary </label>
            <input type="text" class="form-control" name="salary">
        </div>

        <div class="form-group">
            <label> Contact user </label>
            <input type="text" class="form-control" name="contact_user">
        </div>

        <div class="form-group">
            <label> Contact email </label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        <input type="submit" class="btn btn-secondary" value="Create &raquo;" name="create">
        <a href="index.php" type="cancel" class="btn btn-secondary"> Cancel &raquo;</a>
      </form> <br><hr> 

<?php include 'inc/footer.php'; ?>