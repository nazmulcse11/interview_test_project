<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Extraservice;

class ExtraserviceController extends Controller
{
    public function extraservice (){
        $extraservices = Extraservice::latest()->get();
        return view('backend.extraservice.extraservice',compact('extraservices'));
    }

    //add edit notification
    public function addEditExtService(Request $request, $id=null){
        if($id==''){
                $service = new Extraservice();
                $title = 'Add Extra Service';
                $message = 'Service Successfully Added';
            }else{
                $service = Extraservice::findOrFail($id);
                $title = 'Edit Extra Service';
                $message = 'Service Successfully Updated';
            }

        if($request->isMethod('post')){
            $data = $request->all();
             $rules =[
               'title'=>'required',
               'price'=>'required|numeric',
            ];
            $customMessage = [
                'title.required'=>'Title is required',
                'price.required'=>'Price is required',
            ];
            $this->validate($request, $rules, $customMessage);
            
            
            $service->title = $data['title'];
            $service->price = $data['price'];
            $service->save();
        
            // Toastr::success($message, "Success", ["positionClass" => "toast-top-right","closeButton"=> "true"]);
            return redirect('admin/extraservice');
        }
        return view('backend.extraservice.add_edit_extraservice',compact('title','service'));
    }
}
