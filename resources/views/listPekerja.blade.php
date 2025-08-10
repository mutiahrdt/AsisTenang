@extends('adminlte::page')

@section('title', 'Daftar Pekerja')

@section('content_header')
    <h1>Daftar Pekerja</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('pekerja.create') }}" class="btn btn-primary mb-3">Tambah Pekerja</a>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pekerja</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Asisten</th>
                                <th>Bidang Keahlian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pekerjaList as $pekerja)
                                <tr>
                                    <td>{{ $pekerja->namaAsisten }}</td>
                                    <td>{{ $pekerja->bidangKeahlian }}</td>
                                    <td>
                                        <a href="{{ route('pekerja.edit', $pekerja->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('pekerja.show', $pekerja->id) }}" class="btn btn-sm btn-info">Lihat</a>
                                        <form action="{{ route('pekerja.destroy', $pekerja->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
