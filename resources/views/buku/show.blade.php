@extends('app')

@section('title')
	Buku | Show
@endsection

@section('content')
	<h1>Deatil Buku</h1><hr>
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover table-condensed">
			<tbody>
				<tr>
					<td>Id Buku</td>
					<td>{{ $buku->id }}</td>
				</tr>
				<tr>
					<td>Judul Buku</td>
					<td>{{ $buku->judul }}</td>
				</tr>
				<tr>
					<td>Pengarang</td>
					<td>{{ $buku->pengarang }}</td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td>{{ $buku->jumlah }}</td>
				</tr>
				
			</tbody>
			
		</table>
		
	</div>