<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inbox;

class Inboxcontroller extends Controller
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
        $datas = Inbox::all();

        return view ('inbox.index', compact(
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
        $model = new inbox;
        return view ('inbox.create', compact(
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
        $model = new inbox;
        $model->nama = $request->nama;
        $model->subjek = $request->subjek;
        $model->email = $request->email;
        $model->nomor = $request->nomor;
        $model->save();

        return redirect('user')->with('success',"Data Berhasil di Kirim");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = inbox::find($id);
        return view ('inbox.edit', compact(
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
        $model = inbox::find($id);
        $model->nama = $request->nama;
        $model->subjek = $request->subjek;
        $model->email = $request->email;
        $model->nomor = $request->nomor;
        $model->save();

        return redirect('inbox')->with('success',"Data Berhasil diUpdate");
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
        $model = inbox::find($id);
        $model->delete();

        return redirect('inbox')->with('danger',"Data Berhasil diHapus");
    }
}
