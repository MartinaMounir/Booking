<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Order;
use App\Models\Stay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {     $Stays = Stay::where('title', 'LIKE', '%' . $request->search . '%')->latest()->get();
        return view('home', compact('Stays'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stay $stay)
    {
        return view('stays.show', compact('stay'));

    }
public function departments(Stay $stays,Country $countries ){
    $stays = Stay::orderBy('id', 'DESC')->get();


    $countries = Country::all();
    return view('departments', compact('stays'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function AddToCart(int $stayId)
    {  $stay=Stay::find($stayId);
        $order = Order::where(
            [
                'user_id'=>auth()->id(),
                'stay_id' => $stayId
            ]
        )->first();
        if($order==null){
            Order::create([
                'user_id'=>auth()->id(),
                'stay_id' => $stayId

            ]);
            $stay->update([
                'available' => $stay->available = 1
            ]);

            return redirect()->back()->with('success', 'Added To cart');
        }
else{
    return redirect('/')->with('success', 'Added To cart');
}
    }
    public function cart(){
        $orders= Order::where('user_id',auth()->id())->get();

        return view('client.view_cart', compact('orders'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $stay_id)
    {  $stay=Stay::find($stay_id);
        $stay->update([
            'available' => $stay->available = 0
        ]);
        $order=Order::where([
            'stay_id' => $stay_id
        ]);
        $order->delete();

        return redirect()->back()->with('success', 'order delete');
    }
}
