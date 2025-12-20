@extends('layouts.main')
@section('title', 'Users')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="/users/addform" class="btn btn-primary"><i class="bi bi-plus-square"></i> Users</a>
        </div>
        <div class="card-body">
            <!-- POP UP -->
            @if (session('alert'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ session('alert') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table id="example" class="display" style="width: 100%">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usr as $idx => $p)
                    <tr>
                        <td>{{ $idx + 1 }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->email }}</td>
                        <td>
                            @if($p->foto)
                                <img src="{{ asset('/storage/foto/' . $p->foto) }}" alt="{{ $p->foto }}" width=80 height=80>
                            @else
                                <img src="/storage/poster/noimage.jpg" alt="no image" width=80 height=80>
                            @endif
                        </td>
                        <td>
                            <!-- delete button-->
                            <a href="/users/delete/{{ $p->id }}" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
