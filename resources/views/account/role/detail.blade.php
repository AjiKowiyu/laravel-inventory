@extends('account/all')
@section('account-konten')

<h1>Detail role</h1>
@if (isset($role[0]))
    @php
        //konversi tanggal format sql menjadi gampang dibaca oleh manusia
        $tanggal_dibuat = new DateTime($role[0]->dibuat_kapan);
        $dibuat = $tanggal_dibuat->format('D, d M Y');

        //konversi tanggal format sql menjadi gampang dibaca oleh manusia
        $tanggal_diperbarui = new DateTime($role[0]->diperbarui_kapan);
        $diperbarui = $tanggal_diperbarui->format('D, d M Y');
    @endphp

    <div class="card w-50 shadow">
        <div class="card-body">
            <h5 class="card-title">{{ $role[0]->kode }}</h5>
            <h6 class="card-title">{{ $role[0]->nama }}</h6>
            <p class="card-text">{{ $role[0]->deskripsi }}</p>
            <span class="card-text">Dibuat: {{ $dibuat }} | {{ $role[0]->dibuat_nama }}</span><br>
            <span class="card-text">Terakhir Diperbarui: {{ $diperbarui }} | {{ $role[0]->diperbarui_nama }}</span>
        </div>
    </div>
@else
    <h2>tidak ada data</h2>
@endif


@endsection