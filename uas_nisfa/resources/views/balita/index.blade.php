@extends('layouts.master')

@section('title', 'Posyandu || Rekamedis Balita ')

@section('tambah')
<a href="/balita/form/" class="btn btn-md btn-primary">
    <i class="feather-plus me-2"></i>
    <span>Tambah Rekam Medis</span>
</a>
@endsection

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card stretch stretch-full">
        <div class="card-header">
            <h5 class="card-title">Data Rekam Medis Balita</h5>
            <div class="card-header-action">
                <div class="card-header-btn">
                    <div data-bs-toggle="tooltip" title="Delete">
                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                    </div>
                    <div data-bs-toggle="tooltip" title="Refresh">
                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                    </div>
                    <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body custom-card-action p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomer Rekam Medis</th>
                            <th>Nama Balita</th>
                            <th>Nama Petugas</th>
                            <th>Nama Desa</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bal as $item)
                        <tr>
                            <td>{{ $nomor++ }}</td>
                            <td>{{ $item->no_rekme }}</td>
                            <td>{{ $item->nm_pas }}</td>
                            <td>{{ $item->petugas->nm_pet ?? 'N/A' }}</td>
                            <td>{{ $item->desa->nm_des ?? 'N/A' }}</td>
                            <td class="text-end">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#detail{{$item->id}}">
                                        <i class="feather-eye"></i>
                                    </button>

                                    <!-- Modal Detail-->
                                    <div class="modal fade" id="detail{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail {{$item->nm_pas}}</h1>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <td>Nomor Rekam Medis</td>
                                                            <td>{{ $item->no_rekme }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Balita</td>
                                                            <td>{{ $item->nm_pas }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat</td>
                                                            <td>{{ $item->alamat }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status</td>
                                                            <td>{{ $item->status }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Lahir</td>
                                                            <td>{{ $item->tgl_lahir }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Ayah</td>
                                                            <td>{{ $item->nm_ayah }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Umur Ayah</td>
                                                            <td>{{ $item->umur_ayah }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Ibu</td>
                                                            <td>{{ $item->nm_ibu }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Umur Ibu</td>
                                                            <td>{{ $item->umur_ibu }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Berat Lahir</td>
                                                            <td>{{ $item->berat_lahir }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Status Imunisasi</td>
                                                            <td>{{ $item->status_imu }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal di Imunisasi</td>
                                                            <td>{{ $item->tgl_imu }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Pemberian Vitamin/Suplemen</td>
                                                            <td>{{ $item->suplemen }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal Pemberian Vitamin/Suplemen</td>
                                                            <td>{{ $item->tgl_sup }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Catatan Perkembangan Balita</td>
                                                            <td>{{ $item->perkem }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Petugas Yang Menanganni</td>
                                                            <td>{{ $item->petugas->nm_pet ?? 'N/A' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Desa</td>
                                                            <td>{{ $item->desa->nm_des ?? 'N/A' }}</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="/balita/edit/{{$item->id}}" class="btn btn-sm btn-primary">
                                        <i class="feather-edit"></i>
                                    </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-danger">
                                        <i class="feather-trash-2"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                <li>
                    <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                </li>
                <li><a href="javascript:void(0);" class="active">1</a></li>
                <li><a href="javascript:void(0);">2</a></li>
                <li>
                    <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                </li>
                <li><a href="javascript:void(0);">8</a></li>
                <li><a href="javascript:void(0);">9</a></li>
                <li>
                    <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- DataTables & Plugins -->
<script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
