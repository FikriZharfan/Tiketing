@extends('v_home')
@section('content')
<div class="container">
      <h4>Edit Data</h4>
      <br>
      <div class="card">
            <div class="card-body">
                  <form method="POST" action="{{ url('tiket/'.$model->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH" id="">
                        <div class="form-floating mb-3">
                              <h6>id Tiket</h6>
                          <input type="" class="form-control mb-3 " id="" name="id_tiket" value="{{$model->id_tiket}}" placeholder="masukan id tiket">
                        </div>
                        <div class="form-floating mb-3">
                              <h6>Subjek</h6>
                              <textarea class="form-control mb-3 " placeholder="masukan subjek" name="subjek" id="floatingTextarea2" style="height: 100px">{{$model->subjek}}</textarea>
                            </div>
                        <div class="form-floating mb-3">
                              <h6>From</h6> 
                          <input type="" class="form-control mb-3 " id="" name="from" value="{{$model->from}}" placeholder="From">
                        </div>
                        <div class="form-floating mb-3">
                              <h6>Prioritas</h6>
                              <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="prioritas" value="{{$model->prioritas}}">
                                    <option value="low">Low</option>
                                    <option value="medium">Medium</option>
                                    <option value="high">High</option>
                              </select>
                              <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </form>
            </div>
          </div>
</div>
@endsection