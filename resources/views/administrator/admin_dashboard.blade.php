@include('layouts.header')





@include('layouts.navbar')

<div class="content-wrapper">


    <div class="col-sm-6">
        <h2>Dashboard</h2>
        <h5>Antrean/KTP</h5>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-body">


                <div class="container-wrapper">

                    <div class="card h-100" style="padding: 2%">

                    <form class="form-inline " method="GET" action="">
                        <div class="container-fluid" style="text-align: center;">
                            Tanggal : <input name="" class="form-control mr+sm+50" type="date"
                                placeholder="Search ID Transaksi">
                            <button class="btn btn-success" type="submit"><i class="fas fa-search"></i> Cari</button>
                            <button class="btn btn-info" type="submit"><i class="far fa-file-excel"></i> Excel</button>
                        </div>
                    </form>
                    <br>

                    <div class="table-responsive">
                        <table class="table  table-hover table-bordered">
                            <thead align="center">


                                <tr border="1">
                                    <th>No</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">No Peserta</th>
                                    <th scope="col">No RM</th>
                                    <th scope="col">Nama </th>
                                    <th scope="col">Poli</th>
                                    <th scope="col">Dokter/Bidan</th>
                                    <th scope="col">Peserta</th>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Jam Daftar(WIB)</th>
                                    <th scope="col">Jam Panggil(WIB)</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Sumber</th>
                                    <th scope="col">Prioritas</th>
                                </tr>
                            </thead>
                            @php $no = 1; @endphp


                            <tbody>
                                <tr align="center">
                                    <td scope="col">{{$no++}} </td>
                                    <td scope="col">Search </td>


                                </tr>
                            </tbody>

                        </table>
                        <div>
                            Showing

                            entries
                        </div>
                        <div class="pull-right">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content Wrapper. Contains page content -->
@include('layouts.footer')
</body>