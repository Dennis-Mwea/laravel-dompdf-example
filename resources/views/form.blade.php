@extends('layouts.master')

@section('content')
    <form action="{{ url('submitForm') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group"><!-- Full Name -->
            <label for="full_name" class="control-label">Full Name</label>
            <input type="text" class="form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}" id="ful_name" name="full_name" value="{{ old('full_name') }}" placeholder="John Deer">
            @if ($errors->has('full_name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('full_name') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group"> <!-- Street 1 -->
            <label for="street1_id" class="control-label">Street Address 1</label>
            <input type="text" class="form-control{{ $errors->has('street1_id') ? ' is-invalid' : '' }}" value="{{ old('street1_id') }}" id="street1_id" name="street1_id" placeholder="Street address, P.O. box, company name, c/o">
            @if ($errors->has('street1_id'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('street1_id') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group"> <!-- City-->
            <label for="city_id" class="control-label">City</label>
            <input type="text" class="form-control{{ $errors->has('city_id') ? ' is-invalid' : '' }}" value="{{ old('city_id') }}" id="city_id" name="city_id" placeholder="Smallville">
            @if ($errors->has('city_id'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('city_id') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group"> <!-- Zip Code-->
            <label for="zip" class="control-label">Zip Code</label>
            <input type="text" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" value="{{ old('zip') }}" id="zip" name="zip" placeholder="#####">
            @if ($errors->has('zip'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('zip') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group"><!-- Submit Button -->
            <button class="btn btn-primary" type="submit">Buy!</button>
        </div>
    </form>
@endsection