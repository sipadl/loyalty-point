<?php

namespace App\Http\Controllers;

use App\Models\Loyalty;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Auth;

class LoyaltyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = Auth::user();
        $history = Loyalty::where('user_id', $user->id)->orderBy('created_at', 'desc')->take(10)->get();
        $totalPoints = Loyalty::where('user_id', $user->id)->sum('point');

        return view('main.home', compact('history', 'totalPoints'));
    }

    public function riwayat()
    {
        $user = Auth::user();
        $history = Loyalty::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        $totalPoints = Loyalty::where('user_id', $user->id)->sum('point');

        return view('main.riwayat', compact('history', 'totalPoints'));
    }

    public function coupon()
    {
        $coupon = Coupon::get();
        return view('main.coupon', compact('coupon'));
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
    public function show(Loyalty $loyalty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loyalty $loyalty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loyalty $loyalty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loyalty $loyalty)
    {
        //
    }
}
