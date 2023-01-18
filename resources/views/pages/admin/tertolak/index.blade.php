@extends('layouts.base')

@section('title', 'Pengajuan Tertolak')

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
                        Daftar Pengajuan Tertolak
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
            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-title">Sukses!</h4>
                            <div class="text-muted">{{ session('success') }}</div>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-title">Error!</h4>
                            <div class="text-muted">{{ session('error') }}</div>
                        </div>
                    @endif
                    <div id="table-default" class="table-responsive">
                        <div class="input-icon w-50">
                            <input class="search mb-3 form-control form-control-rounded" placeholder="Cari">
                            <span class="input-icon-addon">
                                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="10" cy="10" r="7"></circle>
                                    <line x1="21" y1="21" x2="15" y2="15"></line>
                                </svg>
                            </span>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><button class="table-sort">No</button></th>
                                    <th><button class="table-sort" data-sort="sort-nama">Nama</button></th>
                                    <th><button class="table-sort" data-sort="sort-nik">NIK</button></th>
                                    <th><button class="table-sort" data-sort="sort-no_kk">NO KK</button></th>
                                    <th><button class="table-sort" data-sort="sort-domisili">Domisili</button></th>
                                    <th><button class="table-sort" data-sort="sort-pekerjaan">Pekerjaan</button></th>
                                    <th><button class="table-sort" data-sort="sort-penghasilan">Penghasilan</button></th>
                                    <th><button class="table-sort" data-sort="sort-nm_kepala_keluarga">Nama Kepala
                                            Keluarga</button>
                                    </th>
                                    <th><button class="table-sort" data-sort="sort-pekerjaan_kepala_keluarga">Pekerjaan
                                            Kepala
                                            Keluarga</button></th>
                                    <th><button class="table-sort" data-sort="sort-jumlah_tanggungan">Jumlah
                                            Tanggungan</button></th>
                                    <th><button class="table-sort" data-sort="sort-jumlah_anggota_keluarga">Jumlah Anggota
                                            Keluarga</button></th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table-tbody list">
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="sort-nama">{{ $data->nama }}</td>
                                        <td class="sort-nik">{{ $data->nik }}</td>
                                        <td class="sort-no_kk">{{ $data->no_kk }}</td>
                                        <td class="sort-domisili">{{ $data->domisili }}</td>
                                        <td class="sort-pekerjaan">{{ $data->pekerjaan }}</td>
                                        <td class="sort-penghasilan">{{ $data->penghasilan }}</td>
                                        <td class="sort-nm_kepala_keluarga">{{ $data->nm_kepala_keluarga }}</td>
                                        <td class="sort-pekerjaan_kepala_keluarga">{{ $data->pekerjaan_kepala_keluarga }}
                                        </td>
                                        <td class="sort-jumlah_tanggungan">{{ $data->jumlah_tanggungan }}</td>
                                        <td class="sort-jumlah_anggota_keluarga">{{ $data->jumlah_anggota_keluarga }}</td>
                                        <td><a href="{{ route('admin.pengajuan.aksi', [$data->id, 'aksi' => 'proses']) }}"
                                                class="btn btn-pill btn-warning w-100">
                                                Proses Kembali
                                            </a></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-scripts')
    <script src="{{ asset('./tabler/dist/libs/list.js/dist/list.min.js?1668287865') }}" defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const list = new List('table-default', {
                sortClass: 'table-sort',
                listClass: 'table-tbody',
                valueNames: ['sort-nama', 'sort-nik', 'sort-no_kk', 'sort-domisili', 'sort-pekerjaan']
            });
        })
    </script>
@endpush
