@extends('layouts.app')

@section('style')
    <link href="{{ asset('assets/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <a href="{{ route('jokes.create') }}" class="btn btn-danger float-right">Criar piada</a>
                <div class="card-header">

                    <div class="table-responsive">
                        <table id="default-datatable" class="display table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Piada</th>
                                <th scope="col">Texto</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Like</th>
                                <th scope="col">Deslike</th>
                                <th scope="col">Publicado</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($jokes as $joke)
                                <tr onclick="showModal({{$joke->id}})">
                                    <td  scope="row">{{$joke->id}}</td>
                                    <td>{{$joke->joke}}</td>
                                    <td>{{$joke->name}}</td>
                                    <td id="like{{$joke->id}}">{{$joke->like}}</td>
                                    <td id="deslike{{$joke->id}}">{{$joke->deslike}}</td>
                                    <td>{{ \Carbon\Carbon::parse($joke->created_at)->format('d/m/Y') }}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Piada <span id="joke">0</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <div class="p-2">
                        <input type="hidden" value="" id="joke_id">
                        <p class="card-text" id="joke_text">Piada</p>
                        <h4>
                            <span id="joke_name">Nome</span>
                            <span class="img-thumbnail" id="joke_like">^ 123</span>
                            <span class="img-thumbnail" id="joke_deslike">v 456</span>
                            Publicada em <span  id="joke_created_at">{{\Carbon\Carbon::parse(now())->format('d/m/Y')}}</span>
                        </h4>

                    </div>
            </div>
            <div class="modal-footer">
                <a onclick="like()" type="button" class="btn btn-secondary">Chorei</a>
                <button onclick="deslike()" type="button" class="btn btn-primary">Nem ri</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    @parent
    <script src="{{ asset('assets/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/custom-table-datatable.js') }}"></script>
    <script>
        function showModal(id) {
            fetch('/jokes/show/'+id, {
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
                method: 'GET',
                credentials: 'same-origin'
            }).then(response => {
                return response.json();
            }).then(data => {
                console.log(data);
                $('#exampleModal').modal('toggle');
                $('#joke_id').val(data.id);
                $('#joke').html(data.id);
                $('#joke_text').html(data.joke);
                $('#joke_name').html(data.name);
                $('#joke_like').html(data.like);
                $('#joke_deslike').html(data.deslike);
                $('#joke_created_at').html(data.created);

            });

        }

        function like() {
            let id = $('#joke_id').val();
            fetch('/jokes/like/' + id, {
                headers: {'Content-Type': 'application/json', 'X-CSRF-TOKEN': "{{ csrf_token() }}"},
                method: 'POST',
                credentials: 'same-origin'
            }).then(response => {
                return response.json();
            }).then(data => {
                $('#like'+id).html(data);
                $('#exampleModal').modal('toggle');

            });
        }
        function deslike() {
            let id = $('#joke_id').val();
            fetch('/jokes/deslike/'+id, {
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
                method: 'POST',
                credentials: 'same-origin'
            }).then(response => {
                return response.json();
            }).then(data => {
                $('#deslike'+id).html(data);
                $('#exampleModal').modal('toggle');

            });
        }

    </script>
@endsection
