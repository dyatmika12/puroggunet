@include('header')
	<body>
    <form action="public/mahasiswa/{{$editdatamhs->id}}" method="POST">
    @method('PUT')
    @csrf
       <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" value="{{$editdatamhs->nama}}" id="nama" aria-describedby="nama" name="nama">
    </div>
          <div class="form-group">
      <label for="nim">NIM</label>
      <input type="number" class="form-control" value="{{$editdatamhs->nim}}" id="nim" aria-describedby="nim" name="NIM">
    </div>
  <fieldset>
    <div class="form-group">
      <label for="exampleSelect1">Prodi</label>
      <select class="form-control" value="{{$editdatamhs->prodi}}" name="prodi" id="exampleSelect1">
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