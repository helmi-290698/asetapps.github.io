@extends('layouts.main')
@section('container')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">{{ $title }}</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Hybrid plus</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
               
                
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->
<div class="row">

    {{-- <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                </div>
                
                <div>
                    <h5 class="font-16">Aset Fisik</h5>
                </div>
                <h3 class="mt-4">{{ $jumlahfisik }} Data </h3>
                <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: @php $hasil = $jumlahfisik/$jumlahkategori*100; echo floor($hasil); @endphp%" aria-valuenow="@php $hasil = $jumlahfisik/$jumlahkategori*100; echo floor($hasil); @endphp" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">@php $hasil = $jumlahfisik/$jumlahkategori*100; echo floor($hasil); @endphp%</span></p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-heading p-4">
                <div class="mini-stat-icon float-right">
                    <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                </div>
                <div>
                    <h5 class="font-16">Aset Virtual</h5>
                </div>
                <h3 class="mt-4">{{ $jumlahvirtual }} Data</h3>
                <div class="progress mt-4" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: @php $hasil = $jumlahvirtual/$jumlahkategori*100; echo floor($hasil); @endphp%" aria-valuenow="@php $hasil = $jumlahvirtual/$jumlahkategori*100; echo floor($hasil); @endphp" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">@php $hasil = $jumlahvirtual/$jumlahkategori*100; echo floor($hasil); @endphp%</span></p>
            </div>
        </div>
    </div> --}}

    

</div>
 <!-- START ROW -->
 <div class="row">
    <div class="col-lg-4">
        <div class="card m-b-30">
            <div class="card-body">   
                <form method="post" action="/jasa">
                    @csrf
                    <div class="form-group">
                        <label>Nama Jasa</label>
                        <input type="text" class="form-control" name="namajasa">
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <input type="number" class="form-control"  name="biaya">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="simpan">
                    </div>
                </form>

            </div>
        </div>  
    </div> 
    <div class="col-lg-8">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>No </th>
                            <th>Nama Jasa</th>
                            <th>Biaya</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                           @foreach ($jasas as $jasa)
                           <tr>
                            <td>{{ $jasa->id }}</td>
                            <td>{{ $jasa->nama_jasa }}</td>
                            <td>{{ $jasa->biaya }}</td>
                            <td>{{ $jasa->created_at }}</td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-success btn-sm">Cetak</a>
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
    

</div>
<!-- END ROW -->
    </div>
@endsection