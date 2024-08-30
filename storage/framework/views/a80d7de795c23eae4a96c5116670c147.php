<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

  <!--- basic page needs
    ================================================== -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zahid</title>

  <script>
    document.documentElement.classList.remove('no-js');
    document.documentElement.classList.add('js');
  </script>

  <!-- CSS
    ================================================== -->
  <link rel="stylesheet" href="<?php echo e(url('assets/css/vendor.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('assets/css/styles.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('assets/css/progress.css')); ?>">

  <!-- favicons
    ================================================== -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(url('apple-touch-icon.png')); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(url('favicon-32x32.png')); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(url('favicon-16x16.png')); ?>">
</head>


<body id="top">


  <!-- preloader
    ================================================== -->
  <div id="preloader">
    <div id="loader" class="dots-fade">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>


  <!-- page wrap
    ================================================== -->
  <div id="page" class="s-pagewrap ss-home">


    <!-- # site header
        ================================================== -->
    <header class="s-header">

      <div class="row s-header__inner width-sixteen-col">

        <div class="s-header__block">
          <div class="s-header__logo">
            <a class="logo" href="<?php echo e(route('home')); ?>">
              Home
            </a>
          </div>

          <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>
        </div> <!-- end s-header__block -->

        <nav class="s-header__nav">

          <ul class="s-header__menu-links">
            <li><a href="<?php echo e(route('workExperience')); ?>">Work Experience</a></li>
            <li><a href="<?php echo e(route('project')); ?>">Projects</a></li>
          </ul> <!-- s-header__menu-links -->

          <div class="s-header__contact">
            <a href="contact.html" class="btn btn--primary s-header__contact-btn">Let's Work Together</a>
          </div> <!-- s-header__contact -->

        </nav> <!-- end s-header__nav -->

      </div> <!-- end s-header__inner -->

    </header> <!-- end s-header -->
<?php /**PATH C:\xampp\htdocs\Static_portfoliio_site\portfolio_site\resources\views/pages/layout/header.blade.php ENDPATH**/ ?>