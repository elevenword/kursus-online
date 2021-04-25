@extends('layouts.master')
 
@section('content')

        <div class="container">
            <div class="card mt-6">
                <div class="card-header text-center">
                    Menegent Data Pengguna</div>
                <div class="card-body">
                    <a href="/admin" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Create</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($akun as $k=> $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->password }}</td>
                                <td>{{ $p->created_at }}</td>
                                <td>
                                    <a href="/admin/eakun/{{ $p->id }}" class="btn btn-warning">Edit</a> 
                                    <a href="/admin/akun/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                            @if(!empty($pesan))
                              <div class="alert alert-danger">
                                   {{ $pesan }}
                              </div>
                              @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection