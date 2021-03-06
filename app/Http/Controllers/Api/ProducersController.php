<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Producer;
use Illuminate\Http\Request;

class ProducersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Producer[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Producer::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producer = new Producer();
        $producer->name = $request->name;
        $producer->tax_code = $request->tax_code;
        $producer->phone = $request->phone;
        $producer->email = $request->email;
        $producer->note = $request->note;
        $producer->save();
        return response()->json(["producer"=>$producer,"success"=>"Nhà sản xuất thêm thành công!"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return array|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $producer = Producer::find($id);
        return ['self'=>$producer,'self_purchase'=>$producer->Purchase];
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
