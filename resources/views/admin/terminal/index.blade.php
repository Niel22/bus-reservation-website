@extends('layouts.admin')
@section('breadcrumb-title', 'Bus Terminal')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between p-3">
                        <h4 class="">List Of Terminals</h4>
                        <a href="{{ route('admin.create-bus-terminal')}}" class="btn btn-primary btn-sm">Add Terminal</a>
                    </div>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Name</th>
                                <th scope="col">Terminal Phone Number</th>
                                <th scope="col">Routes</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($terminals as $index => $terminal)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $terminal->name }}</td>
                                <td>{{ $terminal->phone }}</td>
                                <td>{{ $terminal->routes->count()}}</td>
                                <td>
                                    <a href="{{ route('admin.edit-bus-terminal', $terminal->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('admin.delete-bus-terminal', $terminal->id) }}" class="btn btn-sm btn-danger">Delete</a>
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