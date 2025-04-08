@extends('layout')

@section('content')
    <div class="page-header">
        <h1>{{ $post->title }}</h1>
        <div class="post-actions">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
            </form>
        </div>
    </div>
    
    <div class="card">
        <div class="post-content">
            {{ $post->body }}
        </div>
        
        <div class="post-footer">
            <a href="{{ route('posts.index') }}" class="btn">Back to all posts</a>
        </div>
    </div>
    
    <style>
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .post-content {
            margin-bottom: 2rem;
            line-height: 1.8;
        }
        
        .post-footer {
            padding-top: 1.5rem;
            border-top: 1px solid var(--gray-200);
        }
    </style>
@endsection