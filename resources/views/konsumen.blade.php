@extends('layouts.main')
@section('container')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">{{ $title }}</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>
                
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->

 <!-- START ROW -->
 <div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light float-right mb-2" data-toggle="modal" data-target=".bs-example-modal-center"><i class="mdi mdi-plus"></i>tambah data </button>
                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Form Status</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/tambahkonsumen" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-4 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input class="form-control " type="text"  name="nama" id="nama" required >
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-4 col-form-label">Nama Lembaga</label>
                                        <div class="col-sm-8">
                                            <select name="lembaga" id="" class="form-control">
                                                <option value="">perorangan</option>
                                                <option value="">leekay</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jeniskelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <select name="jenis_kelamin" id="" class="form-control">
                                                <option value="">Laki-Laki</option>
                                                <option value="">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-4 col-form-label">No Telepon</label>
                                        <div class="col-sm-8">
                                            <input class="form-control " type="text"  name="no_telepon" id="notelepon" required >
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-4 col-form-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <textarea name="alamat" class="form-control" id="" cols="10" rows="3"></textarea>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success float-right">Simpan</button>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nama Konsumen</th> 
                                <th scope="col">Nama Lembaga</th> 
                                <th scope="col">Alamat</th> 
                                <th scope="col">No telepon</th> 
                                <th scope="col">Di buat pada </th>
                                <th scope="col" >Di update pada </th>
                                <th scope="col" colspan="2" >Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($konsumens as $konsumen)
                            <tr>
                                <td>{{ $konsumen->id }}</td>
                                <td>{{ $konsumen->nama }}</td>
                                <td>{{ $konsumen->id_lembaga }}</td>
                                <td>{{ $konsumen->alamat }}</td>
                                <td>{{ $konsumen->no_telepon }}</td>
                                <td>{{ $konsumen->created_at  }}</td>
                                <td>{{ $konsumen->updated_at  }}</td>

                                <td>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit data"><i class="mdi mdi-pencil"></i></a>&nbsp;<a href="#" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Delete data"><i class="mdi mdi-delete"></i></a>
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
