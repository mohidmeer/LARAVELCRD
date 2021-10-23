@extends('layout/app')
@section('title','HOME')
@section('content')

<div class="container pt-3 ">
   <div class="row">
        <div class="col-12 text-white bg-dark rounded ">
          <form class="text-white bg-dark" action="custcreate" method="POST">
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

                        <div class="form-group">
                         <label for="exampleFormControlSelect1">Status</label>
                         <select name="status" class="form-control text-white bg-dark" id="exampleFormControlSelect1">
                         <option value="1"    >Active</option>
                         <option value="0"    >Inactive</option>
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
                <button type="submit"  class="btn btn-success btn-sm mt-2 rounded-pill mb-2">Submit</button>
                <button type="button"  class="btn btn-success btn-sm mt-2 rounded-pill mb-2"> 
                <a href="customer/create" class=" text-light  text-decoration-none link-success">Create</a>
                </button>               
               @csrf
            </form>
      
         </div>
    </div>
 </div>









 <div class="container pt-3" >
   
<div class="table-responsive-md">
<table class="table table-dark table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Company</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    @php $count=1 ;@endphp
    @foreach ($customer as $cust) 
    
    <tr class= <?php echo($cust->status=='Active') ?  "table-succeess" : "table-dangeer" ?> >
      <th scope="row">{{$count}}</th>
      <td>{{$cust->name}}</td>
      <td>{{$cust->email}}</td>
      <td>{{$cust->company->name}}</td>
      <td>{{$cust->status}}</td>
      <td>    <button type="button"  class="btn btn-warning btn-sm mt-2 rounded-pill mb-2"> 
                <a href="/customer/{{$cust->id}}/edit" class=" text-light  text-decoration-none link-success">Update</a>
                </button><span> &nbsp;&nbsp;</span>
                <button type="button"  class="btn btn-danger btn-sm mt-2 rounded-pill mb-2"> 
                <a href="/customer/{{$cust->id}}/delete" class=" text-light  text-decoration-none link-success">Delete</a>
                </button><span> &nbsp;&nbsp;</span> <button type="button"  class="btn btn-success btn-sm mt-2 rounded-pill mb-2"> 
                <a href="/customer/{{ $cust->id}}" class=" text-light  text-decoration-none link-success">Show</a>
                </button> </td>
                <td><span class="<?php echo ($cust->status=='Inactive') ? 'bg-danger':'bg-success'; ?> rounded-circle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
    </tr>
     @php $count++; @endphp
     @endforeach
  </tbody>
</table>
</div>
</div>
 <div class="container pt-4">
   {{--@foreach ($company as $comp) 
  <h3>{{$comp->name}}</h3>
   @foreach ($comp->customers as $custo )
      <li>{{$custo->name}}</li>
  @endforeach   

  @endforeach*/--}} 
</div>

      
          <script type="text/javascript" href="{{url('/CDN/Chartcdn/Chart.js')}}"></script> 
            <canvas id="myChart"></canvas>
            
            <script>
             
// USING CHARTJS LIABRARY
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange','Brown'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3,6,8,111],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
          
          </script>
         



               



@endsection