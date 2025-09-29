<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CS2-TP</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-xl p-8 max-w-md text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">👋 Hello Team!</h1>
        <p class="text-gray-600 mb-6">
            Your Laravel + Tailwind project is running successfully.
        </p>
        <a href="/" class="inline-block bg-gradient-to-r from-blue-500 to-indigo-500 text-white font-semibold py-2 px-5 rounded-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:from-indigo-500 hover:to-purple-500 animate-gradient">
            Back to Home
        </a>
        <style>
          @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
          }

          .animate-gradient {
            background-size: 200% 200%;
            animation: gradientShift 5s ease infinite;
          }
        </style>
    </div>
</body>
</html>
