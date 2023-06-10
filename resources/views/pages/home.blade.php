@extends( 'layout.app' )

@section('movies')
<main class="d-flex justify-content-center align-items-center flex-wrap container-card">
@foreach( $movies as $elem )
<div class="card d-flex justify-content-center align-items-center">
    <h2>{{ $elem['title'] }}</h2>
    <h3>lang: {{ $elem['nationality']}}</h3>
    <h4>date: {{ $elem['date']}}</h4>
    <h5>vote: {{ $elem['vote']}}</h5>


</div>
@endforeach
</main>
@endsection