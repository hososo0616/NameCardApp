<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function store($id) {
        $user = \Auth::user();
        if (!$user->is_bookmark($id)) {
            $user->bookmark_namecards()->attach($id);
        }
        return back();
    }

    public function destroy($id) {
        $user = \Auth::user();
        if ($user->is_bookmark($id)) {
            $user->bookmark_namecards()->detach($id);
        }
        return back();
    }
}
