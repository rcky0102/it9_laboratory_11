@extends('layout')

@section('content')
    <div class="page-header">
        <h1>All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn">Create New Post</a>
    </div>
    
    @if($posts->isEmpty())
        <div class="card">
            <p>No posts found. Create your first post!</p>
        </div>
    @else
        @foreach ($posts as $post)
            <div class="card">
                <h2><a href="{{ route('posts.show', $post->id) }}" style="color: var(--gray-800); text-decoration: none; hover:text-decoration: underline;">{{ $post->title }}</a></h2>
                <p>{{ Str::limit($post->body, 150) }}</p>
                
                <div class="post-actions">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn">Read More</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif
    
    <style>
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
    </style>
@endsection