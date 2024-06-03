@extends('layouts.admin')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data Film</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
          <div class="breadcrumb-item">Data Film</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Table</h2>
        <p class="section-lead">Example of some Bootstrap table components.</p>

        <div class="row">
          <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Full Width</h4>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                      <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tahun</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Cover</th>
                        <th>Gallery</th>
                        <th>Kategori</th>
                        <th>Actions</th>
                      </tr>
                      @foreach ($movies as $movie)
                      <tr>
                        <td>{{ $movie->id }}</td>
                        <td>{{ $movie->title }}</td>
                        <td>{{ $movie->year }}</td>
                        <td>{{ $movie->price }}</td>
                        <td>{{ $movie->description }}</td>
                        <td>
                             <img src="{{ asset('storage/'.$movie->cover) }}" width="120px" hight="120px" alt="{{$movie->cover}}">
                        </td>
                        <td>
                            <img src="{{ asset('storage/'.$movie->gallery) }}" width="120px" hight="120px" alt="{{$movie->gallery}}">
                        </td>
                        <td>{{ $movie->category }}</td>
                        <td>
                          <a href="{{ route('edit', ['movies' => $movie]) }}" class="btn btn-secondary bg-primary">Edit</a>
                          <form action="{{ route('delete', ['movies' => $movie]) }}" method="POST" style="display:inline;">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-secondary bg-danger" value='delete'>Hapus</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
