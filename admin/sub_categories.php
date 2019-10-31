<?php 
include "main.php";
$c  = $_GET['categories'];


?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/apps/projects/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 06:10:46 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Edelweiss Dashboard</title>

  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="global/css/bootstrap.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/css/bootstrap-extend.min599c.css?v4.0.2">
  <link rel="stylesheet" href="assets/css/site.min599c.css?v4.0.2">


  <!-- Plugins -->
<!--  <link rel="stylesheet" href="global/vendor/animsition/animsition.min599c.css?v4.0.2">-->
  <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/switchery/switchery.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/intro-js/introjs.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.min599c.css?v4.0.2">

  <!-- Plugins For This Page -->
  <link rel="stylesheet" href="global/vendor/jquery-selective/jquery-selective.min599c.css?v4.0.2">

  <!-- Page -->
  <link rel="stylesheet" href="assets/examples/css/apps/projects.min599c.css?v4.0.2">

  <!-- Fonts -->
  <link rel="stylesheet" href="global/fonts/web-icons/web-icons.min599c.css?v4.0.2">
  <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min599c.css?v4.0.2">
  <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic">

  <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js?v4.0.2"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js?v4.0.2"></script>
    <script src="global/vendor/respond/respond.min.js?v4.0.2"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="global/vendor/breakpoints/breakpoints.min599c.js?v4.0.2"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="animsition app-projects">
 
  <?php include("sidebar.php"); ?>
  <!-- Page -->
  <div class="page">
    <div class="page-header">
      <h1 class="page-title">Journal Sub Categories</h1>
      <div class="page-header-actions">
       <!-- Site Action -->
  
     
  
     <!-- End Site Action -->

      </div>
    </div>

    <div class="page-content">
      
      <div class="projects-wrap">
        <ul class="blocks blocks-100 blocks-xxl-5 blocks-lg-4 blocks-md-3 blocks-sm-2"
          data-plugin="animateList" data-child=">li">
            <?php if($c == "medical"){ ?>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Nursing and Health Professions</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=nursing_and_health_professoins" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
              
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Medicine</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=medicine" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
               
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Cardiology</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=cardiology" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
               
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Cancer</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=cancer" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Obesity</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=obesity" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Dentistry</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=dentistry" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Rheumatic Diseases</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=rheumatic" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
            <?php } ?>


            <?php if($c == "health"){ ?>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Biological Science</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=biological_science" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
              
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Biochemistry and Molecular Biology</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=biochemistry_and_molecularbiology" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
               
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Immunology and Microbiology</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=immunology_and_microbiology" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
               
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Neuroscience</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=neuroscience" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Genetics</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=genetics" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Health care</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=health_care" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Psychology</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=psychology" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Diabetics</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=diabetics" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
            <?php } ?>

            






            <?php if($c == "applied"){ ?>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Nanotechnology</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=nanotechnology" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
              
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Applied Science</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=applied_science" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
               
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Biomedical Science</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=biomedical_science" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
               
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Food Science</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=food_science" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Physical Science</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=physical_science" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
       
         
            <?php } ?>


            <?php if($c == "chemical"){ ?>
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Pharmaceuticals</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=pharmaceutical" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
              
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Organic Chemistry</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=organic_chemistry" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
               
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Pharmacology,Toxicology and Pharmaceutical Science</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=pharmacology_toxicology_pharmaceutical" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
               
          <li>
            <div class="panel">
              <figure class="overlay overlay-hover animation-hover">
                 <div  title="Journal Title" style="height:60px;font-size:15px"><b>Pharmcovigilence</b></div>
                <figcaption class="overlay-panel overlay-background overlay-fade text-center vertical-align animation-hover">
                  <div class="btn-group">
                   
                    <a href="" class="btn btn-icon btn-pure btn-default" title="Delete"
                      ><i class="icon wb-trash" aria-hidden="true"></i></a>
                  </div>
                  <a href="view_journals.php?categories=<?php echo $c; ?>&sub_categorie=pharmcovigilence" class="btn btn-outline btn-default project-button" title="View Journal"><i class="icon wb-eye" aria-hidden="true" ></i> Go</a>
                </figcaption>
              </figure>
               
            </div>
          </li>
        
         
            <?php } ?>









        </ul>
        
      </div>

     
    </div>
  </div>


  <!-- Core  -->
  <script src="global/vendor/babel-external-helpers/babel-external-helpers599c.js?v4.0.2"></script>
  <script src="global/vendor/jquery/jquery.min599c.js?v4.0.2"></script>
  <script src="global/vendor/popper-js/umd/popper.min599c.js?v4.0.2"></script>
  <script src="global/vendor/bootstrap/bootstrap.min599c.js?v4.0.2"></script>
  <script src="global/vendor/animsition/animsition.min599c.js?v4.0.2"></script>
  <script src="global/vendor/mousewheel/jquery.mousewheel599c.js?v4.0.2"></script>
  <script src="global/vendor/asscrollbar/jquery-asScrollbar.min599c.js?v4.0.2"></script>
  <script src="global/vendor/asscrollable/jquery-asScrollable.min599c.js?v4.0.2"></script>
  <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.min599c.js?v4.0.2"></script>

  <!-- Plugins -->
  <script src="global/vendor/switchery/switchery.min599c.js?v4.0.2"></script>
  <script src="global/vendor/intro-js/intro.min599c.js?v4.0.2"></script>
  <script src="global/vendor/screenfull/screenfull599c.js?v4.0.2"></script>
  <script src="global/vendor/slidepanel/jquery-slidePanel.min599c.js?v4.0.2"></script>

  <!-- Plugins For This Page -->
  <script src="global/vendor/jquery-selective/jquery-selective.min599c.js?v4.0.2"></script>
  <script src="global/vendor/bootbox/bootbox.min599c.js?v4.0.2"></script>

  <!-- Scripts -->
  <script src="global/js/Component.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin.min599c.js?v4.0.2"></script>
  <script src="global/js/Base.min599c.js?v4.0.2"></script>
  <script src="global/js/Config.min599c.js?v4.0.2"></script>

  <script src="assets/js/Section/Menubar.min599c.js?v4.0.2"></script>
  <script src="assets/js/Section/Sidebar.min599c.js?v4.0.2"></script>
  <script src="assets/js/Section/PageAside.min599c.js?v4.0.2"></script>
  <script src="assets/js/Plugin/menu.min599c.js?v4.0.2"></script>

  <!-- Config -->
  <script src="global/js/config/colors.min599c.js?v4.0.2"></script>
  <script src="assets/js/config/tour.min599c.js?v4.0.2"></script>
  <script>
    Config.set('assets', 'assets');
  </script>

  <!-- Page -->
  <script src="assets/js/Site.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/asscrollable.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/slidepanel.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/switchery.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/animate-list.min599c.js?v4.0.2"></script>
  <script src="global/js/Plugin/bootbox.min599c.js?v4.0.2"></script>


  <script src="assets/js/Site.min599c.js?v4.0.2"></script>
  <script src="assets/js/App/Projects.min599c.js?v4.0.2"></script>

  <script src="assets/examples/js/apps/projects.min599c.js?v4.0.2"></script>


  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'www.google-analytics.com/analytics.js',
      'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>


<!-- Mirrored from getbootstrapadmin.com/remark/iconbar/apps/projects/projects.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Aug 2019 06:10:48 GMT -->
</html>
?>
