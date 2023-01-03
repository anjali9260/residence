<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.portfolio.index')->with('portfolios', Portfolio::simplePaginate(4));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function search()
    {
        $search = $_GET['search'];
        $portfolios = DB::table('portfolios')->where('title', 'like', '%' . $search . '%')->get();
        return view('admin.portfolio.index', ['portfolios' => $portfolios]);

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

            'type' => 'required',
            'image' => 'required|image',
            'address' => 'required',
            'title' => 'required',
            'rate' => 'required',
            'paragraph' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'area' => 'required',
            'slug' => 'required',

        ]);

        $data = [

            'user_id' => Auth::user()->id,
            'type' => $request->type,
            'address' => $request->address,
            'title' => $request->title,
            'rate' => $request->rate,
            'paragraph' => $request->paragraph,
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,
            'area' => $request->area,
            'slug' => Str::slug($request->slug, '-'),

            'image' => $request->file('image')->storePublicly('backend/portfolio', 'public'),
        ];

        Portfolio::create($data);
        return redirect()->route('portfolio.index')->with('success', 'Portfolio Create Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.create')->with('portfolio', $portfolio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $data = [

            'user_id' => Auth::user()->id,
            'type' => $request->type,
            'address' => $request->address,
            'title' => $request->title,
            'rate' => $request->rate,
            'paragraph' => $request->paragraph,
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,
            'area' => $request->area,
            'slug' => Str::slug($request->slug, '-'),
        ];

        if ($request->has('image')) {
            $request->validate([
                'image' => 'image',
            ]);

            $data['image'] = $request->file('image')->storePublicly('backend/portfolio', 'public');

            if (Storage::disk('public')->exists($portfolio->image)) {
                Storage::disk('public')->delete($portfolio->image);
            }
        }

        $portfolio->update($data);

        return redirect()->route('portfolio.index', $portfolio->id)->with('success', 'Portfolio Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        if (Storage::disk('public')->exists($portfolio->image)) {
            Storage::disk('public')->delete($portfolio->image);
        }

        $portfolio->delete();

        return redirect()->back()->with('success', 'Portfolio Deleted Successfully');
    }

    public function setfeatured($id)
    {

        $portfolio = Portfolio::find($id);

        $portfolio->featured = 1;

        $portfolio->save();

        return redirect()->back()->with('success', 'Portfolio featured Successfully');

    }

    public function removefeatured($id)
    {

        $portfolio = Portfolio::find($id);

        $portfolio->featured = 0;

        $portfolio->save();

        return redirect()->back()->with('success', 'Portfolio Remove From Featured Successfully');

    }

    public function setoffer($id)
    {

        $portfolio = Portfolio::find($id);

        $portfolio->offer = 1;

        $portfolio->save();

        return redirect()->back()->with('success', 'Portfolio offer Successfully');

    }

    public function removeoffer($id)
    {

        $portfolio = Portfolio::find($id);

        $portfolio->offer = 0;

        $portfolio->save();

        return redirect()->back()->with('success', 'Portfolio Remove From offer Successfully');

    }

}