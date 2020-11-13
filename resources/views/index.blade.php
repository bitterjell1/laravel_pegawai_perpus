<!DOCTYPE HTML>
<html>
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

	
</head>
<body>
 
	<div class="container">
		<div class="card">
			<div class="card-body">
				
				<h3>Data Pegawai</h3>

				

				<p>Cari Data Pegawai :</p>
 
				<div class="form-group">
					
				</div>
				<form action="/pegawai/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>
 
				<br/>
				<a class="float-right" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					@foreach($pegawai as $p)
					<tr>
						<td>{{ $p->pegawai_nama }}</td>
						<td>{{ $p->pegawai_jabatan }}</td>
						<td>{{ $p->pegawai_umur }}</td>
						<td>{{ $p->pegawai_alamat }}</td>
						<td>
							<a  href="/pegawai/edit/{{ $p->pegawai_id }}"><i class="fas fa-edit" title="Edit"></i></a>
							<a href="/pegawai/hapus/{{ $p->pegawai_id }}"><i class="fas fa-cut" title="Hapus"></i></a>
							<!-- <a href="/pegawai/validasiform"><i class="fas fa-tasks" title="Form Validasi"></i></a> -->

							
						</td>
					</tr>
					@endforeach
				</table>
 
				<br/>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
				<br/>
 
				{{ $pegawai->links() }}
			</div>
		</div>
	</div>
 
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>

</body>
</html>