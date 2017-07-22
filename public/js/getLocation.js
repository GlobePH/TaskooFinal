$(document).ready(function(){	
	GMaps.geolocate({
		success: function(position) {
			console.log('lat:' + position.coords.latitude + " lng:" + position.coords.longitude);
			$('#w_lat').val(position.coords.latitude);
			$('#w_lat1').val(position.coords.latitude);
			$('#w_lng').val(position.coords.longitude);
			$('#w_lng1').val(position.coords.longitude);
			getFormattedAddress(position.coords.latitude, position.coords.longitude);
		},
		error: function(error) {
			alert('Geolocation failed: ' + error.message);
		},
		not_supported: function() {
			alert("Your browser does not support geolocation");
		}
	});
});

function getFormattedAddress(lat, lng){
	var geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(lat, lng);
	geocoder.geocode({ 'latLng': latlng }, function (results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			if (results[1]) {
				var location = results[1].formatted_address;
				var city = results[2].address_components[1].long_name;
				$('#address').val(location);
				$('#address1').val(location);
				// console.log("FORMATED ADDRESS: " + location)
				// console.log(results[1].formatted_address)
				console.log(results[0].address_components)
				console.log("CITY:" + results[2].address_components[1].long_name)
				$('#city').val(city);
				$('#city1').val(city);

				// console.log(results[2].formatted_address)
				// console.log(results[3].formatted_address)
				// console.log(results[4].formatted_address)
				// console.log(results[5].formatted_address)
				// // console.log(results[6].formatted_address)
				// for (var i = 0; i < results[7].address_components.length; i++) {
				// 	for (var j = 0; j < results[7].address_components[i].types.length; j++) {
				// 		if (results[7].address_components[i].types[j] == "postal_code") {
				// 			console.log(place.address_components[i].long_name);

				// 		}
				// 	}
				// }
			} 
		} else {
			console.log("error")
		}
	});
}