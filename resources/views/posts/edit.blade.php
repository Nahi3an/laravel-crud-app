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

        <form method="POST" action="/posts/{{ $createdPost->id }}" class="mt-5 w-full max-w-sm">
            @method('PUT')
            @csrf
            <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-full-name">
                Title
            </label>
            <input
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                id="inline-title" type="text" name="title" value="{{ $createdPost->title }}">

            <label class="block text-gray-500 font-bold  mb-1 md:mb-0 pr-4" for="inline-password">
                Content
            </label>

            <textarea
                class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                id="inline-content" name="content">{{ $createdPost->content }} </textarea>
            <button
                class="shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="submit">
                Update
            </button>
            <a class="mb-3 shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                href="/posts">
                Cancel
            </a>

        </form>
        <form action="/posts/{{ $createdPost->id }}" method="POST">
            @csrf
            @method('DELETE')

            <button
                class="ml-3 shadow bg-red-500
                    hover:bg-black-400
                    focus:shadow-outline
                    focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="submit">
                Delete
            </button>
        </form>


    </div>

</body>

</html>
