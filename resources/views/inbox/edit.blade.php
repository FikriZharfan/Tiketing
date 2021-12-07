@extends('v_home')
@section('content')
<div class="container">
      <br>
      <h4>Edit Data/Update Data</h4>
      <hr>
      <form method="POST" action="{{ url('inbox/'.$model->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH" id="">
            <div class="form-floating mb-3">
              <label for="floatingInput">Nama Lengkap</label>
              <br>
              <input type="" class="form-control mb-3" id="" name="nama" value="{{$model->nama}}" placeholder="masukan nama lengkap">
            </div>
            <div class="form-floating mb-3">
                  <label for="floatingInput">Subjek</label>
                  <br>
                  <textarea class="form-control mb-3" placeholder="masukan subjek" name="subjek" id="floatingTextarea2" style="height: 100px">{{$model->subjek}}</textarea>
                </div>
            <div class="form-floating mb-3">
              <label for="floatingPassword">Email</label>
              <br>
              <input type="" class="form-control mb-3" id="" name="email" value="{{$model->email}}" placeholder="masukan alamat email">
            </div>
            <div class="form-floating mb-3">
                  <label for="floatingPassword">Nomor Hp</label>
                  <br>
                  <input type="" class="form-control mb-3" id="" name="nomor" value="{{$model->nomor}}" placeholder="masukan nomor hp">
                  <hr>
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
          </form>
</div>
@endsection