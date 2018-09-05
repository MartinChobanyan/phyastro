<html>
    <head>
        <title>ADMIN PANEL</title>

        <? include_once $_SERVER['DOCUMENT_ROOT'].'/blocks/admin_head.html' ?>
        
    </head>
    <body>

        <? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/admin_header.html' ?>
        <? require_once $_SERVER['DOCUMENT_ROOT'].'/blocks/adm_Top-Nav.php' ?>

        <div class="Y-Back">
            <h1><i class="Y-Glux">Main page</i></h1>
                <p class="Text"><i>&nbsp;&nbsp;Եթե դուք հայտնվել եք այս էջի վրա, այսինքն ունեք բավարար իրավունք էջերի վրա աշխատելու և կատարելու որոշակի փոփոխություն։ Admin գրասենյակում դուք ունեք շատ մեծ հնարավորություններ և պետք է ճիշտ կառավարեք ձեզ տրվող հնարաորությունները։ Բարի գալուստ կայքի ուղեղ :)</i></p>
            <hr>
            <center>
                <p style="font-size: 40px; color: #FFFFFF; padding-top: 20px">Online:<span style="color: #44D5EB; font-size: 35px; padding-left: 10px"><?=sizeof(file('logs/session.txt'))?></span></p>
            </center>
            <br>

        </div>
    </body>
</html>