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
<body  ng-app="myApp" ng-controller="login">
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
    text-align: center;">Login</div>
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
                        <h1><a href="./"><img src="./assets/img/logo.png" width="160"></a></h1></figure>
                    <a href="http://9lookjeab.com/hilight-goal" class="icon-bag visible-xs"><i class="fa fa-play" aria-hidden="true"></i></a>
                </div>
                <div class="col-sm-9 text-right">
                    <ul class="navbar">
                        <li class="active"><a href="./">หน้าหลัก</a></li>
                        <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                             อคาเดมี่
                        </a>
                        <ul class="dropdown-menu dropdown-with-icons dropdown_menu">
                            <li  >
                                <!-- <i class="material-icons">content_paste</i> -->
                                <span style="color: #333">U-9</span> 
                            </li>
                            <li  >
                                 
                                <!-- <i class="material-icons">content_paste</i> -->
                                <span style="color: #333">U-11</span>
                            </li>
                            <li  >
                                <!-- <i class="material-icons">content_paste</i>  -->
                                <span style="color: #333">U-13</span>

                            </li>
                            <li >
                                <!-- <i class="material-icons">content_paste</i> -->
                                <span style="color: #333">U-15</span>

                            </li>
                        </ul>
                    </li>
                        <li><a onclick="menu()" >เพิ่มนักเตะ</a></li>
                        <li><a href="http://9lookjeab.com/hilight-full">โปรแกรมการแข่งขัน</a></li>
                        <li><a href="http://9lookjeab.com/table-score">เพิ่มโปรแกรมการแข่งขัน</a></li>
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
    </style>
}
</header><!-- Start Main/Content section -->
<script >
    function menu() {
        $('#hilight').hide()
        $('#hilight').show()
</script>
<style>
    .search-section .btn-search{
        left: 100px !important
    }
</style>
<main>
    <div class="container">
        <div class="row">
            <input type="" name="" ng-model="email">
            <input type="" name="" ng-model="password">
            <!-- <input type="" name="" ng-model="email"> -->
           
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
<script src="https://www.welovetaxi.com/app/booking2/files/js/jquery.min.js"></script>
<!-- <script src="http://9lookjeab.com/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script> -->

<script src="http://9lookjeab.com/assets/javascripts/libs/bootstrap.min.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/libs/flickity.pkgd.min.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/libs/ion.rangeSlider.min.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/libs/unitegallery.min.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/libs/ug-theme-tiles.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/libs/ug-theme-tilesgrid.js"></script>

<script src="http://9lookjeab.com/assets/javascripts/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-cookie/4.1.0/angular-cookie.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-cookie/4.1.0/angular-cookie.min.js"></script>
    <script src="./assets/js/core/main_angular.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!-- <script src="./assets/js/main.js"></script> -->


</section></body></html>
<script>
    var app = angular.module("myApp", ['ngCookies']);

app.controller("login",  function($scope,$location,$http,$window,$cookies) {
        if ($cookies.get("login") == undefined) {
            $window.location.href="login.php";
        }
        $http({
                method : 'POST',
                url : "php/getUsers.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 console.log(res[0].username)
                 if ($cookies.get("login") == undefined) {
                     
                   // $window.location.href = 'login.php';
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
    $scope.login = function(){


        $http({
                method : 'POST',
                url : "php/login.php",
                //data: $.param({sv: $scope.dataSV}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(res){
                 console.log(res)
                 console.log(res[0].username)
                 if ($cookies.get("users") == undefined) {
                     
                    //$window.location.href = 'login.php';
                 }
                 else{
                    //$window.location.href = 'index.php';
                 }
                 // if (res[0].username =='admin') {
                 //     $cookies.put("users", res[0].username); 
                 // }
                    var value = $cookies.get("users");
                    console.log(value)
                       
                       
            });

        //$scope.
    }
    $scope.getNewproduct = function(){
        $window.location.href = 'new.php';
    }
});
</script>