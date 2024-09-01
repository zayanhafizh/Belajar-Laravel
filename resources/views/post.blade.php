@extends('layouts.main')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <div class="container">
                <img src="https://loremflickr.com/1200/400/{{$post->category->name}}" class="card-img-top" alt="Nature Image">
                <h5 > {{$post->title}} </h5>
                <small>
                    <p><a href="/posts?author={{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a> in <a href="" class="text-decoration-none">{{$post->category->name}}</a> </p>
                </small>
                <p class="card-text"> {{$post->body}} </p>
                <p class="card-text">
                    <small class="text-body-secondary">{{$post->updated_at->diffForHumans()}}</small>
                </p>
            </div>
            </div>
        </div>
    </div>
@endsection