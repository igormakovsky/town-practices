/* Markers */
var mainMarkerIcon = L.icon({
	iconUrl: '/img/markers/marker-icon.png',
	shadowUrl: '/img/markers/marker-shadow.png',

	iconSize:     [25, 41], // size of the icon
	shadowSize:   [41, 41], // size of the shadow
	iconAnchor:   [0, 0], // point of the icon which will correspond to marker's location
	shadowAnchor: [0, 0],  // the same for the shadow
	popupAnchor:  [12, 4] // point from which the popup should open relative to the iconAnchor
});

var mymap = L.map('mapid').setView([60, 70], 4);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	maxZoom: 18,
	attribution: '',
	id: 'mapbox.streets'
}).addTo(mymap);

/*var marker = L.marker([60, 70], {icon: mainMarkerIcon}).addTo(mymap);
marker.bindPopup("<b>Hello world!</b><br><a href='http://ya.ru'>Ссылка</a> I am a popup.");
var i =0;
objects.forEach(function (obj, i, arr) {
	L.marker([obj.lat, obj.long],{icon: mainMarkerIcon}).bindPopup(obj.name + "<br><a href='"+obj.url+"'>подробнее</a>").addTo(mymap)
})*/

var allobjects = L.geoJson(data);
var buisnes = L.geoJson(data, {
	filter: function(feature, layer) {
		return (feature.properties.types.indexOf("buisness")>=0);
	},
	pointToLayer: function(feature, latlng) {
		return L.marker(latlng, {
			icon: mainMarkerIcon
		}).bindPopup(feature.properties.Name).openPopup();
	}
});
var social = L.geoJson(data, {
	filter: function(feature, layer) {
		return (feature.properties.types.indexOf("social")>=0);
	},
	pointToLayer: function(feature, latlng) {
		return L.marker(latlng, {icon: mainMarkerIcon}).bindPopup(feature.properties.Name);
	}
});
mymap.fitBounds(allobjects.getBounds(), {
	padding: [50, 50]
});
buisnes.addTo(mymap)
social.addTo(mymap)
// The JavaScript below is new
$("#choose_business").click(function() {
	mymap.addLayer(social);
	mymap.removeLayer(buisnes);
	mymap.fitBounds(social.getBounds(), {
		padding: [50, 50]
	});
});
$("#choose_social").click(function() {
	mymap.addLayer(buisnes);
	mymap.removeLayer(social);
	mymap.fitBounds(buisnes.getBounds(), {
		padding: [50, 50]
	});
});
$("#choose_all").click(function() {
	mymap.addLayer(buisnes)
	mymap.addLayer(social)
	mymap.fitBounds(allobjects.getBounds(), {
		padding: [50, 50]
	});
});