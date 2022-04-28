<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?= $title; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- MDB Template -->
    <link rel="stylesheet" href="/mdbootstrap/css/mdb.min.css" />
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>



    <!-- Template Download -->
    <!-- Choices CSS-->
    <link rel="stylesheet" href="/template/vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="/template/vendor/swiper/swiper-bundle.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700&amp;display=swap">
    <!-- Lightbox-->
    <link rel="stylesheet" href="/template/vendor/glightbox/css/glightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/template/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/template/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/template/img/favicon.png">
  </head>
  <body>

    <!-- Navigation Bar -->
    <?= $this->include('layout/navbar'); ?>

    <!-- Isi Konten -->
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <?= $this->include('layout/footer'); ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>


    <!-- Template -->
        <!-- JavaScript files-->
        <script src="template/vendor/jquery/jquery.min.js"></script>
        <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="template/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="template/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="template/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="templatejs/front.js"></script>
        <script>
          // ------------------------------------------------------- //
          //   Inject SVG Sprite - 
          //   see more here 
          //   https://css-tricks.com/ajaxing-svg-sprite/
          // ------------------------------------------------------ //
          function injectSvgSprite(path) {
          
              var ajax = new XMLHttpRequest();
              ajax.open("GET", path, true);
              ajax.send();
              ajax.onload = function(e) {
              var div = document.createElement("div");
              div.className = 'd-none';
              div.innerHTML = ajax.responseText;
              document.body.insertBefore(div, document.body.childNodes[0]);
              }
          }
          // this is set to BootstrapTemple website as you cannot 
          // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
          // while using file:// protocol
          // pls don't forget to change to your domain :)
          injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
          
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
