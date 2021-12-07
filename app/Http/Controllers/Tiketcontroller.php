<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class Tiketcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Tiket::all();

        return view ('tiket.index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new tiket;
        return view ('tiket.create', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new tiket;
        $model->id_tiket = $request->id_tiket;
        $model->subjek = $request->subjek;
        $model->from = $request->from;
        $model->prioritas = $request->prioritas;
        $model->save();

        return redirect('tiket')->with('success',"Data Berhasil diSimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = tiket::find($id);
        return view ('tiket.edit', compact(
            'model'
        ));
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
        $model = tiket::find($id);
        $model->id_tiket = $request->id_tiket;
        $model->subjek = $request->subjek;
        $model->from = $request->from;
        $model->prioritas = $request->prioritas;
        $model->save();

        return redirect('tiket')->with('success',"Data Berhasil diUpdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Hapus Data 
        $model = tiket::find($id);
        $model->delete();

        return redirect('tiket')->with('danger',"Data Berhasil diHapus");
    }
}
