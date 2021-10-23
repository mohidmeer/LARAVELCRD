@extends('layout/app')
@section('title','Details For '.$customer->name )
@section('content')


<div class="container pt-3">

    <h2>Details For {{$customer->name}} </h2>
    <div class="card" style="width: 18rem;">
  <div class="card-body text-white bg-dark ">
    <h4 class="card-title">{{$customer->name}}</h5>
    <h6 class="card-subtitle mb-2 ">{{$customer->company->name}}</h6>
    <h6>{{$customer->status}} <span class="<?php echo ($customer->status=='Inactive') ? 'bg-danger':'bg-success'; ?> rounded-circle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h6>
    <p class="card-text">{{$customer->email}}</p>
                <button type="button"  class="btn btn-danger btn-sm mt-2 rounded-pill mb-2"> 
                <a href="/customer/{{ $customer->id}}/delete" class=" text-light  text-decoration-none link-success">Delete</a>
                </button>
                <button type="button"  class="btn btn-warning btn-sm mt-2 rounded-pill mb-2"> 
                <a href="/customer/{{$customer->id}}/edit" class=" text-light  text-decoration-none link-success">Edit</a></button>
                <form class="form-inline" action="/customer/{{$customer->id}}" method="POST">
                  @method ('DELETE')
                  @csrf
                <button type="Submit" class="btn btn-danger text-light btn-sm mt-2 rounded-pill mb-2">Delete</button>
                </form>
                
  </div>
</div>
 
</div>

@endsection