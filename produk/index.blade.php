@extends('layout.main')


@section('container')
	<div class="container">
		<div class="row">
			<div class="col-10">
                <h1>Produk</h1>
                
		<a href="{{route('produk.create')}}" class="btn btn-info btn-sm"> Tambah Data</a>
		<table id="data_table_subkategori" class="table table-striped table-bordered " style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Nama Kategori</th>
                <th>Nama Subkatagori</th>
                <th>Satuan</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dbbarang as $item)
            <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_brg }}</td>
                    <td>{{ $item->kodekat }}</td>
                    <td>{{ $item->kodesub }}</td>
                    <td>{{ $item->kodesat}}</td>
                    <td>{{ $item->jumlah}}</td>
                    {{-- @php
                        $status=0;
                        if ($item->status) {
                            $status =1;
                        }
                        var_dump($status);
					@endphp
                    <td>{{ $item->status}}</td> --}}
                    <td>	
						<form action="{{route('produk.destroy',$item->id)}}" method="POST">
							@method("DELETE")
                            @csrf
                           
							<button type="submit" value="DELETE" class="btn btn-danger">delete</button>
							
						</form>
						<a href="{{route('produk.edit', $item->id)}}" class="btn btn-info btn-sm" >edit</a>
					</td>
                </tr>
            @endforeach
            
    </table>
     
			</div>
		</div>
	</div>
	
	 
@endsection