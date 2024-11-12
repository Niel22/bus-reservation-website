@extends('admin.auth.auth')
@section('content')
<div class="card mb-3">

    <div class="card-body">

      <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
        <p class="text-center small">Enter your username &amp; password to login</p>
      </div>

      <form action="{{ route('admin.store') }}" method="post" class="row g-3 needs-validation" novalidate="">
        @csrf
        <div class="col-12">
          <label for="yourUsername" class="form-label">Email</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="email" name="email" class="form-control" id="yourUsername" required="">
            @error('email')
              <div class="text-sm text-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="col-12">
          <label for="yourPassword" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="yourPassword" required="">
          @error('password')
            <div class="text-sm text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <button class="btn btn-primary w-100" type="submit">Login</button>
        </div>
        
      </form>

    </div>
  </div>
@endsection