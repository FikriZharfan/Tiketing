@extends('v_home')
@section('content')
<div class="container">
      <br>
      <h4>Inbox</h4>
      <h5>Data Kontak Masuk/Inbox Data</h5>
      <br>

      {{-- <a class="btn btn-success" href="{{ url('inbox/create') }}">Add Data</a> --}}

      <div class="card">
        <div class="card-body">
            @if (Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success')}}</p><br>
        @endif
    @if (Session::has('danger'))
        <p class="alert alert-danger">{{ Session::get('danger')}}</p><br>
    @endif
    <table class="table border-secondary">
      <tr>
            <th>Nama</th>
            <th>Subjek</th>
            <th>Email</th>
            <th>Nomor Tlpn</th>
            <th colspan="2"></th>
      </tr>
      @foreach ($datas as $key=>$value)
      <tr>
            <td>{{ $value->nama}}</td>
            <td>{{ $value->subjek}}</td>
            <td>{{ $value->email}}</td>
            <td>{{ $value->nomor}}</td>
            <td><a class="btn-info btn" href="{{ url('inbox/'.$value->id.'/edit') }}">Edit</a></td>  
            <td>
              <form action="{{ url('inbox/'.$value->id)}}" method="POST">
              @csrf
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-danger" type="submit">Delete</button>
              </form> 
            </td>
      </tr>    
      @endforeach
     </table>
        </div>
      </div>
     
</div>
@endsection