@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Lista dei Post di {{$user->name}}</h2>

        <ul>
          @foreach ($posts as $post)
            <li>{{$post->user->name}} - {{$post->title}}
              <div>
                <a class="btn btn-primary" href="{{ route('admin.posts.show', $post) }}">Visualizza</a>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
