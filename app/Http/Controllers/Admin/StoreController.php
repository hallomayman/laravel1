<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Store;

class StoreController extends Controller
{
     public function index(){
       return view('admin.store.index');

     }

     public function create(){
        return view('admin.store.create');

     }

     public function store(StoreRequest $request){
        $name = $request->input('name');
        $address = $request->input('address');

        if($request->hasFile('logo')){
            $file=$request->file();
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('auploads/store',$filename);
            $request->logo = $filename;

        }
        $store =new Store();
        $store->name = $name;
        $store->address = $address;
        $store->logo = $filename;

        $store->save();
        // dd($request);

        return redirect('admin/stores')->with('massage', 'Store Add Successfully');

     }
}

