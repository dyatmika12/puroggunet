@include('header')
	<body>
    <form action="public/mahasiswa" method="POST">
    @csrf
      <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" aria-describedby="nama" name="nama" placeholder="Gusde Kurnia">
    </div>
          <div class="form-group">
      <label for="nim">Nama</label>
      <input type="number" class="form-control" id="nim" aria-describedby="nim" name="NIM" placeholder="1705551064">
    </div>
  <fieldset>
    <div class="form-group">
      <label for="exampleSelect1">Prodi</label>
      <select class="form-control" name="prodi" id="exampleSelect1">
        @foreach ($pilihanprodi as $pilihan)
        <option value="{{$pilihan->id}}">{{$pilihan->nama}}</option>
        @endforeach
      </select>
    </div>
    </fieldset>
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@include('endbody')
	<body>
</html>