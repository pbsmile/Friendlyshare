<!--{% load static %}-->
<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link href="https://fonts.googleapis.com/css?family=Rubik:700" rel="stylesheet">
    <link rel="canonical" href="https://befonts.com/big-john-pro-typeface.html" >

    <!--<link rel="stylesheet" type="text/css" href="{% static 'css/homeapp.css' %}">-->
    <link rel="stylesheet" href="css\homeapp.css">

</head>
<body>

    <div class="menubar">
        <div class="container">
            <div class="applogo">
                <img src="src\logo1.png" alt="">
                <h1><font size = "6" color = "#ffffff">FRIENDLYSHARE</font></h1>
                <a href="profile.html"><img style="margin-top: 0px;float: left;margin-left: 700px;padding-top: 10px;" src="src/propicpost3.png" alt=""></a>
                <h style="margin: 0;float: left;font-weight: normal;margin-left: 30px;padding-top: 15px;" ><font size = "5" color = "#ffffff">USERNAME</font></h>
                <button><font face size = "3">LOG OUT</font></button>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="descripbox">
        <div class="container">
            <div class="boxtopic_area">
                <h1 style="position: absolute;left: 570px;top: 55px"><font size = "5" color = "#32b998">RECOMMEND POST</font></h1>
            </div>

            <!--descrip-->
            <div class="box_area">
                 <div class="post_scroll">
                        <div style="width: 480px; height: 500px; overflow-y: scroll;">
                            <div>
                             <?php
                                include "connect.php";
                                    $sql = "SELECT * FROM post_data";
                                    $result = mysql_query($sql);
                                    if($result){
                                        while ($check = mysql_fetch_assoc(result)) {
                                            # code...
                                            echo "<p>".$check['title']."</p>";
                                        }
                                    }else{
                                        echo '<p>ไม่พบข้อมูล</p>';
                                    }
                            ?>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>
                            <h style="float: left;"><font size = "2">หัวข้อกระทู้</font></h>
                            <p><font size = "2">post post post post post post post post post</font></p>

                            <a href="post.html"><img style="margin: 0;float: left;margin-left: 90px;padding-top: 20px;position: absolute;left: 1100px;top: 530px" src="src\postbutton.png" alt=""></a>
                            <img style="margin: 0;float: left;margin-left: 130px;padding-top: 20px;position: absolute;left: 100px;top: 60px" src="src\filterbar.png" alt=""></a>
                            <img style="margin: 0;float: left;margin-left: 120px;padding-top: 20px;position: absolute;left: 850px;top: 60px" src="src\newfeedbar.png" alt=""></a>

                        </div>      
                    </div>
                
            </div>
        </div>
    </div>    
</body>
</html>