@extends('Master.sidebar')

@section('createbrands')
    
<div class="col-sm-10">
    <h2 class="pt-3">Create Brands</h2>
<hr>
    <form method="post" action="{{ url('/createbrands') }}">
        @csrf
    <label><b>Brand Name</b></label>
    <input class="form-control" name="brandname" type="text" />
    <button class="btn btn-success mt-2" style="background-color:#2B6777; border-color: #2B6777"> Submit </button>
    </form>
</div>

@endsection