<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use Illuminate\Support\Facades\DB;

class CollectionsController extends Controller
{
    public function index() {

        $collections = Collection::orderBy('day')->orderBy('hour')->get();

        return view('collections.index', compact('collections'));
    }

    public function create() {

        return view('collections.create');
    }

    public function store() {

        $attributes =  request()->validate([
            'typeOfGarbage' => 'required',
            'day' => 'required|min:1|max:7|integer',
            'hour' => 'required|min:5|max:5'
        ]);

        if(Collection::where('typeOfGarbage', '=', request('typeOfGarbage'))->where('day', '=', request('day'))->exists()){

            return back()->withErrors('This garbage collection is alredy present');
        }
        else {

            Collection::create($attributes);

            return redirect('/')->with('success', 'The collection has been created');   


        }


        
    }



    public function show(Collection $collection) {


        return view('collections.show', compact('collection'));


    }



    public function edit(Collection $collection) {


        return view('collections.edit', compact('collection'));

    }



    public function update(Collection $collection) {
        if(Collection::where('typeOfGarbage', '=', request('typeOfGarbage'))
        ->where('day', '=', request('day'))
        ->where('hour', '=' , request('hour'))
        ->exists()){

            return back()->withErrors('This is the current collection, apply modify or back to home');

        } else {

            $collection->update(request(['typeOfGarbage', 'hour', 'day']));

            return redirect('/')->with('success', 'The collection has been updated');   
 

        }

    }



    public function destroy(Collection $collection) {

        $collection->delete();

        return redirect('/')->with('success', 'The collection has been deleted');   



    }
}
