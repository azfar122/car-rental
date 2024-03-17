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
                    <th>Vehicle Title</th>
                    <th>Vehicle Price</th>
                    <th>Model</th>
                    <th>Fule Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  @foreach ($category as $cat)
                  <tr>
                    <th scope="row">{{$cat->id}}</th>
                    <td>{{$cat->vehicle_title}}</td>
                    <td>{{$cat->price}}</td>
                    <td>{{$cat->model_year}}</td>
                    <td>{{$cat->fule_type}}</td>
                    <td>
                        <span><a class="btn btn-dark" style="border-radius: 50px; border-color: rgb(7, 70, 17); background-color: white; color: darkgreen;" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit"></i></a></span>
                        <span><a class="btn btn-dark" style="border-radius: 50px; border-color: rgb(116, 8, 8); background-color: white; color: rgb(116, 8, 8);" href ="{{route('deletevehicle',$cat->id)}}" data-target="#exampleModal"><i class="fas fa-trash-alt"></i></a></span>
                    </td>
                  </tr>
                  @endforeach
                  </tr>
                  
                </tbody>
              </table>
              
        </div>
        <div class="col-sm-12">
            <div></div>
        </div>
       </div>
@endsection