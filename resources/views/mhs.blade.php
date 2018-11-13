@include('header')
	<body>
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Prodi</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($infomhsview as $tabelmhs)
    <tr class="table-active">
      <td>{{$tabelmhs->nim}}</td>
      <td>{{$tabelmhs->nama}}</td>
      <td>{{$tabelmhs->prodi->nama}}</td>
      <td><a href="/public/mahasiswa/{{$tabelmhs->id}}/edit" class="btn btn-info">Edit</a></td>
      <td><form action="/public/mahasiswa/{{$tabelmhs->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" value="Delete">Delete</button>
                  </form></td>
      @endforeach
  </tbody>
</table>
<a  href="/public/mahasiswa/create" class="btn btn-success">Tambah</button>
@include('endbody')
	<body>
</html>