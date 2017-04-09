 <?php
    require_once 'include/database.php';
    require_once 'include/functions.php';
?>

 <!DOCTYPE html>
 <html lang="ru">
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Ренессанс</title>

     <!-- Bootstrap -->
     <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
     <link href="../css/bootstrap-style.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="../libs/slick/slick.css"/>
     <link rel="stylesheet" type="text/css" href="../libs/slick/slick-theme.css"/>
     <link rel="icon" href="../images/logo.jpg" type="images/jpg"/>
     <link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
     <link href="../css/ren_header.css" rel="stylesheet" type="text/css">
     <link href="../css/ren_content.css" rel="stylesheet" type="text/css">

     <!-- Add jQuery library -->
     <script type="text/javascript" src="../libs/fancybox/lib/jquery-1.10.2.min.js"></script>

     <!-- Add mousewheel plugin (this is optional) -->
     <script type="text/javascript" src="../libs/fancybox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

     <!-- Add fancyBox main JS and CSS files -->
     <script type="text/javascript" src="../libs/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
     <link rel="stylesheet" type="text/css" href="../libs/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

     <!-- Add Button helper (this is optional) -->
     <link rel="stylesheet" type="text/css" href="../libs/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
     <script type="text/javascript" src="../libs/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

     <!-- Add Thumbnail helper (this is optional) -->
     <link rel="stylesheet" type="text/css" href="../libs/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
     <script type="text/javascript" src="../libs/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

     <!-- Add Media helper (this is optional) -->
     <script type="text/javascript" src="../libs/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->

     <script type="text/javascript">

         $('.fancybox').fancybox();
         $(".fancybox-img").fancybox({
             wrapCSS    : 'fancybox-custom',
             closeClick : true,

             openEffect : 'none',

             helpers : {
                 title : {
                     type : 'inside'
                 }
             }
         });
     </script>

     <style>
         .active_link{
             background: black;
             border-left: 1px solid rgba(252, 227, 167, 1);
             border-right: 1px solid rgba(252, 227, 167, 1);
         }
     </style>

 </head>
 <body>

 <!--Верхняя панель навигации -->
 <div class="navbar navbar-inverse navbar-static-top">
     <div class="container">
         <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive_menu">
                 <span class="sr-only">Открыть навигацию</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <div class="logo_block">
                 <a class="navbar-brand logo" href="#"><img src="../images/logo.jpg" alt="Логотип" width="27px" height="27px"></a>
                 <p class="logo_text">Эпоха Возрождения</p>
             </div>
             

         </div>

         <div class="collapse navbar-collapse" id="responsive_menu">
             <ul class="nav navbar-nav main_menu">
                 <?php
                 $categories = get_categories();

                 foreach ($categories as $category){
                     echo '<li><a href="http://dev.renaissance.com/'.$category["link"].'.php">'.$category["title"].'</a></li>';
                 }
                 ?>
             </ul>
             <div class="navbar-form navbar-right soc_btn hidden-xs hidden-sm">
                 <a href="#" data-social="vkontakte"><i class="fa fa-vk fa-2x"></i></a>

                 <a href="#" data-social="facebook"><i class="fa fa-facebook-square fa-2x"></i></a>

                 <a href="#" data-social="twitter"><i class="fa fa-twitter fa-2x"></i></a>
             </div>
         </div>
     </div>
 </div>


 <script type="text/javascript" src="../libs/jquery/jquery-1.11.1.min.js" ></script>
 <script src="../libs/goodshare.js-master/goodshare.min.js"></script>
 <script>
     $(function () {                                      // Когда страница загрузится
         $('.navbar-collapse .main_menu a').each(function () {             // получаем все нужные нам ссылки
             var location = window.location.href; // получаем адрес страницы
             var link = this.href;                // получаем адрес ссылки
             if(location == link) {               // при совпадении адреса ссылки и адреса окна
                 $(this).addClass('active_link');  //добавляем класс
             }
         });
     });
 </script>


 
 

