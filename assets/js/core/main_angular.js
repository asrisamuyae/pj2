var app = angular.module('myApp', ['ngCookies']);
app.controller('myCtrl', function($scope,$http,$location,$window,$cookies,$cookieStore) {
	$scope.test = "TEST";
	console.log('workk')
	//alert('aaaaa')
	console.log($cookies.get("login"))
	$scope.login = function(){
		//alert('asasa')
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
                 // 	$cookies.put("users", res[0].username); 
                 // }
					var value = $cookies.get("login");
					console.log(value)
                       
                       
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
	 //                        		console.log("login success")
	 //                        	 // $cookieStore.put('dotobject', $scope.lpass);
	 //                        	 // $cookieStore.get('dotobject')
	 //                        }
	 //                        else{
	 //                        	console.log("login fail")

	 //                        }




	 //                }).error(function(error){
	 //                        console.log(error);
	 //        });
	    
	}
	$scope.menu = function (){
		alert("aaaa")
		$('#coach').show()
		$('#hilight').hide()
		$http({
	                        method : 'POST',
	                        url : 'php/getplayer.php',
	                        //data: $.param({name: 1}),
	                        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
	                }).success(function(res){
	                        console.log(res);
	                        $scope.academyclass = res;
	                        for (var i=0;i<= $scope.detaplayer.length; i++) {
	                        	// console.log($scope.detaplayer[i].name)
	                    }
	                        




	               });

	}
	$scope.coach = function (){
		// alert("aaaa")
		$window.location.href = 'coach.php';
	}
	$scope.BALANCE = function (){
		//alert("aaaa")
		$window.location.href = 'coach.php';
	}
	$scope.academy = function (){
		//alert("aaaa")
		$window.location.href = 'academy.php';
	}
	$scope.addplayer = function (){
		//alert("aaaa")
		$window.location.href = 'addplayer.php';
	}
	// $http({
	//                         method : 'POST',
	//                         url : 'php/getdetailcoach.php',
	//                         headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
	//                 }).success(function(res){
	//                         console.log(res);
	//                         $scope.dtaildata = res;
	                        




	//                 }).error(function(error){
	//                         console.log(error);
	//         });
	
});