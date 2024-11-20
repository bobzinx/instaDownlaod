<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Video Downloader</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-md rounded-lg p-8 max-w-md w-full">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Instagram Video Downloader</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
                <strong>Erro:</strong> {{ $errors->first() }}
            </div>
        @endif

        <form action="/download" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="url" class="block text-sm font-medium text-gray-700">URL do Instagram</label>
                <input 
                    type="url" 
                    name="url" 
                    id="url" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-700" 
                    placeholder="Cole a URL aqui" 
                    required>
            </div>

            <button 
                type="submit" 
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Baixar Vídeo
            </button>
        </form>
    </div>

</body>
</html>
