<?php

namespace App\Http\Controllers;
use App\Http\Resources\ApiResource;

use Illuminate\Http\Request;
use App\Models\api;

class ApiCrudController extends Controller
{
  public function index()
        {

        $Apis=api::paginate(5);
        

        return ApiResource::collection($Apis);


        }


 public function store(Request $request)

    {
        $apis = new api();

        $apis->name = $request->name; 

        $apis->email = $request->email; 

        $apis->phone = $request->phone;
        if ($apis->save()) 
        {

             return new ApiResource($apis);
        } 

    }

 public function show($id)
        {

            $apis = api::findOrfail($id);
            return new ApiResource($apis);
        }

 public function edit($id)
    {

    }   

 public function update(Request $request,$id)
   {
    $apis = api::findOrfail($id);
      $apis->name = $request->name; 

      $apis->email = $request->email; 

      $apis->phone = $request->phone;

       if ($apis->update()) 
        {

             return new ApiResource($apis);
        }

   }

 public function delete($id)
   {
     $apis = api::findOrfail($id);
     if ($apis->delete()) 
     {
        return new ApiResource($apis);
         
     }


   }

 }  

