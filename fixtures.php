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
    
                    <form class="form-inline" method="get" action="http://9lookjeab.com/search" style="margin: auto;">
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
                        <li class="active"><a href="index2.php">หน้าหลัก</a></li>
                      <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                             อคาเดมี่
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons dropdown_menu">
                            <li ng-click="academy('U-9')" >
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

                            </li>
                            <li ng-click="academy('U-15')">
                                <!-- <i class="material-icons">content_paste</i> -->
                                <span style="color: #333">U-15</span>

                            </li>
                        </ul>
                    </li>
                        <li class="active"><a href="addplayer.php"./">เพิ่มนักเตะ</a></li>

                        <li class="active"><a href="fixtures.php"./">โปรแกรมการแข่งขัน</a></li>

                        <li class="active"><a href="addfixtures.php"./">เพิ่มโปรแกรมการแข่งขัน</a></li>
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
.dropdown_menu li{
    display: block !important;
    
}
</style>
</header><!-- Start Main/Content section -->

<style>
    .search-section .btn-search{
        left: 100px !important
    }
</style>
<main>
    <div class="container news-page" style="padding-top: 0;padding-bottom: 10px;">
        
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
            <div class="card-content" style="">
            <div class="row">
                <div class="form-group form-inline">
                                                <label class="control-label col-md-2" id="label-addfixtures">Academy</label>
                                                <select class="form-control" id="position" ng-model="sendclass" ng-change="changeclassteam(sendclass)" data-ng-options="i as i.class for i in dataclass" style="    width: 155px">
                                                    <option value="">- none -</option>            
                                                    <!-- <option ng-value="i.position">{{i.position}}</option>             -->
                                                   </select>
                                                <!-- <input type="text" class="form-control" size="100" ng-model="team"> -->
                                            </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr  ng-repeat="item in datafinal" >
                            <td style="border: solid 1px #E0E0E0;padding: 20px">
                                <table width="100%">
                                    <tr >
                                        <td>
                                            <table width="100%" >
                                                <tr>
                                                    <td align="center" width="24">
                                                        
                                                    </td>
                                                    <td align="">
                                                        
                                                        <span style="margin-left: 15px" ng-bind="item.teamhome"></span>

                                                    </td>
                                                </tr>
                                                
                                            </table>
                                        </td>
                                       
                                    </tr>
                                </table>
                            </td>

                                <td style="border: solid 1px #E0E0E0;padding: 20px">
                                <table width="100%">
                                    <tr>
                                        <td style="">
                                            <table width="100%" >
                                                <tr>
                                                    <td align="center" width="24">
                                                        
                                                    </td>
                                                    
                                                        <td>VS</td>
                                                        
                                                </tr>
                                            </table>
                                        </td>
                                       
                                    </tr>
                                </table>
                            </td>


                            <td style="border: solid 1px #E0E0E0;padding: 20px">
                                <table width="100%">
                                    <tr>
                                        <td style="">
                                            <table width="100%" >
                                                <tr>
                                                    <td align="center" width="24">
                                                        
                                                    </td>
                                                    <td align="">
                                                        
                                                        <span style="margin-left: 15px" ng-bind="item.teamaway"></span>
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                       
                                    </tr>
                                </table>
                            </td>

                            <td >
                                            <table width="100% ">
                                                <tr>
                                                    <td align="center" ng-bind="item.dates"></td>
                                                </tr>
                                                <tr>
                                                    <td align="center" ng-bind="item.timed"></td>
                                                </tr>
                                                <tr>
                                                    <td align="center" ng-bind="item.class"></td>
                                                </tr>
                                            </table>
                            </td>

                        </tr>
                       
                       
                    </table>
                </div>
            
                
                
                
            </div>
                                    
                                    
        </div>
        </div>
    
  
    
</main>
<!-- End Main/Content section --><!-- Start Footer section -->
<footer class="footer-side">
    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="padding-top: 30px;padding-bottom: 30px">
                    Copyright © 2018
                    <a href="https://9lookjeab.com">Football</a>, All rights reserved
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
    <!-- <script src="./assets/js/core/main_angular.js"></script> -->


</section>
<script>
 var app = angular.module('myApp', ['ngCookies']);
app.controller('myCtrl', function($scope,$http,$location,$window,$filter,$cookies,$cookieStore) {
    $scope.test = "TEST";
    //alert('aaaaa')
    var today = new Date();
    var date =  new Date(today.getFullYear()+'-'+(today.getMonth()+1)+'-1');
    // $scope.birthday = date;
    $scope.dataposition = [{position:'GK'},{position:'CB'},{position:'RB'},{position:'LB'},{position:'DMF'},{position:'CMF'},{position:'LMF'},{position:'AMF'},{position:'RW'},{position:'LW'},{position:'SS'},{position:'CF'}];
    $scope.datafoot = [{foot:'Right'},{foot:'Left'},{foot:'Both'}];
    console.log($scope.datafoot)
    console.log($scope.dataposition)
    console.log($scope.birthday)
    $scope.datafinal = [];
    
    $scope.home = true;
    $scope.away = false;
    $scope.txcheck = 'home';
    redyfucntion();
    console.log($cookies.get("login"))
    function redyfucntion(){
        //alert('asasa')
         if ($cookies.get("login") == undefined) {
             $scope.btn_login_yes = {
                        "display" : " none",
                        
                      }
                       $scope.btn_login_no = {
                        "display" : "inline-block",
                        
                      }
        }
        $http({
                method : 'POST',
                url : "php/gitCoachbyid.php",
                data: $.param({'id': $cookies.get("login")}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 console.log(res[0].username)
                 if (res != 0) {
                     
                   $scope.btn_login_yes = {
                        "display" : " inline-block",
                        
                      }
                       $scope.btn_login_no = {
                        "display" : "none",
                        
                      }
                      $scope.my_team = res[0].team_name;
                      $scope.getUser = res[0].email;
                      $scope.idhome = res[0].team_id;
                      console.log($scope.getUser)
                      $scope.dataallteam = [];
                      $http({
                            method : 'POST',
                            url : "php/getFixtures.php",
                            data: $.param({'owner': $cookies.get("login")}),
                            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            }).success(function(res){
                             console.log(res)
                            $scope.datafixtures = res;
                            angular.forEach($scope.datafixtures, function(value, key){
                                  if(value.class == 'U-15'){

                                     $scope.datafinal.push(value)
                                  }
                               });
                             
                            
                            
                                   
                                   
                        });
                }
                 else{
                    //$window.location.href = 'index.php';
                 }
                 // if (res[0].username =='admin') {
                 //     $cookies.put("users", res[0].username); 
                 // }
                    var value = $cookies.get("login");
                    console.log(value)
                       
                       
            });
                $http({
                            method : 'POST',
                            url : 'php/getClassteam.php',
                            // data: formData,
                            headers : {'Content-Type': 'application/x-www-form-urlencoded'}  

                    }).success(function(res){
                        $scope.dataclass = res;
                        console.log($scope.dataclass)
                    });
        console.log($cookies.get("login"))
        // $scope.username = $scope.user;
        // $scope.password = $scope.pass;
        // console.log($scope.username)
        // console.log($scope.password)
        
     //    var formData = { username: $scope.username, password : $scope.password };
                    
     //                $http({
     //                        method : 'POST',
     //                        url : 'php/connect.php',
     //                        data: formData,
     //                        headers : {'Content-Type': 'application/x-www-form-urlencoded'}  

     //                }).success(function(res){
     //                        console.log(res);
     //                        $scope.lpass = res.password;
     //                        $scope.luser = res.username;
     //                        console.log($scope.lpass);
     //                        console.log($scope.luser);
     //                        if ($scope.luser == $scope.username && $scope.lpass == $scope.password) {
     //                             console.log("login success")
     //                          // $cookieStore.put('dotobject', $scope.lpass);
     //                          // $cookieStore.get('dotobject')
     //                        }
     //                        else{
     //                         console.log("login fail")

     //                        }




     //                }).error(function(error){
     //                        console.log(error);
     //        });
        
    }
    $scope.chhome = function (x){
       
        console.log(x)
        if ( x=='home') {
            $scope.home = true;
            $scope.away = false;


        }
        else{
            $scope.away = true;
            $scope.home = false;


        }
        $scope.txcheck = x;
       
        

    }
    // ****************************************************************************
    $scope.changeclassteam = function(x){
        console.log(x)
        $scope.datafinal = [];
        angular.forEach($scope.datafixtures, function(value, key){
                                  if(value.class == x.class){

                                     $scope.datafinal.push(value)
                                  }
                               });

    }
    // *******************************************************************
    $scope.changeClass = function (x){
        $scope.idclass = x.class;
        console.log(x)
        console.log( $scope.idclass)
        

    }
    $scope.changeAwayteam = function (x){
        $scope.idaway = x.id;
        console.log(x)

        

    }
    $scope.login = function (){
        if ($cookies.get("login") == undefined) {
              $window.location.href = 'login.php';
        }
    }
    $scope.logout = function (){
        $cookies.remove("login");
              $window.location.href = 'login.php';

    }
    $scope.academy = function (x){
        console.log(x)
              $window.location.href = 'academy.php#?data='+x;
        
    }
    $http({
                            method : 'POST',
                            url : 'php/getClassteam.php',
                            // data: formData,
                            headers : {'Content-Type': 'application/x-www-form-urlencoded'}  

                    }).success(function(res){
                        $scope.dataclass = res;
                        console.log($scope.dataclass)
                    });
    $scope.logo = function(){
        $window.location.href = 'index.php';
    }
    $scope.changename = function(x){
        $scope.cname = x;
        console.log($scope.cname)
    }
    $scope.changePosition = function(x){
        console.log(x)
        $scope.position = x;
        console.log($scope.position)
    }
    $scope.changeFoot = function(x){
        console.log(x)
        $scope.foot = x;
        console.log($scope.foot)
    }
    // $scope.changeClass = function(x){
    //     console.log(x)
    //     $scope.team = x.class;
    //     console.log($scope.team)
    // }
    $scope.saveaddfixtures = function(){
       
        var date =  $filter('date')(new Date($scope.date), 'yyyy-MM-dd');
        // var sign_date =  $filter('date')(new Date($scope.sign_date), 'dd-MM-yyyy');
        // var release_date =  $filter('date')(new Date($scope.release_date), 'dd-MM-yyyy');
        // var birthday =  $filter('date')(new Date($scope.birthday), 'dd-MM-yyyy');
        
        //$scope.birthday = 
        console.log(date)
        console.log($scope.idaway)
        console.log($scope.idclass)
        
        
        console.log($scope.timed)
        console.log($scope.home)
        console.log($scope.away)
       
        var finalhome,finalaway;
        if ($scope.txcheck == 'home') {
            finalhome = $scope.idhome;
            finalaway = $scope.idaway;
        }
        else {
            finalhome = $scope.idaway;
            finalaway = $scope.idhome;
        }
        
        console.log(finalhome)
        console.log(finalaway)

        $http({
                            method : 'POST',
                            url : 'php/addFixtures.php',
                            data: $.param({ 'away': finalaway
                                , 'home': finalhome
                                , 'date': date
                                , 'class': $scope.idclass
                                , 'timed': $scope.timed
                                , 'owner': $cookies.get("login")
                            }),
                            headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    }).success(function(res){
                            console.log(res);
                            if (res == 1) {
                                    $window.location.href = 'fixtures.php';
                            }
                            else{
                                alert('err')
                            }
                        });
                           
                            




    }
    // $scope.academyclass = [];
    // $scope.getacademy = function(x){
    //  $scope.academyclass = [];
    //  console.log(x);
    //  $scope.class = x;
    //  console.log($scope.academydata);
    //  for (var i = 0; i < $scope.academydata.length; i++) {
    //      //console.log($scope.academydata[i]);
    //      console.log($scope.academydata[i].team_class);
    //      if(x == $scope.academydata[i].team_class){
    //          //console.log($scope.academydata)
                
    //          $scope.academyclass.push($scope.academydata[i]);
    //          $('#academy').modal('show');
    //      }
    //      if(x == 'All'){
    //          //alert('aaaaa');
    //          $scope.academyclass.push($scope.academydata[i]);
    //          $('#academy').modal('show');
    //      }
    //  }
    //  // console.log('======================================================');
        
    //   // angular.forEach($scope.academydata, function(data, i){
 //   //            console.log(data)
 //   //        });

    // }
    
//  $http({
//                          method : 'POST',
//                          url : 'php/getacademy.php',
//                          //data: $.param({ 'classs': "U-9"}),
//                          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
//                  }).success(function(res){
//                          console.log(res);
//                          $scope.academydata = res;
                            




//                  }).error(function(error){
//                          console.log(error);
//          });
    
});
</script>

</body></html>