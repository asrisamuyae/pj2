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
                        <h1><a href="index2.php"><img src="./assets/img/CG logo.png" width="200"></a></h1></figure>
                    <a href="http://9lookjeab.com/hilight-goal" class="icon-bag visible-xs"><i class="fa fa-play" aria-hidden="true"></i></a>
                </div>
                <div class="col-sm-9 text-right">
                    <ul class="navbar">
                        <li ><a href="index2.php">หน้าหลัก</a></li>
                        <li class="active" class="dropdown nav-item">
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
                            <li ng-click="academy('U-13')" >
                                <!-- <i class="material-icons">content_paste</i>  -->
                                <span style="color: #333">U-13</span>

                            </li>
                            <li ng-click="academy('U-15')">
                                <!-- <i class="material-icons">content_paste</i> -->
                                <span style="color: #333">U-15</span>

                            </li>
                        </ul>
                    </li>
                        <li ><a ng-click="addplayer()" id="addplayer">เพิ่มนักเตะ</a></li>
                        <li><a ng-click="menu()" >โปรแกรมการแข่งขัน</a></li>
                        <li><a ng-click="menu()" >เพิ่มโปรแกรมการแข่งขัน</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <style>
        .dropdown_menu li:hover{
    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(156, 39, 176, 0.4);
    background-color: #9c27b0;
    color: #FFF !important;
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
         <section class="stadium-section white-box" style="background-image: url('assets/img/euro wallpaper.jpg');height: 30vh;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="inner-box inverse" style="text-align: center;">
                           
                                <div style="    font-weight: 600 !important;
    font-size: 20px;
    font-weight: 600;
    margin-top: 40px;">ACADEMY</div>
                           <!--  <article>
                                <h1 class="text-center">ไฮไลท์ ฟุตบอล</h1>
                                <p class="text-center"><b>จัดเต็มทุกคู่ ทุกนัด ไม่มีพลาด</b></p>
                            </article> -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        body main .stadium-section {
    background-position: center center;
    background-size: cover;
    background-attachment: fixed;
     min-height: 30vh; 
}
    </style>
    <div class="container news-page" style="padding-top: 0;padding-bottom: 10px;">
        
                    <section id="coach" style="display: none2">
                       <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Academy<span ng-bind="class"></span></h4>
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
                                            
                                            <tr ng-repeat="item in academydata">
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
    <!-- <script src="./assets/js/core/main_angular.js"></script> -->


</section>
<script>
    var app = angular.module('myApp', ['ngCookies']);
app.controller('myCtrl', function($scope,$http,$location,$window ,$filter,$cookies,$cookieStore) {

    $scope.test = "TEST";
    $scope.addgoal = false;
    //alert('aaaaa')
    
     redyfucntion();
    console.log($cookies.get("login"))
    function redyfucntion(){
        $scope.err = $location.search().err;
        $scope.data = $location.search().data;
            console.log($scope.data)
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
                      $scope.getUser = res[0].email;
                      console.log($scope.getUser)
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
                            url : 'php/getacademy.php',
                            data: $.param({ 'team_class': $scope.data}),
                            headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    }).success(function(res){
                            console.log(res);
                            $scope.academydata = res;
                            




                    }).error(function(error){
                            console.log(error);
            });
                    $http({
                            method : 'POST',
                            url : 'php/getplayer.php',
                            //data: $.param({name: 1}),
                            headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    }).success(function(res){
                            console.log(res);
                            $scope.detaplayer = res;
                           
                            




                   });
        console.log($cookies.get("login"))
        
        
    }
    $scope.academy = function (x){
         $http({
                            method : 'POST',
                            url : 'php/getacademy.php',
                            data: $.param({ 'team_class':x,'owner':$cookies.get("login")}),
                            headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    }).success(function(res){
                            console.log(res);
                            $scope.academydata = res;
                            




                    }).error(function(error){
                            console.log(error);
            });
              $window.location.href = 'academy.php#?data='+x;
        
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
    $scope.addplayer = function (){
        //alert("aaaa")
        $window.location.href = 'addplayer.php';
    }
    $scope.academyclass = [];
    $scope.checkx = '';
    $scope.changeincre = function(item){
        console.log(item)
        console.log(item.id)
        // $('#showinput'+item.id).css("display", "inline-block");
        // $('#showsave'+item.id).css("display", "inline-block");

        // $('#showedit'+item.id).css("display", "none");
        $scope.goalid = item.id;
        if ($scope.checkx == '' ) {
            console.log('in case null')
            

            $('#showinput'+item.id).css("display", "block");
            $('#showsave'+item.id).css("display", "block");
            $('#showedit'+item.id).css("display", "none");
            $scope.checkx = item.id;
        }
        else if (item.id != $scope.checkx) {
            console.log('in case x==checkx')            
            $('#showinput'+$scope.checkx).css("display", "none");
            $('#showsave'+$scope.checkx).css("display", "none");
            $('#showedit'+$scope.checkx).css("display", "block");

            $('#showinput'+item.id).css("display", "block");
            $('#showsave'+item.id).css("display", "block");
            $('#showedit'+item.id).css("display", "none");
            $scope.checkx = item.id;
        }
        else{
            $('#showinput'+item.id).css("display", "block");
            $('#showsave'+item.id).css("display", "block");
            $('#showedit'+item.id).css("display", "none");
            $scope.checkx = item.id;
        }
        //$scope.addgoal+ = true;
    }

    $scope.saveaddgoal = function(x){

        $('#showinput'+x).css("display", "none");
        $scope.inputgoal = $('#showinput'+x).val();

        $('#showsave'+x).css("display", "none");

        $('#showedit'+x).css("display", "block");

        //$scope.addgoal = false;
        console.log(x)
        console.log($scope.inputgoal)

        $http({
                            method : 'POST',
                            url : 'php/updateGoal.php',
                            data: $.param({ 'id': x
                                ,'goal': $scope.inputgoal
                            }),
                            headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
                    }).success(function(res){
                            console.log(res);
                             angular.forEach($scope.academyclass, function(data){
                                    if (data.id == x) {
                                        data.goal = $scope.inputgoal;
                                        $scope.inputgoal = '';
                                    }
                                });
                            //$window.location.reload();

                     });
    }
    $scope.getacademy = function(x){
        $scope.academyclass = [];
        console.log(x);
        $scope.class = x;
        console.log($scope.academydata);
        for (var i = 0; i < $scope.academydata.length; i++) {
            //console.log($scope.academydata[i]);
            console.log($scope.academydata[i].team_class);
            if(x == $scope.academydata[i].team_class){
                //console.log($scope.academydata)
                
                $scope.academyclass.push($scope.academydata[i]);
                $('#academy').modal('show');
            }
            if(x == 'All'){
                //alert('aaaaa');
                $scope.academyclass.push($scope.academydata[i]);
                $('#academy').modal('show');
            }
        }
        // console.log('======================================================');
        
         // angular.forEach($scope.academyclass, function(data, i){
   //           console.log(data)
   //       });

    }
    
   
    
});
      
</script>
</body></html>