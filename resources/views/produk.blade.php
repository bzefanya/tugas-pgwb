@extends('templates.master')

@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Produk</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>deskripsi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($getproduk as $post)
              <tr>
                <td style="width: 200px" >{{ $post->product}}</td>
                <td style="width: 500px" >{{ $post->description }}</td>
                <td style="width: 500px" >{{ $post->harga}}</td>
                <td style="width: 500px" >{{ $post->jumlah }}</td>
                <td style="width: 500px" >{{ $post->category_id }}</td>
                <td style="width: 100px"><button class="btn btn-warning">Edit</button></td>
                <td>
                <a href="{{route('produkDelete', $post->id)}}" class="btn btn-sm btn-danger">Hapus</a>

                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
    
@endsection