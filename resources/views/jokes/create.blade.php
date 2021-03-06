@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>Nova Piada</h2>
                    <form action="{{ route('jokes.store') }}" class="form" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Nome:</label>
                                    <input type="text" class="form-control" required="required" id="name" name="name" value="{{$user->name ?? '' }} ">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required="required" aria-describedby="emailHelp" value="{{$user->email ?? '' }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="joke">Piada</label>
                            <textarea type="text" class="form-control " id="joke" name="joke" required="required"></textarea>
                        </div>
                        <button type="submit" class="btn btn-danger float-right">Enviar piada</button>
                        <a href="{{ route('jokes') }}" type="submit" class="btn btn-light float-right">Cancelar</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
