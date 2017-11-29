function getObjects(obj, key, val) {
    var objects = []
    for (var i in obj) {
        if (!obj.hasOwnProperty(i)) continue
        if (typeof obj[i] == 'object') {
            objects = objects.concat(getObjects(obj[i], key, val))
        } else if (i == key && obj[key] == val) {
            objects.push(obj)
        }
    }
    return objects
}

var t_business = 'business';

var data = {
    type: 'FeatureCollection',
    features: [
        {
            type: 'Feature',
            properties: {
                title: 'Зонтичный бренд Сарапула',
                id: 'sarapul',
                town: 'Сарапул',
                townId: 'sarapul',
                types: ['tourism', 'social', 'culture'],
                img: '',
                descr: 'Город купеческих традиций',
                similiar: ['kolomna']
            },
            geometry: {
                type: 'Point',
                coordinates: [53.803678, 56.461621]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Кластер «Коломенский посад»',
                id: 'kolomna',
                town: 'Коломна',
                townId: 'kolomna',
                types: ['social', 'gastronomy', 'tourism', 'culture'],
                img: '',
                descr: 'Музейно-творческий кластер «Коломенский посад»',
                similiar: ['uglich']
            },
            geometry: {
                type: 'Point',
                coordinates: [38.765224, 55.095240]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Туристский информационный центр Углича',
                id: 'uglich',
                town: 'Углич',
                townId: 'uglich',
                types: ['tourism', 'events'],
                img: '',
                descr: 'Туристский информационный центр Углича',
                similiar: ['sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [38.319372, 57.526592]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Кластер «Фамилия» в Каргополе',
                id: 'kargopol',
                town: 'Каргополь',
                townId: 'kargopol',
                types: ['business', 'social', 'events', 'tourism', 'culture'],
                img: '',
                descr: '«Иллюзия» Старого города. Перекресток времен. Кластер «Фамилия».',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [38.947214, 61.505400]
            }
		},
	]
}
