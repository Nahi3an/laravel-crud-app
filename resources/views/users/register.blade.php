<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="container max-w-full mx-auto pt-4" style="width:900px">
        <h1 class="text-3xl font-bold mb-4">Register Account</h1>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('user.create') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="username" type="text" placeholder="Username" value="{{ old('username') }}">
                <span>@error('username')
                        {{ $message }}
                    @enderror</span>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="email" type="email" placeholder="Email" value="{{ old('email') }}">
                <span>@error('email')
                        {{ $message }}
                    @enderror</span>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    name="password" type="password" placeholder="Password">
                <span>@error('password')
                        {{ $message }}
                    @enderror</span>
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Register
                </button>

            </div>
        </form>
    </div>

</body>

</html>
