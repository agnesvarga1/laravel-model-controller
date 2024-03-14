@extends('layouts.app')
@section('main')
<h1 class="text-center text-primary">Collection of films</h1>
{{-- {{dd($movies)}} --}}

<div class="row">
    @foreach ($movies as $film )
    <div class="col-lg-3 col-md-6 m-3">

      <div class="card m-3">
        <div class="card-body">
          <h4 class="card-title">{{$film['title']}}</h4>
          <h6 class="card-title"><span class="fw-light">Titolo originale: </span>{{$film['original_title']}}</h6>
          <p class="card-text">
            {{$film["nationality"]}} | {{ \Carbon\Carbon::parse($film->date)->format('Y') }} | Vote: {{$film["vote"]}}
          </p>

        </div>
      </div>

    </div>
    @endforeach

  </div>

@endsection
