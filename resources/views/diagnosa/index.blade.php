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
                                <th width="30"></th>
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
                                <td><input type="checkbox" name="gejala[]" class="flat"  value="{{$row->id}}"></td>
                                <td>{{$row->nama}}</td>
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
