@extends('account/all')
@section('account-konten')

<div class="row">
    <div class="col-12 text-end">
        <a href="{{ route('master-barang-tambah') }}" class="btn btn-primary rounded-circle">
            <i class="fa fa-solid fa-plus"></i>
        </a>
    </div>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kode</th>
            <th scope="col">Nama Role/Peran</th>
            <th scope="col">Pilihan</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($role as $r)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $r->kode }}</td>
                <td>{{ $r->nama }}</td>
                <td>
                    <a href="" 
                        class="btn btn-sm btn-success rounded-circle">
                        <i class="fa fa-solid fa-eye"></i>
                    </a>
                    <a href="" 
                        class="btn btn-sm btn-warning rounded-circle">
                        <i class="fa fa-solid fa-pencil"></i>
                    </a>
                    <a href="" 
                        class="btn btn-sm btn-danger rounded-circle"
                        onclick="return confirm('Apakah anda yakin ingin hapus ?')">
                        <i class="fa fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection