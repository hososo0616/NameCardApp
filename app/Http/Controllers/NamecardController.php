<?php

namespace App\Http\Controllers;

use App\Models\Namecard;
use Illuminate\Http\Request;

class NamecardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Namecard::All();

        return view('namecard.index')->with(['cards' => $cards]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('namecard.create');
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
    public function show(Namecard $namecard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Namecard $namecard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Namecard $namecard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Namecard $namecard)
    {
        //
    }
}
