@extends('layouts.app')

@section('title',"$kursus->nama_kursus")

@section('content')


<hr>

<div class=" container  fixed">
	<div class="row">
		<div class="col s2">
			
		</div>



	<div class="col s8">
	 <h3> Halaman Post </h3>
 		<a href="blog"> Blog </a>
		<p>	{{$kursus -> title}} </p>
		{{$kursus -> created_at}}
<hr>
		<p>	{{$kursus -> isi_kursus}} </p>


	</div>



	<div class="col s2">
		
	</div>
	</div>
</div>
<hr>
 @endsection

@section('footer')