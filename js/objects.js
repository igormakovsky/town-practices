/*let objects = [
  {
    "name": "Название практики",
    "town": "Углич",
    "lat": 60, // Широта
    "long": 58, // Долгота
    "types":["culture", "buisnes", "social"],
    "url":"/uglish"
  },
  {
    "name": "Название практики",
    "town": "Углич",
    "lat": 50,
    "long": 70,
    "types":["buisnes", "social"],
    "url":"/ugliсh"
  },
  {
    "name": "Название практики",
    "town": "Углич",
    "lat": 35,
    "long": 55,
    "types":["social"],
    "url":"/uglish"
  },
  {
    "name": "Название практики",
    "town": "Углич",
    "lat": 30,
    "long": 50,
    "types":["culture"],
    "url":"/uglish"
  }
];*/
var towns = [

		{vyatskiepolyani:
			{
				name: 'Вятские поляны',
				id: 'vyatskiepolyani'
			}}


]
var types = [
	{
		'all': {
			'name': 'Все практики',
			'id': 'all'
		}
	},
	{
		'business': {
			'name': 'Малый бизнес, молодежные проекты и стартапы',
			'id': 'business'
		}
	},
	{
		'social': {
			'name': 'Социальные проекты и вовлечение жителей',
			'id': 'social'
		}
	},
	{
		'education': {
			'name': 'Образование и новые технологии',
			'id': 'education'
		}
	},
	{
		'events': {
			'name': 'События',
			'id': 'events'
		}
	},
	{
		'gastronomy': {
			'name': 'Гастрономия и сельское хозяйство',
			'id': 'gastronomy'
		}
	},
	{
		'tourism': {
			'name': 'Туризм и продвижение',
			'id': 'tourism'
		}
	},
	{
		'culture': {
			'name': 'Культура и эстетика',
			'id': 'culture'
		}
	}
]
var data = {
	type: 'FeatureCollection',
	features: [

		{
			type: 'Feature',
			properties: {
				name: 'Фестиваль шляп «Карнавал цвета',
				id :'flower-carnival',
				townName: 'Вятские поляны',
				townId: 'vyatskiepolyani',
				types: ['events'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [ 51.030137,56.228901]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Школа стартапов',
				id :'startup-school',
				townName: 'Каргополь',
				townId: 'kargopol',
				types: ['business'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [38.939669,61.5023245]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Музей «Коломенская пастила»',
				id :'kolomna-candy',
				townName: 'Коломна',
				townId: 'kolomna',
				types: ['gastronomy', 'business'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [38.758414,55.0852951]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Том Сойер Фест',
				id :'tomsoyer',
				townName: 'Калуга',
				townId: 'moscow',
				types: ['culture'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [36.236199,54.5188201]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Организация работы ТИЦ',
				id :'uglich-tic',
				townName: 'Углич',
				townId: 'uglich',
				types: ['events', 'tourism'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [38.321405,57.5298949]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Создание кластера «Фамилия»',
				id :'familia-cluster',
				townName: 'Каргополь',
				townId: 'kargopol',
				types: ['business'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [38.839669,61.5123245]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Лекарства для домов',
				id :'house-medicine',
				townName: 'Крапивна',
				townId: 'krapivna',
				types: ['culture'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [37.156042,53.9406111]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Бумажный город на воде',
				id :'papertown',
				townName: 'Сясьстрой',
				townId: 'syasstroy',
				types: ['culture', 'tourism'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [32.559059, 60.1290507]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Бензар: туристическая заправка',
				id :'tourist-petrol',
				townName: 'Зарайск',
				townId: 'zaraysk',
				types: ['business', 'tourism'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [38.891387,54.7605181]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Лесная кухня',
				id :'forest-cousine',
				townName: 'Перемышль',
				townId: 'peremyshl',
				types: ['gastronomy'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [36.151907,54.2620781]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Исторические граффити в Боровске',
				id :'historical-graffiti',
				townName: 'Боровск',
				townId: 'borovsk',
				types: ['business', 'tourism'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [36.481521,55.207476]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Мастер-классы по кубовой набойке',
				id :'cubicle-stamps',
				townName: 'Очер',
				townId: 'ocher',
				types: ['culture'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [54.712628,57.8892188]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Холмогорская резьба по кости',
				id :'bonecarving',
				townName: 'Ломоносово',
				townId: 'lomonosovo',
				types: ['culture', 'education'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [41.731934,64.2323163]
			}
		}

	]

}
