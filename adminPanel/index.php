<?php
   session_start(); ob_start();
   require_once("../ayarlar/ayar.php");
   require_once("../ayarlar/functions.php");
   require_once("../ayarlar/adminInside.php");
   require_once("../ayarlar/adminOutside.php");
   if(isset($_REQUEST["sayfaKoduDis"])) {
      $sayfaKoduDis = Guvenlik($_REQUEST["sayfaKoduDis"]);
   } else {
      $sayfaKoduDis = 0;
   }


   if(isset($_REQUEST["sayfaKoduIc"])) {
      $sayfaKoduIc = Guvenlik($_REQUEST["sayfaKoduIc"]);
   } else {
      $sayfaKoduIc = 0;
   }



   if(isset($_REQUEST["sayfalama"])) {
      $sayfalama = sayiliIcerikleriFiltrele($_REQUEST["sayfalama"]);
   } else {
      $sayfalama = 1;
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="tr">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta charset="UTF-8">
   <meta name="Robots" content="noindex, nofollow, noarchive">
   <meta name="googlebot" content="noindex, nofollow, noarchive">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Mukta:wght@200;300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&family=Rubik+Burned&family=Russo+One&display=swap" rel="stylesheet">
   <link rel="shortcut icon" href="../assets/images/Favicon.png" type="image/x-icon">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <link rel="stylesheet" href="..//ayarlar/admin.css">
   <title><?=$title?></title>

</head>
<body>
   <div class="adminMain">
      <?php
         if(empty($_SESSION["admin"])) {
            if(($sayfaKoduDis == 0) or ($sayfaKoduDis == "") or (!$sayfaKoduDis)) {
               include($outside[1]);
            } else {
               include($outside[$sayfaKoduDis]);
            }
         } else {
            if(($sayfaKoduDis == 0) or ($sayfaKoduDis == "") or (!$sayfaKoduDis)) {
               include($outside[0]);
            } else {
               include($outside[$sayfaKoduDis]);
            }
         }
      ?>
   </div>
   <script type="text/javascript" src="../ayarlar/function.js" language="javascript"></script>
   <script type="text/javascript" src="../freamworks/jquery/jquery-3.6.1.min.js" language="javascript"></script>
</body>

</html>
<?php 
   $db = null;
   ob_flush();
?>