@extends('Master.sidebar')

@section('createbrands')
    <!-- Content Wrapper -->
    <div class="col-sm-10">
           <div class="col-sm-12">
               <h2 class="pt-3">Manage Subcribers</h2>
           </div>
           <div class="col-sm-12">
            <hr>
        </div>
        <div class="col-sm-12">
            <table class="table">
                <thead class="table" style="background-color: #2B6777; color: white;">
                  <tr>
                    <th>#</th>
                     <th>Email Id</th>
                    <th>Subcription Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ivy</td>
                    <td>25-12-2020</td>
                    <td>
                        <span><button class="btn btn-dark" style="border-radius: 50px; border-color: rgb(7, 70, 17); background-color: white; color: darkgreen;"><i class="far fa-edit"></i></button></span>
                        <span><button class="btn btn-dark" style="border-radius: 50px; border-color: rgb(116, 8, 8); background-color: white; color: rgb(116, 8, 8);"><i class="fas fa-trash-alt"></i></button></span>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
              
        </div>
        <div class="col-sm-12">
            <div></div>
        </div>
       </div>

   @endsection