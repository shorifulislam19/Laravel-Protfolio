<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class MainPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $main = Main::first();
        return view('pages.main',compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,)
    {
        $this->validate($request,[
            'title' =>'required|string',
            'sub-title' =>'required|string',
        ]);
        
        $main = Main::first();
        
        $main->title = $request->title;
        $main->sub_title = $request->sub_title;

        if ($request->file('bc_img')) {
            $img_file = $request->file('bc_img');
            $img_file->storeAs('public/img/', 'bc_img.' . $img_file->getClientOriginalExtension());
            $main->bc_img = 'storage/img/bc_img.' . $img_file->getClientOriginalExtension();
        }

        if ($request->file('resume')) {
            $pdf_file = $request->file('resume');
            $pdf_file->storeAs('public/pdf/', 'resume.' . $pdf_file->getClientOriginalExtension());
            $main->resume = 'storage/pdf/resume.' . $pdf_file->getClientOriginalExtension();
        }

        $main->save();

        return redirect()->route('admin.main')->with('success', "Main Page data has been updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
