/* Markers */
var mainMarkerIcon = L.icon({
	iconUrl: '/img/markers/marker-icon.png',
	shadowUrl: '/img/markers/marker-shadow.png',
	iconSize: [25, 41], // size of the icon
	shadowSize: [41, 41], // size of the shadow
	iconAnchor: [0, 0], // point of the icon which will correspond to marker's location
	shadowAnchor: [0, 0],  // the same for the shadow
	popupAnchor: [12, 4] // point from which the popup should open relative to the iconAnchor
})

var mymap = L.map('mapid').setView([60, 70], 4)

/* параметры подключения OSM */
var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
var osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'

var osmLayer = L.tileLayer(osmUrl, {
	attribution: osmAttrib, subdomains: ['a', 'b', 'c']
})
/* параметры подключения MapBox */
var mapboxUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}'
var mapboxTokken = 'pk.eyJ1IjoicG9yY2VsYW5vc2EiLCJhIjoiY2o4ZXZqaXMyMHZmZjJ3bWphbm9hcjNyaCJ9.BjHG9NT_xFgYSRBW7aF2Aw'
var mapboxAttrib = 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>'
var mapboxLayer = L.tileLayer(
	mapboxUrl, {
		attribution: mapboxAttrib,
		maxZoom: 18,
		id: 'mapbox.streets',
		accessToken: mapboxTokken
	})
/*var marker = L.marker([60, 70], {icon: mainMarkerIcon}).addTo(mymap);
marker.bindPopup("<b>Hello world!</b><br><a href='http://ya.ru'>Ссылка</a> I am a popup.");
var i =0;
objects.forEach(function (obj, i, arr) {
	L.marker([obj.lat, obj.long],{icon: mainMarkerIcon}).bindPopup(obj.name + "<br><a href='"+obj.url+"'>подробнее</a>").addTo(mymap)
})*/
var mapLayer = mapboxLayer; // osmLayer или mapboxLayer
mymap.addLayer(mapLayer);
var allobjects = L.geoJson(data,
	{
		pointToLayer: function (feature, latlng) {
			return L.marker(latlng, {icon: mainMarkerIcon}).bindPopup(feature.properties.Name).openPopup()
		}
	})
var buisness = L.geoJson(data, {
	filter: function (feature, layer) {
		return (feature.properties.types.indexOf('buisness') >= 0)
	},
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {icon: mainMarkerIcon}).bindPopup(feature.properties.Name).openPopup()
	}
})
var social = L.geoJson(data, {
	filter: function (feature, layer) {
		return (feature.properties.types.indexOf('social') >= 0)
	},
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {icon: mainMarkerIcon}).bindPopup(feature.properties.Name)
	}
})
var education = L.geoJson(data, {
	filter: function (feature, layer) {
		return (feature.properties.types.indexOf('education') >= 0)
	},
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {icon: mainMarkerIcon}).bindPopup(feature.properties.Name)
	}
})
var events = L.geoJson(data, {
	filter: function (feature, layer) {
		return (feature.properties.types.indexOf('events') >= 0)
	},
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {icon: mainMarkerIcon}).bindPopup(feature.properties.Name)
	}
})
var gastronomy = L.geoJson(data, {
	filter: function (feature, layer) {
		return (feature.properties.types.indexOf('gastronomy') >= 0)
	},
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {icon: mainMarkerIcon}).bindPopup(feature.properties.Name)
	}
})
var tourism = L.geoJson(data, {
	filter: function (feature, layer) {
		return (feature.properties.types.indexOf('tourism') >= 0)
	},
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {icon: mainMarkerIcon}).bindPopup(feature.properties.Name)
	}
})
var culture = L.geoJson(data, {
	filter: function (feature, layer) {
		return (feature.properties.types.indexOf('culture') >= 0)
	},
	pointToLayer: function (feature, latlng) {
		return L.marker(latlng, {icon: mainMarkerIcon}).bindPopup(feature.properties.Name)
	}
})
mymap.fitBounds(allobjects.getBounds(), {
	padding: [50, 50]
})
buisness.addTo(mymap)
social.addTo(mymap)
education.addTo(mymap)
events.addTo(mymap)
gastronomy.addTo(mymap)
tourism.addTo(mymap)
culture.addTo(mymap)

$('#choose_all').click(function () {
	removeAllLayers(mymap)
	addAllLayers(mymap)
	mymap.addLayer(allobjects)
	mymap.fitBounds(allobjects.getBounds(), {padding: [50, 50]})
})
$('#choose_business').click(function () {
	removeAllLayers(mymap)
	mymap.addLayer(buisness)
	mymap.fitBounds(buisness.getBounds(), {padding: [50, 50]})
})
$('#choose_social').click(function () {
	removeAllLayers(mymap)
	mymap.addLayer(social)
	mymap.fitBounds(social.getBounds(), {padding: [50, 50]})
})
$('#choose_education').click(function () {
	removeAllLayers(mymap)
	mymap.addLayer(education)
	mymap.fitBounds(education.getBounds(), {padding: [50, 50]})
})
$('#choose_events').click(function () {
	removeAllLayers(mymap)
	mymap.addLayer(events)
	mymap.fitBounds(events.getBounds(), {padding: [50, 50]})
})
$('#choose_gastronomy').click(function () {
	removeAllLayers(mymap)
	mymap.addLayer(gastronomy)
	mymap.fitBounds(gastronomy.getBounds(), {padding: [50, 50]})
})
$('#choose_tourism').click(function () {
	removeAllLayers(mymap)
	mymap.addLayer(tourism)
	mymap.fitBounds(tourism.getBounds(), {padding: [50, 50]})
})
$('#choose_culture').click(function () {
	removeAllLayers(mymap)
	mymap.addLayer(culture)
	mymap.fitBounds(culture.getBounds(), {padding: [50, 50]})
})

function removeAllLayers (mymap) {
	mymap.eachLayer(function (layer) {
		if (layer !== mapLayer) {
			mymap.removeLayer(layer)
		}
	})
}

function addAllLayers (map) {
	map.eachLayer(function (layer) {
		map.addLayer(layer)
	})
}