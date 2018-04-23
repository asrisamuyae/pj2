var app = angular.module('myApp', ['ngCookies']);
app.controller('myCtrl', function($scope,$http,$location,$window,$cookies,$cookieStore) {	
	console.log($cookies.get("login"))
	//alert('aaaaa')
	redyfucntion();
	
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
					  $scope.getUser = res[0].email;
					  console.log($scope.getUser)
				}
                 else{
                 	//$window.location.href = 'index.php';
                 }
					
            });
		
		
	}
	$scope.academy = function (x){
		console.log(x)
              $window.location.href = 'academy.php#?data='+x;
        
	}
	$scope.login = function (){
		if ($cookies.get("login") == undefined) {
              $window.location.href = 'login.php';
        }
	}
	$scope.logout = function (){
		$cookies.remove("login");
              $window.location.reload()

	}
	$scope.addplayer = function (){
		//alert("aaaa")
		$window.location.href = 'addplayer.php';
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
	
	$scope.addplayer = function (){
		//alert("aaaa")
		$window.location.href = 'addplayer.php';
	}
	$scope.fixtures = function (){
		//alert("aaaa")
		$window.location.href = 'fixtures.php';
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