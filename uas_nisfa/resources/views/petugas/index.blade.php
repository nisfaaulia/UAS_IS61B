@extends('layouts.master')

@section('title', 'Posyandu || Petugas')

@section('tambah')
<a href="/petugas/form/" class="btn btn-md btn-primary">
    <i class="feather-plus me-2"></i>
    <span>Tambah Petugas</span>
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
            <h5 class="card-title">Recent Orders</h5>
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
                <div class="dropdown">
                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                        <div data-bs-toggle="tooltip" title="Options">
                            <i class="feather-more-vertical"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                        <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips & Tricks</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body custom-card-action p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Petugas</th>
                            <th>Nama Desa</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pet as $item)
                        <tr>
                            <td>{{ $nomor++ }}</td>
                            <td>{{ $item->nm_pet }}</td>
                            <td>{{ $item->desa->nm_des }}</td>
                            <td>{{ $item->desa->nm_des }}</td>
                            <td class="text-end">
                                <div class="hstack gap-2 justify-content-end">
                                    <a href="/petugas/edit/{{$item->id}}" class="btn btn-sm btn-primary">
                                        <i class="feather-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus{{$item->id}}">
                                        <i class="feather-trash"></i>
                                    </button>
                                    <!-- Modal Hapus -->
                                    <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="hapusModalLabel{{$item->id}}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusModalLabel{{$item->id}}">Peringatan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin ingin menghapus data Petugas <b>{{$item->nm_pet}}</b>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <form action="/petugas/{{$item->id}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data tersedia</td>
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
<!-- DataTables  & Plugins -->
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
@endsection
