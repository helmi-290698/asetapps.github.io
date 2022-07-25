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
                            <th>Total Biaya</th>
                            <th>Jumlah Bayar</th>
                            <th>Sisa Bayar</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                           
                           @foreach ($pembayarans as $pembayaran)
                           
                           <tr>
                            <td>#{{ $pembayaran->no_invoice }}</td>
                            <td>{{ $pembayaran->nama_konsumen }}</td>
                            <td> Rp. {{  number_format($pembayaran->total_biaya,2,',','.')  }}</td>
                            <td> Rp. {{  number_format($pembayaran->jumlah_bayar,2,',','.')  }}</td>
                            <td>
                                @if ($pembayaran->total_biaya-$pembayaran->jumlah_bayar == 0 )
                               <h5><span class="badge badge-success ">Paid</span></h5>
                                @else
                                <span class="badge badge-success ">Unpaid</span>&nbsp; Rp. {{  number_format($pembayaran->total_biaya-$pembayaran->jumlah_bayar,2,',','.')  }}
                                @endif
                              </td>
                            <td>
                                <div>
                                    <button class="btn btn-primary btn-sm edit" data-toggle="modal" data-target=".bs-example-modal-center" data-id="{{ $pembayaran->id }}">Bayar</button>
                                    <a href="/invoice/{{  $pembayaran->id }}" class="btn btn-success btn-sm">Cetak</a>
                                </div>
                            </td>
                        </tr>
                           @endforeach
                            
                           
                        
                        
                        </tbody>
                    </table>
                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Form Bayar </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post" id="edit-pembayaran-form">
                                        @method('patch')
                                        @csrf
                                        <div class="form-group row">
                                            <label for="status" class="col-sm-4 col-form-label">Id Pembayaran</label>
                                            <div class="col-sm-8 mb-2">
                                                <input class="form-control" type="text"  name="pembayaran_id" id="pembayaran_id" disabled>
                                                
                                            </div>
                                            <label for="status" class="col-sm-4 col-form-label">Jumlah Bayar </label>
                                            <div class="col-sm-8">
                                                <input class="form-control " type="text"  name="jumlah_bayar" id="status" required >
                                                
                                            </div>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-success float-right">Simpan</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>

            </div>
        </div>
    </div>

</div>
<!-- END ROW -->
    </div>
@endsection
@section('footer')
    <script>
        $(function(){

            $(".edit").on('click',function(){
                let id = $(this).data('id');
                console.log(id);
                $.ajax({
                    url:`/pembayaran/${id}/update`,
                    method:'GET',
                success: function (data){

                    $("#edit-pembayaran-form").attr('action', `pembayaran/`+data.pembayaran.id+`/update`);
                    $('input[name="pembayaran_id"]').val(data.pembayaran.id);
                   
                }
        })
        
    })
})
    </script>
@endsection