<?php
namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;
class customercontroller extends Controller
{
    public function index(){
      

        $customer=Customer::all();
        $company=Company::all();
        // using where clause on data
        // $customer=Customer::where('status','0')->get();
        //  $customer = Customer::active()->get();->this is ways to call 
        // query from models but remeeber the method name should be small while in model it should be capital like "scopeActive"
        return view ('Customer',compact('customer','company'));

         //Old meathod for passing arrays to views    
        // return view('mysql',[
        // 'product'=>$products,
        // 'customer'=>$customer
        // ]);
     //  above meathod is more compact for passing data to pages

    }
   
   
   
   
    public function save(){
      // dd(request()->all());
      $data = request()-> validate([
             'name'=>  'required|min:4|unique:customers,name',
             'email' =>  'required|email',
             'status' => 'required|boolean',
             'company_id'=> 'required',
      ]);
      
       Customer::CREATE($data);
       return redirect('customer');

        // This meathod of storing data is super clean now we use $data variable to make new entry in data by using create
        // Below is another old meathod which does same thing 

            //    $Customer = new Customer();
            //    $Customer -> name = request('name');
            //    $Customer -> email = request('email');
            //    $Customer -> save();
            //    return back();
            

            
        //my crappy logic for validation which now laravel is taking care of
               // if(!(request('name')==null)){
        //     //    
        //    echo 'SERVICE SAVED';
        // } else {
        //     echo 'NO SERVICE ENTERED';
        // }
        // return back();
        //  dd(request('name'));
    }
       
   


         public function create(){
             $customer=Customer::all();
            $company=Company::all();
            return view('customers/create',compact('customer','company'));
        
        
        
         }
        
           
       public function show(  $customer){
        //we can pass model name and laravel will take care of all the fetching and displaying but i like it this way
        //that meathod will be called route model binding 
              
        // dd($customer);
        // $customer=Customer::find($customer); this meathod revokes error on 404 situation
        $customer =Customer::where('id',$customer)->firstOrFail(); //onliner for 404 page error
        return view ('/customers/show',compact('customer'));


       }



      public function edit(Customer $customer){
       $company=Company::all();
       return view('customers.edit',compact('customer','company'));
      }

     
     
     
     
      public function update(Customer $customer){
        $data1 = request()-> validate([
          'name'=>    'required|min:4',
          'email' =>  'required|email',
          'status' => 'required',
          'company_id'=> 'required',]);
          $customer->update($data1);
          // dd($data1);
          // dd(request('status'));
           return redirect('customer/'.$customer->id);
      }

      public function delete($customer){

          $cus=Customer::where('id',$customer)->firstOrFail();
          $cus->delete();
          //  if we use route model binding thats the way to delete but we are using links thats why 
          //  we are doing it manually as above
          // $customer->delete();
           return redirect('customer');

        // dd(request());
      }




    }
