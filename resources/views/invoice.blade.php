@extends('layouts.main')
@section('header')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="print">
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/printarea/demo/jquery.PrintArea.js') }}"></script>
        <script>
            (function($) {
                // fungsi dijalankan setelah seluruh dokumen ditampilkan
                $(document).ready(function(e) {
                     
                    // aksi ketika tombol cetak ditekan
                    $("#cetak").bind("click", function(event) {
                        // cetak data pada area <div id="#data-mahasiswa"></div>
                        $('#data').printArea();
                    });
                });
            }) (jQuery);
        </script>
@endsection
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

        <div class="row" id="data">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="invoice-title">
                                    <h4 class="float-right font-16"><strong>Order #{{ $invoices->no_invoice }}</strong></h4>
                                    <h3 class="m-t-0">
                                        <img src="{{ asset('img/foto.png') }}" alt="logo" height="50"/>
                                    </h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <address>
                                            <strong>Billed To:</strong><br>
                                            {{ $invoices->pembiayaan->konsumen->nama }}<br>
                                            {{ $invoices->pembiayaan->konsumen->lembaga->nama_lembaga }}<br>
                                            {{ $invoices->pembiayaan->konsumen->alamat }}
                                        </address>
                                    </div>
                                    <div class="col-6 text-right">
                                        <address>
                                            <strong>Shipped To:</strong><br>
                                            Helmi Paturohman<br>
                                            Kp pasantren Rt 02/17<br>
                                            Cimekar,Cileunyi<br>
                                            Kab Bandung.40623
                                        </address>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 m-t-30">
                                        <address>
                                            <strong>Payment Method:</strong><br>
                                            BSI 1208697383<br>
                                            HELMI PATUROHMAN<br>
                                            Helmipaturohman69@gmail.com 
                                        </address>
                                    </div>
                                    <div class="col-6 m-t-30 text-right">
                                        <address>
                                            
                                            <strong>Order Date:</strong><br>
                                                  @php
                                                      $tanggal=date('d F Y')
                                                  @endphp  
                                            {{ $tanggal }}<br><br>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="panel panel-default">
                                    <div class="p-2">
                                        <h3 class="panel-title font-20"><strong>Order summary</strong></h3>
                                    </div>
                                    <div class="">
                                        <div class="table-responsive">
                                            
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td><strong>Item</strong></td>
                                                    <td class="text-center"><strong>Type</strong></td>
                                                    <td class="text-center"><strong>Price</strong></td>
                                                    <td class="text-center"><strong>Quantity</strong>
                                                    </td>
                                                    <td class="text-right"><strong>Totals</strong></td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                @foreach ($biaya as $hasil)
                                                <tr>
                                                    <td>{{ $hasil->pembelanjaan->nama_barang }}</td>
                                                    <td class="text-center">{{ $hasil->pembelanjaan->tipe_biaya }}</td>
                                                    <td class="text-center">Rp. {{  number_format($hasil->pembelanjaan->harga,0,',','.')  }}</td>
                                                    <td class="text-center">{{ $hasil->pembelanjaan->jumlah }}</td>
                                                    <td class="text-right">
                                                        @if ($hasil->pembelanjaan->jumlah)
                                                        Rp. {{ number_format($hasil->pembelanjaan->harga*$hasil->pembelanjaan->jumlah,0,',','.') }}        
                                                        @else
                                                        Rp. {{ number_format($hasil->pembelanjaan->harga,0,',','.') }}
                                                        @endif    
                                                    </td>
                                                </tr>
                                                @endforeach
                                                
                                               
                                                <tr>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line text-center">
                                                        <strong>Subtotal</strong></td>
                                                    <td class="thick-line text-right">Rp. {{ number_format($invoices->total_biaya,0,',','.') }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line text-center">
                                                        <strong>Kode Unik</strong></td>
                                                    <td class="no-line text-right">Rp. {{ number_format(22,0,',','.') }}</td>
                                                </tr>
                                                <tr>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line text-center">
                                                        <strong>Total</strong></td>
                                                    <td class="no-line text-right"><h4 class="m-0">Rp. {{ number_format($invoices->total_biaya+22,0,',','.') }}</h4></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="d-print-none mo-mt-2">
                                            <div class="float-right">
                                                
                                                <button id="cetak" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></button>
                                                {{-- <a href="#" class="btn btn-primary waves-effect waves-light">Send</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->    
    </div>
@endsection