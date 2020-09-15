@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>benvenuto nel sito, questi sono i post</h1>
          <ul>
            @foreach ($posts as $post)
              <li>
                {{$post->title}}
                <div>
                  <a class="btn btn-primary" href="{{route('posts.show', $post)}}">Visualizza</a>
                </div>
              </li>
            @endforeach
          </ul>
      </div>
    </div>
  </div>

@endsection
