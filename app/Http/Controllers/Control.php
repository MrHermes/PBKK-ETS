<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Item;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class Control extends Controller
{
    public function getAll(): View
    {
        $item = Item::all();
        return view('dashboard')->with('item', $item);
    }
    public function index()
    {
        $item = DB::table('jenis')->get();
        return $item;
    }
    
}
