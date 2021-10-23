<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link  href="{{url('/CDN/bootstrapcdn/css/bootstrap.css')}}"  rel="stylesheet">
     <!-- offline linking method -->
     <script href="{{url('/CDN/jquery/jquery.js')}}"></script>
     <script >
    
     </script>
    
    
    
   
   
   
   <!-- online cdn meathod -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
   
   
   
   
   <style>
      
#grad {
  background: #000000; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #000000, #434343); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #000000, #434343); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
       }
</style>
    <title>@yield('title')</title>
  </head>
  <body id="grad" class="text-white" >
       @include('layout/navbar')   
      
       @yield('content')
       

          <!-- offline liabrary linking -->
          

      <script href="{{url('/CDN/bootstrapcdn/js/bootstrap.js')}}"></script>
      <!-- onlinecdn procedure -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  </body>