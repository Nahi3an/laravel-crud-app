<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container max-w-full mx-auto pt-4" style="width:900px">

        <h1 class="text-3xl font-bold mb-4"> My Blog</h1>

        <a class="mb-3 shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
            href="/posts/create">
            Add Post
        </a>
        @foreach ($posts as $post)
            <article class="mt-5 mb-4">
                <h1 class="text-xl font-bold text-grey-90">
                    {{ $post->title }}
                </h1>

                <p class="text-md text-gray-600">{{ $post->content }}</p>

                <a href="/posts/{{ $post->id }}/edit" class="text-red-600">
                    Edit
                </a>
            </article>
        @endforeach
    </div>

</body>

</html>
