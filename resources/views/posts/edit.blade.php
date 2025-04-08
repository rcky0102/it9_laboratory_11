@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Edit Post</h1>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
    </div>
    
    <div class="card">
        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
            </div>
            
            <div class="form-group">
                <label for="body" class="form-label">Content</label>
                <textarea id="body" name="body" class="form-control" required>{{ old('body', $post->body) }}</textarea>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn">Update Post</button>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
    
    <style>
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .form-actions {
            display: flex;
            gap: 1rem;
        }
    </style>
@endsection