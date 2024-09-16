<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login - Muhamad Ilham Mubarrok</title>

    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/custom.css'])

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.png') }}" />
</head>

<body class="h-screen flex items-center justify-center bg-cover bg-center"
    style="background-image: url('./assets/background/login.png');">
    <div class="bg-sky-500/[.06] shadow-lg rounded-lg p-8 w-full max-w-md">
        <img src="./assets/images/favicon.png" class="mx-auto top-[-10px] " alt="">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 mb-2 text-gradient font-bold">Email address</label>
                <input type="email" id="email" name="email"
                    class="w-full p-2 border border-gray-300 rounded-full pl-[15px]" placeholder="Email" required>
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 mb-2 text-gradient font-bold">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full p-2 border border-gray-300 rounded-full pl-[15px]" placeholder="Password" required>
                @error('password')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-full w-[100px] text-sm px-5 py-2.5 text-center me-2 mb-2 font-anek-latin font-extrabold">Login</button>

            </div>
        </form>
    </div>

    <!-- Font Awesome for icons (used for Twitter icon) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
