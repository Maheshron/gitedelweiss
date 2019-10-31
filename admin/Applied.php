<?php 
$name = $_GET['categories'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
    a{
        color:white;
        text-decoration:none;
    }
    a:hover{
        text-decoration:none;
        color:white;
    }
    </style>
</head>
<body>
    
    <div class="container">
       <h1>Applied Journal Sub Categories</h1>
       <div class="card-columns">
  <div class="card bg-light">
    <div class="card-body text-center">
       <button class="btn btn-primary"><a href="view_journals.php?categories=<?php echo  $name; ?>&sub_categorie=nanotechnology">NanoTechnology</a></button>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-body text-center">
       <button class="btn btn-primary"><a href="view_journals.php?categories=<?php echo  $name; ?>&sub_categorie=applied_science">Applied Science</a></button>
    </div>
  </div>
   <div class="card bg-light">
    <div class="card-body text-center">
      <button class="btn btn-primary"><a href="view_journals.php?categories=<?php echo  $name; ?>&sub_categorie=biomedical_science">BioMedical Science</a></button>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-body text-center">
       <button class="btn btn-primary"><a href="view_journals.php?categories=<?php echo  $name; ?>&sub_categorie=food_science">Food Science</a></button>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-body text-center">
       <button class="btn btn-primary"><a href="view_journals.php?categories=<?php echo  $name; ?>&sub_categorie=psysical_science">Physical Science</a></button>
    </div>
  </div>
</div>

   </div>

</body>
</html>