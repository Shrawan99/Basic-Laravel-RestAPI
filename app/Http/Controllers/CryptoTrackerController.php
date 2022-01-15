<?php

namespace App\Http\Controllers;

use App\Models\CryptoTracker;
use Illuminate\Http\Request;
use WisdomDiala\Cryptocap\Facades\Cryptocap;

class CryptoTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        // dd(Cryptocap::getAssetsWithLimit(5));
        return view('welcome');
    }
}
