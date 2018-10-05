@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row right-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Beranda</div> 

                <div class="card-body">





                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h4> Pilih Kategori Film Yang Ingin Kamu Lihat : </h4>

                    <a href="/films"><button class="btn btn-primary">Action</button></a> &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-danger">Horror</button> &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-success">Comedy</button> &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-warning">Romance</button> &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-basic">Thriller</button>
                    <br><br>

                    <h4> Hai, Disini Kamu Bisa Mendaftarkan Film Favoritmu Sesuai Kategori</h4>



                    @include('common.errors')

                    <form action="/films" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Nama Film</label>
                            <input class="form-control" name="film_name"></input>

                        </div> 

                        <div class="form-group">
                            <label>kategori Film</label> <br>
                            <input type="radio" name="kategori" value="Action"> Action &nbsp;&nbsp;
                            <input type="radio" name="kategori" value="Comedy"> Comedy &nbsp;&nbsp;
                            <input type="radio" name="kategori" value="Romance"> Romance &nbsp;&nbsp;
                            <input type="radio" name="kategori" value="Horror"> Horror &nbsp;&nbsp;
                            <input type="radio" name="kategori" value="Thriller"> Thriller &nbsp;&nbsp;
                        </div> 
                        

                        <br>

                        <button class="btn" type="submit">Simpan</button>



                    </form>


                </div>  



            </div>


            <br> 

            <div class="card">

                <div class="card-header">List Film Favorite Kamu :</div>

                <div class="card-body">

                    <ul>

                        @foreach($films as $f)
                        <table class="d">

                            <tr>
                                <th>Task Name</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>


                            <tr>

                                <td>{{ $f->film_name}}</td>
                                <td>{{ $f->kategori}}</td>
                                <td>    <a href="/films/{{ $f->id }}/edit">
                                    {{ method_field('PUT') }}
                                    {{ csrf_field() }}

                                    <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-trash"></i>Edit</button>
                                </a></td>

                                <td>
                                    <form action="{{ url('films/'.$f->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>
                                


                            </tr>
                        </table>


                        @endforeach

                    </ul>
                </div>



            </div>
        </div>
    </div>

    @endsection