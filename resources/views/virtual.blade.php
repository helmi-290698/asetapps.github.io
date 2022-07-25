@extends('layouts.main')
@section('container')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Tabel Virtual</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">tabel Virtual</li>
                    </ol>
                </div>
                
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row">

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Aset Fisik</h5>
                        </div>
                        <h3 class="mt-4">43,225</h3>
                        <div class="progress mt-4" style="height: 4px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-server-network bg-success text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Aset Virtual</h5>
                        </div>
                        <h3 class="mt-4">$73,265</h3>
                        <div class="progress mt-4" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-account-badge-horizontal bg-warning text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Peminjam</h5>
                        </div>
                        <h3 class="mt-4">447</h3>
                        <div class="progress mt-4" style="height: 4px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-buffer bg-danger text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Total Users</h5>
                        </div>
                        <h3 class="mt-4">86%</h3>
                        <div class="progress mt-4" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">82%</span></p>
                    </div>
                </div>
            </div>

        </div>

        <!-- end row -->


        <!-- START ROW -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h3><a href="/tambahvirtual" class="btn btn-success btn-lg  mb-2 "> <i class="fa fa-plus"></i> Tambah data</a></h3>
                        
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kode barang</th>
                                <th>Merk</th>
                                <th>jumlah</th>
                                <th>Password</th>
                                <th>status</th>
                                <th>Action</th>
                                
                            </tr>
                            </thead>


                            <tbody>
                                @foreach ($barangs as $barang)
                                @php
                                  $data= Crypt::decryptString($barang->password);
                                @endphp
                                <tr>
                                    <td>1</td>
                                    <td>{{ $barang->nama_barang }}</td>
                                    <td>{{ $barang->kode_barang }}</td>
                                    <td>{{ $barang->merk }}</td>
                                    <td>{{ $barang->jumlah }}</td>
                                    <td>{{ $data }}</td>
                                    <td>{{ $barang->status->nama_status }}</td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Detail"><i class="mdi mdi-eye-circle-outline"></i></a> <a href="#" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Edit data"><i class="mdi mdi-pencil"></i></a>&nbsp;<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete data"><i class="mdi mdi-delete"></i></a>&nbsp;<a href="{{ $barang->link_aset }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" target="_blank" title="Login"><i class="mdi mdi-login"></i></a>
                                        </div>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            
                            
                          
                            
                            
                            </tbody>
                        </table>
                

                    </div>
                </div>
            </div>

        </div>
        <!-- END ROW -->

    </div>
    <!-- container-fluid -->

</div>
    
@endsection