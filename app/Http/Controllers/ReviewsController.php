<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        return response()->json(Review::all());
    }
}
