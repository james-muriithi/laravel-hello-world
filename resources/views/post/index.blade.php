@extends('layouts.app')
@section('content')
    @include('includes.nav')
    <div class="w-100 container mt-3">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 mb-2">
                <a href="{{route('posts.create')}}" class="btn btn-primary float-right">Create Post</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <p>{{ $message }}</p>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
            <div class="col-12">
                @if(isset($posts) && count($posts) > 0)
                    @foreach($posts as $i=>$post)
                        <div class="well border m-2 p-3">
                            <h3><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></h3>
                            <small>{{$post->body}}</small>
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-right">
                                        <form method="POST" action="{{route('posts.destroy', $post->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-success">Edit</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{$posts->links()}}
                @endif
            </div>
        </div>
    </div>
@endsection
