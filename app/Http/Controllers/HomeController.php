<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('home.display');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $model = new Home();

        $model->caption = $request->input('caption');

        if ($request->has('image')){
            $path = $request->file('image')->store('image','public');
            $model->image = $path;

        }

        // Image storing alternative method

        // if(isset($input['image'])&&!is_null($input['image'])) {
        //     $inputPath=$request->image->store('public/assets/image');
        //     $model->image="/".implode("storage",explode("public",$inputPath));

        // }else {
        //     $model->image = '';
        // }


        $model->save();

        return redirect('home')->with('success','Data is added successfully');

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
        $home =Home::find($id);
        return view('home.update')->with('home',$home);
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
        $model = Home:: find($id);

        $model->caption = $request->input('caption');

        if ($request->has('image')){
            $path = $request->file('image')->store('image','public');
            $model->image = $path;

        }

        $model->save();

        return redirect('home')->with('success','Data is Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            $home=Home::find($id);
            $home->delete();

        return redirect('home')->with('danger','Data has been Deleted');

    }
}
