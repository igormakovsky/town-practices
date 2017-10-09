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
				types: ['social', 'business'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [56.499491, 52.444508]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Школа стартапов',
				id :'startup-school',
				townName: 'Каргополь',
				townId: 'kargopol',
				types: ['social', 'business'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [56.499491, 52.444508]
			}
		},
		{
			type: 'Feature',
			properties: {
				name: 'Музей «Коломенская пастила»',
				id :'kolomna-candy',
				townName: 'Коломна',
				townId: 'kolomna',
				types: ['social', 'business'],
				url: '',
				descr: 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			geometry: {
				type: 'Point',
				coordinates: [56.499491, 52.444508]
			}
		}

	]

}
