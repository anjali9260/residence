<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index')->with('abouts' ,About::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'title1' => 'required',
            'para1' => 'required',
            'title2' => 'required',
            'para2' => 'required',
            'para3' => 'required',
            'image1' => 'required|image',
            'image2' => 'required|image',
         ]);



         $data = [


            'title1'=>$request->title1,
            'para1'=>$request->para1,
            'title2'=>$request->title2,
            'para2'=>$request->para2,
            'para3'=>$request->para3,

            'image1' =>  $request->file('image1')->storePublicly('backend/about' , 'public'),
            'image2' =>  $request->file('image2')->storePublicly('backend/about' , 'public'),
          ];



         About::create($data);
        return redirect()->route('about.index')->with('success', 'About Create Successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.create')->with('about', $about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {


        $data = [


            'title1'=>$request->title1,
            'para1'=>$request->para1,
            'title2'=>$request->title2,
            'para2'=>$request->para2,
            'para3'=>$request->para3,
          ];
if ($request->has('image1')) {
    $request->validate([
        'image1'=>'image',
    ]);
    $data['image1'] = $request->file('image1')->storePublicly('backend/about' , 'public');

    if(Storage::disk('public')->exists($about->image1)){
        Storage::disk('public')->delete($about->image1);
    }

}

if ($request->has('image2')) {
    $request->validate([
        'image2'=>'image',
    ]);

    $data['image2'] = $request->file('image2')->storePublicly('backend/about' , 'public');

    if(Storage::disk('public')->exists($about->image2)){
        Storage::disk('public')->delete($about->image2);
    }

}



$about->update($data);

return redirect()->route('about.index')->with('success' , 'About Updated Successfully');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        if(Storage::disk('public')->exists($about->image1)){
            Storage::disk('public')->delete($about->image1);
        }

        if(Storage::disk('public')->exists($about->image2)){
            Storage::disk('public')->delete($about->image2);
        }


        $about->delete();

        return redirect()->back()->with('success', 'About Deleted Successfully');


    }
}