@extends('layout/main')

@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
						
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
				<form action="{{route('satuan.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="nama_satuan">Nama Satuan</label>
						<input type="text" class="form-control" id="nama_satuan" name="nama_satuan"/>
					</div>
					<div class="form-group">
						<label for="ketsatuan">Keterangan</label>
						<textarea rows="5" columns="5" class="form-control" id="ketsatuan" name="ketsatuan"></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection