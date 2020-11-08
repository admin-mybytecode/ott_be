@extends('layouts.admin')
@section('title','All Live Tv')
@section('content')
<!-- {{dump($data)}} -->
  <div class="content-main-block mrg-t-40">
    <div class="admin-create-btn-block">
      <a href="{{route('temple.create')}}" class="btn btn-danger btn-md"><i class="material-icons left">add</i> Add Temple</a>
    </div>
    <div class="content-block box-body">
      <table id="moviesTable" class="table table-hover">
        <thead>
          <tr class="table-heading-row">
            <th>
              #
            </th>
            <th>Name</th>
            <th>Adress</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
          </tr>
        </thead>
        @foreach($data as $index=> $item)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->address }}</td>
                <td>{!! $item->description !!}</td>
                <td><img src="{{ url('/temples/' . $item->file)  }}" height="150px" width="150px"/></td>
                <td><button class="btn btn-primary">Edit</button></td>
            </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection