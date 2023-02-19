@extends('layouts.base')

@section('title', 'Data Penerima')

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
                        Data Penerima
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
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <form class="card" method="POST" action="{{ route('penerima.update') }}">
                        @csrf
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-title">Updated!</h4>
                                    <div class="text-muted">{{ session('success') }}</div>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-title">Error!</h4>
                                    <div class="text-muted">{{ session('error') }}</div>
                                </div>
                            @endif
                            <h3 class="card-title">Edit Data Diri</h3>
                            <div class="row row-cards">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap"
                                            name="nama_lengkap" value="{{ $data->nama_lengkap ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="email" name="email"
                                            value="{{ $email ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">NO KK</label>
                                        <input required type="number" class="form-control" placeholder="NO KK"
                                            name="no_kk" value="{{ $data->no_kk ?? '' }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <div class="form-label">Kewarganegaraan</div>
                                        <select class="form-select" name="kewarganegaraan">
                                            <option value="WNI"
                                                {{ isset($data->kewarganegaraan) ? ($data->kewarganegaraan == 'WNI' ? 'selected' : '') : '' }}>
                                                Warna Negara Indonesia
                                            </option>
                                            <option value="WNA"
                                                {{ isset($data->kewarganegaraan) ? ($data->kewarganegaraan == 'WNA' ? 'selected' : '') : '' }}>
                                                Warga Negara Asing</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <div class="form-label">Pendapatan perbulan</div>
                                        <select class="form-select" name="pendapatan">
                                            <option value="kurang"
                                                {{ isset($data->pendapatan) ? ($data->pendapatan == 'kurang' ? 'selected' : '') : '' }}>
                                                < Rp. 300.000,- / bulan</option>
                                            <option value="lebih"
                                                {{ isset($data->pendapatan) ? ($data->pendapatan == 'lebih' ? 'selected' : '') : '' }}>
                                                >
                                                Rp. 300.000,- / bulan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <div class="form-label">Pekerjaan</div>
                                        <select class="form-select" name="pekerjaan">
                                            <option value="asn"
                                                {{ isset($data->pekerjaan) ? ($data->pekerjaan == 'asn' ? 'selected' : '') : '' }}>
                                                APARATUR SIPIL NEGARA</option>
                                            <option value="nonasn"
                                                {{ isset($data->pekerjaan) ? ($data->pekerjaan == 'nonasn' ? 'selected' : '') : '' }}>
                                                NON ASN</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <rect x="4" y="5" width="16" height="16"
                                                        rx="2"></rect>
                                                    <line x1="16" y1="3" x2="16" y2="7">
                                                    </line>
                                                    <line x1="8" y1="3" x2="8" y2="7">
                                                    </line>
                                                    <line x1="4" y1="11" x2="20" y2="11">
                                                    </line>
                                                    <line x1="11" y1="15" x2="12" y2="15">
                                                    </line>
                                                    <line x1="12" y1="15" x2="12" y2="18">
                                                    </line>
                                                </svg>
                                            </span>
                                            <input class="form-control" placeholder="Select a date"
                                                id="datepicker-icon-prepend" name="tanggal_lahir"
                                                value="{{ $data->tanggal_lahir ?? '' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <input type="text" class="form-control" placeholder="Alamat" name="alamat"
                                            value="{{ $data->alamat ?? '' }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Kelurahan</label>
                                        <input type="text" class="form-control" placeholder="Kelurahan"
                                            value="{{ $data->kelurahan ?? '' }}" name="kelurahan">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control" placeholder="Kecamatan"
                                            value="{{ $data->kecamatan ?? '' }}" name="kecamatan">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <div class="mb-3">
                                        <label class="form-label">RT/RW</label>
                                        <input type="text" class="form-control" placeholder="RT/RW" name="rtrw"
                                            value="{{ $data->rtrw ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Update Data Diri</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('addon-scripts')
    <script src="{{ asset('tabler/dist/libs/litepicker/dist/litepicker.js') }}"></script>

    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            window.Litepicker && (new Litepicker({
                element: document.getElementById('datepicker-icon-prepend'),
                buttonText: {
                    previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>`,
                    nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>`,
                },
                dropdowns: {
                    minYear: new Date().getFullYear() - 150,
                    maxYear: new Date().getFullYear(),
                    months: true,
                    years: true
                },
                minDate: new Date(1753, 01, 01),

            }));
        });
        // @formatter:on
    </script>
@endpush
