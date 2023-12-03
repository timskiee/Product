<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... (existing meta tags and title) -->
</head>
<body>
    <h1 style="font-family: sans-serif">Categories</h1>
    
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ url('/category-create') }}">Create category</a>
    
    <ul>
        @forelse ($categories as $category)
            <li>
                {{ $category->name }}
                <form method="POST" action="{{ route('category.destroy', $category) }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                <a href="{{ route('category.edit', $category) }}">Edit</a>
            </li>
        @empty
            <li>No categories available</li>
        @endforelse
    </ul>
    
    <!-- ... (existing script tag) -->
</body>
</html>
