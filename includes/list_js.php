<script src="/js/list.min.js"></script>
<script>
	var practicesListArray = [];
	for (i = 0; i < data.features.length; i++) {
		practicesListArray.push(
			{
                name: data.features[i].properties.name,
                city: data.features[i].properties.townName,
		        link: '/practices/'+data.features[i].properties.id
			}
			)
	}
	var options = {
		valueNames: [
			'name',
            'townName',
			{ attr: 'href', name: 'link' }
		],
		//item: '<li><h3 class="properties.Name"></h3><p class="properties.Description"></p></li>'
		item: '<li><a href="" class="link name"></a><p style="display: none;" class="townName"></p> </li>'
	}

	//var values = data

	var practicesList = new List('practices', options, practicesListArray)
</script>