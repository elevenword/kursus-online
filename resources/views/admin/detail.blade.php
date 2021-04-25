@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 <p> Dashboard </p>
                <a href="/admin/listdaftar">Kembali</a>
                <br>
                </div>

                <table class="table table-bordered table-hover table-striped">
                    <thead>
						<tr>
							<th>Nama</th>
                            <th>Email</th>
                            <th>Alamat </th>
							<th>Nomor Telpon</th>
                            <th>Tujuan Kursus</th>
                            <th>Pendidikan</th>
						</tr>
					</thead>
					<tbody>
						@foreach($user as $p)
						<tr>
							<td>{{ $p->name }}</td>
                            <td>{{ $p->email }}</td>
                            <td>{{ $p->alamat }} </td>
                            <td>{{ $p->no_tlp }} </td>
                            <td>{{ $p->tujuan }} </td>
							<td>{{ $p->pendidikan }}</td>
						
                        
                        </tr>>
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
</div>
@endsection