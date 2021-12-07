@extends('v_home')
@section('content')
<div class="container">
      <br>
      <h4>Inbox</h4>
      <h5>Data Kontak Masuk/Inbox Data</h5>
      <br>
      <a class="btn btn-success" href="{{ url('tiket/create') }}">Add Data</a>

      @if (Session::has('success'))
      <p class="alert alert-success text-white">{{ Session::get('success')}}</p><br>
       @endif
      @if (Session::has('danger'))
      <p class="alert alert-danger text-white">{{ Session::get('danger')}}</p><br>
      @endif
      <div class="card">
        <div class="card-body">   
    
    <table class="table border-secondary">
      <tr>
            <th>Id Tiket</th>
            <th>Subjek</th>
            <th>From</th>
            <th>Prioritas</th>
            <th colspan="2"></th>
      </tr>
      @foreach ($datas as $key=>$value)
      <tr>
            <td>{{ $value->id_tiket}}</td>
            <td>{{ $value->subjek}}</td>
            <td>{{ $value->from}}</td>
            <td>{{ $value->prioritas}}</td>
            <td><a class="btn-info btn" href="{{ url('tiket/'.$value->id.'/edit') }}">Edit</a></td>  
            <td>
              <form action="{{ url('tiket/'.$value->id)}}" method="POST">
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