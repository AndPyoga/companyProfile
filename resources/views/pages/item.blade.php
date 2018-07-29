<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Detail Produk</title>

    <!-- Bootstrap -->
    
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

      .nav {
          padding: auto;
      }

      

    </style>

    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
   
  </head>
  <body>

  	<!-- START NAVIGATION BAR -->
    <nav class="navbar navbar-default" style="border-bottom: 10px solid #73AD21">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="header">
            <img style="display: block; margin-right: auto; width: 27%; border-radius: 20px; padding-left: 1px; padding-top: 5px;" class="img" src="{{asset('images/logo.jpg')}}">
        </div>

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">

          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          {{-- <ul class="nav navbar-nav">
          
          </ul> --}}
          
          <ul class="nav navbar-nav navbar-right" style="font-weight: bold;
        font-size: 15.5px;">
            <li><a href="{{ route('home') }}">Beranda<span class="sr-only">(current)</span></a></li>
            <li><a href="#about">Tentang Kami</a></li>
            <li class="dropdown active">
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
    <!-- END NAVIGATION BAR -->
    
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-4">
    			<img src="{{asset('images/karung.jpg')}}">
    		</div>
    		<div class="col-md-6">
    			<h1>Karung Semen</h1>
    			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    			</p>
    		</div>
    	</div>
    </div>

    <br>

    <!-- Footer -->
    <footer>
        
        <div class="footerHeader">
            <p style="text-align: center; margin: auto;">Copyright &copy PT. Inti Abadi Kemasindo</p>
        </div>
    </footer>
    <!-- End Footer -->
                      


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>