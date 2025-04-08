@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Create New Post</h1>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
    </div>
    
    <div class="card">
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            
            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Enter post title" value="{{ old('title') }}" required>
            </div>
            
            <div class="form-group">
                <label for="body" class="form-label">Content</label>
                <textarea id="body" name="body" class="form-control" placeholder="Write your post content here..." required>{{ old('body') }}</textarea>
            </div>
            
            <button type="submit" class="btn">Save Post</button>
        </form>
    </div>
    
    <style>
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }
    </style>
@endsection