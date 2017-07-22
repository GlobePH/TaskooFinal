angular.module('Taskoo', ['ngGeolocation'], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<<');
	$interpolateProvider.endSymbol('>>');
})

.controller('getLocationController', function ($rootScope, $scope, $http, $timeout, $geolocation) {

	$scope.init =  function(){
		$scope.$geolocation = $geolocation
		$geolocation.getCurrentPosition().then(function(location) {
			$scope.location_loader = false;
			$scope.curlocation = location;
			$scope.location = $scope.curlocation.coords.latitude + ", " + $scope.curlocation.coords.longitude;
			console.log("LAT: " + $scope.curlocation.coords.latitude + " LNG:" + $scope.curlocation.coords.longitude)
			$scope.getFormattedAddress($scope.curlocation.coords.latitude, $scope.curlocation.coords.longitude);
		});
	}

	$scope.init();
	$scope.data = [];
	$scope.location_loader = true;
	

	$scope.getFormattedAddress = function(lat, lng){
		var geocoder = new google.maps.Geocoder();
		var latlng = new google.maps.LatLng(lat, lng);
		geocoder.geocode({ 'latLng': latlng }, function (results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				if (results[1]) {
					$scope.location = results[0].formatted_address;
					console.log("FORMATED ADDRESS: " + $scope.location)
					// console.log(results[1].formatted_address)
					// console.log(results[0].address_components[1].long_name)
					console.log("CITY:" + results[2].address_components[1].long_name)
					// console.log(results[2].formatted_address)
					// console.log(results[3].formatted_address)
					// console.log(results[4].formatted_address)
					// console.log(results[5].formatted_address)
					// console.log(results[6].formatted_address)
				} 
			} else {
				console.log("error")
			}
		});
	}

	$scope.convert = function() {
		$scope.data.keyword = angular.uppercase($scope.data.keyword );
	}

	$scope.searchNearby = function(data) {
		// console.log(data)
		$scope.loading = true;
		$scope.result = true;
		$http.post('http://127.0.0.1/SerbisyoPH/public/get/home/result/' + data.keyword)
		.then(function(response) {
			$scope.loading = false;
			$scope.numResult = response.data;
			// console.log(response.data)
		});
	}

	$scope.check = function() {
		if($scope.data.keyword != "" || $scope.data.keyword == null)
			$scope.loading = false;
	}


})