@extends('layout/app')
@section('title','Editcccc '.$customer->name)
@section('content')

<div class="container pt-3 ">
<h2 class="pt-2">Edit Details For {{$customer->name}}</h2>
   <div class="row">
        <div class="col-6 text-white bg-dark rounded ">
          <form class="text-white bg-dark" action="/customer/{{ $customer->id}}" method="POST">
              
              <div class="form-group">
               <label for="exampleInputEmail1">Name</label>
               <input type="text" name="name" value="{{$customer->name}}" class="form-control text-white bg-dark " placeholder=" Enter Name">
                      <div>
                           <span class="badge bg-warning text-danger">{{$errors->first('name')}}</span>
                      </div>
              </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
               <input type="email" name="email" value="{{$customer->email}}" class ="form-control text-white bg-dark" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                     <div>
                      <span class="badge bg-warning text-danger">{{$errors->first('email')}}</span>
                      </div>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>

                        <div class="form-group ">
                         <label for="exampleFormControlSelect1">Status</label>
                         <div class="row">
                            <div class="col-8">
                             <select name="status"   class="form-control  text-white bg-dark" id="exampleFormControlSelect1">
                              <option value="" disabled selected >Select Status</option>
                              <option value="1"<?php echo ($customer->status=='Active') ? 'selected':''; ?> >Active</option>
                              <option value="0"<?php echo ($customer->status=='Inactive') ? 'selected':''; ?> >Inactive</option>
                              </select>
                            </div>
                            <div class="col-4  <?php echo ($customer->status=='Active') ? 'text-success':'text-danger'; ?> ">
                            
                             <span class="
                             <?php echo ($customer->status=='Inactive') ? 'bg-danger':'bg-success'; ?> 
                             
                             rounded-circle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                           
                            <h4 > <?php echo $customer->status ?>
   
                            </h4> 
                              
                            </div>
                         </div>
                         <div>
                         <div>
                      <span class="badge bg-warning text-danger">{{$errors->first('status')}}</span>
                      </div>
                      </div>
                         <div>
                         <div class="form-group ">
                         <label for="exampleFormControlSelect1">Company</label>
                         <select name="company_id"  class="form-control text-white bg-dark" id="exampleFormControlSelect1">
                         <option value="{{$customer->company->id}}" >{{$customer->company->name}}</option>
                         @foreach ($company as $com)
                         <option value="{{$com->id}}" >{{$com->name}}</option>
                         @endforeach
                         

                         </select> 
                         <div>
                      <span class="badge bg-warning text-danger">{{$errors->first('company_id')}}</span>
                      </div>
                       </div>
               <button type="submit"  class="btn btn-warning btn-sm mt-2 rounded-pill mb-2">Update</button>
               @csrf
            </form>
      
         </div>
    </div>
 </div>









@endsection