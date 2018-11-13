@include('header')
	<body>
    <form action="prodi" method="POST">
    @csrf
      <div class="form-group">
      <label for="nama">Nama Prodi</label>
      <input type="text" class="form-control" id="namaprodi" aria-describedby="namaprodi" name="namaprodi" placeholder="Teknologi Informasi">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('endbody')
	<body>
</html>