@extends('v_home')
@section('content')
<div class="container">
<div class="card w-95">
      <h5 class="card-header bg-primary text-white">Contact Us</h5>
      <div class="card-body bg">
        @if (Session::has('success'))
              <p class="alert alert-primary alert-dismissible text-white">{{ Session::get('success')}}</p><br>
          @endif
          <div class="row">
            <div class="col-sm-6">
              <div class="card" data-tilt>
                <div class="card-body">
                  <img src="{{asset('admin/assets/img/robot.jpg')}}" class="img h-100 w-100" >
                  <h5 >Do you have problems and complaints?</h5>
                  <h5 class="text-primary"> Our team is ready to help you</h5>
                  <hr>
                  <a href="https://wa.me/6288215067443" class="btn btn-success"> <i class="material-icons opacity-10">whatsapp</i></a>
                </div>
              </div>
            </div>



            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <form method="POST" action="{{ url('inbox') }}">
                    @csrf
                    <div class="form-floating mb-3">
                      <label for="floatingInput">Nama Lengkap</label>
                      <br>
                      <input type="" class="form-control mb-3" id="" name="nama" placeholder="masukan nama lengkap">
                    </div>
                    <div class="form-floating mb-3">
                          <label for="floatingInput">Subjek</label>
                          <br>
                          <textarea class="form-control mb-3" placeholder="masukan subjek" name="subjek" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    <div class="form-floating mb-3">
                      <label for="floatingPassword">Email</label>
                      <br>
                      <input type="" class="form-control mb-3" id="" name="email" placeholder="masukan alamat email">
                    </div>
                    <div class="form-floating mb-3">
                          <label for="floatingPassword">Nomor Hp</label>
                          <br>
                          <input type="" class="form-control mb-3" id="" name="nomor" placeholder="masukan nomor hp">
                          <hr>
                          <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>                
@endsection