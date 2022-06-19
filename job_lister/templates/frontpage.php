<?php include 'inc/header.php'; ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>safeTrade | home</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/jumbotron/">

    <style>
      h1{
        text-align:center;
      }
    </style>

    <link rel="stylesheet" href="styles.css">

  </head>
  <body>
    
<main role="main">
  <div class="jumbotron">
    <div class="container">
    <h1> Search-Jobs </h1>
      <form method="GET" action="index.php">
        <select name="category" class="form-control">
          <option value="0">Choose Category</option>
            <?php foreach($categories as $category): ?>
              <option value="<?php echo $category->id; ?>">
              <?php echo $category->name; ?></option>
            <?php endforeach; ?>
          </select>
          <br>
          <input role="button" type="submit" class="btn btn-secondary btn btn-md btn-sucess" value="Search &raquo;">
        </form>
    </div>
  </div>
  <div class="container">
    <h5><?php echo $title; ?></h5><br>
     <?php foreach($jobs as $job): ?>
       <div class="col-md-4">
        <h2><?php echo $job->job_title; ?></h2>
        <small> Posted by <?php echo $job->contact_user; ?> on  <?php echo $job->post_date; ?></small>
        <br><br>
        <p><?php echo $job->description; ?></p>
        <p><a class="btn btn-secondary" href="job.php?id=<?php echo $job->id;?>" role="button">View details &raquo;</a></p>
      </div>
    <?php endforeach; ?>

      
    </div>
  </div> <!-- end container -->
  <br><hr>
</main>

<?php include 'inc/footer.php'; ?>