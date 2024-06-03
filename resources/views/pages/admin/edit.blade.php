@extends('layouts.admin')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Edit Film</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
          <div class="breadcrumb-item">Tambah film</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Forms</h2>
        <p class="section-lead">
            Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
        </p>


        <form action="{{ route('update', ['movies' => $movie])}}" method="POST">
            <div class="form-group">
                @csrf
                @method('put')
              <label>Judul Film</label>
              <input type="search" class="form-control @error('title')
                  is-invalid
              @enderror" name="title" value="{{ $movie->title }}">
              @error('title')
              <div class="invalid-feedback">
                {{ $message }}
            </div>
              @enderror
            </div>
            <div class="form-group">
              <label>Tahun Rilis</label>
              <input type="search" class="form-control @error('year')
                  is-invalid
              @enderror" name="year" value="{{ $movie->year }}">
              @error('year')
              <div class="invalid-feedback">
                {{ $message }}
            </div>
              @enderror
            </div>
            <div class="form-group">
              <label>Harga</label>
              <input type="search" class="form-control @error('price')
                  is-invalid
              @enderror" name="price" value="{{ $movie->price }}">
              @error('price')
              <div class="invalid-feedback">
                {{ $message }}
            </div>
              @enderror
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control @error('description')
                    is-invalid
                @enderror" name="description" value="{{ $movie->description }}"></textarea>
                @error('descriprion')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label>Cover</label>
                <input type="file" class="form-control @error('cover')
                is-invalid
                @enderror" name="cover" value="">
                @error('cover')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label>Gallery</label>
                <input type="file" class="form-control @error('gallery')
                is-invalid
                @enderror" name="gallery" value="">
                @error('gallery')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>


              <div class="form-group">
                <label>Kategori</label>
                <select class="custom-select form-control @error('category')
                is-invalid
                @enderror" name="category" value="{{ $movie->category }}">
                  <option selected>Pilih jenis genre</option>
                  <option value="comedy">Komedi</option>
                  <option value="horror">Horror</option>
                  <option value="cartoon">Kartun/Animasi</option>
                  <option value="drama">Drama</option>
                </select>
              </div>

                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit" >Edit</button>
                  </div>
                </div>

            </div>
          </div>
        </section>
        </form>
  </div>

