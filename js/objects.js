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
var data = {
	'type': 'FeatureCollection',
	'features': [

		{
			'type': 'Feature',
			'properties': {
				'Name': 'Углич',
				'types': ['buisness', 'social'],
				'url': '',
				'Description': 'Gimme espresso bars are found in New York City and Upstate New York.'

			},
			'geometry': {
				'type': 'Point',
				'coordinates': [56.499491, 52.444508]
			}
		}, {
			'type': 'Feature',
			'properties': {
				'Name': 'Архангельск',
				'types': ['buisness'],
				'Description': 'Specializes in spatial and environmental data analysis and statistics, geographic information systems and custom data design.'
			},
			'geometry': {
				'type': 'Point',
				'coordinates': [46.4958259, 55.440258]
			}
		}, {
			'type': 'Feature',
			'properties': {
				'Name': 'Ростов',
				'types': ['social'],
				'Description': 'Inn and cocktail bar in a beautifully restored historic mansion.'

			},
			'geometry': {
				'type': 'Point',
				'coordinates': [56.492543, 62.439401]
			}
		}, {
			'type': 'Feature',
			'properties': {
				'Name': 'Зарайск',
				'types': ['social'],
				'Description': 'Inn and cocktail bar in a beautifully restored historic mansion.'

			},
			'geometry': {
				'type': 'Point',
				'coordinates': [66.492543, 62.439401]
			}
		}

	]

}
