@extends('layouts.master')
 
@section('content')

        <div class="container">
            <div class="card mt-6">
                <div class="card-header text-center">
                    Data Materi Kursus</div>
                <div class="card-body">
                   
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Member</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Link </th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($validasi as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->email}}</td>
                                <td>{{ $p->password }}</td>
                                <td>{{ $p->link }} </td>
                                <td>
                                    <a href="/admin/evalidasi/{{ $p->id }}" class="btn btn-warning">Edit</a> 
                                    <a href="/admin/validasi/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
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