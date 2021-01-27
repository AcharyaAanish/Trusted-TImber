<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutus;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aboutus.display');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $about = new Aboutus();

        $about->introduction = $request->input('introduction');

        if($request->has('image')){
            $pa = $request->file('image')->store('image','public');
            $about->image = $pa;
        }

        $about->save();

        return redirect('aboutus')->with('success','Data is Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = Aboutus::find($id);

        return view('aboutus.update')->with('about',$about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $about =  Aboutus::find($id);

        $about->introduction = $request->input('introduction');

        if($request->has('image')){
            $pa = $request->file('image')->store('image','public');
            $about->image = $pa;
        }

        $about->save();

        return redirect('aboutus')->with('success','Data is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about=Aboutus::find($id);
        $about->delete();

    return redirect('aboutus')->with('danger','Data is Deleted');
    }
}
