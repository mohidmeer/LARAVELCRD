@extends('layout/app')
@section('title','Create New Customer')
@section('content')



<div class="container pt-3 ">
   <div class="row">
        <div class="col-12 text-white bg-dark rounded ">
          <form class="text-white bg-dark" action="/custcreate" method="POST">
              <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input type="text" name="name" class="form-control text-white bg-dark " placeholder=" Enter Name">
                      <div>
                           <span class="badge bg-warning text-danger">{{$errors->first('name')}}</span>
                      </div>
              </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
               <input type="email" name="email" class="form-control text-white bg-dark "id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     <div>
                      <span class="badge bg-warning text-danger">{{$errors->first('email')}}</span>
                      </div>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>

                        <div class="form-group ">
                         <label for="exampleFormControlSelect1">Status</label>
                         <select name="status" class="form-control text-white bg-dark" id="exampleFormControlSelect1">
                         <option value="1">Active</option>
                         <option value="0">Inactive</option>

                         </select>
                         <div>
                         <div class="form-group ">
                         <label for="exampleFormControlSelect1">Company</label>
                         <select name="company_id" class="form-control text-white bg-dark" id="exampleFormControlSelect1">
                         <option value="" >Select Company</option>
                         @foreach ($company as $com)
                         <option value="{{$com->id}}" >{{$com->name}}</option>
                         @endforeach
                         

                         </select>
                         <div>
                      <span class="badge bg-warning text-danger">{{$errors->first('company_id')}}</span>
                      </div>
                       </div>
               <button type="submit"  class="btn btn-success btn-sm mt-2 rounded-pill mb-2">Create</button>
               @csrf
            </form>
      
         </div>
    </div>
 </div>



















@endsection