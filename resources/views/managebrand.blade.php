@extends('Master.sidebar')

@section('createbrands')
    
<div class="col-sm-10">
           <div class="col-sm-12">
               <h2 class="pt-3">Manage Brands</h2>
           </div>
           <div class="col-sm-12">
            <hr>
        </div>
        <div class="col-sm-12">
            <table class="table">
                <thead class="table" style="background-color: #2B6777; color: white;">
                  <tr>
                    <th>#</th>
                    <th>Brand Name</th>
                    <th>Creation Date</th>
                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($category as $cat)
                  <tr>
                    <th scope="row">{{$cat->id}}</th>
                    <td>{{$cat->brandname}}</td>
                    <td>{{$cat->created_at}}</td>
                  
                    <td>
                        <span><a class="btn btn-dark" style="border-radius: 50px; border-color: rgb(7, 70, 17); background-color: white; color: darkgreen;" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit"></i></a></span>
                        <span><a class="btn btn-dark" style="border-radius: 50px; border-color: rgb(116, 8, 8); background-color: white; color: rgb(116, 8, 8);" href ="{{route('deletebrand',$cat->id)}}" data-target="#exampleModal"><i class="fas fa-trash-alt"></i></a></span>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
        </div>
        <div class="col-sm-12">
            <div></div>
        </div>
       </div>
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="{{ url('/createbrands') }}">
            @csrf
        <label><b>Brand Name</b></label>
        <input class="form-control" name="brandname" type="text" />
          </div>
          <div class="modal-footer">
            <button class="btn btn-success mt-2" style="background-color:#2B6777; border-color: #2B6777" data-dismiss="modal">Close</button>
            <button class="btn btn-success mt-2" style="background-color:#2B6777; border-color: #2B6777"> Submit </button>
          </div>
      </form>
    </div>
  </div>
</div>
@endsection