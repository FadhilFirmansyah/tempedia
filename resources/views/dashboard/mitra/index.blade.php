@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Mitra</h1>
    </div>
    <div class="table-responsive col-lg-15">
      <a href="/dashboard/mitra/create" class="btn btn-primary mb-3">Create</a>

      @if (session()->has("success"))
        <div class="alert alert-success" role="alert">
          {{ session("success") }}
        </div>
      @endif
        
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Mitra</th>
              <th scope="col">Nama</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mitras as $mitra)
            <tr>
                <td>{{ $loop->iteration	 }}</td>
                <td>{{ $mitra->mitra }}</td>
                <td>{{ $mitra->nama }}</td>
                <td>
                    <a href="/dashboard/mitra/{{ $mitra->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/mitra/{{ $mitra->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/mitra/{{ $mitra->slug }}" method="post" class="d-inline">
                      @method("delete")
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to delete it?')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection