@include('header')
	<body>
    <form action="/public/prodi/{{$editdataprodi->id}}" method="POST">
    @method('PUT')
    @csrf
       <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" value="{{$editdataprodi->nama}}" id="nama" aria-describedby="nama" name="nama">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
@include('endbody')
	<body>
</html>