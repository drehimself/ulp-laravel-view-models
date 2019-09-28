<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<body>
    <form action="/update" method="POST">
        @csrf
        <div>
            <input type="text" placeholder="title" value="{{ $post->title }}">
        </div>
        <div>
            <textarea name="body" id="body" cols="30" rows="10">{{ $post->body }}</textarea>
        </div>
        <div>
            <select name="category" id="category">
                @foreach ($categories as $category)
                    <option
                        {{ $isSelected($category) }}
                        value="{{ $category->id }}"
                    >
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Update Post</button>
        </div>
    </form>
</body>
</html>
