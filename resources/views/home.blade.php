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
                                <a href="#" class="btn btn-danger">Criar piada</a>
                            </div>

                        </div>
                        <div class="joke">

                            <h5>Piada 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac pharetra mauris. Sed laoreet, magna eu tincidunt hendrerit, dui est accumsan leo, ut vehicula dolor lectus sed orci. Etiam id iaculis orci, ac semper metus. In nec elit tempor, efficitur sem a, finibus purus. Pellentesque at nulla nec felis...
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
