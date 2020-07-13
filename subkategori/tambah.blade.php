@extends('layout/main')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1>Tambah Subkategori</h1>
			<form action="{{route('crud.store')}}" method="POST">
					@csrf
					<div class="form-group">
						<label for="namasub">Nama Subkategori</label>
						<input type="text" class="form-control" id="namasub" name="namasub">
					</div>
					<div class="form-group">
						<label for="kodekat">Kategori</label>
						<input type="text" class="form-control" id="kodekat" name="kodekat">
					</div>
					<div class="form-group">
						<label for="ketsub">Keterangan</label>
						<input type="text" class="form-control" id="ketsub" name="ketsub">
					</div>
					{{-- <div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="status" name="status">
						<label class="form-check-label" for="status">Check me out</label>
					</div> --}}
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection