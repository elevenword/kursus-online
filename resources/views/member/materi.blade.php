@extends('layouts.app')

@section('content')

<div class="container">
    <h1><p >Materi Kursus => Vidio Menyusul</p></h1>
    <h3> <a href="/member" class="btn btn-primary">kembali</a></h3>
    <div class="row">
  
        <table class="table table-bordered table-hover table-striped">
                       
                        <tbody>
                            @foreach($kursus as $p)
                            <tr>
                                <td>{{ $p->nama_kursus }}</td>
                                <td>{{ $p->isi_kursus }}</td>
                             
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



@endsection