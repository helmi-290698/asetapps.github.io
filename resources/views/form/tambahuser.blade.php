@extends('layouts.main')

@section('container')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">    
                <div class="col-sm-6">
                    <h4 class="page-title">Form Data User</h4>
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/user">Table User</a></li>
                        <li class="breadcrumb-item active">Form Registrasi User</li>
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
                      <form action="/user/tambahuser" method="post" enctype="multipart/form-data">   
                          @csrf  
                        
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama User</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('name') is-invalid @enderror" type="text"  name="name" id="name" value="{{ old('name') }}" >
                                @error('name')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                                
                            </div>
                           
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('email') is-invalid @enderror" type="email"  name="email" id="email" value="{{ old('email') }}" >
                                @error('email')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('role') is-invalid @enderror" name="role" >
                                    <option value="">--- pilih kategori ---</option>
                                    <option value="admin" @if (old('role')== 'admin') {{ 'selected' }} @endif  >Admin</option>
                                    <option value="user" @if (old('role')== 'user') {{ 'selected' }} @endif>user</option>
                                </select>
                                @error('role')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Lembaga</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('lembaga') is-invalid @enderror" name="lembaga" >
                                    <option value="">--- pilih status ---</option>
                                    <option value="itop"> itop</option>
                                    <option value="bo">bisnis optima</option>
                                    <option value="ggs"> GGS </option>
                                    
                                  
                                </select>
                                @error('lembaga')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-number-input" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"  id="example-number-input" >
                                @error('password')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input class="form-control @error('foto') is-invalid @enderror" name="foto" type="file" id="foto">
                                @error('foto')
                                <div class="form-control-feedback mt-2">{{ $message }}.</div>
                                    
                                @enderror       
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                
                                <input type="submit" value="Simpan data" class="btn btn-primary btn-lg">
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
