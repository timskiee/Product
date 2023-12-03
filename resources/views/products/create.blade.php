<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <ul>
        @if ($errors->any())
           @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
    </ul>
    <h1 style="font-family: sans-serif">Create Products</h1>
    <form action="{{ route('store.post') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Product name" required><br>
    <textarea name="description" placeholder="description" required ></textarea><br>
    <input type="text" name="price" placeholder="price" required><br>
    <br>
    <label for="category_id">Category:</label>
    <select name="category_id" required > 

       @foreach ($categories as $category)

       <option value="{{$category->id}}">{{$category->name}}</option>
           
       @endforeach

    </select>
    <br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>