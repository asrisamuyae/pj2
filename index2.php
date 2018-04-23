<html>
<head>
    <meta charset="UTF-8">
    <title> Coach Gadgets </title>
    <!-- <base href="https://9lookjeab.com"> -->
    <meta name="description" content="  ">
    <meta name="keywords" content="  ">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="_token" content="K4K8YVEsJPl4AQp3Kas0gI3WCSSIFSCvBtTQY9I5">
    <link media="all" type="text/css" rel="stylesheet" href="http://9lookjeab.com/assets/stylesheets/vendor/bootstrap.min.css">

        <link media="all" type="text/css" rel="stylesheet" href="http://9lookjeab.com/assets/stylesheets/vendor/flickity.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://9lookjeab.com/assets/stylesheets/vendor/ion.rangeSlider.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://9lookjeab.com/assets/stylesheets/vendor/ion.rangeSlider.skinNice.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://9lookjeab.com/assets/stylesheets/vendor/time.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://9lookjeab.com/assets/stylesheets/vendor/unite-gallery.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://9lookjeab.com/assets/stylesheets/vendor/font-awesome.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="http://9lookjeab.com/assets/stylesheets/main.css">

        <script src="http://9lookjeab.com/assets/javascripts/libs/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="http://9lookjeab.com/assets/css/material-kit.css?v=2.0.2">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="http://9lookjeab.com/assets/assets-for-demo/demo.css" rel="stylesheet" />

</head>
<body  ng-app="myApp" ng-controller="myCtrl">
<section class="wrapper">
<!-- Start Header section -->
<header class="header-side navbar-fixed-top" style="top: 0px;">
    <section class="top-header hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-6"><label>Follow Me</label>
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/asri.samuyae/">
                            <i class="fa fa-facebook-square"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 text-right">
                    <div style="display: inline-block;
    float: right;
    padding: 4px;
    margin-left: 8px;
    background: #1eb848;
    border-radius: 25px;
    font-size: 15px;
    width: 60px;
    text-align: center;" ng-click="login()" ng-style="btn_login_no" id="btn_login_no">Login</div>
    <div style="display: inline-block;
    float: right;
    padding: 4px;
    margin-left: 8px;
    background: #1eb848;
    border-radius: 25px;
    font-size: 15px;
    width: 60px;
    text-align: center;" ng-click="logout()" ng-style="btn_login_yes" id="btn_login_no">logout</div>
    <div style="display: inline-block;
    float: right;
    padding: 4px;
    margin-left: 8px;
    /*background: #1eb848;*/
    /*border-radius: 25px;*/
    font-size: 15px;
   /* width: 60px;*/
    text-align: center;" ng-style="btn_login_yes" ng-bind="getUser" id="btn_login_yes"></div>
    
                    <!-- <form class="form-inline" method="get" action="http://9lookjeab.com/search" style="margin: auto;"> -->
                        <section class="search-section">
                            <button class="btn btn-search" type="submit"><i class="fa fa-search"></i></button>
                            <input class="form-control round-input" type="text" placeholder="ค้นหา" name="q"></section>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="second-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="burger-container">
                        <div id="burger">
                            <div class="bar topBar"></div>
                            <div class="bar btmBar"></div>
                        </div>
                    </div>
                    <figure class="logo-section">
                        <h1><a href="index2.php"><img src="./assets/img/CG logo6.png" width="200"></a></h1></figure>
                    <a href="http://9lookjeab.com/hilight-goal" class="icon-bag visible-xs"><i class="fa fa-play" aria-hidden="true"></i></a>
                </div>
                <div class="col-sm-9 text-right">
                  <ul class="navbar">
                        <li class="active"><a href="index2.php"./">หน้าหลัก</a></li>
                        <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                             อคาเดมี่
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons dropdown_menu">
                            <li  ng-click="academy('U-9')">
                                <!-- <i class="material-icons">content_paste</i> -->
                                <span style="color: #333">U-9</span> 
                            </li>
                            <li  ng-click="academy('U-11')">
                                 
                                <!-- <i class="material-icons">content_paste</i> -->
                                <span style="color: #333">U-11</span>
                            </li>
                            <li  ng-click="academy('U-13')">
                                <!-- <i class="material-icons">content_paste</i>  -->
                                <span style="color: #333">U-13</span>

                            </li >
                            <li ng-click="academy('U-15')">
                                <!-- <i class="material-icons">content_paste</i> -->
                                <span style="color: #333">U-15</span>

                            </li>
                        </ul>
                    </li>
                        <li><a onclick="addplayer()" id="addplayer">เพิ่มนักเตะ</a></li>
                        <li><a onclick="fixtures()" id="fixtures">โปรแกรมการแข่งขัน</a></li>
                        <li><a ng-click="addfixtures()" id="addfixtures">เพิ่มโปรแกรมการแข่งขัน</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <style>
        .dropdown_menu li:hover{
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
    background-color: #9c27b0;
    color: #FFFFFF;
}


.dropdown_menu {
    padding: 0px;
}
.dropdown_menu li{
    display: block !important;
    margin-left: 0;
    padding: 8px 29px;
    border-bottom: 1px solid #1eb848;
}
.navbar li{

   cursor: pointer;
}

    </style>

</header><!-- Start Main/Content section -->
<script >
    function menu() {
        $('#hilight').hide()
        $('#hilight').show()
    }
</script>
<style>
    .search-section .btn-search{
        left: 100px !important
    }
</style>
<main>
    <div class="container">
                <div class="row">
            <div class="col-lg-12">
                <div class="white-box" style="margin-bottom:10px;">
                    <div class="row">
                        <div class="col-sm-7">
                            <article class="big-news" style="background-image: url('./assets/img/MU v LIV1.jpg')">
                                <div class="overlay">
                                    <div class="plain-text">
                                        <a href="http://www.siamsport.co.th/football/premierleague/view/58185" class="underline-none"><h1>แดงเดือดห้าดาว! แรชฟอร์ดเบิ้ล แมนยูเชือดลิเวอร์พูล2-1 ยึดที่2เหนียว</h1></a>
                                        <p>สุดมัน! แรชฟอร์ดซัด2เม็ดให้ "ปีศาจแดง" นำ 2-0 ก่อนที่ครึ่งหลัง ตั้งเกมรับปล่อยให้ "หงส์แดง" บุกแหลกจนตีไข่แตกได้ สุดท้ายทีมของ มูรินโญ่ คว้าสามแต้มด้วยสกอร์ 2-1 ยึดที่สองแบบทำเอาแฟนผีหายใจไม่ทั่วท้อง หนีทีมของ คล็อปป์ ห้าแต้ม</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-5">
                            <section class="inner-box">
                                <header>
                                    <h4>Latest news</h4></header>
                                <article>
                                    <ul class="news-list">                         
                                        <li>
                                                <div class="news-item">
                                                    <a href="https://www.youtube.com/watch?v=WGBNlJg5q6A"  class="name">รวมไฮไลท์ ลิโอเนล เมสซี่ ฤดูกาล 2017/18</a>
                                                    <ul class="tools">
                                                        <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                                954</a></li>
                                                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i>
                                                                3 วัน ที่แล้ว</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                                                                    <li>
                                                <div class="news-item">
                                                    <a href="https://www.youtube.com/watch?v=zKLAGqcnpFA" class="name">ชมคลิปทักษะการยิงประตู แอสซิสต์ จาก คริสเตียโน่ โรนัลโด้</a>
                                                    <ul class="tools">
                                                        <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                                559</a></li>
                                                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i>
                                                                4 วัน ที่แล้ว</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                                                                    <li>
                                                <div class="news-item">
                                                    <a href="http://www.goal.com/th/%E0%B8%82%E0%B9%88%E0%B8%B2%E0%B8%A7/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%81%E0%B8%A9-%E0%B9%80%E0%B8%9B%E0%B8%9B%E0%B8%AB%E0%B8%99%E0%B8%99%E0%B9%80%E0%B8%94%E0%B8%AD-%E0%B8%9A%E0%B8%A3%E0%B8%AD%E0%B8%A2%E0%B8%99%E0%B8%8A%E0%B8%87%E0%B8%9A%E0%B8%A5%E0%B8%A5%E0%B8%87%E0%B8%94%E0%B8%AD%E0%B8%A3/yl5q419v6z1c1syuzu3b2bfk3" class="name">ผลงานประจักษ์! เป๊ปหนุน'เดอ บรอยน์'ชิงบัลลงดอร์</a>
                                                    <ul class="tools">
                                                        <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                                582</a></li>
                                                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i>
                                                                2 สัปดาห์ ที่แล้ว</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                                                                    <li>
                                                <div class="news-item">
                                                    <a href="http://www.siamsport.co.th/football/premierleague/view/57431" class="name">เคนเร้าแข้งสเปอร์สใจต้องแกร่งดวลยูเวนตุส</a>
                                                    <ul class="tools">
                                                        <li><a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i>
                                                                529</a></li>
                                                        <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i>
                                                                2 สัปดาห์ ที่แล้ว</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        
                                    </ul>
                                </article>
                                <footer class="text-center"><a href="index2.php" class="btn btn-default">ข่าวเพิ่มเติม</a>
                                </footer>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
    <div class="container news-page" style="padding-top: 0;padding-bottom: 10px;">
        <section id="hilight">
        <div class="row" >
                            <div class="col-md-3">
                    <div class="white-box">
                        <section class="inner-box news">
                            <article>
                                                                    <div class="image-box" style="background-image: url('./assets/img/Eden Hazard.jpg')"></div>
                                                                <h4>
                                    <a href="http://www.siamsport.co.th/football/premierleague/view/57474">ส่อชิ่ง!อาซาร์ปัดต่อสัญญาเชลซีหวังซบเรอัล มาดริด</a>
                                </h4>
                                <p> สื่อแดนผู้ดีกระพือข่าว เอแด็น อาซาร์ ปีก เชลซี ไม่ยอมขยายสัญญาฉบับใหม่กับทีมเพื่อหวังให้ เรอัล มาดริด เข้ามาสนใจดึงตัวนักเตะไปร่วมทัพ เชื่อแข้งวัย 27 ปี พร้อมทำทุกวิถีทางเพื่อให้ได้โยกไปเล่นในรังซานติอาโก้ เบร์นาเบว</p>
                                <div class="news-tool">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-search"></i> 467
                                            </a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-clock-o"></i> 1 เดือน ที่แล้ว
                                            </a></li>
                                    </ul>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
                            <div class="col-md-3">
                    <div class="white-box">
                        <section class="inner-box news">
                            <article>
                                                                    <div class="image-box" style="background-image: url('./assets/img/Mo Salah.jpg')"></div>
                                                                <h4>
                                    <a href="http://www.siamsport.co.th/football/premierleague/view/57900">สตีวี่จีเชิดชูซาลาห์แข้งแอฟริกาเก่งสุดในลีก</a>
                                </h4>
                                <p>สตีเว่น เจอร์ราร์ด ตำนาน ลิเวอร์พูล ยกย่อง โมฮาเหม็ด ซาลาห์ แข้งแดนมัมมี่ เป็นนักเตะแอฟริกาที่เก่งที่สุดในลีกสูงสุดเมืองผู้ดี ระบุฟอร์มของนักเตะสุดยอดเกินห้ามใจจริงๆ</p>
                                <div class="news-tool">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-search"></i> 524
                                            </a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-clock-o"></i> 1 เดือน ที่แล้ว
                                            </a></li>
                                    </ul>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
                            <div class="col-md-3">
                    <div class="white-box">
                        <section class="inner-box news">
                            <article>
                                                                    <div class="image-box" style="background-image: url('./assets/img/Neymar.jpg')"></div>
                                                                <h4>
                                    <a href="http://www.goal.com/th/%E0%B8%82%E0%B9%88%E0%B8%B2%E0%B8%A7/official-%E0%B9%80%E0%B8%99%E0%B8%A2%E0%B8%A1%E0%B8%B2%E0%B8%A3%E0%B8%9A%E0%B8%99%E0%B8%9C%E0%B8%B2%E0%B9%80%E0%B8%97%E0%B8%B2%E0%B8%9A%E0%B8%A3%E0%B8%B2%E0%B8%8B%E0%B8%A5%E0%B8%8A%E0%B8%A7%E0%B8%94%E0%B8%89%E0%B8%B0%E0%B8%A1%E0%B8%B2%E0%B8%94%E0%B8%A3%E0%B8%94/8hfntq1q9l5211wcnr3v85mve">OFFICIAL: เนย์มาร์บินผ่าเท้าบราซิลชวดฉะมาดริด</a>
                                </h4>
                                <p>ดาวยิงทีมชาติบราซิลจะพลาดเกมกับราชันชุดขาวแน่นอนแล้ว หลังเปแอสเชยืนยันว่านักเตะจะบินกลับไปผ่าตัดที่บ้านเกิด</p>
                                <div class="news-tool">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-search"></i> 494
                                            </a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-clock-o"></i> 1 เดือน ที่แล้ว
                                            </a></li>
                                    </ul>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
                            <div class="col-md-3">
                    <div class="white-box">
                        <section class="inner-box news">
                            <article>
                                                                    <div class="image-box" style="background-image: url('./assets/img/Mesut Ozil.jpg')"></div>
                                                                <h4>
                                    <a href="http://www.siamsport.co.th/column/detail/69109">ทำไมโอซิลถึงยอมต่อสัญญาปืน?</a>
                                </h4>
                                <p> จบกันไปเป็นที่เรียบร้อยสำหรับตลาดซื้อขายนักเตะหน้าหนาวที่แต่ละทีมทุ่มเงินกันอย่างบ้าคลั่งเพื่อพยายามแข่งขันกันรักษาพื้นที่ของตัวเองเอาไว้ในศึกพรีเมียร์ลีก อังกฤษ ให้ได้โดยในตลาดรอบนี้มีเงินสะพัดกว่า 430 ล้านปอนด์ ทำลายสถิเดิมที่เคยทำไว้อย่างถล่มทลาย</p>
                                <div class="news-tool">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fa fa-search"></i> 499
                                            </a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-clock-o"></i> 1 เดือน ที่แล้ว
                                            </a></li>
                                    </ul>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
                    </div>
                    </section>
                    
                    <section id="coach" style="display: none">
                       <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Academy <span ng-bind="class"></span></h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Player Name</th>
                                                <th>Birthday</th>
                                                <th>Position</th>
                                                <th>School</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Foot</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Sign Date</th>
                                                <th>Release Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr ng-repeat="item in academyclass">
                                                <td><span ng-bind="item.name"></span></td>
                                                <td><span ng-bind="item.birthday"></span></td>
                                                <td><span ng-bind="item.position"></span></td>
                                                <td><span ng-bind="item.school"></span></td>
                                                <td><span ng-bind="item.height"></span></td>
                                                <td><span ng-bind="item.weight"></span></td>
                                                <td><span ng-bind="item.foot"></span></td>
                                                <td><span ng-bind="item.address"></span></td>
                                                <td><span ng-bind="item.phone"></span></td>
                                                <td><span ng-bind="item.sign_date"></span></td>
                                                <td><span ng-bind="item.release_date"></span></td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </section>

                    <section id="coach" style="display: none">
                       <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Add Player<span ng-bind="class"></span></h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Player Name</th>
                                                <th>Birthday</th>
                                                <th>Position</th>
                                                <th>School</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Foot</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Sign Date</th>
                                                <th>Release Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr ng-repeat="item in academyclass">
                                                <td><span ng-bind="item.name"></span></td>
                                                <td><span ng-bind="item.birthday"></span></td>
                                                <td><span ng-bind="item.position"></span></td>
                                                <td><span ng-bind="item.school"></span></td>
                                                <td><span ng-bind="item.height"></span></td>
                                                <td><span ng-bind="item.weight"></span></td>
                                                <td><span ng-bind="item.foot"></span></td>
                                                <td><span ng-bind="item.address"></span></td>
                                                <td><span ng-bind="item.phone"></span></td>
                                                <td><span ng-bind="item.sign_date"></span></td>
                                                <td><span ng-bind="item.release_date"></span></td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </section>

                    <section id="coach" style="display: none">
                       <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Fixtures<span ng-bind="class"></span></h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>Player Name</th>
                                                <th>Birthday</th>
                                                <th>Position</th>
                                                <th>School</th>
                                                <th>Height</th>
                                                <th>Weight</th>
                                                <th>Foot</th>
                                                <th>Address</th>
                                                <th>Phone</th>
                                                <th>Sign Date</th>
                                                <th>Release Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <tr ng-repeat="item in academyclass">
                                                <td><span ng-bind="item.name"></span></td>
                                                <td><span ng-bind="item.birthday"></span></td>
                                                <td><span ng-bind="item.position"></span></td>
                                                <td><span ng-bind="item.school"></span></td>
                                                <td><span ng-bind="item.height"></span></td>
                                                <td><span ng-bind="item.weight"></span></td>
                                                <td><span ng-bind="item.foot"></span></td>
                                                <td><span ng-bind="item.address"></span></td>
                                                <td><span ng-bind="item.phone"></span></td>
                                                <td><span ng-bind="item.sign_date"></span></td>
                                                <td><span ng-bind="item.release_date"></span></td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </section>



            </div>
    <section class="stadium-section white-box" style="background-image: url('assets/img/euro wallpaper.jpg')">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- <section class="inner-box inverse">
                            <header>
                                <h4>Hilight Football</h4></header>
                            <article>
                                <h1 class="text-center">ไฮไลท์ ฟุตบอล</h1>
                                <p class="text-center"><b>จัดเต็มทุกคู่ ทุกนัด ไม่มีพลาด</b></p>
                            </article>
                        </section> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
            </div>
    
  
    
</main>
<!-- End Main/Content section --><!-- Start Footer section -->
<footer class="footer-side">
    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="padding-top: 30px;padding-bottom: 30px">
                    Copyright © 2018
                    <a href="index2.php">Football</a>, All rights reserved
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="./assets/js/jquery-1.10.2.min.js"></script>
<!-- <script src="http://9lookjeab.com/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script> -->

<script src="http://9lookjeab.com/assets/javascripts/libs/bootstrap.min.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/libs/flickity.pkgd.min.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/libs/ion.rangeSlider.min.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/libs/unitegallery.min.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/libs/ug-theme-tiles.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/libs/ug-theme-tilesgrid.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/main.js"></script>
<!-- <script src="./assets/js/main.js"></script> -->
<script src="./assets/js/angular/angular.min.js"></script>
    <script src="./assets/js/angular/angular-cookies.min.js"></script> 
    <script src="./assets/js/core/main_angular.js"></script>
    <script src="./assets/js/fixture.js"></script>



</section></body></html>