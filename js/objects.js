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
                title: 'От «Иллюзии Старого города» к&nbsp;кластеру «Фамилия»',
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
                title: 'Социальный проект «Живой Воткинск»',
                id: 'votkinsk',
                town: 'Воткинск',
                townId: 'votkinsk',
                types: ['social', 'tourism'],
                img: '',
                descr: 'Социальный проект «Живой Воткинск»',
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
        {
            type: 'Feature',
            properties: {
                title: 'АнтреСоль, культурный квартал и «соль земли»',
                id: 'totma',
                town: 'Тотьма',
                townId: 'totma',
                types: ['business', 'social', 'culture', 'tourism'],
                img: '',
                descr: 'АнтреСоль, культурный квартал и «соль земли»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [42.758873, 59.973487]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Возрождение золотного шитья',
                id: 'belomorsk',
                town: 'Беломорск',
                townId: 'belomorsk',
                types: ['culture'],
                img: '',
                descr: 'Возрождение золотного шитья «Дом вести — не бородой трясти»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [34.779911, 64.537827]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Маршрут выходного дня «Петровская ассамблея»',
                id: 'azov',
                town: 'Азов',
                townId: 'azov',
                types: ['culture', 'tourism'],
                img: '',
                descr: 'Маршрут выходного дня «Петровская ассамблея»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [39.423267, 47.112129]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Туристско-рекреационный кластер «Касимовский»',
                id: 'kasimov',
                town: 'Касимов',
                townId: 'kasimov',
                types: ['culture', 'tourism', 'business'],
                img: '',
                descr: 'Туристско-рекреационный кластер «Касимовский»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [41.391368, 54.937288]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Фестиваль новой городской культуры «Арт-Овраг»',
                id: 'vyksa',
                town: 'Выкса',
                townId: 'vyksa',
                types: ['culture', 'social', 'events', 'tourism', 'business'],
                img: '',
                descr: 'Фестиваль новой городской культуры «Арт-Овраг»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [42.167961, 55.320683]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Культурно-исторический центр «Боровский край»',
                id: 'borovsk',
                town: 'Боровск',
                townId: 'borovsk',
                types: ['culture', 'social', 'events', 'tourism'],
                img: '',
                descr: 'Культурно-исторический центр «Боровский край»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [36.483584, 55.207634]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Создание общественного яхт-клуба',
                id: 'kandalaksha',
                town: 'Кандалакша',
                townId: 'kandalaksha',
                types: ['business', 'social', 'tourism'],
                img: '',
                descr: 'Создание общественного яхт-клуба',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [32.414306, 67.156727]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Архидеи для уездного города',
                id: 'krapivna',
                town: 'Крапивна',
                townId: 'krapivna',
                types: ['business', 'social', 'tourism', 'culture'],
                img: '',
                descr: 'Сохранение и благоустройство среды «Архидеи для уездного города»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [37.155398, 53.941580]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Стилизация территории элементами традиционной важской росписи',
                id: 'velsk',
                town: 'Вельск',
                townId: 'velsk',
                types: ['social', 'tourism', 'culture'],
                img: '',
                descr: 'Стилизация территории элементами традиционной важской росписи',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [42.103310, 61.065915]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Создание бренда «Суздаль сокровенный»',
                id: 'suzdal',
                town: 'Суздаль',
                townId: 'suzdal',
                types: ['social', 'tourism', 'culture'],
                img: '',
                descr: 'Создание бренда «Суздаль сокровенный»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [40.449457, 56.419836]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'ТИЦ райцентра как туристический консолидатор',
                id: 'ustyani',
                town: 'Устьяны',
                townId: 'ustyani',
                types: ['social', 'tourism', 'culture'],
                img: '',
                descr: 'ТИЦ райцентра как туристический консолидатор',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [43.173115, 61.091783]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Музей-заповедник как ключевое градоразвивающее учреждение',
                id: 'elabuga',
                town: 'Елабуга',
                townId: 'elabuga',
                types: ['social', 'tourism', 'culture'],
                img: '',
                descr: 'Музей-заповедник как ключевое градоразвивающее учреждение',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [52.054460, 55.756670]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Брендинг самого компактного туристического поселения России',
                id: 'sviyazhsk',
                town: 'Свияжск',
                townId: 'sviyazhsk',
                types: ['social', 'tourism', 'culture'],
                img: '',
                descr: 'Брендинг самого компактного туристического поселения России',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [48.658981, 55.772254]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: '«Город мастеров»: интеграция туризма и народных художественных промыслов',
                id: 'gorodets',
                town: 'Городец',
                townId: 'gorodets',
                types: ['social', 'tourism', 'culture'],
                img: '',
                descr: '«Город мастеров»: интеграция туризма и народных художественных промыслов',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [43.472351, 56.644822]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Фонд сохранения и развития историко-культурного наследия Хвалынского района «Сосновый остров»',
                id: 'khvalynsk',
                town: 'Хвалынск',
                townId: 'khvalynsk',
                types: ['social', 'tourism', 'culture'],
                img: '',
                descr: 'Фонд сохранения и развития историко-культурного наследия Хвалынского района «Сосновый остров»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [48.104604, 52.495089]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Брендирование города Семенов элементами  хохломской росписи',
                id: 'semenov',
                town: 'Семенов',
                townId: 'semenov',
                types: ['events', 'tourism', 'culture'],
                img: '',
                descr: 'Брендирование города Семенов  элементами  хохломской росписи',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [44.490331, 56.789012]
            }
		},
        {
            type: 'Feature',
            properties: {
                title: 'Сообщество активных горожан «Мой Северодвинск»',
                id: 'severodvinsk',
                town: 'Северодвинск',
                townId: 'severodvinsk',
                types: ['social', 'culture'],
                img: '',
                descr: 'Сообщество активных горожан «Мой Северодвинск»',
                similiar: ['uglich', 'sarapul']
            },
            geometry: {
                type: 'Point',
                coordinates: [39.818175, 64.562501]
            }
		}
	]
}
