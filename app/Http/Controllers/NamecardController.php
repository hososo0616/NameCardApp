<?php

namespace App\Http\Controllers;

use App\Models\Namecard;
use Illuminate\Http\Request;
use App\Http\Requests\NamecardRequest;

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
    public function store(NamecardRequest $request)
    {
        // dd($request);

        $image_path = $request->file('image')->store('public/namecards/');

        // dd();

        Namecard::create([
            'name' => $request->name,
            // 'email' => $request->email,
            'companyname' => $request->companyname,
            'path' => basename($image_path),
        ]);

        return redirect()->route('namecard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $card = Namecard::findOrFail($id);
        return view('namecard.show')->with(['card' => $card]);
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
    public function update(NamecardRequest $request, $id)
    {
        // dd($request);
        // dd($id);

        //画像の保存
        $image_path = $request->file('image')->store('public/namecards/');

        //該当レコードの抽出
        $card = Namecard::findOrFail($id);

        //更新処理
        $card->name = $request->name;
        $card->companyname = $request->companyname;
        $card->path = basename($image_path);

        $card->save();

        return redirect()->route('namecard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //該当レコードの抽出
        $card = Namecard::findOrFail($id);

        //レコードの削除
        $card->delete();

        //リダイレクト
        return redirect()->route('namecard.index');
    }
}
