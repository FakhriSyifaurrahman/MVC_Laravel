<h1>Data Buku</h1><hr>

@if(count($buku))
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover table-condensed">
		<thead align="center">
			<tr>
				<td>ID Buku</td>
				<td>Judul buku</td>
				<td>Pengarang</td>
			</tr>
		</thead>

		<tbody>
			@foreach($buku as $b)
				<tr>
					<td>{{ $b->id }}</td>
					<td>{{ $b->judul }}</td>
					<td>{{ $b->pengarang }}</td>
					<td align="center" width="30px">
						<a href="/buku/{{$b->id}}" class="btn btn-info btn-sm" role="button">
							<i class="fa fa-info-circle"></i>Detail
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

@else
	<div class="alert alert-warning">
		<i class="fa fa-exclamation-triangle"></i>Data Buku tidak tersedia
	</div>
@endif
@endsection