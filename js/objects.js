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
                title: 'Разработка зонтичного бренда города',
                id: 'sarapul',
                town: 'Сарапул',
                townId: 'sarapul',
                types: ['tourism', 'social', 'culture'],
                img: '',
                descr: 'Разработка зонтичного бренда города',
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
                title: 'Музейно-творческий кластер «Коломенский посад»',
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
                title: 'Первый в Ярославской области Туристско-информационный центр',
                id: 'uglich',
                town: 'Углич',
                townId: 'uglich',
                types: ['tourism', 'events'],
                img: '',
                descr: 'Первый в Ярославской области Туристско-информационный центр',
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
                title: 'От «Иллюзии Старого города» к кластеру «Фамилия»',
                id: 'kargopol',
                town: 'Каргополь',
                townId: 'kargopol',
                types: ['business', 'social', 'events', 'tourism', 'culture'],
                img: '',
                descr: 'От «Иллюзии Старого города» к кластеру «Фамилия»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [38.947214, 61.505400]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Возрождение гуслицкой росписи «Провинциальный эксперимент»',
                id: 'egorievsk',
                town: 'Егорьевск',
                townId: 'egorievsk',
                types: ['social', 'tourism', 'culture'],
                img: '',
                descr: 'Возрождение гуслицкой росписи «Провинциальный эксперимент»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [39.035833, 55.383050]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Тема шляп как основа развития туристического кластера ',
                id: 'vyatskie-polyany',
                town: 'Вятские Поляны',
                townId: 'vyatskie-polyany',
                types: ['events', 'tourism', 'culture'],
                img: '',
                descr: 'Тема шляп как основа развития туристического кластера',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [51.074919, 56.222896]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Общественное пространство «Антикафе „Ветер“»',
                id: 'tarusa',
                town: 'Таруса',
                townId: 'tarusa',
                types: ['business', 'social'],
                img: '',
                descr: 'Общественное пространство «Антикафе «Ветер»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [37.177416, 54.728030]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Создание и развитие бренда «Клин звучит»',
                id: 'klin',
                town: 'Клин',
                townId: 'klin',
                types: ['tourism', 'social', 'culture'],
                img: '',
                descr: 'Создание и развитие бренда «Клин звучит»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [36.728716, 56.331693]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Центр развития Зарайска',
                id: 'zaraysk',
                town: 'Зарайск',
                townId: 'zaraysk',
                types: ['tourism', 'business', 'culture'],
                img: '',
                descr: 'МБУ «Центр развития туризма, инфраструктуры и инвестиций Зарайского муниципального района»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [38.874845, 54.756973]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Туры выходного дня «Экспедиция в Торжок»',
                id: 'torzhok',
                town: 'Торжок',
                townId: 'torzhok',
                types: ['tourism', 'social'],
                img: '',
                descr: 'Туры выходного дня «Экспедиция в Торжок»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [34.960140, 57.041338]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Развитие бренда «Луховицкий огурец»',
                id: 'lukhovitsy',
                town: 'Луховицы',
                townId: 'lukhovitsy',
                types: ['events', 'gastronomy', 'tourism'],
                img: '',
                descr: 'Развитие бренда «Луховицкий огурец»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [39.025394, 54.965217]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Институализация бренда города «Урюпинск-столица российской провинции»',
                id: 'urupinsk',
                town: 'Урюпинск',
                townId: 'urupinsk',
                types: ['social', 'tourism'],
                img: '',
                descr: 'Институализация бренда города «Урюпинск-столица российской провинции»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [41.995844, 50.794522]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Живой Воткинск',
                id: 'votkinsk',
                town: 'Воткинск',
                townId: 'votkinsk',
                types: ['social', 'tourism'],
                img: '',
                descr: 'Живой Воткинск',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [53.987392, 57.051806]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Усадьба средневекового рушанина',
                id: 'russa',
                town: 'Старая Русса',
                townId: 'russa',
                types: ['culture', 'tourism'],
                img: '',
                descr: 'Усадьба средневекового рушанина',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [31.355452, 57.990715]
            }
		},
	]
}
