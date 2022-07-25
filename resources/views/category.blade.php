@extends('layouts.main')
@section('container')
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">{{ $title }}</h4>
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->
        <div class="row">

            <div class="col-sm-6 col-xl-3">
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
            </div>



        </div>
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
                                        <h5 class="modal-title mt-0">Form Kategori</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/tambahcategory" method="post">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="kategori" class="col-sm-2 col-form-label">Nama</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control " type="text" name="kategori" id="kategori" required>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control " type="text" name="slug" id="slug" required readonly>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="namatype" class="col-sm-2 col-form-label">Type</label>
                                                <div class="col-sm-10">
                                                    <select name="namatype" class="form-control" id="namatype" required>
                                                        <option value="Fisik"> Fisik </option>
                                                        <option value="Virtual"> Virtual </option>
                                                    </select>
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
                                        <th scope="col">Nama Kategory</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Di buat pada </th>
                                        <th scope="col">Di update pada </th>
                                        <th scope="col" colspan="2">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->nama_kategory }}</td>
                                        <td>{{ $category->nama_type }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $category->created_at  }}</td>
                                        <td>{{ $category->updated_at  }}</td>

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
    @section('footer')
    <script>
        const kategori = document.querySelector('#kategori');
        const slug = document.querySelector('#slug');
        kategori.addEventListener('change', function() {
            fetch('/tambahkategori/checkSlug?kategori=' + kategori.value)
                .then(respone => respone.json())
                .then(data => slug.value = data.slug)
        });
    </script>


    @endsection