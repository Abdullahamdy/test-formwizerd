<?php

namespace App\Http\Controllers;

use App\Models\Influencer;
use Illuminate\Http\Request;
use App\Models\InfluencerClassification;

class ClassificationController extends Controller
{


    public function getview(){
        $influencers = Influencer::all();
        return view('index',compact('influencers'));
    }
    public function index(){
        $classifications = InfluencerClassification::all();
        return view('testclassification',compact('classifications'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|unique:influencers|max:255',
            'classification_ids' => 'required',
        ]);
        $inputs = $request->except('token','submit');
        $inputs ['name'] = $request->name;
        $inputs ['classification_ids'] = implode(',',$request->classification_ids);
        $influencer = Influencer::create($inputs);
    }

    public function edit($id){
       $influencer =  Influencer::find($id);
        $classifications = InfluencerClassification::all();
        return view('eidtinfluencer',compact('influencer', 'classifications'));

    }

    public function update(Request $request,$id){
        $influencer = Influencer::find($id);
        $inputs = $request->except('token', 'submit');
        $inputs['name'] = $request->name;
        $inputs['classification_ids'] = implode(',', $request->classification_ids);
        $influencer->update($inputs);


    }
}
