@extends('layout/main')

@section('container')

	<div class="container">
		<div class="row">
			<div class="col-10">
				<h1>Sub Kategori</h1>
	
			<a href="{{route('crud.create')}}" class="btn btn-info btn-sm"> Tambah Data</a>
				<table id="data_table_subkategori" class="table table-striped table-bordered " style="width:100%">
					<thead>
						<tr>
						<th scope="col">NO</th>
						<th scope="col">Nama Subkategori</th>
						<th scope="col">Nama Kategori</th>
						<th scope="col">Keterangan</th>
						<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($dbbarang as $item)
						
						<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$item->namasub}}</td>
						<td>{{$item->kodekat}}</td>
						<td>{{$item->ketsub}}</td>
						{{-- @php
							$status=0;
							if ($item->status) {
								$status =1;
							}
							var_dump($status);
						@endphp
						<td>{{$item->status}}</td> --}}
						<td>	
						<form action="{{route('crud.destroy',$item->id)}}" method="POST">
							@method("DELETE")
							@csrf
							<button type="submit" value="DELETE" class="btn btn-danger">delete</button>
							
						</form>
						<a href="{{route('crud.edit', $item->id)}}" class="btn btn-info btn-sm" data-method="DELETE">edit</a>
						</td>
					
				</tr>
				@endforeach
			</tbody>
					</table>
			</div>
		</div>
	</div>
@endsection