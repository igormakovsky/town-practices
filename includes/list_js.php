<script src="/js/list.min.js"></script>
<script src="/js/mustache.min.js"></script>
<script>
	var practicesListArray = [];
	for (i = 0; i < data.features.length; i++) {
		practicesListArray.push(
			{
                name: data.features[i].properties.name,
                city: data.features[i].properties.townName,
		        link: '/practices/'+data.features[i].properties.id,
		        id: data.features[i].properties.id,
                types: data.features[i].properties.types.join(' ')
			}
			)
	}
	var options = {
		valueNames: [
			'name',
            'townName',
			{ attr: 'href', name: 'link' }
		],
		item: '<li><a href="" class="link name"></a><p style="display: none;" class="townName"></p> </li>'
	}
	var practicesList = new List('practices', options, practicesListArray)
 
 
	/*var options2 = {
		valueNames: [
			'name',
            'townName',
			{ attr: 'href', name: 'link' },
			{ attr: 'id', name: 'id' },
			{ attr: 'class', name: 'types' }
		],
		item: '<div class="list_card id types"><p><a href="" class="link name"></a></p></div>'
	}
	var practicesList2 = new List('practicesList', options2, practicesListArray)*/

</script>
<script id="template" type="x-tmpl-mustache">
{{#practices}}
<div class="list_card {{id}} {{types}}"><p><a href="{{link}}" class="">{{name}}</a></p></div>
{{/practices}}
</script>
<script>
$(document).ready(function () {
	var template = $('#template').html();
	Mustache.parse(template);   // optional, speeds up future uses
	var output = Mustache.render(template, {practices:practicesListArray});
	document.getElementById('practicesList').innerHTML = output;
})
</script>