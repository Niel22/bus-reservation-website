@extends('layouts.admin')
@section('breadcrumb-title', 'Edit Route')
@section('content')
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body py-3">

          <!-- Vertical Form -->
          <form action="{{ route('admin.update-routes', $route->id)}}" method="post" class="row g-3">
            @csrf
            <div class="col-6">
              <label for="inputNanme4" class="form-label">Terminal</label>
              <select name="terminal_id" class="form-select">
                <option value="">Select terminal</option>
                @foreach($terminals as $terminal)
                <option {{ $route->terminal_id == $terminal->id ? "selected" : "" }} value="{{ $terminal->id }}">{{ $terminal->name }}</option>
                @endforeach
              </select>
              @error('terminal_id')
              <span class="text-sm text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="col-6">
              <label for="inputNanme4" class="form-label">Destination</label>
              <input type="text" value="{{ $route->destination }}" name="destination" list="nigeriaStates" placeholder="Select Destination State"
                class="form-control">
              <datalist id="nigeriaStates">
                <option value="Abia">
                <option value="Adamawa">
                <option value="Akwa Ibom">
                <option value="Anambra">
                <option value="Bauchi">
                <option value="Bayelsa">
                <option value="Benue">
                <option value="Borno">
                <option value="Cross River">
                <option value="Delta">
                <option value="Ebonyi">
                <option value="Edo">
                <option value="Ekiti">
                <option value="Enugu">
                <option value="Gombe">
                <option value="Imo">
                <option value="Jigawa">
                <option value="Kaduna">
                <option value="Kano">
                <option value="Katsina">
                <option value="Kebbi">
                <option value="Kogi">
                <option value="Kwara">
                <option value="Lagos">
                <option value="Nasarawa">
                <option value="Niger">
                <option value="Ogun">
                <option value="Ondo">
                <option value="Osun">
                <option value="Oyo">
                <option value="Plateau">
                <option value="Rivers">
                <option value="Sokoto">
                <option value="Taraba">
                <option value="Yobe">
                <option value="Zamfara">
                <option value="FCT">
              </datalist>
              @error('destination')
              <span class="text-sm text-danger">{{$message}}</span>
              @enderror
            </div>

            @php
                $value = $route->duration;

                $parts = explode(' ', $value);

                $hour = preg_replace('/\D/', '', $parts[0]);
                $min = preg_replace('/\D/', '', $parts[1]);
            @endphp
            <div class="col-6">
              <label for="journeyDuration" class="form-label">Journey Duration</label>
              <div class="input-group">
                <input type="number" name="hours" value="{{ $hour }}" class="form-control" placeholder="Hours" min="0">
                <span class="input-group-text">h</span>
                <input type="number" name="minutes" value="{{ $min }}" class="form-control" placeholder="Minutes" min="0" max="59">
                <span class="input-group-text">m</span>
              </div>
              @error('hours')
              <span class="text-sm text-danger">{{$message}}</span>
              @enderror
              @error('minutes')
              <span class="text-sm text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="inputNanme4" class="form-label">Price (₦)</label>
              <input type="number" value="{{ $route->price }}" placeholder="e.g 2000" name="price" class="form-control">
              @error('price')
              <span class="text-sm text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="col-6">
              <label for="inputNanme4" class="form-label">No Of Seats Available</label>
              <input type="number" value="{{ $route->seats }}" placeholder="e.g 20" name="seats" class="form-control">
              @error('seats')
              <span class="text-sm text-danger">{{$message}}</span>
              @enderror
            </div>

            <div class="col-6">
              <label for="departureDateTime" class="form-label">Departure Date/Time</label>
              <input type="datetime-local" value="{{ $route->departure }}" name="departure" class="form-control" id="departureDateTime">
              @error('departure')
              <span class="text-sm text-danger">{{$message}}</span>
              @enderror
            </div>


            <div class="text-center">
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>

    </div>
  </div>
</section>
@endsection