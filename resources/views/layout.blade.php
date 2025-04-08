<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogApp</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #3b82f6;
            --primary-hover: #2563eb;
            --secondary: #64748b;
            --danger: #ef4444;
            --danger-hover: #dc2626;
            --success: #10b981;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-300: #d1d5db;
            --gray-700: #374151;
            --gray-800: #1f2937;
            --gray-900: #111827;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--gray-800);
            background-color: var(--gray-100);
            padding-bottom: 2rem;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        .navbar {
            background-color: white;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            margin-bottom: 2rem;
        }
        
        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }
        
        .nav-links a {
            margin-left: 1.5rem;
            color: var(--gray-700);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        h1 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--gray-900);
        }
        
        h2 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--gray-800);
        }
        
        p {
            margin-bottom: 1rem;
            color: var(--gray-700);
        }
        
        .btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: 0.375rem;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        
        .btn:hover {
            background-color: var(--primary-hover);
        }
        
        .btn-danger {
            background-color: var(--danger);
        }
        
        .btn-danger:hover {
            background-color: var(--danger-hover);
        }
        
        .btn-secondary {
            background-color: var(--secondary);
        }
        
        .btn-secondary:hover {
            background-color: var(--gray-700);
        }
        
        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .post-actions {
            display: flex;
            gap: 0.75rem;
            margin-top: 1rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--gray-300);
            border-radius: 0.375rem;
            font-family: inherit;
            font-size: 1rem;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25);
        }
        
        textarea.form-control {
            min-height: 200px;
            resize: vertical;
        }
        
        .alert {
            padding: 1rem;
            border-radius: 0.375rem;
            margin-bottom: 1.5rem;
        }
        
        .alert-success {
            background-color: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.2);
            color: var(--success);
        }
        
        .alert-danger {
            background-color: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.2);
            color: var(--danger);
        }
        
        @media (max-width: 768px) {
            .post-actions {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .post-actions form {
                width: 100%;
            }
            
            .post-actions .btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container navbar-content">
            <a href="{{ route('posts.index') }}" class="logo">BlogApp</a>
            <div class="nav-links">
                <a href="{{ route('posts.index') }}">Posts</a>
                <a href="{{ route('posts.create') }}">New Post</a>
            </div>
        </div>
    </nav>
    
    <main class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        @yield('content')
    </main>
</body>
</html>