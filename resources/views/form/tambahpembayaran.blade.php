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
            <div class="col-lg-6">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title mb-2">Form Barang</h4>
                       

                        <form action="#">
                            @csrf
                            <div class="form-group">
                                <label>No Invoice</label>
                                <input type="text" class="colorpicker-default form-control" name="noinvoice">
                            </div>
                            <div class="form-group">
                                <label>Nama konsumen</label>
                                <select name="namakonsumen" id="" class="form-control" >
                                    <option value="">Helmi</option>
                                    <option value="">Wiyan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <div class="row">
                                    <div class="col-8">
                                        <select name="namakonsumen" id="" class="form-control " >
                                            <option value="">Hardisk</option>
                                            <option value="">Ram</option>
                                        </select>

                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-primary ">+</button>
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

            <div class="col-lg-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-2">Form Jasa</h4>
                       

                        <form action="#">
                            @csrf
                            <div class="form-group">
                                <label>No Invoice</label>
                                <input type="text" class="colorpicker-default form-control" name="noinvoice">
                            </div>
                            <div class="form-group">
                                <label>Nama konsumen</label>
                                <select name="namakonsumen" id="" class="form-control" >
                                    <option value="">Helmi</option>
                                    <option value="">Wiyan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Jasa</label>
                                <div class="row">
                                    <div class="col-8">
                                        <select name="namakonsumen" id="" class="form-control " >
                                            <option value="">Rakit Komputer</option>
                                            <option value="">Instal Ulang</option>
                                        </select>

                                    </div>
                                    <div class="col-4">
                                        <button class="btn btn-primary ">+</button>
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
        </div> 

        
    </div>
    <!-- container-fluid -->

</div>
    
@endsection
@section('footer')
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