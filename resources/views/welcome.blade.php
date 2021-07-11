@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="textJoke">
                            SÓ PIADA BOA
                        </div>

                        <div class="textJokeBase">
                            Participe da maior comunidade de piadistas do <b>Brasil</b>. Vote nas piadas de outros usuários e cadastre suas as suas próprias.
                            <br>
                            <br>
                            <b>Só não vá morrer de rir! kkk</b>
                        </div>

                        <a href="{{ route('jokes') }}" type="button" class="btn btn-danger">Começar</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
