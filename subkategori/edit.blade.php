@extends('layout/main')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1>Edit Subkategori</h1>
			<form action="{{url('/crud'.'/'. $dbbarang->id)}}" method="POST">
				@method('PATCH')
				@csrf
					<div class="form-group">
						<label for="namasub">Subkategori</label>
					<input type="text" class="form-control" id="namasub" name="namasub" value="{{$dbbarang->namasub}}">
					</div>
					<div class="form-group">
						<label for="kodekat">Kategori</label>
					<input type="text" class="form-control" id="kodekat" name="kodekat" value="{{$dbbarang->kodekat}}">
					</div>
					<div class="form-group">
						<label for="ketsub">Keterangan</label>
					<input type="text" class="form-control" id="ketsub" name="ketsub" value="{{$dbbarang->ketsub}}">
					</div>
					{{-- <div class="form-group form-check"> --}}
						{{-- @php
							$status=false;
							if ($dbbarang->status == 1) {
								$status =true;
							}
							// var_dump($status);
						@endphp --}}
						{{-- checkbox --}}
						{{-- <input type="checkbox" class="form-check-input" name="status" id="status" checked="{{$status}}">
						<label class="form-check-label" for="status" >Status(Publish)</label>
					</div> --}}
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection