@extends('layout/main')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
						<h1>Tambah data</h1>
			<div class="card-body">
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div><br />
				@endif
				<form action="{{route('speck.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="nama_spec">Nama speck</label>
						<input type="text" class="form-control" id="nama_spec" name="nama_spec"/>
					</div>
					<div class="form-group">
						<label for="kode_produk">kode produk</label>
						<input type="text" class="form-control" id="kode_produk" name="kode_produk"/>
					</div>
					<div class="form-group">
						<label for="ketspec">Keterangan</label>
						<textarea rows="5" columns="5" class="form-control" id="ketspec" name="ketspec"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection