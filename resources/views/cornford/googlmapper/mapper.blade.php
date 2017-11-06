<<<<<<< HEAD
@include('googlmapper::javascript')

@foreach ($items as $id => $item)

	{!! $item->render($id, $view) !!}

    @if ($options['async'])

        <script type="text/javascript">

            initialize_items.push({
                method: initialize_{!! $id !!}
            });

        </script>

    @endif

@endforeach
=======
@include('googlmapper::javascript')

@foreach ($items as $id => $item)

	{!! $item->render($id, $view) !!}

    @if ($options['async'])

        <script type="text/javascript">

            initialize_items.push({
                method: initialize_{!! $id !!}
            });

        </script>

    @endif

@endforeach
>>>>>>> 835f7a65a58323b31c7c768b7b23e8e4b12d368f
