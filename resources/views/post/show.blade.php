@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-3 mx-auto">
            <div class="col">
                <h1>{{$post->title}}</h1>
                <div>
                    <h5>{{$post->body}}</h5>
                    <small class="mt-2">
                        posted on {{$post->created_at}}
                    </small>
                </div>
            </div>
        </div>
    </div>
@endsection
