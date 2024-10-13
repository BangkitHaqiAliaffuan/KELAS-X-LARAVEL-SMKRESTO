<?php

namespace App\Http\Controllers;

use App\Models\Orderdetail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOrderdetailRequest;
use App\Http\Requests\UpdateOrderdetailRequest;

class OrderdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Orderdetail::join('orders', 'order_details.idorder', '=', 'orders.idorder')
        ->join('menus','order_details.idmenu', '=','menus.idmenu')
        ->join('pelanggans','orders.idpelanggan', '=','pelanggans.idpelanggan')
        ->select('order_details.*','orders.*', 'menus.*', 'pelanggans.*')
        ->paginate(3);
        return view('Backend.detail.select', ['details'=>$details]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $tglmulai = $request->tglmulai;
        $tglakhir = $request->tglakhir;

        $details = Orderdetail::join('orders', 'order_details.idorder', '=', 'orders.idorder')
        ->join('menus','order_details.idmenu', '=','menus.idmenu')
        ->join('pelanggans','orders.idpelanggan', '=','pelanggans.idpelanggan')
        ->whereBetween('orders.tglorder', [$tglmulai, $tglakhir])
        ->select('order_details.*','orders.*', 'menus.*', 'pelanggans.*')
        ->paginate(3);
        return view('Backend.detail.select', ['details'=>$details]);
  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderdetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderdetailRequest $request, Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orderdetail $orderdetail)
    {
        //
    }
}
