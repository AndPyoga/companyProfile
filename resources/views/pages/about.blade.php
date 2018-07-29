<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tentang Kami | IAK</title>

    <!-- Bootstrap -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      
      @media (min-width: 768px){
        .dropdown:hover .dropdown-menu{
          display:block;
        };
      }

      .navbar-brand {
          float: none !important;
      }

      .img{
          height: 60px;
          width: 260px;
      }

      .nav {
          padding: 26px 20px 20px 20px;
      }

      .carousel-inner > .item > img,
      .carousel-inner > .item > a > img {
          width: 80%;
          margin: auto;
      } 

      .gallery > .thumbnail > .caption > a,
      .gallery > .thumbnail > .caption > p {
          text-align: center;
      }

      .about {
          margin-top: 30px; 
          margin-bottom: 30px;
          background-color: #99ccff;
          border-radius: 5px;
      }

      .about > p,
      .about > a {
          font-size: 16px;
          padding: 0 10px 0 10px;
      }

    </style>

    <link rel="stylesheet" type="text/css" href="css/footer.css">
   
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img class="img" src="images/logo-company.jpg">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          {{-- <ul class="nav navbar-nav">
          
          </ul> --}}
          
          <ul class="nav navbar-nav navbar-right" style="font-weight: bold;
        font-size: 15.5px;">
            <li class="active"><a href="{{ route('home') }}">Beranda<span class="sr-only">(current)</span></a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li class="dropdown">
              <a href="#produk" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Katalog Produk<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Produk A</a></li>
                <li><a href="#">Produk B</a></li>
                <li><a href="#">Produk C</a></li>
              </ul>
            </li>
            
            <li><a href="#">Hubungi Kami</a></li>
            
            {{-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li> --}}
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
   
        <div class="item active">
          <img src="images/test1.jpg" alt="Flower" width="460" height="345">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

        <div class="item">
          <img src="images/test2.jpg" alt="Flower" width="460" height="345">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>

        <div class="item">
          <img src="images/test3.jpg" alt="Flower" width="460" height="345">
          <div class="carousel-caption">
            <h3>Flowers</h3>
            <p>Beautiful flowers in Kolymbari, Crete.</p>
          </div>
        </div>         
    
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> <!-- End Carousel -->
    

    <div class="container about">
        <div class="row">
            <div class="col-md-12">
                <h1 id="about" style="text-align: center;">Tentang Kami</h1>
                <p><b>PT. Inti Abadi Kemasindo</b> adalah sebuah perusahaan ...</p>
            </div>
        </div>
    </div>


    <!-- Gallery Produk -->
    <div class="container gallery">
        <h1 id="produk" style="text-align: center;">Produk Kami</h1>
        <div class="row">
          
            <div class="col-md-4">
              <div class="thumbnail">
                <a href="#" target="_blank">
                  <img src="images/lights.jpg" alt="Lights" style="width:100%">
                  <div class="caption">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <a href="#" target="_blank">
                  <img src="images/nature.jpg" alt="Nature" style="width:100%">
                  <div class="caption">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <a href="#" target="_blank">
                  <img src="images/fjords.jpg" alt="Fjords" style="width:100%">
                  <div class="caption">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <a href="#" target="_blank">
                  <img src="images/Sample600x400.png" alt="Sample" style="width:100%">
                  <div class="caption">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <a href="#" target="_blank">
                  <img src="images/Sample600x400.png" alt="Sample" style="width:100%">
                  <div class="caption">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <a href="#" target="_blank">
                  <img src="images/Sample600x400.png" alt="Sample" style="width:100%">
                  <div class="caption">
                    <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                  </div>
                </a>
              </div>
            </div>
            
        </div> <!-- End Gallery Produk -->  
    </div>

    <br>

    <!-- Footer -->
    <footer>
        <div class="container">
          <div class="col-md-4" >
              <a href="#"><h2>About us</h2></a>
              <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
          </div>
          
          <div class="col-md-4">
              <h3>Our Location </h3>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.3561964119585!2d106.8957006!3d-6.476488799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c0a4fd45ad93%3A0xe03bb8d4c8a51ffe!2sInti+Abadi+Kemasindo+PT!5e0!3m2!1sid!2sid!4v1528247519984" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-4" >
              <h3>Contact Us</h3>
              <ul>
                  <li>Phone : (021) 8752544 Ext: 126</li>
                  <li>E-mail : andri.prayoga@bogasariflour.com</li>
                  <li>Fax : (021) 8752542</li>
              </ul>
              
              <ul class="sm">
                  <li><a href="#" ><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive"></a></li>
                  <li><a href="#" ><img src="https://lh3.googleusercontent.com/00APBMVQh3yraN704gKCeM63KzeQ-zHUi5wK6E9TjRQ26McyqYBt-zy__4i8GXDAfeys=w300" class="img-responsive" ></a></li>
                  <li><a href="#" ><img src="http://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png" class="img-responsive"  ></a></li>
              </ul>
          </div>
        </div>
        <div class="footerHeader">
            <p style="text-align: center; margin: auto;">Copyright &copy PT. Inti Abadi Kemasindo</p>
        </div>
    </footer>
    <!-- End Footer -->
                      


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>