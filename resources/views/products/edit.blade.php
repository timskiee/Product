<!-- resources/views/products/edit.blade.php -->



    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required><br>

        <label for="description">Description:</label>
        <textarea name="description" required>{{ $product->description }}</textarea><br>

        <label for="price">Price:</label>
        <input type="text" name="price" value="{{ $product->price }}" required><br>

        <label for="category_id">Category:</label>
        <select name="category_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select><br>



        <button type="submit">Update Product</button>
    </form>

