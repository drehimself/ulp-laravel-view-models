<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>
</head>
<body>
    <form action="/create" method="POST">
        @csrf
        <div>
            <input type="text" placeholder="title">
        </div>
        <div>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
        </div>
        <div>
            <select name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

        </div>
        <div>
            <button type="submit">Create Post</button>
        </div>
    </form>
</body>
</html>
