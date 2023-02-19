@extends('layouts.base')

@section('title', 'Pengajuan Bansos')

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
                        Pengajuan Bansos
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
        <div class="container-xl d-flex flex-column justify-content-center">

            {{-- container for user belum isi data diri --}}
            @if ($data == 'user')
                <div class="empty">
                    <p class="empty-title">Data diri belum dilengkapi</p>
                    <p class="empty-subtitle text-muted">
                        Lengkapi data diri untuk melukakan pengajuan Bantuan Sosial.
                    </p>
                    <div class="empty-action">
                        <a href="{{ route('penerima.index') }}" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="13" y1="18" x2="19" y2="12"></line>
                                <line x1="13" y1="6" x2="19" y2="12"></line>
                            </svg>
                            Lengkapi data diri
                        </a>
                    </div>
                </div>
            @elseif($data == 'double')
                <div class="empty">
                    <p class="empty-title">Pengajuan tidak dibolehkan</p>
                    <p class="empty-subtitle text-muted">
                        Salah satu anggota keluarga anda telah melakukan pengajuan.
                    </p>
                </div>
            @else
                <div class="empty">
                    <p class="empty-title">Pengajuan telah dilakukan!</p>
                    <p class="empty-subtitle text-muted">
                        Lihat status pengajuan dengna klik tombol dibawah ini".
                    </p>
                    <div class="empty-action">
                        <a href="{{ route('pengajuan.status') }}" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <line x1="13" y1="18" x2="19" y2="12"></line>
                                <line x1="13" y1="6" x2="19" y2="12"></line>
                            </svg>
                            Lihat Status Pengajuan
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
