@extends('layouts.master')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row ml-2 mr-2">
            <div class="col-sm-12">
                <h2 class="font-weight-bold">Admin Panel</h2>
                <hr>
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">Admin</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<div class="card ml-4 mr-4">
    <div class="card-header">
        <div class="row">
            <div class="col-6 mt-2">
                <h2 class="card-title ml-2 font-weight-bold">
                    <i class="fas fa-user pr-1"></i>
                    Data Admin
                </h2>
            </div>
            <div class="col-6">
                <a href="{{ route('admin.create')}}" class="btn btn-primary btn-sm modal-show float-right badge-pill mr-4 text-light"  title="Tambah Data">
                    <i class="fa fa-user-plus"></i> Tambah Data Admin
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class='table-responsive'>
                        <table id="datatable" class="table table-bordered table-hover" width="100%">
                            <thead class="thead-light">
                                    <tr>
                                    <th> No </th>
                                    <th> Nama </th>
                                    <th> Email </th>
                                    <th> No Telepon </th>
                                    <th style="width:150px"> Aksi </th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @endsection

    @section('icon')
    class="fas fa-user ml-1 mt-1 mr-2"
    @endsection

    @push('scripts')
    <script>

    $("#admin").addClass("active");

        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.admin') }}",
            columns: [
                
                { data: 'DT_RowIndex', name: 'id'},
                { data: 'nama', name: 'nama'},
                { data: 'email', name: 'email'},
                { data: 'no_telepon', name: 'no_telepon'},
                { data: 'action', name: 'action',  orderable: false, searchable:false, class:"text-center"}
            ]
        });
    </script>
    @endpush