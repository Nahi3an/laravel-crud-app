<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container max-w-full mx-auto pt-4" style="width:900px">
        <a class="mb-3 shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white py-2 px-4 rounded"
            href="{{ route('user.logout') }}">
            Logout
        </a>
        <h1 class="text-3xl font-bold mb-4 mt-5">User Profile</h1>
        <h2>Username : {{ $loggedUser->name }}</h2>
        <h2>Email : {{ $loggedUser->email }}</h2>
    </div>



</body>

</html>
