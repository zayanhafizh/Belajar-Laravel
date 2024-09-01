@extends('layouts.main')

@section('content')
    <div class="row mt-4">
        <form action="">
        <div class="col mb-4 d-flex justify-content-center">
            <div class="input-group mb-3 w-50">
                <input type="text" class="form-control"  name="search" placeholder="Keyword..." aria-label="Recipient's username" aria-describedby="button-addon2" value=" {{request('search')}} ">
                <button class="btn btn-outline-secondary bg-primary text-white" type="submit" id="button-addon2">Search</button>
            </div>
        </div>
        </form>
        <!-- Card pertama dengan gambar dari URL langsung -->
        <div class="card mb-4 p-0">
            <img src="https://loremflickr.com/1200/400/{{$posts[0]->category->name}}" class="card-img-top" alt="Nature Image">
            <div class="card-body text-center">
                <h5 class="card-title"> <a href="" class="text-decoration-none text-black"> {{$posts[0]->title}} </a> </h5>
                <small>
                    <p><a href="/posts?author={{$posts[0]->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}}</a> in <a href="" class="text-decoration-none">{{$posts[0]->category->name}}</a> </p>
                </small>
                <p class="card-text"> {{$posts[0]->excerpt}} </p>
                <p class="card-text">
                    <small class="text-body-secondary">{{$posts[0]->updated_at->diffForHumans()}}</small>
                </p>
                <a href="/post/{{$posts[0]->slug}}" class="btn btn-primary">Read more</a>
            </div>
        </div>
        <!-- Loop untuk kartu lainnya -->
        @foreach ($posts->skip(1) as $post)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <!-- Ganti dengan URL gambar atau data yang sesuai dari $post -->
                    <img src="https://loremflickr.com/1024/768/{{$post->category->name}}" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <small>
                        <p><a href="/posts?author={{$post->author->username}}" class="text-decoration-none">{{$posts[0]->author->name}}</a> in <a href="" class="text-decoration-none">{{$posts[0]->category->name}}</a> </p>
                        </small>
                            <p class="card-text"> {{$post->excerpt}} </p>
                        <p class="card-text">
                            <small class="text-body-secondary">{{$post->updated_at->diffForHumans()}}</small>
                        </p>
                            <a href="/post/{{$post->slug}}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>    
        @endforeach
    </div>
    {{ $posts->links()}}
@endsection
