<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("customer");
    }

    public function registercustomer()
    {
        return view("registcust");
    }

    function generateCode(){

        $code = substr(uniqid(), 0, 8);
        $exists = Customers::where('kode_referal', $code)->count();
        if($exists > 0){
            $this->generateCode();
        }
        return $code;
    }

    public function daftarcustomer(Request $request)
    {

        //create post

        $kode = $this->generateCode();
        Customers::create([
            'kode_referal'  => $kode,
            'nama'          => $request->nama,
            'emaiil'        => $request->email,
            'phone'         => $request->phone,
            'alamat'        => $request->alamat,
            'jenis_mobil'   => $request->jenis_mobil,
            'tipe_karpet'   => $request->tipe_karpet,
            'status'        => 1,
        ]);

        //redirect to index
        return redirect('thanks/'.$kode);
    }

    public function thankyou($kodereferal)
    {
        $claim = Customers::where('kode_referal', $kodereferal)->first();
        return view('thanks',['claim'=>$claim]);
    }

    public function downloadpage($kodereferal)
    {
        $claim = Customers::where('kode_referal', $kodereferal)->first();

        return view('downloadpage',['claim'=>$claim]);
    }

    public function downloadhal($kodereferal)
    {
        $targetPath = __DIR__.'/temp/nodeScreenshot.png';
        $claim = Customers::where('kode_referal', $kodereferal)->first();
        Browsershot::url('https://google.com')->setScreenshotType('jpeg', 100)->save('new.jpg');
       
        return redirect('thanks/'.$kode);
    }


   

    public function claimreferal($kodereferal)
    {
        $claim = Customers::where('kode_referal', $kodereferal)->first();
       return view('claimvoucher',['claim'=>$claim]);
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
     * @param  \App\Models\Customers  $customers
     * @return \Ill  () uminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        //
    }
}
