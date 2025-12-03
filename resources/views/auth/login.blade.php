<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-2xl w-full max-w-sm mx-4">
        <h2 class="text-3xl font-extrabold mb-6 text-center text-blue-700">Login Sistem</h2>
        
        @if ($errors->any())
            <div class="bg-red-50 border border-red-300 text-red-700 p-4 rounded-lg mb-6 text-sm">
                <p class="font-semibold mb-2">Terjadi Kesalahan:</p>
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('login.process') }}" method="POST">
            @csrf 
            
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition duration-150" 
                    placeholder="admin@gmail.com" 
                    required 
                    value="{{ old('email') }}"
                >
            </div>
            
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition duration-150" 
                    placeholder="********" 
                    required
                >
            </div>
            
            <button 
                type="submit" 
                class="w-full bg-blue-600 text-white font-bold py-2.5 px-4 rounded-lg hover:bg-blue-700 transition duration-300 transform hover:scale-[1.01] shadow-md hover:shadow-lg focus:outline-none focus:ring-4 focus:ring-blue-300"
            >
                Masuk
            </button>
        </form>
    </div>
</body>
</html>
