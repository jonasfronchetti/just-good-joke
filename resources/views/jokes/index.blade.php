@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="jokers">
                        <div class="headerJoke">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">=</span>
                                </div>
                                <input type="text" class="" placeholder="Ordenar" aria-label="Username" aria-describedby="basic-addon1">
                                <a href="{{ route('jokes.create') }}" class="btn btn-danger">Criar piada</a>
                            </div>

                        </div>
                        @foreach($jokes as $joke)
                            <div class="p-2">
                                <div class="joke">

                                    <h5>Piada {{$joke->id}}</h5>
                                    <p class="card-text">{{$joke->joke}}</p>
                                    <h4>{{$joke->name}}
                                        <span class="img-thumbnail">^ {{$joke->like}}</span>
                                        <span class="img-thumbnail">v {{$joke->deslike}}</span>
                                        <span class="badge"> Publicada em {{\Carbon\Carbon::parse($joke->created_at)->format('d/m/Y')}}</span>
                                    </h4>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
