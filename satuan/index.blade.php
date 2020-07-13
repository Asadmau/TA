@extends('layout.main')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                <h1>SATUAN</h1>
                
		<a href="{{route('satuan.create')}}" class="btn btn-info btn-sm"> Tambah Data</a>
		<table id="data_table_subkategori" class="table table-striped table-bordered " style="width:100%">
        <thead>
            <tr>
              
				<td>No</td>
				<td>Nama Satuan</td>
				<td>Keterangan</td>
				<td>Aksi</td>
    
            </tr>
        </thead>
        <tbody>
            @foreach($dbbarang as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->nama_satuan}}</td>
            <td>{{$item->ketsatuan}}</td>
            <td><a href="{{ route('satuan.edit', $item->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('satuan.destroy', $item->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
            
    </table>
     
			</div>
		</div>
	</div>
	
	 
@endsection