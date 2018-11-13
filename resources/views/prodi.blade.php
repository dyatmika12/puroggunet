@include('header')
	<body>
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Prodi</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($infoprodiview as $tabelprodi)
    <tr class="table-active">
      <th scope="row">{{$tabelprodi->id}}</th>
      <td>{{$tabelprodi->nama}}</td>
      <td><a href="/public/prodi/{{$tabelprodi->id}}/edit" class="btn btn-info">Edit</a></td>
      <td><form action="/public/prodi/{{$tabelprodi->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" value="Delete">Delete</button>
                  </form></td>
      @endforeach
  </tbody>
</table>
<a  href="/public/prodi/create" class="btn btn-success">Tambah</button>
@include('endbody')
	<body>
</html>