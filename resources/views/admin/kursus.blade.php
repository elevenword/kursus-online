@extends('layouts.master')
 
@section('content')

        <div class="container">
            <div class="card mt-6">
                <div class="card-header text-center">
                    Data Materi Kursus</div>
                <div class="card-body">
                    <a href="/admin/tkursus" class="btn btn-primary">Tambah Materi</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Kursus</th>
                                <th>Materi Kursus</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kursus as $p)
                            <tr>
                                <td>{{ $p->nama_kursus }}</td>
                                <td>{{ $p->isi_kursus }}</td>
                                <td>
                                    <a href="/admin/ekursus/{{ $p->id }}" class="btn btn-warning">Edit</a> 
                                    <a href="/admin/kursus/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
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
        <div class="d-flex justify-content-center">
      {!! $kursus->links() !!}
      </div>
@endsection