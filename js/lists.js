var practicesListArray = []
for (i = 0; i < data.features.length; i++) {
    practicesListArray.push({
        title: data.features[i].properties.title,
        town: data.features[i].properties.town,
        link: '/practices/' + data.features[i].properties.id,
        id: data.features[i].properties.id,
        types: data.features[i].properties.types.join(' ')
    })
}
$(document).ready(function () {
    var options = {
        valueNames: [
				'title',
				'town',
            {
                attr: 'href',
                name: 'link'
            },
            {
                data: ['id']
            }
			],
        item: '<li><a href="" class="title"></a><p style="display: none;" class="town"></p> </li>'
    }
    var practicesMenuList = new List('practices', options, practicesListArray)
    practicesMenuList.on('updated', function (list) {
        var i = 0;
        //every updated item take animation with their id
        list.matchingItems.forEach(function (element) {
            i += .05
            var id = $(element.elm).data('id')
            $('#practices li[data-id="' + id + '"]').css('animation-delay', (i) + 's')
            $('#practices li[data-id="' + id + '"]').addClass('animated fadeIn')
        })
    })    
})
