@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Edit</div>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <form action="/films/{{$films->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Nama Film</label>
                            <input class="form-control" name="film_name" value="{{$films->film_name}}"></input>

                        </div> 

                        <div class="form-group">
                            <label>kategori Film</label> <br>
                            <input type="radio" name="kategori" value="{{$films->kategori}}"> Action &nbsp;&nbsp;
                            <input type="radio" name="kategori" value="{{$films->kategori}}"> Comedy &nbsp;&nbsp;
                            <input type="radio" name="kategori" value="{{$films->kategori}}"> Romance &nbsp;&nbsp;
                            <input type="radio" name="kategori" value="{{$films->kategori}}"> Horror &nbsp;&nbsp;
                            <input type="radio" name="kategori" value="{{$films->kategori}}"> Thriller &nbsp;&nbsp;
                        </div> 

                        <br>

                        <button class="btn" type="submit">Save</button>

                    </form>
                </div>  
            </div>


            <br>

            
        </div>
    </div>

    @endsection