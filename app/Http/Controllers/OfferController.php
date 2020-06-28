<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfferController extends Controller
{
    public function getdata(){
        return Offer::get();
    }
    public function create(){
        return  view('Offers.create');
    }
    public function store(Request $request){

        $Rules = $this->getRules();
        $Message = $this->getMessage();
        $validator = Validator::make($request->all(),$Rules,$Message);
        if($validator->fails()){
           return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        Offer::create([
            'name'=> $request->name,
            'price'=> $request->price,
            'details'=> $request->details
        ]);
        return redirect()->back()->with(['success'=>'Added Offer']);
    }
    protected function getRules(){
        return [
            'name'=>'required|max:100|unique:offers,name',
            'price'=> 'required|numeric',
            'details'=>'required|max:100'
        ];
    }
    protected function getMessage(){
        return [
            'name.required'=>trans('message.name required'),
            'name.unique'=>trans('message.name must be unique'),
            'price.numeric'=>trans('message.price must be numeric '),
            'price.required'=>trans('message.price required '),
            'details.required'=>trans('message.details must be required')
        ];
    }
}
//$rules = $this->getRules();
//$message = $this->getMessage();
//$validator = Validator::make($request->all(),$rules,$message);
//if($validator->fails()){
//    return $validator->errors();
//}