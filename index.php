<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Coming Soon - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/coming-soon.css" rel="stylesheet">

  

</head>

<body>
  
  <?php $arr1 = ["http://www.skaitv.gr",
"https://play.google.com/store/apps/details?id=gr.ibhellas.skaitvap",
"https://www.petrogazenergy.gr",
"https://www.fileleftheros.gr",
"https://www.liberal.gr",
"https://www.allaboutpeloponnisos.com",
"http://www.perseusgroup.gr",
"https://www.empirebulkers.com",
"https://www.poseidonmedii.eu",
"https://www.florinatravel.gr/"];
    
    $arr2=["skaitv.gr",
"skaitvapp",
"petrogazenergy.gr",
"fileleftheros.gr",
"liberal.gr",
"allaboutpeloponnisos.com",
"perseusgroup.gr",
"empirebulkers.com",
"poseidonmedii.eu",
"florinatravel.gr"];?>
<div class="par">
  <div class="overlay"></div>
   <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="mp4/bg.mp4" type="video/mp4">
  </video>
  </div>

 <div class="container pp">
     <div class="row">
       <?php foreach ($arr1 as $key => $value) {?>
   


         <a href="<?=$value?>" class="col-lg-3 col-md-6 col-12">
         <div class="resio"><img src="img/<?=$key?>.png" alt=""></div>
         <p><?=$arr2[$key]?></p>
         </a>
         <?php } ?>
     </div>
 </div>

<div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3">Pantazis Vastardis</h1>
            <p class="mb-5">Front End Developer, Web Designer, Graphic Designe<br>
              <strong>“Creativity is nothing but the way to solve new problems.”</strong></p>
            <div class="input-group input-group-newsletter">
              <input type="email" class="form-control" placeholder="pantazisvastardis@yahoo.com" disabled aria-label="Enter email..." aria-describedby="basic-addon">
              <div class="input-group-append">
               <a href="mailto:pantazisvastardis@yahoo.com"> <button class="btn btn-secondary" type="button">Contact me</button></a>
            
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="skype:pantazis.vastardis?call">
          <i class="fab fa-skype"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="https://www.facebook.com/pantazismaruti.vastardis" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="https://www.linkedin.com/in/pantazisvastardis/" target="_blank">
         <i class="fab fa-linkedin"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
     $(".masthead").mouseenter(function(){
         $("body").addClass("open");
     
     
     });
      
       $(".masthead").mouseleave(function(){
         $("body").removeClass("open");
     
     
     });


  </script>

  <!-- Custom scripts for this template -->
  <script src="js/coming-soon.min.js"></script>

</body>

</html>
