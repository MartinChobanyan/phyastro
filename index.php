<?
    include_once 'admin_panel/scripts/conf.php';
    include_once 'admin_panel/scripts/logreader.php';
    include_once 'session.php';
    include_once 'admin_panel/scripts/getrow.php';
    $result=mysqli_query($link, "SELECT * FROM `Gradaran` WHERE `visible`= 1 ORDER BY `title`") or die(mysqli_error($link)); 
?>
<html lang="hy">
<head>

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
    <div id="page-preloader" class="preloader"><div class="loader"></div></div>
        
    <header>
      <? 
          require_once ('blocks/header.php');
          require_once ('blocks/Top-Nav.php') 
      ?>
    </header>

    <search><input type="text" id="SearchingLine" onkeyup="SearchAlgoritm()" placeholder="Գրքի անվանումը կամ մի մասը..." title="Որոնման տարածք"></search>
        <ul id="G" class="Grqashar">
        <!--~~~~~~~~~~~~~Books-GET~~~~~~~~~~~~~~~~-->
        <?
          mysqli_close($link);
          $s='';
          while ($row=getrow()):
            $full=True;
            if($s!=mb_substr($row['title'], 0, 1, 'UTF-8') || empty(s)) 
            {
              $s=mb_substr($row['title'], 0, 1, 'UTF-8');
              echo '<li><a class="header">'.$s.'</a></li>';
            }
            echo '<li><a href="'.$row['link'].'">'.$row['title'].'</a></li>';
          endwhile;
          if(!$full) echo '<p style="text-align: center; font-size: 25px; color: #55C5D9">There are no books in library to show</p>';
        ?>
        <!--~~~~~Over~~~~~-->
        </ul>
        </div>

    <!--FACEBOOK SHARE-->
    <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Femma-sargsyan.xyz%2F&width=320&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=996135457185915" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" 
      width="320" 
      height="20"
    ></iframe>
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
        <script src="js/Search_Function.min.js" type="text/javascript"></script>
    <!-- ~~~~~~~~~~~~~~Scroll~~~~~~~~~~~~~~-->
        <script src="js/scroll.min.js" type="text/javascript"></script>
    <!-- Starting the plugin -->
        <script type="text/javascript">
            if (window.innerWidth > 320) { // Проверка на не-телефонность... xD

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