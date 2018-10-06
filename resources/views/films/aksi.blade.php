@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <a href="/films"><button class="btn btn-primary" type="submit">back</button></a>
            <br>
            <br>
            <div class="card">
                <div class="card-header">Kategori Film</div> 

                <div class="card-body">


                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif


                    <center><h4> Pilih Kategori Film Yang Ingin Kamu Lihat : </h4>

                        <a href="/films/aksi"><button class="btn btn-primary">Action</button></a> &nbsp;&nbsp;&nbsp;
                        <button class="btn btn-danger">Horror</button> &nbsp;&nbsp;&nbsp;
                        <button class="btn btn-success">Comedy</button> &nbsp;&nbsp;&nbsp;
                        <button class="btn btn-warning">Romance</button> &nbsp;&nbsp;&nbsp;
                        <button class="btn btn-basic">Thriller</button>

                    </center> 
                    <br><br>
                </div>
            </div>
            <br>


            <div class="card">

                <div class="card-header">List Film Action :</div>

                <div class="card-body">

                 <center><font color="#00bfff"> <h1>LIST FILM ACTION</h1> </font></center> 
                 <br>
                 <br>

                 <ul>

                    @foreach($films as $f)
                    <table class="d">

                        <tr>
                            <th>Nama Film</th>
                            <th>Kategori</th>
                            <th>Posted By</th>
                        </tr>


                        <tr>

                            <td>{{ $f->film_name}}</td>
                            <td> <font color="blue"> {{ $f->kategori}} </font></td>
                            <td>{{$f->user->name}}</td>

                        </tr>
                    </table>


                    @endforeach

                </ul>
            </div>



        </div>
    </div>
</div>

@endsection