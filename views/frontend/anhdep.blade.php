<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta content="charset=utf-8">
  <title>FlexSlider 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <base href="http://localhost/project1/">
  <!-- Syntax Highlighter -->
  <link href="public/css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="public/css/shThemeDefault.css" rel="stylesheet" type="text/css" />
  <!-- Demo CSS -->
  <link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../flexslider.css" type="text/css" media="screen" />

  <!-- Modernizr -->
  <script src="js/modernizr.js"></script>

</head>
<body class="loading">

  <div id="container" class="cf">


  <div id="main" role="main">
      <section class="slider">
        <div id="slider" class="flexslider">
          <ul class="slides">
            <li>
              <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_caramel.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_caramel.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_caramel.jpg" />
            </li>
          </ul>
        </div>
        <div id="carousel" class="flexslider">
          <ul class="slides">
            <li>
              <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_caramel.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_caramel.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_cheesecake_brownie.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_lemon.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_donut.jpg" />
            </li>
            <li>
              <img src="images/kitchen_adventurer_caramel.jpg" />
            </li>
          </ul>
        </div>
      </section>
     
    </div>

  </div>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="../jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="js/shCore.js"></script>
  <script type="text/javascript" src="js/shBrushXml.js"></script>
  <script type="text/javascript" src="js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>

</body>
</html>