<?php

namespace App\Http\Controllers;
use App\Gejala;
use App\Pengetahuan;
use App\Penyakit;
use PDF;

use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Gejala::all();
        return view('diagnosa.index', compact('data'));
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
        $this->validate($request, [
            'gejala' => 'required'
        ]);
            
        $data = $request->all();

        //cari gejala   
        /**
         * 
         * get array gejala
         */
        $gejala = $data['gejala'];
        // dd($gejala);

        //cari penyakitnya
        $pengetahuan = Pengetahuan::select('id_penyakit')
            ->whereIn('id_gejala', $gejala)
            ->groupBy('id_penyakit')
            ->get();
        // dd($pengetahuan);

        foreach ($pengetahuan as $key => $value) {
            $penyakit[] = $value->id_penyakit;
        }
        // dd($penyakit);
        // var_dump($penyakit);
         foreach ($penyakit as $key => $value){
            // dd($value);
            $count = 0;
            foreach ($gejala as $k => $v) {
                $cek = Pengetahuan::select('nilai_cf')
                    ->where([
                        ['id_penyakit', '=', $value],
                        ['id_gejala', '=', $v],
                    ])->first();
                // dd($value);
                // dd($gejala);

                if(!is_null($cek)){
                    $nilai_akhir_cf[$value][] = $cek->nilai_cf * $data['gejala-user-'.$v];
                    // dd($nilai_cf);
                }
               
            }
        }

        foreach ($nilai_akhir_cf as $key => $value) {
            if(count($nilai_akhir_cf[$key]) > 1){
                for($i = 0; $i < count($value) - 1; $i++) {
                    // echo 'penyakit '.$key.'<br>';
                    $cf[$key] = $value[$i] + ($value[$i+1] * (1 - $value[$i]));
                    // echo $value[$i].' + '.$value[$i+1].' x '.(1 - $value[$i]).'<br>';
                    $value[$i+1] = $cf[$key];
                    // echo $cf[$key].'<br>';
                    $cf[$key] *= 100;
                }
            } else {
                $cf[$key] = $nilai_akhir_cf[$key][0] * 100;
            }
        }

         // dd($cf);
        // dd($nilai_akhir_cf);

         foreach($cf as $key => $value) {
             // echo $value.'<br>';
            $penyakit = Penyakit::find($key);
            $hasil_akhir[$key][0] = $penyakit['nama'];
            $hasil_akhir[$key][1] = $value;
            $hasil_akhir[$key][2] = $penyakit['penanganan'];
         }
        //  dd($hasil_akhir);
         usort($hasil_akhir, function($a, $b) {
            return $b[1] <=> $a[1];
        });

         foreach ($gejala as $value) {
             $g = Gejala::find($value);
             $nama_gejala[]['nama'] = $g['nama'];
         }
         
        //  dd($hasil_akhir);
        //  dd($nama_gejala);
         return view('diagnosa.hasil-diagnosa', compact('hasil_akhir','nama_gejala'));
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

    public function cetakpdf(Request $request)
    {
        // return view('diagnosa.laporan', ['data'=>$request->all()]);
        // dd($request->all());
        // $data = $request->all();
        $pdf = PDF::loadview('diagnosa.laporan',['data'=>$request->all()]);
        return $pdf->stream('hasil-diagnosa.pdf');
       
    }
}
