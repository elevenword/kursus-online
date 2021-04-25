@extends('layouts.master')
 
@section('content')

        <div class="container">
            <div class="card mt-6">
                <div class="card-header text-center">
                    Data List Pendaftar</div>
                <div class="card-body">
                   
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Create</th>
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
                                <a href="/admin/detail" class="btn btn-warning">Detail</a> 
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