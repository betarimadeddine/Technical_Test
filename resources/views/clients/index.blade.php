@extends('welcome')

@section('title','Technical_Test | Clients')

@section('content')


    <h1 class="mt-4">Clients</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Liste of clients</li>
    </ol>
    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-list"></i>
                                Liste of clients
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Adress</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($clients as $client)
                                            <tr>
                                                <td>{{ $client->id }}</td>
                                                <td>{{ $client->name }}</td>
                                                <td>{{ $client->phone }}</td>
                                                <td>{{ $client->address }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

@endsection
