<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/skins/color-1.css">
  <!-- === Switcher style === -->
  <link rel="stylesheet" href="css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
  <link rel="stylesheet" href="css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
  <link rel="stylesheet" href="css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
  <link rel="stylesheet" href="css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
  <link rel="stylesheet" href="css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
  <link rel="stylesheet" href="css/style-switcher.css">
  <title>Portofolio</title>
</head>
<body> 
  <!--!start main Container -->
  <div class="main-container">
    <!--* start Aside  -->
    <div class="aside">
      <div class="logo">
        <a href="#"><span>S</span>ernia</a>
      </div>
      <div class="nav-toggler">
        <span></span>
      </div>
      <ul class="nav">
        <li><a href="index.html#home" class="active"><i class="fa fa-home"></i>
        Home</a>
      </li>
    
        <li><a href="blog.php"><i class="fa fa-list"></i>
        Artikel</a>
      </li>
        <li><a href="index.html#gallery"><i class="fa fa-briefcase"></i>
        Gallery</a>
      </li>
        <li><a href="index.html#contact"><i class="far fa-comments fa-fw"></i>
        Contact</a>
      </ul>
    </div>
    <!-- start main contant -->
    
      <!-- === abaut section -->
  
      <!-- === Services Section ===-->
      <section class="service section" id="services">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Artikel</h2>
            </div>
          </div>
          <div class="row">
              <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>

            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
                  <i class="<?= $row["image"] ?>"></i>
                </div>
                <h4><?= $row["judul"] ?></h4>
                <p> <?= $row["deskripsi"] ?></p>
              </div>
            </div>
            <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>

           
            
          </div>
        </div>
      </section>

      
  </div>
  <!--!End main Container -->

  <!--* === style Switcher === *-->
  <div class="style-switcher">

    <div class="style-switcher-toggler s-icon">
      <i class="fas fa-cog fa-spin"></i>
    </div>

    <div class="day-night s-icon">
      <i class="fas "></i>
    </div>

    <h4>Theme colors</h4>
    <div class="colors">
      <span class="color-1" onclick="setActiveStyle('color-1')"></span>
      <span class="color-2" onclick="setActiveStyle('color-2')"></span>
      <span class="color-3" onclick="setActiveStyle('color-3')"></span>
      <span class="color-4" onclick="setActiveStyle('color-4')"></span>
      <span class="color-5" onclick="setActiveStyle('color-5')"></span>
    </div>
  </div>


  <!-- === js files === -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.umd.js" integrity="sha512-+2pW8xXU/rNr7VS+H62aqapfRpqFwnSQh9ap6THjsm41AxgA0MhFRtfrABS+Lx2KHJn82UOrnBKhjZOXpom2LQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/index.js"></script>
  <script src="js/style-switcher.js"></script>
</body>
</html>
