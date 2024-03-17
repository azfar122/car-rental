@extends('Master.sidebar')

@section('createbrands')

<div class="col-sm-10">
           <div class="col-sm-12">
               <h2 class="pt-3">Manage Testimonials</h2>
           </div>
           <div class="col-sm-12">
            <hr>
        </div>
        <div class="col-sm-12">
            <table class="table">
                <thead class="table" style="background-color: #2B6777; color: white;">
                  <tr>
                    <th>#</th>
                    <th>Title</th>
                   
                    <th>Testimonials</th>
                    <th>Posting date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ivy</td>
                    <!-- <td>Ivy@gmail.com</td> -->
                    <td>They provide good services</td>
                    <td>25-12-2020</td>
                    <td>
                     
                        <span><a class="btn btn-dark" style="border-radius: 50px; border-color: rgb(116, 8, 8); background-color: white; color: rgb(116, 8, 8);"><i class="fas fa-trash-alt"></i></a></span>
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