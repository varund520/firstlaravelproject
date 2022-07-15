@extends('main')

@push('title')
<title>Register Page</title>    
@endpush

@section('first-section')
  <form method="post" action="{{ url('/') }}/register">
    @csrf

    @php
       $demo = 1;
    @endphp

    <x-form type="email" name="email" placeholder="Enter email" :demo="$demo"></x-form>
    <x-form type="password" name="password" placeholder="Enter password"></x-form>
    <x-form type="password" name="confirm_pass" placeholder="Enter password"></x-form>

    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection


