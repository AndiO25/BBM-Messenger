<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  
 #wrapper {
  padding-left: 250px;
  transition: all 0.4s ease 0s;
}

#sidebar-wrapper {
  margin-left: -250px;
  left: 250px;
  width: 250px;
  background: #000;
  position: fixed;
  height: 100%;
  overflow-y: auto;
  z-index: 1000;
  transition: all 0.4s ease 0s;
}

#wrapper.active {
  padding-left: 0;
}

#wrapper.active #sidebar-wrapper {
  left: 0;
}

#page-content-wrapper {
  width: 100%;
}



.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  list-style: none;
  margin: 0;
  padding: 0;
}

.sidebar-nav li {
  line-height: 40px;
  text-indent: 20px;
}

.sidebar-nav li a {
  color: #999999;
  display: block;
  text-decoration: none;
  padding-left: 60px;
}

.sidebar-nav li a span:before {
  position: absolute;
  left: 0;
  color: #41484c;
  text-align: center;
  width: 20px;
  line-height: 18px;
}

.sidebar-nav li a:hover,
.sidebar-nav li.active {
  color: #fff;
  background: rgba(255,255,255,0.2);
  text-decoration: none;
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
  height: 65px;
  line-height: 60px;
  font-size: 18px;
}

.sidebar-nav > .sidebar-brand a {
  color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none;
}



.content-header {
  height: 65px;
  line-height: 65px;
}

.content-header h1 {
  margin: 0;
  margin-left: 20px;
  line-height: 65px;
  display: inline-block;
}

#menu-toggle {

}

.btn-menu {
  color: #000;
} 

.inset {
  padding: 20px;
}

@media (max-width:767px) {

#wrapper {
  padding-left: 0;
}

#sidebar-wrapper {
  left: 0;
}

#wrapper.active {
  position: relative;
  left: 250px;
}

#wrapper.active #sidebar-wrapper {
  left: 250px;
  width: 250px;
  transition: all 0.4s ease 0s;
}

#menu-toggle {
  display: inline-block;
}

.inset {
  padding: 15px;
}

}

  </style>
</head>
<body>
<? //include "TopNavbar.php"; ?>
<div id="wrapper" data-spy="scroll" data-target="#spy" class="">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="">
        <nav id="spy">
            <ul class="sidebar-nav nav">
                <li class="sidebar-brand active"> <a href="#home" class=""><span class="fa fa-home solo">Home</span></a>

                </li>
                <li class=""> <a href="#anch1" data-scroll="" class="">
                            <span class="fa fa-anchor solo">Anchor 1</span>
                        </a>

                </li>
                <li class=""> <a href="#anch2" data-scroll="" class="">
                            <span class="fa fa-anchor solo">Anchor 2</span>
                        </a>

                </li>
                <li class=""> <a href="#anch3" data-scroll="" class="">
                            <span class="fa fa-anchor solo">Anchor 3</span>
                        </a>

                </li>
                <li class=""> <a href="#anch4" data-scroll="" class="">
                            <span class="fa fa-anchor solo">Anchor 4</span>
                        </a>

                </li>
            </ul>
        </nav>
    </div>
    <!-- Page content -->
    <div id="page-content-wrapper" class="">
        <div class="content-header">
             <h1 id="home" class="">
                    <a id="menu-toggle" href="#" class="btn btn-menu btn-lg toggle">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </a>
                    Sidebar Navigation Template
                </h1>

        </div>
        <div class="page-content inset">
            <div class="row">
                <div class="jumbotron text-center">
                     <h1 class="">Hello Beautiful!</h1>

                    <p class="">This is a sidebar navigation responsive template built off of Bootstrap
                        3.0 and simple sidebar template. It includes anchors, scroll spy, smooth
                        scroll, and Awesome icon fonts.</p>
                    <p class=""><a class="btn btn-default">Click On Me!</a>
 <a class="btn btn-info">Tweet Me!</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 well">
                    <legend id="anch1" class="">Anchor 1</legend>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies,
                        metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque
                        ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla
                        enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna
                        ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas
                        in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit
                        amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis.
                        Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate
                        felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim
                        varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet
                        ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui.
                        Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu
                        tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt
                        nisi. Nam consectetur velit ac pharetra venenatis.</p>
                    <p class="">Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus,
                        eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit
                        luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam
                        euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante
                        vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque
                        condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus
                        a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor,
                        mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit
                        amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim
                        fringilla. In ac erat non magna accumsan aliquam.</p>
                </div>
                <div class="col-md-12 well">
                    <legend id="anch2" class="">Anchor 2</legend>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies,
                        metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque
                        ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla
                        enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna
                        ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas
                        in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit
                        amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis.
                        Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate
                        felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim
                        varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet
                        ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui.
                        Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu
                        tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt
                        nisi. Nam consectetur velit ac pharetra venenatis.</p>
                    <p class="">Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus,
                        eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit
                        luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam
                        euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante
                        vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque
                        condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus
                        a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor,
                        mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit
                        amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim
                        fringilla. In ac erat non magna accumsan aliquam.</p>
                </div>
                <div class="col-md-12 well">
                    <legend id="anch3" class="">Anchor 3</legend>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies,
                        metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque
                        ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla
                        enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna
                        ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas
                        in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit
                        amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis.
                        Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate
                        felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim
                        varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet
                        ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui.
                        Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu
                        tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt
                        nisi. Nam consectetur velit ac pharetra venenatis.</p>
                    <p class="">Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus,
                        eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit
                        luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam
                        euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante
                        vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque
                        condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus
                        a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor,
                        mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit
                        amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim
                        fringilla. In ac erat non magna accumsan aliquam.</p>
                </div>
                <div class="col-md-12 well">
                    <legend id="anch4" class="">Anchor 4</legend>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies,
                        metus eget fringilla fermentum, sem justo pulvinar tellus, ac varius neque
                        ante eget mi. Donec cursus nibh ultrices vulputate aliquet. Morbi nulla
                        enim, molestie eu ullamcorper quis, placerat a mauris. Proin vel magna
                        ullamcorper, vulputate leo eu, egestas odio. Vivamus erat leo, egestas
                        in euismod sed, fermentum nec magna. Nunc nisi enim, euismod a tellus sit
                        amet, fermentum adipiscing ipsum. Fusce rhoncus diam ac neque aliquam convallis.
                        Etiam malesuada, nibh id rutrum euismod, enim augue gravida dolor, at vulputate
                        felis mi at magna. Nulla luctus, libero eget luctus gravida, sapien enim
                        varius massa, adipiscing aliquet lacus mi eu eros. Duis pretium laoreet
                        ullamcorper. Aenean in mauris nec libero tincidunt pharetra non et dui.
                        Sed tortor turpis, mollis et tempus eu, auctor laoreet neque. Etiam eu
                        tortor rutrum, rutrum mauris sit amet, hendrerit augue. Sed ut tincidunt
                        nisi. Nam consectetur velit ac pharetra venenatis.</p>
                    <p class="">Donec pellentesque id quam vel iaculis. Phasellus commodo tempor metus,
                        eget sollicitudin odio ultricies id. Proin sed ipsum quis turpis suscipit
                        luctus vitae id urna. Fusce et rhoncus quam. Etiam vel justo ligula. Nullam
                        euismod lacinia risus a pulvinar. Pellentesque sit amet nisl eget ante
                        vulputate feugiat. Suspendisse venenatis magna nunc, mollis facilisis neque
                        condimentum ac. Vivamus non semper dui. Aenean sed eleifend dui. Vivamus
                        a massa aliquam nibh consectetur luctus id at ligula. Nunc ipsum dolor,
                        mollis at sem et, auctor rhoncus ipsum. Nulla faucibus venenatis est sit
                        amet facilisis. In vestibulum nisi at tellus egestas, in pharetra enim
                        fringilla. In ac erat non magna accumsan aliquam.</p>
                </div>
            </div>
            <div class="navbar navbar-default navbar-static-bottom">
                <p class="navbar-text pull-left">Built by <a href="#" target="_blank" class="">Michael V Nguyen
                    </a>
                </p><a href="#" target="_blank" class="">
                </a>
            </div><a href="#" target="_blank" class="">
            </a>
        </div><a href="#" target="_blank" class="">

        </a>
    </div><a href="#" target="_blank" class="">

    </a>
</div>

<script>
  $(document).ready(function() {
        
                
  /*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });

    /*Scroll Spy*/
    $('body').scrollspy({ target: '#spy', offset:80});

    /*Smooth link animation*/
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
        
        });
</script>
<? //include "bottomnav.php"; ?>
</body>
</html>
