@extends('layouts.admin')
@section('breadcrumb-title', 'Routes')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between p-3">
                        <h4 class="">List Of Routes</h4>
                        <a href="{{ route('admin.create-routes')}}" class="btn btn-primary btn-sm">Add Route</a>
                    </div>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Terminal</th>
                                <th scope="col">Destination</th>
                                <th scope="col">Price</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Departure Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($routes as $index => $route)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $route->terminal->name }}</td>
                                <td>{{ $route->terminal->destination }}</td>
                                <td>{{ $route->terminal->price }}</td>
                                <td>{{ $route->terminal->duration }}</td>
                                <td>{{ $route->terminal->departure }}</td>
                                <td>
                                    <a href="{{ route('admin.edit-bus-terminal', $route->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('admin.delete-bus-terminal', $route->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                </div>
            </div>

        </div>

    </div>
</section>
@endsection