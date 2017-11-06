<<<<<<< HEAD
var polylineCoordinates_{!! $id !!} = [
	@foreach ($options['coordinates'] as $coordinate)
		new google.maps.LatLng({!! $coordinate['latitude'] !!}, {!! $coordinate['longitude'] !!}),
	@endforeach
];

var polyline_{!! $id !!} = new google.maps.Polyline({
	path: polylineCoordinates_{!! $id !!},
	geodesic: {!! $options['strokeColor'] ? 'true' : 'false' !!},
	strokeColor: '{!! $options['strokeColor'] !!}',
	strokeOpacity: {!! $options['strokeOpacity'] !!},
	strokeWeight: {!! $options['strokeWeight'] !!},
	editable: {!! $options['editable'] ? 'true' : 'false' !!}
});

polyline_{!! $id !!}.setMap({!! $options['map'] !!});

shapes.push({
	'polyline_{!! $id !!}': polyline_{!! $id !!}
=======
var polylineCoordinates_{!! $id !!} = [
	@foreach ($options['coordinates'] as $coordinate)
		new google.maps.LatLng({!! $coordinate['latitude'] !!}, {!! $coordinate['longitude'] !!}),
	@endforeach
];

var polyline_{!! $id !!} = new google.maps.Polyline({
	path: polylineCoordinates_{!! $id !!},
	geodesic: {!! $options['strokeColor'] ? 'true' : 'false' !!},
	strokeColor: '{!! $options['strokeColor'] !!}',
	strokeOpacity: {!! $options['strokeOpacity'] !!},
	strokeWeight: {!! $options['strokeWeight'] !!},
	editable: {!! $options['editable'] ? 'true' : 'false' !!}
});

polyline_{!! $id !!}.setMap({!! $options['map'] !!});

shapes.push({
	'polyline_{!! $id !!}': polyline_{!! $id !!}
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
});