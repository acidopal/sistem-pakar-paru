<?php

namespace App\Http\Controllers;
use App\Penyakit;
use Yajra\DataTables\Datatables;

use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penyakit.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Penyakit();
        return view('penyakit.form', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = $request->all();
        
        $this->validate($request, [
            'nama' => 'required|min:3',
            'keterangan' => 'required',
            'penanganan' => 'required',
            'gambar' => 'mimes:jpeg,jpg,png',
            ]);

        if ($request->hasFile('gambar')){
            $model['gambar'] = '/upload/gambar/'.rand().'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('upload/gambar/'), $model['gambar']);
        } 
       
        // $model = [
        //     'nama' => $request['nama'],
        //     'keterangan' => $request['keterangan'],
        //     'penanganan' => $request['penanganan'],
        // ];
        
        // return Penyakit::create($model);
        $model = Penyakit::create($model);
        return $model;

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
        $model = Penyakit::findOrFail  ($id);
        return view('penyakit.form', compact('model'));
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
        $this->validate($request, [
            'nama' => 'required|min:3',
            'keterangan' => 'required',
            'penanganan' => 'required',
            'gambar' => 'mimes:jpeg,jpg,png',

        ]);
        $modal = $request->all();
        $model = Penyakit::findOrFail($id);
        
        $modal['gambar'] = $model->gambar;
        if ($request->hasFile('gambar')){
            if (!$model->gambar == NULL){
                unlink(public_path($model->gambar));
            }
            $modal['gambar'] = '/upload/gambar/'.rand().'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('upload/gambar/'), $modal['gambar']);
        }
        // $model = Penyakit::find($id);
        // $model-> nama = $request['nama'];
        // $model-> keterangan = $request['keterangan'];
        // $model-> penanganan = $request['penanganan'];
        // $model-> update();

        // return $model;
       
        $model->update($modal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Penyakit::findOrFail($id);
        if (!$model->gambar == NULL){
            unlink(public_path($model->gambar));
        }
        $model->delete();
    }
    public function dataTable()
    {
        $model = Penyakit::query();
        return DataTables::of($model)

        ->addColumn('show_gambar', function($model){
            if ($model->gambar == NULL){
                return 'No Image';
            }
            return '<img src="'. url($model->gambar) .'" class="rounded-square" width="60" height="60"  alt="">';
        })
            ->addColumn('action', function ($model) {
                return view('layouts.action', [
                    'model' => $model,
                    'url_edit' => route('penyakit.edit', $model->id),
                    'url_destroy' => route('penyakit.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action','show_gambar'])
            ->make(true);
    }
}
