<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded=[];
    use HasFactory;
     public function getStatusAttribute($attribute){

       return[
         1 =>'Active',
         0 =>'Inactive'
       ][$attribute];

     }
     // Add [name] to fillable property to allow mass assignment on [App\Models\Customer].
    // For this exception we have to protected fields as below if we leave the arry empty still there will be error
    // Fillable Error Prevention Example
    //  protected $fillable=['name','email'];
    // No worries we have crafted arrys for data inspection we dont need to worry for mass assigning so we leave guarded as null
    // protected $guarded=[];
    // Scopes always start with small scope and then capital letter we can call them in controller with there name in small without using word scope
    // public function scopeActive($query){
    //   return  $query ->where('name','Mohid Mir');
    // }
    // this is use of model with scope so you dont have to put your query in controller to pass it to view
   public function company(){

             return $this->belongsTo(Company::class);

   }



}
