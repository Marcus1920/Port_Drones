<<<<<<< HEAD
var rectangleCoordinates_{!! $id !!} = new google.maps.LatLngBounds(
	@foreach ($options['coordinates'] as $key => $coordinate)
		new google.maps.LatLng({!! $coordinate['latitude'] !!}, {!! $coordinate['longitude'] !!})@if (count($options['coordinates']) - 1 > $key), @endif
	@endforeach
);

var rectangle_{!! $id !!} = new google.maps.Rectangle({
	strokeColor: '{!! $options['strokeColor'] !!}',
	strokeOpacity: {!! $options['strokeOpacity'] !!},
	strokeWeight: {!! $options['strokeWeight'] !!},
	fillColor: '{!! $options['fillColor'] !!}',
	fillOpacity: {!! $options['fillOpacity'] !!},
	bounds: rectangleCoordinates_{!! $id !!},
	editable: {!! $options['editable'] ? 'true' : 'false' !!}
});

rectangle_{!! $id !!}.setMap({!! $options['map'] !!});

shapes.push({
	'rectangle_{!! $id !!}': rectangle_{!! $id !!}
=======
var rectangleCoordinates_{!! $id !!} = new google.maps.LatLngBounds(
	@foreach ($options['coordinates'] as $key => $coordinate)
		new google.maps.LatLng({!! $coordinate['latitude'] !!}, {!! $coordinate['longitude'] !!})@if (count($options['coordinates']) - 1 > $key), @endif
	@endforeach
);

var rectangle_{!! $id !!} = new google.maps.Rectangle({
	strokeColor: '{!! $options['strokeColor'] !!}',
	strokeOpacity: {!! $options['strokeOpacity'] !!},
	strokeWeight: {!! $options['strokeWeight'] !!},
	fillColor: '{!! $options['fillColor'] !!}',
	fillOpacity: {!! $options['fillOpacity'] !!},
	bounds: rectangleCoordinates_{!! $id !!},
	editable: {!! $options['editable'] ? 'true' : 'false' !!}
});

rectangle_{!! $id !!}.setMap({!! $options['map'] !!});

shapes.push({
	'rectangle_{!! $id !!}': rectangle_{!! $id !!}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
});