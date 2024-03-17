@extends('Master.sidebar')

@section('createbrands')
<div class="col-sm-10">
           <div class="col-sm-12">
               <h2 class="pt-3">Registered Users</h2>
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
                    <th>Email</th>
                    <th>Contact no</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Reg Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ivy</td>
                    <th>Ivy@gmail.com</th>
                    <th>892382938</th>
                    <td>25-05-2020</td>
                    <th>23-street</th>
                    <th>Fasilabad</th>
                    <td>Pakistan</td>
                    <td>26-05-2020</td>
                    
                  </tr>
                  
                </tbody>
              </table>
              
        </div>
        <div class="col-sm-12">
            <div></div>
        </div>
       </div>
@endsection