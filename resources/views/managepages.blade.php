@extends('Master.sidebar')

@section('createbrands')

<div class="col-sm-10">
            <div class="col-sm-12">
                <h2 class="pt-3">Manage Pages</h2>
            </div>
            <div class="col-sm-12">
                <hr>
            </div>

            <div class="col-sm-12 mt-2">
                <label><b>Vehicle Title</b></label>
                <select class="form-control">
                    <option>Disabled select</option>
                    <option>2</option>
                </select>
            </div>
            <div class="col-sm-12 mt-2">
                <label><b>Selected Page</b></label>
                <h6>Selected page Name</h6>
            </div>
            <div class="col-sm-12">
                <label><b>Page Details</b></label>
                <textarea class="form-control" type="text"></textarea>


            </div>
            <div class="col-sm-12">
                <button class="btn btn-success mt-2" style="background-color:#2B6777; border-color: #2B6777"> Submit
                </button>
            </div>
        </div>
@endsection