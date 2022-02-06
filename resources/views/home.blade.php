@extends('layouts.main')
    @section('container')
    <div class="content">
        <div class="container-fluid">
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item"><a href="/home">Aset Itop</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">
               
                <div class="col-xl-6">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Jumlah Kategori Aset </h4>
                         

                            <div id="pie-chart"></div>

                        </div>
                    </div>
                </div> <!-- end col -->
                {{-- <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-server-network bg-success text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Aset Virtual</h5>
                            </div>
                            <h3 class="mt-4">$73,265</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-account-badge-horizontal bg-warning text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Peminjam</h5>
                            </div>
                            <h3 class="mt-4">447</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-heading p-4">
                            <div class="mini-stat-icon float-right">
                                <i class="mdi mdi-buffer bg-danger text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-16">Total Users</h5>
                            </div>
                            <h3 class="mt-4">86%</h3>
                            <div class="progress mt-4" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">82%</span></p>
                        </div>
                    </div>
                </div> --}}

            </div>

            <!-- end row -->


            <!-- START ROW -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Active Deals</h4>
                            
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Name Barang</th>
                                    <th>Status</th>
                                    <th>Merk</th>
                                    <th>Tgl entry</th>
                                    <th>Tgl Update</th>
                                    
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach ($barangs as $barang)
                                        
                                   
                                <tr>
                                    <td>@php
                                        $i=1;
                                        @endphp {{ $i++ }}</td>
                                    <td>{{ $barang->kode_barang }}</td>
                                    <td>{{ $barang->nama_barang }}</td>
                                    <td>{{ $barang->status->nama_status }}</td>
                                    <td>{{ $barang->merk }}</td>
                                    <td>{{ $barang->created_at }}</td>
                                    <td>{{ $barang->updated_at }}</td>
                                    
                                    
                                </tr>
                                @endforeach
                              
                                
                                
                                </tbody>
                            </table>
                    

                        </div>
                    </div>
                </div>

            </div>
            <!-- END ROW -->

        </div>
        <!-- container-fluid -->

    </div>
    
    @endsection
    @section('footer')
    <script>
        !(function ($) {
      "use strict";
  
      var ChartC3 = function () {};
  
      (ChartC3.prototype.init = function () {
          //generating chart
          c3.generate({
              bindto: "#chart",
              data: {
                  columns: [
                      ["Desktop", 150, 100, 90, 152, 250, 95],
                      ["Mobile", 230, 150, 120, 240, 180, 150],
                      ["Tablet", 300, 200, 250, 350, 150, 250],
                  ],
                  type: "bar",
                  colors: {
                      Desktop: "#fcbe2d",
                      Mobile: "#02c58d",
                      Tablet: "#30419b",
                  },
              },
          });
  
          //combined chart
          c3.generate({
              bindto: "#combine-chart",
              data: {
                  columns: [
                      ["SonyVaio", 80, 20, 120, 80, 40, 90],
                      ["iMacs", 200, 130, 90, 200, 130, 220],
                      ["Tablets", 300, 200, 160, 300, 300, 230],
                      ["iPhones", 250, 160, 80, 180, 250, 120],
                      ["Macbooks", 160, 120, 160, 140, 80, 130],
                  ],
                  types: {
                      SonyVaio: "bar",
                      iMacs: "bar",
                      Tablets: "spline",
                      iPhones: "line",
                      Macbooks: "bar",
                  },
                  colors: {
                      SonyVaio: "#02c58d",
                      iMacs: "#30419b",
                      Tablets: "#fcbe2d",
                      iPhones: "#fc5454",
                      Macbooks: "#59c6fb",
                  },
                  groups: [["SonyVaio", "iMacs"]],
              },
              axis: {
                  x: {
                      type: "categorized",
                  },
              },
          });
  
          //roated chart
          c3.generate({
              bindto: "#roated-chart",
              data: {
                  columns: [
                      ["Revenue", 60, 120, 180, 300, 90, 180],
                      ["Pageview", 40, 30, 10, 20, 50, 30],
                  ],
                  types: {
                      Revenue: "bar",
                  },
                  colors: {
                      Revenue: "#02c58d",
                      Pageview: "#30419b",
                  },
              },
              axis: {
                  rotated: true,
                  x: {
                      type: "categorized",
                  },
              },
          });
  
          //stacked chart
          c3.generate({
              bindto: "#chart-stacked",
              data: {
                  columns: [
                      [
                          "Revenue",
                          130,
                          120,
                          150,
                          120,
                          160,
                          150,
                          250,
                          120,
                          180,
                          140,
                          160,
                          150,
                      ],
                      [
                          "Pageview",
                          10,
                          150,
                          90,
                          240,
                          130,
                          220,
                          200,
                          130,
                          90,
                          240,
                          130,
                          220,
                      ],
                  ],
                  types: {
                      Revenue: "area-spline",
                      Pageview: "area-spline",
                      // 'line', 'spline', 'step', 'area', 'area-step' are also available to stack
                  },
                  colors: {
                      Revenue: "#f0f4f7",
                      Pageview: "#30419b",
                  },
              },
          });
  
          //Donut Chart
          c3.generate({
              bindto: "#donut-chart",
              data: {
                  columns: [
                      ["Desktops", 80],
                      ["Smart Phones", 55],
                      ["Mobiles", 40],
                      ["Tablets", 55],
                  ],
                  type: "donut",
              },
              donut: {
                  title: "Candidates",
                  width: 30,
                  label: {
                      show: false,
                  },
              },
              color: {
                  pattern: ["#30419b", "#f0f4f7", "#02c58d", "#fcbe2d"],
              },
          });
  
          //Pie Chart
          c3.generate({
              bindto: "#pie-chart",
              data: {
                  columns: [
                      ["Fisik", {{ $jumlahfisik }}],
                      ["Virtual", {{ $jumlahvirtual }}],
                  ],
                  type: "pie",
              },
              color: {
                  pattern: ["#30419b", "#fcbe2d", "#02c58d"],
              },
              pie: {
                  label: {
                      show: false,
                  },
              },
          });
      }),
          ($.ChartC3 = new ChartC3()),
          ($.ChartC3.Constructor = ChartC3);
  })(window.jQuery),
      //initializing
      (function ($) {
          "use strict";
          $.ChartC3.init();
      })(window.jQuery);
    </script>
  
        
    @endsection