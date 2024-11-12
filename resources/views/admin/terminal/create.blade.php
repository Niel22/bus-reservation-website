@extends('layouts.admin')
@section('breadcrumb-title', 'Create Terminal')
@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body py-3">

            <!-- Vertical Form -->
            <form action="{{ route('admin.store-bus-terminal')}}" method="post" class="row g-3" enctype="multipart/form-data">
                @csrf
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
                @error('name')
                    <span class="text-sm text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Terminal Phone Number</label>
                <input type="text" name="phone" class="form-control">
                @error('phone')
                    <span class="text-sm text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="col-12">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" accept="image/jpeg, image/jpg" class="form-control">
                @error('image')
                    <span class="text-sm text-danger">{{$message}}</span>
                @enderror
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>

      </div>
    </div>
  </section>
  @endsection