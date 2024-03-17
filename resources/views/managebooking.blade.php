@extends('Master.sidebar')

@section('createbrands')
    

<div class="col-sm-10">
           <div class="col-sm-12">
               <h2 class="pt-3">Manage Bookings</h2>
           </div>
           <div class="col-sm-12">
            <hr>
        </div>
        <div class="col-sm-12">
            <table class="table">
                <thead class="table" style="background-color: #2B6777; color: white;">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Vehicles</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Message</th>
                    <th>Option</th>
                    <th>Status</th>
                    <th>Posting date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  @foreach ($category as $cat)
                    <th scope="row">{{$cat->id}}</th>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->vehicle}}</td>
                    <td>{{$cat->form_date}}</td>
                    <td>{{$cat->to_date}}</td>
                    <td>{{$cat->message}}</td>
                    <td>
                      <form method="post" action="{{ url('/managebooking') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$cat->id}}">
                    <select  class="form-control" name="status">
                            <option vlaue="Processing">Processing</option>
                            <option value="Completed">Completed</option>
                           
                        </select>
                    </td>
                    <td>
                    {{$cat->status}}
                    </td>
                    <td>{{$cat->created_at}}</td>
                    <td>
                        <span><button type ="submit" class="btn btn-primary" style="border-radius: 50px; border-color: rgb(7, 70, 17); background-color: white; color: darkgreen;"><i class="far fa-save"></i></button></span>
                    </form>
                        <span><a class="btn btn-dark" style="border-radius: 50px; border-color: rgb(116, 8, 8); background-color: white; color: rgb(116, 8, 8);" href ="{{route('deletebooking',$cat->id)}}"><i class="fas fa-trash-alt"></i></a></span>
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
@endsection