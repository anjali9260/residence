<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutFaq;
use Illuminate\Http\Request;

class AboutFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.aboutFaq.index')->with('aboutFaqs', AboutFaq::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutFaq.create')->with('abouts', About::all());
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

            'title' => 'required',
            'para' => 'required',
            'about_id' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'para' => $request->para,
            'about_id' => $request->about_id,
        ];

        AboutFaq::create($data);
        return redirect()->route('aboutFaq.index')->with('success', 'AboutFaq Create Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutFaq  $aboutFaq
     * @return \Illuminate\Http\Response
     */
    public function show(AboutFaq $aboutFaq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutFaq  $aboutFaq
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutFaq $aboutFaq)
    {
        return view('admin.aboutFaq.create')->with('aboutFaq', $aboutFaq)->with('abouts', About::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutFaq  $aboutFaq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutFaq $aboutFaq)
    {
        $data = [

            'title' => $request->title,
            'para' => $request->para,
            'about_id' => $request->about_id,
        ];

        $aboutFaq->update($data);

        return redirect()->route('aboutFaq.index', $aboutFaq->id)->with('success', 'AboutFaq Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutFaq  $aboutFaq
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutFaq $aboutFaq)
    {

        $aboutFaq->delete();

        return redirect()->back()->with('success', 'AboutFaq Deleted Successfully');
    }








}