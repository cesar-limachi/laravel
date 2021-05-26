@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row align-items-center h-100">
            <div class="card col-md-8 mx-auto">

                <h1 class="card-title">
                    {{ $post->title }}
                </h1>

                <img src="{{ asset($post->image) }}" alt="..." class="card-img-top">
                <div class="card-body">
                
                <h6 class="card-subtitle mb-2 text-muted">
                    {{ $post->created_at  }}
                </h6>
                <p class="card-text">
                    {{ $post->content }}
                </p>

            @guest
            @else       
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ingrese su comentario</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ingrese su comentario">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            @endguest 
                <h2 style="text-align: center">COMENTARIOS</h2>

                <h4>COMENTARIOS DE LOS USUARIOS.</h4>

                <h4>COMENTARIOS DE LOS USUARIOS.</h4>

                <a href="{{ url('/') }}" class="card-link">
                    todas las publicaciones
                </a>
            </div>
        </div>
    </div>

</div>
@endsection