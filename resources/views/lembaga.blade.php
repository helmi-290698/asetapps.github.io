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
                                <form action="/tambahlembaga" method="post">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input class="form-control " type="text"  name="nama_lembaga" id="status" required >
                                            
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
                                <th scope="col">Nama lembaga</th> 
                                <th scope="col">Di buat pada </th>
                                <th scope="col" >Di update pada </th>
                                <th scope="col" colspan="2" >Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lembagas as $lembaga)
                            <tr>
                                <td>{{ $lembaga->id }}</td>
                                <td>{{ $lembaga->nama_lembaga }}</td>
                                <td>{{ $lembaga->created_at  }}</td>
                                <td>{{ $lembaga->updated_at  }}</td>

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
