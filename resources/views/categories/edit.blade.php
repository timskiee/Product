<!-- resources/views/categories/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>
    <form method="POST" action="{{ route('category.update', ['category' => $category->id]) }}">
        @csrf
        @method('PUT')

        <label for="name">Category Name:</label>
        <input type="text" name="name" value="{{ $category->name }}" required>

        <button type="submit">Update Category</button>
    </form>
</body>
</html>
