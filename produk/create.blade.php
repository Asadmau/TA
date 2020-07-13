@extends('layout/main')


@section('container')
	<div class="container">
			<div class="col-10">
				<h5>Tambah Produk</h5>
<form action="{{route('produk.store')}}" method="POST">
	@csrf
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="nama_brg">Nama Produk</label>
			<input type="text" class="form-control" id="nama_brg" name="nama_brg" placeholder="Nama">
		</div>
		<div class="form-group col-md-6">
			<label for="kodekat">Kategori</label>
			<input type="number" class="form-control" id="kodekat" name="kodekat" placeholder="Kategori">
		</div>
		<div class="form-group col-md-6">
			<label for="kodesub">SubKategori</label>
			<input type="text" class="form-control" id="kodesub" name="kodesub" placeholder="SubKategori">
		</div>
		<div class="form-group col-md-6">
			<label for="kodesat">Satuan</label>
			<input type="number" class="form-control" id="kodesat" name="kodesat" placeholder="satuan">
		</div>
		<div class="form-group col-md-6">
			<label for="jumlah">jumlah</label>
			<input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
		</div>
	</div>
 
	<button type="submit" class="btn btn-primary">Tombol</button>
</form>

@endsection