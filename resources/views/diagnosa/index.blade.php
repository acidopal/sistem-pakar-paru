@extends('layouts2.master')

@section('content2')

<div class="content-header">
    <div class="container-fluid">
        <!-- <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0 text-dark ml-2">Percobaan Diagnosa</h1> -->
            <!-- </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right mr-2">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">Diagnosa</li>
                </ol>
            </div>
        </div> --> 
    </div>
</div> 

<div class="container-fluid pl-4 pr-4">
    @error('gejala')
    <div class="alert alert-danger" style="background-color: #ea2538; color: white; border-color:red;" role="alert">
       <b>Silahkan pilih gejala terlebih dahulu!</b>
    </div>
    @enderror
    <div class="row" style="color:black">
        <div class="col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header border-0">
                    
                </div>
                <div class="card-body">
                    <h4 class="text-center">
                        <i class="fas fa-clipboard-list"> </i>
                        Halaman Diagnosis
                    </h4>
                    <h6 class="text-center mb-4" style="color: grey;"> Mendiagnosis Penyakit Berdasarkan Gejala yang Dialami</h6>
                    <!-- <hr> -->
                    {!! Form::open(array('route' => 'diagnosa.store','method'=>'POST')) !!}
                    <table class="table">
                        <thead class="">
                            <tr>
                                <th>
                                    <h5 class="mt-3">Silahkan Pilih Gejala yang Dirasakan :</h5>
                                    <p>Tips Memilih Gejala:<br>
                                        1. Pilihlah Gejala berdasarkan Gejala yang paling sering atau paling terasa pada
                                        diri Anda. <br>
                                        2. Pilihlah minimal 3 (Tiga) Gejala untuk mendapatkan hasil yang lebih akurat.
                                    </p>
                                </th>
                            </tr>
                        </thead>
                        <tbody align="left">
                            @foreach($data as $row)
                            <tr>
                                <td width="50%">{{$row->nama}}</td>
                                <td>
                                    <input type="radio" id="sangat-yakin-{{ $row->id }}" name="gejala-user-{{ $row->id }}" value="1">
                                    <label for="sangat-yakin-{{ $row->id }}">Sangat Yakin</label><br>
                                    <input type="radio" id="yakin-{{ $row->id }}" name="gejala-user-{{ $row->id }}" value="0.8">
                                    <label for="yakin-{{ $row->id }}">Yakin</label><br>
                                    <input type="radio" id="cukup-yakin-{{ $row->id }}" name="gejala-user-{{ $row->id }}" value="0.6">
                                    <label for="cukup-yakin-{{ $row->id }}">Cukup Yakin</label><br>
                                    <input type="radio" id="sedikit-yakin-{{ $row->id }}" name="gejala-user-{{ $row->id }}" value="0.4">
                                    <label for="sedikit-yakin-{{ $row->id }}">Sedikit Yakin</label><br>
                                     <input type="radio" id="tidak-tahu-{{ $row->id }}" name="gejala-user-{{ $row->id }}" value="0.2">
                                    <label for="tidak-tahu-{{ $row->id }}">Tidak Tahu</label><br>
                                    <input type="radio" id="tidak-{{ $row->id }}" name="gejala-user-{{ $row->id }}" value="0">
                                    <label for="tidak-{{ $row->id }}">Tidak</label><br>

                                    <input type="hidden" name="gejala[]" value="{{$row->id}}">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="box-footer">
                        <div class="text-center col-sm-12">
                            <button type="submit" class="btn btn-primary">Proses</button>
                            <a class="btn btn-danger" href="{{url('/pasien')}}"> Batal</a>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
 $(function () {
    $('#diagnosa').addClass('active');
  });
</script>



@endsection
