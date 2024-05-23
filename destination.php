<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/destination.css">
    <title>Destinations</title>
    <style type="text/css">
        .container .box .name-text input{
            position: relative;
            display: none;
            background: transparent;
            border: 1px solid #fff;
            top: -20px;
            color: #fff;
            text-decoration: none;
            transition: 0.6s ease;
            text-align: center;
        }
        .btn{
            padding: 5px 40px;
        }
        .btn1{
            margin: 0px -20px;
            padding: 5px 40px;
        }
        .btn2{
            padding: 5px 60px;
        }
        .btn3{
            padding: 5px 37px;
            margin: 0px -2px;
        }
        .btn4{
            padding: 5px 50px;
        }
        .btn5{
            padding: 5px 25px;
        }
        .container .box:hover .name-text input{
            display: block;
            top: -20px;
        }
        .container .box .name-text input:hover{
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <h1 class="heading">Popular Destinations</h1>
    
    <div class="main">
        <ul>
            <ul class="list">
                <li class="logo"><a href="mainPage.php"><img src="logo.png" alt="Logo" style="width:36px;height:36px"></a></li>
                <div class="search">
                    <form method="POST" action="info.php">
                        <input type="text" name="search_p" placeholder="Search.." size="50">
                        <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
                    </form>
                </div>
            </ul>
            <ul class="list2">
                <li><a href="mainPage.php">Home</a></li>
                <li class="active-menu"><a id="long" href="destination.php">Destination</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="signin.php">Logout</a></li>
            </ul>
        </ul>
    </div>
    <div class="container">
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/b1.jpg" alt="B'vsta Image" style="width: auto;height: 270px;">
            </div>
            <div class="name-text name-pading1 top1">
                <h1>Bellaroca</h1>
                <form method="POST" action="info.php">
                    <input type="submit" name="bellaroca" class="btn1" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/b5.jpg" alt="B'vsta Image" style="width: auto;height: 270px;">
            </div>
            <div class="name-text name-pading2 top1">
                <h1>Hot Spring</h1>
                <form method="POST" action="info1.php">
                    <input type="submit" name="hotspring" class="btn2" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/b4.jpg" alt="B'vsta Image">
            </div>
            <div class="name-text name-pading3 top1">
                <h1>Mt. Malindig</h1>
                <form method="POST" action="info2.php">
                    <input type="submit" name="malindig" class="btn3" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/b3.jpg" alt="B'vsta Image">
            </div>
            <div class="name-text name-pading4 top1">
                <h1>Haynon Hills</h1>
                <form method="POST" action="info3.php">
                    <input type="submit" name="haynon" class="btn4" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/g1.jpg" alt="Gasan Image">
            </div>
            <div class="name-text name-pading5 top2">
                <h1>Gaspar</h1>
                <form method="POST" action="info4.php">
                    <input type="submit" name="gaspar" class="btn5" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/g2.jpg" alt="Gasan Image">
            </div>
            <div class="name-text name-pading6 top2">
                <h1>Park</h1>
                <form method="POST" action="info5.php">
                    <input type="submit" name="park" class="btn" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/bo2.jpg" alt="Boac Image">
            </div>
            <div class="name-text name-pading7 top2">
                <h1>Church</h1>
                <form method="POST" action="info6.php">
                    <input type="submit" name="church" class="btn3" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/bo.jpg" alt="Boac Image">
            </div>
            <div class="name-text name-pading8 top2">
                <h1>Museum</h1>
                <form method="POST" action="info7.php">
                    <input type="submit" name="Museum" class="btn2" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/sta1.jpg" alt="Sta CRuz Image">
            </div>
            <div class="name-text name-pading9 top3">
                <h1>Maniwaya</h1>
                <form method="POST" action="info8.php">
                    <input type="submit" name="Maniwaya" class="btn3" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/sta2.jpg" alt="Sta Cruz Image">
            </div>
            <div class="name-text name-pading10 top3">
                <h1>Panuluyan</h1>
                <form method="POST" action="info9.php">
                    <input type="submit" name="panuluyan" class="btn4" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/t1.jpg" alt="Torrijos Image">
            </div>
            <div class="name-text name-pading11 top3">
                <h1>Poctoy</h1>
                <form method="POST" action="info10.php">
                    <input type="submit" name="poctoy" class="btn4" value="Visit">
                </form>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                <img src="images/destination/t2.png" alt=" Torrijos Image">
            </div>
            <div class="name-text name-pading12 top3">
                <h1>Ambango</h1>
                <form method="POST" action="info11.php">
                    <input type="submit" name="ambango" class="btn2" value="Visit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
