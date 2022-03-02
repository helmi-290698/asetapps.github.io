@extends('layouts.main')
@section('header')
       <!-- Dropzone css -->
       <link href="{{ asset('../plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('container')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Form Data Fisik</h4>
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/fisik">Table fisik</a></li>
                        <li class="breadcrumb-item active">Form tambah fisik</li>
                    </ol>
                </div>
                
            </div> <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title mb-2">Form Barang</h4>
                       

                        <form action="/tambahpembayaran" method="post">
                            @csrf
                            @php
                          $kb = "0";
                          if ($invoices == null) {
                              $kb = "0";
                              
                          }else {
                              $kb = $invoices->no_invoice;
                          }
                      
                        $datahasil= $kb;
                              $str =substr($datahasil, -1);
                          $tambah = $str + 1 ;
                            $sprintf = sprintf("%04d",$tambah) ;
                            
                          @endphp
                            <div class="form-group">
                                <label>No Invoice</label>
                                <input type="text" class="colorpicker-default form-control" name="noinvoice" value="{{ "#Hp".$sprintf }}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama konsumen</label>
                                <select name="namakonsumen" id="" class="form-control" >
                                    @foreach ($konsumens as $konsumen)
                                    <option value="{{ $konsumen->nama }}">{{ $konsumen->nama }}</option>
                                    @endforeach 
                                </select>
                            </div>
                            <hr>
                        <div class="control-group after-add-more">
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <div class="row">
                                    <div class="col-8">
                                        <select name="namabarang[]" id="" class="form-control " >
                                            @foreach ($barangs as $barang)
                                            <option value="{{ $barang->id_pembelanjaan }}">{{ $barang->nama_barang }}</option>
                                            @endforeach
                                           
                                        </select>

                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-primary add-more" type="button"><i class="mdi mdi-plus"></i></button>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="copy d-none">
                            <div class="control-group">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-8">
                                            <select name="namabarang[]" id="" class="form-control " >
                                                @foreach ($barangs as $barang)
                                                <option value="{{ $barang->id_pembelanjaan }}">{{ $barang->nama_barang }}</option>
                                                @endforeach
                                            </select>
    
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-danger remove" type="button"><i class="mdi mdi-delete"></i></button>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </div>
                            <hr>
                            <div class="control-group1 after-add-more1">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <div class="row">
                                        <div class="col-8">
                                            <select name="namajasa[]" id="" class="form-control " >
                                                @foreach ($jasas as $jasa)
                                                <option value="{{ $jasa->id_jasa }}">{{ $jasa->nama_jasa }}</option> 
                                                @endforeach
                                                
                                            </select>
    
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-primary add-more1" type="button"><i class="mdi mdi-plus"></i></button>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                            <div class="copy1 d-none">
                                <div class="control-group1">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-8">
                                                <select name="namajasa[]" id="" class="form-control " >
                                                    @foreach ($jasas as $jasa)
                                                    <option value="{{ $jasa->id_jasa }}">{{ $jasa->nama_jasa }}</option> 
                                                    @endforeach
                                                </select>
        
                                            </div>
                                            <div class="col-4">
                                                <button class="btn btn-danger remove1" type="button"><i class="mdi mdi-delete"></i></button>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="simpan" class="btn btn-success float-right">
                             </div>
                            
                        </form>

                    </div>
                </div>

                
            </div> <!-- end col -->

            

                
            </div> <!-- end col -->
        </div> 

        
    </div>
    <!-- container-fluid -->

</div>
    
@endsection
@section('footer')
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more1").click(function(){ 
          var html = $(".copy1").html();
          $(".after-add-more1").after(html);
      });

      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove1",function(){ 
          $(this).parents(".control-group1").remove();
      });
    });
</script>
<script>
    const namaaset = document.querySelector('#namaaset');
    const slug = document.querySelector('#slug');
        namaaset.addEventListener('change',function(){
            fetch('/tambahfisik/checkSlug?namaaset='+ namaaset.value)
            .then(respone => respone.json())
            .then(data => slug.value = data.slug)
        });
    
</script>
<script src="{{ asset('../plugins/dropzone/dist/dropzone.js') }}"></script>

@endsection