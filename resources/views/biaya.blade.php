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
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>No Invoice</th>
                            <th>Nama</th>
                            <th>jasa/barang</th>
                            <th>Biaya</th>
                            
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                           
                           @foreach ($pembayarans as $pembayaran)
                           
                           <tr>
                            <td>#{{ $pembayaran->no_invoice }}</td>
                            <td>{{ $pembayaran->konsumen->nama }}</td>
                            <td>
                                <span class="badge badge-pill badge-success mr-2 ">{{ $pembayaran->pembelanjaan->tipe_biaya }}</span>{{ $pembayaran->pembelanjaan->nama_barang }}
                           
                            <td> Rp. {{  number_format($pembayaran->pembelanjaan->harga,2,',','.')  }}</td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-primary btn-sm" >Edit</a>
                                    <form method="post" action="/tabelbiaya/deletebiaya/{{ $pembayaran->id }}/{{ $pembayaran->no_invoice }}" class="d-inline"> 
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm border-0" onclick="return confirm('yakin ingin menghapus data ?')">Hapus</button>
                                    </form>
                                   
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