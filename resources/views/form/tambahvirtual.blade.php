@extends('layouts.main')
@section('header')
       <!-- Dropzone css -->
       <link href="{{ asset('../plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
       <link href="{{ asset('../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('../plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
       <link href="{{ asset('../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />
@endsection
@section('container')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Form Data Virtual</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/virtual">table</a></li>
                        <li class="breadcrumb-item active">Form tambah aset</li>
                    </ol>
                </div>
                
            </div> <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        {{-- <h4 class="mt-0 header-title">Textual inputs</h4>
                        <p class="sub-title">Here are examples of <code
                                class="highlighter-rouge">.form-control</code> applied to each
                            textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                    class="highlighter-rouge">type</code>.</p> --}}
                      <form action="/tambahvirtual" method="post">   
                          @csrf  
                          @php
                         $kb = "0";
                          if ($kodebarang == null) {
                              $kb = "0";
                              
                          }else {
                              $kb = $kodebarang->kode_barang;
                          }
                      
                        $datahasil= $kb;
                              $str =substr($datahasil, -1);
                          $tambah = $str + 1 ;
                            $sprintf = sprintf("%04d",$tambah) ;
                            
                          @endphp
                        <div class="form-group row">
                            <label for="kodeaset" class="col-sm-2 col-form-label">Kode barang </label>
                            <div class="col-sm-10">
                                <input class="form-control @error('kodeaset') is-invalid @enderror" type="text" value="{{ "ITP".$sprintf }}" name="kodeaset"  id="example-text-input" readonly>
                                @error('kodeaset')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaaset" class="col-sm-2 col-form-label">Nama barang</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('namaaset') is-invalid @enderror" type="text" value="{{ old('namaaset') }}"  name="namaaset" id="namaaset" >
                                @error('namaaset')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('slug') is-invalid @enderror" type="text" value="{{ old('slug') }}"  name="slug" id="slug" readonly >
                                @error('slug')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="merk" class="col-sm-2 col-form-label">Merk/vendor</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('merk') is-invalid @enderror" type="text" value="{{ old('merk') }}" name="merk" id="example-search-input" >
                                @error('merk')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('kategori') is-invalid @enderror" name="kategori" >
                                    <option value="">--- pilih kategori ---</option>
                                   @foreach ($datakategori as $kategori)
                                   <option value="{{ $kategori->id }}" @if (old('kategori')== $kategori->id) {{ 'selected' }} @endif>{{ $kategori->nama_kategory  }}</option>
                                   @endforeach
                                    
                                    
                                </select>
                                @error('kategori')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">status</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('status') is-invalid @enderror" name="status" >
                                    <option value="">--- pilih status ---</option>
                                    @foreach ($datastatus as $status)
                                    <option value="{{ $status->id }}" @if (old('status')== $status->id) {{ 'selected' }} @endif>{{ $status->nama_status  }}</option>
                                    @endforeach
                                    
                                  
                                </select>
                                @error('status')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('jumlah') is-invalid @enderror" type="number" value="{{ old('jumlah') }}" name="jumlah"  id="example-number-input" >
                                @error('jumlah')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">Nominal Tagihan </label>
                            <div class="col-sm-10">
                                <input id="demo2" type="text"  name="demo2" value="{{ old('demo2') }}" class="  form-control @error('demo2') is-invalid @enderror">
                                @error('demo2')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="periode" class="col-sm-2 col-form-label">Periode Tagihan  </label>
                            <div class="col-sm-10">
                                <input class="form-control @error('periode') is-invalid @enderror" type="text" value="{{ old('periode') }}" name="periode"  id="example-text-input" >
                                @error('periode')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="expired" class="col-sm-2 col-form-label">Tanggal Expired </label>
                            <div class="col-sm-10">
                                <input class="form-control @error('expired') is-invalid @enderror" type="date" value="{{ old('expired') }}" name="expired"  id="example-text-input" >
                                @error('expired')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user" class="col-sm-2 col-form-label">Username/email Akun</label>
                            <div class="col-sm-10">
                                <input class="form-control " type="text" name="user" value="{{ old('user') }}" id="example-text-input" >
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password </label>
                            <div class="col-sm-10">
                                <input class="form-control " type="password" name="password"  id="example-text-input" >
                               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="link" class="col-sm-2 col-form-label">Link  </label>
                            <div class="col-sm-10">
                                <input class="form-control @error('link') is-invalid @enderror" type="text" value="{{ old('link') }}" name="link"  id="example-text-input" >
                                @error('link')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">Keterangan</label>
                            <div class="col-sm-10">
                                <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="" cols="30" rows="10" >{{ old('keterangan') }}</textarea>
                                @error('keterangan')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <div action="#" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" name="foto" type="file" multiple="multiple" >
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success btn-lg">Simpan data</button>
                            </div>
                        </div>
                    </form> 
                        
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->      

        
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
<script src="{{ asset('../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script> 
<script src="{{ asset('../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('../plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
 <!-- Plugins Init js -->
 <script src="{{ asset('assets/pages/form-advanced.js') }}"></script>


@endsection