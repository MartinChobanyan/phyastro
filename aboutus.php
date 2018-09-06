<?
    include_once 'scripts/conf.php';
    include_once 'scripts/logreader.php'; 
?>
<html lang="hy">
    <head>
        <title><?=SITE_NAME?> գրադարան | Մեր մասին</title>

        <? require_once 'blocks/head.php' ?>

    </head>
    <!-- ~~~~~~~~~~~~~~~~~~~ -->
    <body>

        <? 
            require_once ('blocks/header.php');
            require_once ('blocks/Top-Nav.php') 
        ?>

        <div class="Y-Back">

            <noindex>
                <h1><i class="Y-Glux">Մեր Մասին</i></h1>
            </noindex>
            <p class="Text"><i>&nbsp;&nbsp;Կայքը ստեղծվել է աստղագետ-ֆիզիկոսների համար։ Ստեղծման առիթ է հանդիսացել տաղանդաշատ երեխաների գրքերի ծանր որոնումներն տեսնելը։ Կայքի հիմնադիրները և աջակիցներն են՝</i></p><hr>
            
            <!--`````````````````````````Բոլոր տեքստերի հեղինակ` Մանան Մանուչարյան```````````````````````````-->
            <center style="padding-top: 80px; padding-bottom: 80px;">
                <span style="font-size: 20px; color: #44D5EB">Հեղինակ և ծրագրավորող` 
                    <span style="padding-left: 4em; font-size: 30px; color: #ECCCCC">Մարտին Չոբանյան</span>
                </span> 
                <br><br><br>

                <span style="font-size: 20px; color: #44D5EB">Դիզայն-Մաստեր և աջակից` 
                    <span style="padding-left: 4em; font-size: 27px; color: #ECCCCC">Արփինե Գրիգորյան</span>
                </span> 
                <br><br><br>

            </center>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

            <hr> <? require_once ('blocks/footer.php') ?> <!--FOOTER PART-->    
        </div>

    </body>
</html>