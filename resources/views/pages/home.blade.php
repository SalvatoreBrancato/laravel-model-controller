@extends( 'layout.app' )

@section('movies')
<main>
@foreach( $movies as $elem )
    <h2>{{ $elem['title'] }}</h2>
@endforeach
</main>
@endsection