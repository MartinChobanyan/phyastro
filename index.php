<?
    include_once 'scripts/conf.php';
    include_once 'scripts/logreader.php';
    include_once 'session.php';
    include_once 'scripts/getrow.php';
    $result = mysqli_query($link, "SELECT * FROM `Gradaran` WHERE `visible`= 1 ORDER BY `title`") or die(mysqli_error($link)); 
?>
<html lang="hy">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110177624-1"></script>
    <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments)}gtag("js",new Date());gtag("config","UA-110177624-1");</script>
    <!-- TitleOfPage -->
    <title><?=$name?> գրադարան</title>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <? require_once 'blocks/head.html' ?>

    <!-- Additional styles -->
        <link href="css/search.css" rel="stylesheet">
        <link href="css/Verelak.css" rel="stylesheet">
        <link href="css/preload.css" rel="stylesheet">
    <!-- ~~~~~~~~~~~~~~~~~ -->

</head>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<body>
    <!-- Preloader -->
    <div id="page-preloader" class="preloader"><div class="loader"></div><!--<span style="color:white;font-size:48px">Good Morning Vardges Mambreyan :) <br>And all other members of astrophysic club!</span>--></div>
    <!--FB SDK-->
    <div id="fb-root"></div>
    <script>(function(e,a,f){var c,b=e.getElementsByTagName(a)[0];if(e.getElementById(f)){return}c=e.createElement(a);c.id=f;c.src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=996135457185915";b.parentNode.insertBefore(c,b)}(document,"script","facebook-jssdk"));</script>
    <!--Content-->
    <header>
      <? 
            require_once ('blocks/header.php');
            require_once ('blocks/Top-Nav.php'); 
      ?>
    </header>

    <search>
        <input type="text" id="SearchingLine" onkeyup="SearchAlgoritm()" placeholder="Գրքի անվանումը կամ մի մասը..." title="Որոնման տարածք">
        <select id="book-type" onchange="SearchAlgoritm()">
            <option value="">None</option>
            <option value="0">Դպրոցական</option>
            <option value="1">Համալսարանական</option>
            <option value="2">Մասնագիտացված</option>
        <select>
    </search>

    <ul id="G" class="Grqashar">
        <!--~~~~~~~~~~~~~Books-GET~~~~~~~~~~~~~~~~-->
        <?
            mysqli_close($link);
            $s = ''; 
            $full = False;
            while ($row = getrow()):
                $full = True;
                if($s != mb_substr($row['title'], 0, 1, 'UTF-8') || empty($s))
                {
                    $s = mb_substr($row['title'], 0, 1, 'UTF-8');
                    echo '<li><a class="header">'.$s.'</a></li>';
                }
                echo '<li><a t="'.$row['type'].'" href="http://'.$row['link'].'">'.$row['title'].'</a></li>';
            endwhile;
            if(!$full) echo '<p style="text-align: center; font-size: 25px; color: #55C5D9">There are no books in library to show</p>';
        ?>
        <!--~~~~~Over~~~~~-->
    </ul>

    <!--FACEBOOK SHARE-->
    <div class="fb-like" 
        data-href="http://e-phyastro.xyz/" 
        data-width="320" 
        data-layout="button_count" 
        data-action="like" 
        data-size="small" 
        data-show-faces="true" 
        data-share="true"
        style="left:10px">
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~FOOT PART~~~~~~~~~~~~~~~~-->
    <div class="Y-Back">
        <? require_once ('blocks/footer.php') ?>
    </div>
    <!-- jquery -->
        <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <!-- Easing (OPTIONAL) -->
        <script src="js/easing.min.js" type="text/javascript"></script>
    <!-- UItoTop plugin -->
        <script src="js/jquery.ui.totop.min.js" type="text/javascript"></script>
    <!-- ~~~~~~~~~~Preloader~~~~~~~~~~~~~~~ -->
        <script src="js/preload.js"></script>
    <!-- ~~~~~~~~~~~~~Search Script~~~~~~~~~~~~-->
        <script src="js/Search_Function.js" type="text/javascript"></script>
    <!-- ~~~~~~~~~~~~~~Scroll~~~~~~~~~~~~~~-->
        <script src="js/scroll.js" type="text/javascript"></script>
    <!-- Starting the plugin -->
        <script type="text/javascript">
            if (window.innerWidth > 400) { // Проверка на не-телефонность... xD

                $(document).ready(function() {

                    $().UItoTop({
                        easingType: 'easeOutQuint'
                    });

                });

            }
        </script>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    </body>
</html>
