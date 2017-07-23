var mapObj;
$(document).ready(function(){
	var latitude;
	var longitude;
	var currentLocation;

	mapObj = new GMaps({
		el: '#map',
		lat: 48.857,
		lng: 2.295,
		zoom: 17,
	});

	GMaps.geolocate({
		success: function(position) {
			mapObj.setCenter(position.coords.latitude, position.coords.longitude);
			getFormattedAddress(position.coords.latitude, position.coords.longitude);
			console.log('lat:' + position.coords.latitude + " lng:" + position.coords.longitude)
			$('#currentLatLng').html(position.coords.latitude + ", " + position.coords.longitude);
			$('#loaderLatLng').hide();
			// window.localStorage.setItem('lat', position.coords.latitude);
			// window.localStorage.setItem('lng', position.coords.longitude);

			mapObj.addMarker({
				lat: position.coords.latitude,
				lng: position.coords.longitude,
				infoWindow: {
					content: '<h4>Your location</h4><div></div>',
					maxWidth: 100
				},
				icon: 'https://image.flaticon.com/icons/png/32/34/34343.png',
				mouseout: function(){
					this.infoWindow.open();
				}
			});

			mapObj.drawCircle({
				lat: position.coords.latitude,
				lng: position.coords.longitude,
				radius: 300,
				fillColor: '#282828',
				fillOpacity: 0.5,
				strokeWeight: 0,
				click: function(e){
					
				}
			});
		},
		error: function(error) {
			alert('Geolocation failed: ' + error.message);
		},
		not_supported: function() {
			alert("Your browser does not support geolocation");
		}
	});

	mapData('ALL');
	// var locations = [
	// ['Kidzania Manila', 14.5534, 121.0547, 4],
	// ['Market Market', 14.5498, 121.0552, 4],
	// ['The Mind Museum', 14.5521, 121.0455, 5],
	// ['Alexis Lingad', 14.5507, 121.0414, 3],
	// ['Damien Magdangal', 14.552195, 121.048341, 3],
	// ['Anjo Tuban', 14.554795, 121.048470, 3],
	// ['Anjo Tuban', 14.550306, 121.052594, 3],
	// ];
	// // getDistance(14.5498,121.0552,14.5534,121.0547);

	// for (i = 0; i < locations.length; i++) {
	// 	mapObj.addMarker({
	// 		lat: locations[i][1],
	// 		lng: locations[i][2],
	// 		icon: 'https://image.flaticon.com/icons/png/32/34/34343.png',
	// 		infoWindow: {
	// 			content: '<h4>Mechanic</h4><div><center><button type="button" class="btn" data-toggle="modal" data-target="#myModal">View</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn" >Hire</button></center></div>',
	// 			maxWidth: 150
	// 		},
	// 		mouseover: function(){
	// 			this.infoWindow.open();
	// 		},
	// 		mouseover: function(e) {
	// 			getDistance(14.5498,121.0552,14.5534,121.0547);
	// 		}
	// 	});
	// }

	// mapObj.drawRoute({
	// 	origin: [141.5521, 121.0445],
	// 	destination: [14.5507, 121.0414],
	// 	travelMode: 'driving',
	// 	strokeColor: '#131540',
	// 	strokeOpacity: 0.6,
	// 	strokeWeight: 6
	// });
	// map.addMarker({
	// 	lat: latlng[0],
	// 	lng: latlng[1],
	// 	title: 'Development',
	// 	click: function(e) {
	// 	},
	// 	infoWindow: {
	// 		content: "<b>Name:</b>" + name + "<br /><b>Address:</b>" + address
	// 	},
	// 	icon: $this.data('icon')
	// });

});

function getFormattedAddress(lat, lng){
	latitude = lat;
	longitude = lng;

	console.log(latitude + "hello")
	var geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(lat, lng);
	geocoder.geocode({ 'latLng': latlng }, function (results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			if (results[1]) {
				var location = results[1].formatted_address;
				currentLocation = location;
				$('#loader').hide();
				$('#currentLocation').html(currentLocation);
				console.log("FORMATED ADDRESS: " + location)
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

function getDistance(fromLat, fromLng, toLat, toLng){
	var from = new google.maps.LatLng(fromLat, fromLng);
	var fromName = '';
	var dest = new google.maps.LatLng(toLat, toLng);
	var destName = '';
	var value;
	console.log(latitude + "hello")

	var service = new google.maps.DistanceMatrixService();
	service.getDistanceMatrix(
	{
		origins: [from],
		destinations: [dest],
		travelMode: 'DRIVING'
	}, callback);

	function callback(response, status) {
		if (status == 'OK') {
			var origins = response.originAddresses;
			var destinations = response.destinationAddresses;
			for (var i = 0; i < origins.length; i++) {
				var results = response.rows[i].elements;
				// console.log(results);
				var element = results[0];
				var distance = element.distance.text;
				var duration = element.duration.text;

				var  distanceInMeters = element.distance.value;
				value = distance + " | " + duration + " | " + distanceInMeters + " m";
				// console.log(value)
			}

			// return value;

		}
		console.log(value)

	}
}

function mapData(type) {
	mapObj.removeMarkers();
	var urlSearch = url + 'customer/search/' + type;
	$.post(urlSearch, {_token:token})
	.done(function(data){
		if(data != ""){
			// swal("Your lucky!", "Someones offering this kind of service here :)", "success")
			$.each(data,function(thread,details){
				// var icon = url + '/img/' + details.profile.prof_pic;
				var icon = {
				    url:  url + '/img/' + details.profile.prof_pic, // url
				    scaledSize: new google.maps.Size(35, 35), // scaled size
				};
				mapObj.addMarker({
					lat: details.location.latitude,
					lng: details.location.longitude,
					icon: icon,
					infoWindow: {
						content: '<center><h4>'+ details.worker.first_name + " " + details.worker.last_name +'<br><i class="fa fa-user"></i>' + details.profile.primary_skill+ '</h4></center><div><center><button type="button" class="btn btn-info flat" data-toggle="modal" data-target="#myModal">View Profile</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onClick="hireWorker(\''+ details.worker.id + "','" +details.worker.first_name +'\')" class="btn  btn-success flat" >Hire '+details.worker.first_name +'</button></center></div>',
						width: 550
					},
					mouseover: function(){
						this.infoWindow.open();
					},
					mouseover: function(e) {
						getDistance(14.5498,121.0552,14.5534,121.0547);
					}
				});
			});
		}	

		
	})
	.fail(function(){
		console.log("Error ..");
	});
}

function hireWorker(id,name){
	swal({
		title: "Are you sure?",
		text: "Do you want to hire " + name + "?",
		type: "info",
		showCancelButton: true,
		confirmButtonClass: "success",
		confirmButtonText: "Yes, send also a message.",
		closeOnConfirm: false
	},
	function(){
		var urlSendMessage = url + 'customer/notify/' + id;
		$.post(urlSendMessage, {_token:token})
		.done(function(data){
			console.log(data)
			swal("Notified!", name + " was notified. Please wait for the worker\'s reply. Thank you!", "success");
		})
		.fail(function(){
			swal("Ooooops!", name + " was not notified. Please try again later.", "error");
		});
	});
}

function addAmount(id) {
	var amount = $('#amount_' + id).val();
	swal({
		title: "Are you sure?",
		text: "Do you want to add " + amount + " to this service?",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "success",
		confirmButtonText: "Yes",
		closeOnConfirm: false
	},
	function(){
		var urlAdd = url + 'customer/add_amount';
		$.post(urlAdd, {_token:token, amount:amount, id:id})
		.done(function(data){
			console.log(data)
			swal("Success!", "Amount was successfully added. Thank you!", "success");
			location.reload();
		})
		.fail(function(){
			swal("Ooooops!", "Please try again later.", "error");
		});
	});
}

function deletePending(id) {
	swal({
		title: "Are you sure?",
		text: "Do you want to delete this pending service?",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "success",
		confirmButtonText: "Yes",
		closeOnConfirm: false
	},
	function(){
		var urlDelete = url + 'customer/delete_pending';
		$.post(urlDelete, {_token:token, id:id})
		.done(function(data){
			console.log(data)
			swal("Success!", "Request was successfully deleted.", "success");
			// location.reload();
		})
		.fail(function(){
			swal("Ooooops!", "Please try again later.", "error");
		});
	});
}

function makeActive(id) {
	swal({
		title: "Are you sure?",
		text: "Do you want to activate this pending service? By accepting this, you and the worker both agreed at the transcation details otherwise this will be invalid.",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "success",
		confirmButtonText: "Yes",
		closeOnConfirm: false
	},
	function(){
		var urlDelete = url + 'customer/make_active';
		$.post(urlDelete, {_token:token, id:id})
		.done(function(data){
			console.log(data)
			swal("Success!", "Service was successfully started.", "success");
			location.reload();
		})
		.fail(function(){
			swal("Ooooops!", "Please try again later.", "error");
		});
	});
}

function moveToFinish(id) {
	var rating = $('#rating_' + id).val();
	console.log(rating)
	swal({
		title: "Are you sure?",
		text: "Are you sure you want to move this service to finish?",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "success",
		confirmButtonText: "Yes",
		closeOnConfirm: false
	},
	function(){
		var urlDelete = url + 'customer/move_finish';
		$.post(urlDelete, {_token:token, id:id, rating:rating})
		.done(function(data){
			console.log(data)
			swal("Success!", "Service was successfully done.", "success");
			location.reload();
		})
		.fail(function(){
			swal("Ooooops!", "Please try again later.", "error");
		});
	});
}
