$(document).ready(function(){

	var mapObj = new GMaps({
		el: '#map',
		lat: 48.857,
		lng: 2.295,
		zoom: 18,
	});

	GMaps.geolocate({
		success: function(position) {
			mapObj.setCenter(position.coords.latitude, position.coords.longitude);
			console.log('lat:' + position.coords.latitude + " lng:" + position.coords.longitude)
			window.localStorage.setItem('lat', position.coords.latitude);
			window.localStorage.setItem('lng', position.coords.longitude);

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
					alert('You are inside 300m radius of Stonehenge')
				}
			});
			getFormattedAddress(position.coords.latitude, position.coords.longitude);
		},
		error: function(error) {
			alert('Geolocation failed: ' + error.message);
		},
		not_supported: function() {
			alert("Your browser does not support geolocation");
		}
	});

	var locations = [
	['Kidzania Manila', 14.5534, 121.0547, 4],
	['Market Market', 14.5498, 121.0552, 4],
	['The Mind Museum', 14.5521, 121.0455, 5],
	['Alexis Lingad', 14.5507, 121.0414, 3],
	];
	// getDistance(14.5498,121.0552,14.5534,121.0547);

	for (i = 0; i < locations.length; i++) {
		mapObj.addMarker({
			lat: locations[i][1],
			lng: locations[i][2],
			icon: 'https://image.flaticon.com/icons/png/32/34/34343.png',
			mouseover: function(e) {
				getDistance(14.5498,121.0552,14.5534,121.0547);
			}
		});
	}

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

	console.log(window.localStorage.getItem('lng'));
});




function getFormattedAddress(lat, lng){
	latitude = lat;
	longitude = lng;


	var geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(lat, lng);
	geocoder.geocode({ 'latLng': latlng }, function (results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			if (results[1]) {
				var location = results[0].formatted_address;
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

function confirmTransac(id) {
	swal({
		title: "Are you sure?",
		text: "Are you sure you want to close this service to finish?",
		type: "warning",
		showCancelButton: true,
		confirmButtonClass: "success",
		confirmButtonText: "Yes",
		closeOnConfirm: false
	},
	function(){
		var urlDelete = url + 'worker/move_finish';
		$.post(urlDelete, {_token:token, id:id})
		.done(function(data){
			console.log(data)
			swal("Success!", "Transaction was successfully closed.", "success");
			location.reload();
		})
		.fail(function(){
			swal("Ooooops!", "Please try again later.", "error");
		});
	});
}
