<?php
    include 'admin/settings.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Compare prescription drug prices in the UK and save up to %50 on prescription medications. Easy, free and effortless to compare numerous prescription medication prices among verified online pharmacies in the UK. " />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="msvalidate.01" content="BF7AB974FD7217282F3591F0A7C6743D" />
<title>Compare Drug Prices from Verified Online Pharmacies in the UK | DigMedix.com</title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo $FAVICON_LOCATION; ?>" />

<!-- font TODO: download the font you want-->
<link  rel="stylesheet" href="<?php echo $PRIMARY_FONT;?>">
<link rel="stylesheet" href="<?php echo $SECONDARY_FONT; ?>">
 
<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="<?php echo $PLUGINS_FOLDER; ?>" />

<!-- revoluation -->
<link rel="stylesheet" type="text/css" href="<?php echo $REVOLUTION_CSS; ?>" media="screen" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="<?php echo $TYPOGRAPHY_CSS; ?>" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="<?php echo $SHORTCODES_CSS; ?>" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="<?php echo $STYLE_CSS; ?>" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="<?php echo $RESPONSIVE_CSS; ?>" /> 

<!-- Search -->
<link rel="stylesheet" href="<?php echo $SEARCH_CSS; ?>">

<!-- Google Analytics -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7374865907831277",
    enable_page_level_ads: true
  });
</script>

<?php echo $GOOGLE; ?>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '402887103542676'); 
  fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=402887103542676&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

</head>
 
<body>

<?php echo $TAG_MANAGER; ?>
 
<div class="wrapper">
  
<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="<?php echo $PRELOADER; ?>" alt="">
</div>

<!--=================================
 preloader -->
    
<!--=================================
 header -->

 <header id="header" class="header default">
 
 <!--=================================
  mega menu -->
 
 <div class="menu">  
   <!-- menu start -->
    <nav id="menu" class="mega-menu">
     <!-- menu list items container -->
     <section class="menu-list-items">
      <div class="container"> 
       <div class="row"> 
        <div class="col-lg-12 col-md-12"> 
         <!-- menu logo -->
         <ul class="menu-logo">
             <li>
                 <a href="."><img id="logo_img" src="<?php echo $MENU_LOGO; ?>" alt="<?php echo $SITE_NAME; ?>"> </a>
             </li>
         </ul>
         <!-- menu links -->
         <div class="menu-bar">
           <ul class="menu-links">
             <li><a href="../">Home </a>
             </li>
             <li><a href="about/">About Us </a>
             </li>
             <li><a href="contact/">Contact </a>
             </li>
             <li><a href="blog/">Blog </a>
             </li>
           </ul>
         </div>
        </div>
       </div>
      </div>
     </section>
    </nav>
   <!-- menu end -->
  </div>
 </header>
 
 <!--=================================
  header -->

<!--=================================
 banner -->

 <section class="slider-parallax jobs-banner bg-overlay-black-50 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(https://static1.squarespace.com/static/58ef7ca320099ef86ffd4ee4/t/5953d98cb11be12575c827ca/1498667406402/blue-background.png?format=2500w);">
  <div class="slider-content-middle">
   <div class="container">
     <div class="row">
        <div class="col-lg-12 col-md-12">
         <div class="slider-content text-center">
           <h1 class="text-white mb-20"> Search Your Medication </h1>
           <span class="text-white">Easiest Way to Compare Your Medication from <span id="indexSliderText"><strong class="theme-color"> 37 </strong> Online Pharmacies </span></span>
           <form method="get" action="compare" onsubmit="document.location.href = '/'+this.category_name.value+'/'+this.search_input.value+''; return false;">
            <div class="row justify-content-center form pb-20 xs-mt-20">
              <div class="col-md-5 mt-50">
                <input type="search" class="form-control" name="search_input" id="search_input" placeholder="Search....">
                <input type="hidden" class="form-control" name="category_name" id="category_name" value="treatment" >
              </div>
              <div class="col-md-2 mt-50">
                <button class="button btn-block" type="submit">Search</button>
              </div>
              </div>
            </form>
            <b class="text-white d-block mt-20">Fast search: <a href="/treatment/viagra">Viagra</a>, <a href="/treatment/finasteride">Finasteride</a>, <a href="/treatment/sildenafil">Sildenafil</a> </b>
          </div>
         </div>
        </div>
     </div>
  </div>
</section>
 
<!--=================================
 banner -->

 <!--=================================
clients-->

<section class="gray-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title  text-center">
        <h6 class="subtitle">Get More Information About Online Pharmacies</h6>
        <h2 class="title"> Popular <span class="theme-bg"> Pharmacies  </span> </h2>
      </div>
      </div>
    </div>
     <div class="row">
       <div class="col-lg-12 col-md-12">
          <div class="clients-list mt-10">
             <div class="owl-carousel" data-nav-dots="false" data-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="1">
             <?php
                include("admin/db_connection.php");
                $all_brands = $conn->query("select name, logo_url from Brands WHERE is_active = 1 order by name;" );
                if($all_brands->num_rows > 0)  
                {
                  while($row = $all_brands->fetch_assoc()) {
                    echo "<div class='item'>
                            <img class='img-fluid mx-auto' src='".$row['logo_url']."' alt=''>
                          </div>";
                  }
                } 
                $all_brands->close();
              ?>
             </div>
          </div>
        </div>
     </div>
  </div>
</section>

<!--=================================
clients-->


 <!--=================================
tab -->

<section class="page-section-ptb" style="padding-top:0;">
 <div class="page-section-pt theme-bg">
  <div class="container"> 
   <div class="row">
       <div class="col-md-12">
         <div class="section-title line center dark-bg text-center">
          <h6 class="subtitle">Have a look at </h6>
          <h2 class="title">Our Treatment Categories</h2>
        </div>
      </div>
    </div>
   <div class="row">
    <div class="col-md-12">
     <div class="tab nav-border nav-center mt-30">
        <ul class="nav nav-tabs">
         <li><a class="active" href="#tab-01" data-toggle="tab"> <i class="kbk kbk-men"></i> Men's Health</a></li>
         <li><a href="#tab-02" data-toggle="tab"> <i class="kbk kbk-women"></i> Women's Health</a></li>
         <li><a href="#tab-03" data-toggle="tab"> <i class="kbk kbk-sexual"></i> Sexual Health</a></li>  
         <li><a href="#tab-04" data-toggle="tab"> <i class="kbk kbk-beat"></i> General Health</a></li>  
         <li><a href="#tab-05" data-toggle="tab"> <i class="kbk kbk-skin_care"></i> Travel Medicine and Skin Care</a></li>  
        </ul>
       </div>
       </div>
      </div> 
     </div>
  </div>
 <div class="container"> 
   <div class="row">
       <div class="col-md-12">
       <div class="tab-content mt-60">
            <div class="tab-pane fade show active" id="tab-01">
            <div class="row"> 
              <div class="col-lg-12 col-md-12">
                 <h3>Men's Health</h3>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <h4 class='theme-color'>Erectile Dysfunction</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=3 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?> 
                  </ul>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                  <h4 class='theme-color'>Premature Ejaculation</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=9 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>    
                  </ul>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                  <h4 class='theme-color'>Hair Loss</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=1 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                  <h4 class='theme-color'>Weight Loss</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=2 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
               </div>
            </div>
            <div class="tab-pane fade" id="tab-02">
             <div class="row"> 
              <div class="col-lg-12 col-md-12">
                 <h3>Women's Health</h3>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Period Delay</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=10 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?> 
                  </ul>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Hair Loss</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=1 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Weight Loss</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=2 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
               </div>
            </div> 
            <div class="tab-pane fade" id="tab-03">
            <div class="row"> 
              <div class="col-lg-12 col-md-12">
                 <h3>Sexual Health</h3>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Erectile Dysfunction</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=3 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?> 
                  </ul>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Premature Ejaculation</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=9 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Herpes</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=6 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
               </div>
            </div>
            <div class="tab-pane fade" id="tab-04">
            <div class="row"> 
              <div class="col-lg-12 col-md-12">
                 <h3>General Health</h3>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Cold Sores</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=11 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?> 
                  </ul>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Asthma</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=13 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                  <h4 class='theme-color'>Stop Smoking</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=12 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                  <h4 class='theme-color'>Migraine</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=4 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
               </div>
            </div>
            <div class="tab-pane fade" id="tab-05">
            <div class="row"> 
              <div class="col-lg-12 col-md-12">
                 <h3>Travel Medicine and Skin Care</h3>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Anti-Malaria</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=14 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?> 
                  </ul>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Anti-Acne</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=8 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                  <h4 class='theme-color'>Acid Reflux</h4>
                  <ul class="list list-unstyled theme-color mt-20 mb-20">
                    <?php
                      include("admin/db_connection.php");

                      $all_products = $conn->query("select name from Products where type=7 order by name;" );
                      if($all_products->num_rows > 0)  
                      {
                        while($row = $all_products->fetch_assoc()) {
                          echo "<li><a href='/".getDrugCategoryByName($row['name'])."/".$row['name']."'><i class='fa fa-chevron-right'></i><b>".$row['name']."</b></a></li>";
                        }
                      } 
                      $all_products->close();
                    ?>
                  </ul>
              </div>
               </div>
            </div>
          </div>
        </div>
      </div>
   </div>
</section>

<!--=================================
tab -->

<!--=================================
 Stay Safe -->

 <section class="gray-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-title">
            <h6>Buying Medication Online</h6>
            <h2 class="title-effect">Stay Safe</h2>
            <p>How to Understand If an Online Pharmacy is Legal?</p>
          </div> 
          <p>In order for online pharmacies to sell medicines through websites, each have to fully regulated and authorised by <span class="theme-color" data-toggle="tooltip" data-placement="top" title="" data-original-title="Medicines and Healthcare Products Regulatory Agency">the MHRA</span>. Also, it has to registered in England and Wales as an online pharmacy with the general Pharmaceutical Council. </p>
          <p>You can use <a href="https://medicine-seller-register.mhra.gov.uk/">https://medicine-seller-register.mhra.gov.uk/</a> website to check if a website is legally authorized to sell medicines to the public. In addition, every online pharmacy must display The Selling Logo on every page of its website which offers to sell human medicines to the public. Please be that only Registered Pharmacists can supply <span class="theme-color" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pharmacy Medicines">P</span> and <span class="theme-color" data-toggle="tooltip" data-placement="top" title="" data-original-title="Prescription Only Medication">POM</span> medicines. You can use <a href="https://www.pharmacyregulation.org/registers/pharmacist">https://www.pharmacyregulation.org/registers/pharmacist</a> website to check if the pharmacy is registered as an online pharmacy with the general Pharmaceutical Council.</p>
      </div>
      <div class="col-lg-6 sm-mt-50 align-self-center d-none d-md-block slider-content">
       <h1> Stop <del> paying too much </del> for prescription medication! It's Free and Simple. Easily compare <span class="typer" data-delay="150" data-words="Medication Prices,Online Pharmacies,Customer Reviews" data-colors="#0487D9,#0487D9,#0487D9"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
     </div>
     <div class="col-lg-6 mt-50">
        <img class="img-fluid mx-auto" src="images/about/2056.jpg" alt="">
     </div>
     <div class="col-lg-6 mt-30">
        <div class="section-title">
          <h6>About <?php echo $SITE_NAME; ?></h6>
          <h2 class="title-effect">Our Mission</h2>
          <p>What does <?php echo $SITE_NAME; ?> do?</p>
        </div>
          <p>Our mission is to save your time and money. We try to offer the best comparison service possible to make the purchasing experience easy and hassle-free. You can save thousands of pounds a year by using our website <a href="<?php echo $SITE_LINK; ?>"><?php echo $SITE_NAME; ?></a>. But more importantly <a href="<?php echo $SITE_LINK ?>"><?php echo $SITE_NAME; ?></a> helps to avoid fraud websites. Only verified online pharmacies are allowed to list their medication prices on our website. The pharmacies on our website are fully regulated and authorised by <span class="theme-color" data-toggle="tooltip" data-placement="top" title="" data-original-title="Medicines and Healthcare Products Regulatory Agency">the MHRA</span>. Also, registered in England and Wales as an online pharmacy with the general Pharmaceutical Council. All our listed online pharmacies sell regulated, genuine and lawful-manufactured medications. </p>
          <div class="row mt-10">
          <div class="col-md-6">
            <ul class="list list-unstyled list-hand">
              <li> Keep it simple with <a href="<?php echo $SITE_LINK; ?>"><?php echo $SITE_NAME; ?></a></li>
              <li> Save time, money and effort</li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list list-unstyled list-hand">
              <li> We are free, fast and impartial</li>
              <li> No registration needed</li>
            </ul>
          </div>
         </div>
      </div>
   </div>
  </div>
</section>

<!--=================================
 Stay Safe -->


<!--=================================
 process-->

 <section class="process-list white-bg page-section-pt">
  <div class="container">
    <div class="row ">
      <div class="col-12">
        <div class="section-title  text-center">
        <h6 class="subtitle">How do I compare medication prices and online pharmacies?</h6>
        <h2 class="title"> Easy <span class="theme-bg"> Comparison  </span> </h2>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12"> 
       <div class="process left">
           <div class="process-step">
            <strong>01</strong>
           </div>
           <div class="process-content">
            <div class="process-icon">
              <span class="flaticon-line"></span>
            </div>  
            <div class="process-info">
              <h1 class="mb-20 process-title"> Search</h1>
               <h3>Enter the medication name on Digmedix search engine.</h3>
            </div>
           </div>
           <div class="border-area left-bottom"></div>
         </div>
       <div class="process right">
           <div class="process-step">
             <strong>02</strong>
           </div>
           <div class="process-content text-right">
             <div class="process-icon">
              <span class="flaticon-technology-1"></span>
             </div> 
             <div class="process-info float-right">
              <h1 class="mb-20 process-title"> Customise</h1>
               <h3>Select strength and quantity that you need.</h3>
             </div>
           </div>
             <div class="border-area right-top"></div>
             <div class="border-area right-bottom"></div>
         </div>
         <div class="process left">
           <div class="process-step">
             <strong>03</strong>
           </div>
           <div class="process-content">
               <div class="process-icon">
                <span class="flaticon-computer"></span>
               </div> 
               <div class="process-info">
                <h1 class="mb-20 process-title"> Compare</h1>
                 <h3>Compare prices by total cost, consultation or delivery fee, customer reviews.</h3>
               </div>
             </div>
             <div class="border-area left-bottom"></div>
             <div class="border-area left-top"></div>
         </div>
  
       <div class="process right">
           <div class="process-step">
             <strong>04</strong>
           </div>
           <div class="process-content text-right">
             <div class="process-icon">
              <span class="flaticon-stopwatch-tool-to-control-test-time"></span>
             </div> 
           <div class="process-info float-right">
              <h1 class="mb-20 process-title"> Choose</h1>
               <h3>Click “Go to Site” to be directed to their website.</h3>
             </div>
           </div>
            <div class="border-area right-top"></div>
           <div class="border-area right-bottom"></div>
         </div>
      
       <div class="process left">
           <div class="process-step">
             <strong>05</strong>
           </div>
           <div class="process-content">
           <div class="process-icon">
            <span class="flaticon-rocket-launch"></span>
            </div>
            <div class="process-info">
              <h1 class="mb-20 process-title"> Purchase</h1>
               <h3>Buy your medication from a trustworthy online pharmacy.</h3>
             </div>
             </div>
           <div class="border-area left-bottom"></div>
           <div class="border-area left-top"></div>
         </div>
        </div>
     </div>
    </div>
  </section>

<!--=================================
 process-->


<!--=================================
newsletter -->

<section class="action-box black-bg full-width">
  <div class="container">
    <div class="row">
      <div class="action-box-text pr-0">
        <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
        <p>Sign Up to our Newsletter to get the latest news and offers</p>
      </div>
      <form action="https://digmedix.us20.list-manage.com/subscribe/post?u=16996ae12c4fe3c2a64273981&amp;id=6d6a9d415a" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate float-right col-sm" target="_blank" novalidate="novalidate">                
        <div id="mc_embed_signup_scroll m-auto text-center">
          <div id="mce-responses" class="clear">
            <div class="response text-danger" id="mce-error-response" style="display:none"></div>
            <div class="response text-success" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
          </div>
          <div class="mc-field-group ml-30 mt-10" style="width:60%; display: inline-block;">
            <input id="mce-EMAIL" class="form-control valid" type="text" placeholder="Email address" name="EMAIL" value="" aria-invalid="false">
          </div>
          <div class="text-center" style="display: inline-block;">
            <button class="button ml-30 mt-10" href="#">
              <span>GET NOTIFIED</span>
            </button>
          </div>
        </div>
      </form>
  </div>
</section>

<!--=================================
newsletter -->

<!--=================================
 footer -->

 <?php echo getFooter(); ?>

<!--=================================
 footer -->

</div>
  
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
 
<!--=================================
 jquery -->

<!-- jquery -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/';</script>
 

<!-- custom -->
<script src="js/custom.js"></script>


<script>
  $(function() {
    $("#search_input").autocomplete({
        source: "search.php",
        select: function( event, ui ) {
          $("#search_input").val(ui.item.value);
          $("#category_name").val(ui.item.category);
            //window.location.href = "compare/?drug=" + ui.item.value;
        }
    });


    var text = ["<strong class='theme-color'> 4,027 </strong> Drug Comparisons",
                "<strong class='theme-color'> 496 </strong> Different Drugs",
                "<strong class='theme-color'> 37 </strong> Online Pharmacies"
                ];
    var counter = 0;
    var elem = $("#indexSliderText");
    setInterval(change, 3000);
    function change() {
    elem.fadeOut(function(){
        elem.html(text[counter]);
        counter++;
        if(counter >= text.length) { counter = 0; }
        elem.fadeIn();
    });
}
  });
</script>


</body>
</html>