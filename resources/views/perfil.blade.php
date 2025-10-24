<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoLife - Perfil do Usuário</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style/perfil.css') }}">
</head>
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-sm sticky top-0 z-50">
            <div class="container mx-auto px-4 py-3 flex items-center justify-between">
                <a href="#" class="font-['Pacifico'] text-3xl text-primary">EcoLife</a>
                <nav class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-primary font-medium">Início</a>
                    <a href="receitas.html" class="text-gray-700 hover:text-primary font-medium">Receitas</a>
                    <a href="/calculadora" class="text-gray-700 hover:text-primary font-medium">Calculadora de IMC</a>
                    <a href="#" class="text-gray-700 hover:text-primary font-medium">Plantio</a>
                    <a href="#" class="text-gray-700 hover:text-primary font-medium">Infantil</a>
                    <a href="blog.html" class="text-gray-700 hover:text-primary font-medium">Blog</a>
                    <a href="perfil.html" class="text-gray-700 hover:text-primary font-medium">Perfil</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <a href="login.html"><button class="bg-primary text-white px-5 py-2 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors">Entrar</button></a>
                    <div class="w-10 h-10 flex items-center justify-center md:hidden">
                        <i class="ri-menu-line ri-lg"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow p-4 md:p-8 flex items-center justify-center">
            <div class="bg-white rounded-xl shadow-sm p-6 max-w-sm w-full">
                <div class="flex flex-col items-center">
                    <!-- Perfil do Usuário -->
                    <div class="relative mb-4">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Profile"
                             class="w-32 h-32 rounded-full object-cover border-4 border-green-100">
                        <button
                            class="absolute bottom-0 right-0 bg-green-500 text-white p-2 rounded-full hover:bg-green-600 transition">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">{{ $user->nome }}</h2>
                    <p class="text-gray-600 mb-4">Membro desde: {{ $user->created_at->format('d/m/Y') }}</p>

                    <!-- Último IMC -->
                    @if($latestBmi)
                    <div class="bg-green-50 rounded-xl shadow-sm p-4 w-full mt-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2 flex items-center">
                            <i class="fas fa-chart-line text-green-500 mr-2"></i> Último IMC
                        </h3>
                        <div class="flex items-center justify-between mb-2">
                            <div>
                                <p class="text-2xl font-bold">{{ $latestBmi->bmi }}</p>
                                <p class="text-sm text-gray-600">{{ $latestBmi->category }}</p>
                            </div>
                            <div class="text-3xl">
                                @if($latestBmi->bmi < 18.5)
                                    <i class="fas fa-utensils text-blue-500"></i>
                                @elseif($latestBmi->bmi <= 24.9)
                                    <i class="fas fa-heart text-green-500"></i>
                                @elseif($latestBmi->bmi <= 29.9)
                                    <i class="fas fa-exclamation-triangle text-yellow-500"></i>
                                @else
                                    <i class="fas fa-exclamation-circle text-red-500"></i>
                                @endif
                            </div>
                        </div>
                        <p class="text-sm text-gray-700 mb-1">{{ $latestBmi->message }}</p>
                        <p class="text-sm text-gray-700 font-medium">Dica: {{ $latestBmi->tip }}</p>
                    </div>
                    @endif
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white py-6 px-4 border-t">
            <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center">
                        <i class="fas fa-leaf text-white"></i>
                    </div>
                    <span class="font-bold text-green-600">EcoLife</span>
                </div>
                <div class="flex space-x-6">
                    <a href="termos.html" class="text-gray-600 hover:text-green-600 transition">Termos</a>
                    <a href="#" class="text-gray-600 hover:text-green-600 transition">Privacidade</a>
                    <a href="#" class="text-gray-600 hover:text-green-600 transition">Contato</a>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('source/perfil.js') }}"></script>
</body>
</html>
