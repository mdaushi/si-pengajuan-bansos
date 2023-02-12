@extends('layouts.base')

@section('title', 'Status Pengajuan')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Status Pengajuan
                    </h2>
                </div>
                <!-- Page title actions -->
                {{-- <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-white">
                            New view
                        </a>
                    </span>
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#modal-report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Create new report
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                        data-bs-target="#modal-report" aria-label="Create new report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                    </a>
                </div>
            </div> --}}
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            @if (!$pengajuan)
                <div class="empty">
                    <p class="empty-title">Anda belum melakukan pengajuan!</p>
                    <p class="empty-subtitle text-muted">
                        Lakukan pengajuan untuk mendapatkan bantuan sosial.
                    </p>
                    <div class="empty-action">
                        <a href="{{ route('pengajuan.index') }}" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="13" y1="18" x2="19" y2="12"></line>
                                <line x1="13" y1="6" x2="19" y2="12"></line>
                            </svg>
                            Pengajuan Bansos
                        </a>
                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Pengajuan Bansos</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Nama</div>
                                <div class="datagrid-content">{{ $pengajuan->nama }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">NIK</div>
                                <div class="datagrid-content">{{ $pengajuan->nik }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">NO. KK</div>
                                <div class="datagrid-content">{{ $pengajuan->no_kk }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Domisili</div>
                                <div class="datagrid-content">{{ $pengajuan->domisili }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Pekerjaan</div>
                                <div class="datagrid-content">{{ $pengajuan->pekerjaan }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Penghasilan</div>
                                <div class="datagrid-content">{{ $pengajuan->penghasilan }}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Status</div>
                                <div class="datagrid-content">
                                    <span class="status status-green">
                                        {{ $pengajuan->status }}
                                    </span>
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Nama Kepala Keluarga</div>
                                <div class="datagrid-content">
                                    {{ $pengajuan->nm_kepala_keluarga }}
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Pekerjaan Kepala Keluarga</div>
                                <div class="datagrid-content">
                                    {{ $pengajuan->pekerjaan_kepala_keluarga }}
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Jumlah Tanggungan</div>
                                <div class="datagrid-content">
                                    {{ $pengajuan->jumlah_tanggungan }}
                                </div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Jumlah Anggota Keluarga (KK)</div>
                                <div class="datagrid-content">
                                    {{ $pengajuan->jumlah_anggota_keluarga }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($pengajuan->ket)
                    @foreach ($pengajuan->ket as $ket)
                        <div class="alert alert-danger mt-2" role="alert">
                            {{ $ket }} tidak terpenuhi
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
@endsection
