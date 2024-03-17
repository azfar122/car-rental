@extends('Master.sidebar')

@section('createbrands')
    <!-- Content Wrapper -->
    <div class="col-sm-10">
           <div class="col-sm-12">
               <h2 class="pt-3">Update Contact Info</h2>
           </div>
           <div class="col-sm-12">
            <hr>
        </div>
        
     
       
        <div class="col-sm-12">
            <label><b>Address</b></label>
            <input class="form-control" type="text" />

          
        </div>
        <div class="col-sm-12 mt-2">
            <label><b>Email</b></label>
            <input class="form-control" type="email" />

          
        </div>
        <div class="col-sm-12 mt-2 ">
            <label><b>Contact Number</b></label>
            <input class="form-control" type="number" />

          
        </div>
        <div class="col-sm-12 mt-3">
            <button class="btn btn-success mt-2" style="background-color:#2B6777; border-color: #2B6777"> Submit </button>
        </div>
       </div>

@endsection