<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EcoHeróis: A Liga da Nutrição - EcoLife</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Fredoka:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com/3.4.16"></script>
<link rel="stylesheet" href="{{ asset("style/infantil.css") }}">

</head>
<body class="bg-gray-50">
<!-- Header -->
<header class="bg-white shadow-sm sticky top-0 z-50">
<div class="container mx-auto px-4 py-3 flex items-center justify-between">
<a href="index.html" class="font-['Pacifico'] text-3xl text-primary">EcoLife</a>
<nav class="hidden md:flex space-x-8">
<a href="/" class="text-gray-700 hover:text-primary font-medium">Início</a>
<a href="/receitas" class="text-gray-700 hover:text-primary font-medium">Receitas</a>
<a href="/calculadora" class="text-gray-700 hover:text-primary font-medium">Calculadora de IMC</a>
<a href="/plantio" class="text-gray-700 hover:text-primary font-medium">Plantio</a>
<a href="/infantil" class="text-primary font-medium border-b-2 border-primary">Infantil</a>
<a href="/blog" class="text-gray-700 hover:text-primary font-medium">Blog</a>
<a href="/profile" class="text-gray-700 hover:text-primary font-medium">Perfil</a>
</nav>
<div class="flex items-center space-x-4">
<a href="login.html"><button class="bg-primary text-white px-5 py-2 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors">Entrar</button></a>
<div class="w-10 h-10 flex items-center justify-center md:hidden">
<i class="ri-menu-line ri-lg"></i>
</div>
</div>
</div>
</header>

<!-- Hero Section -->
<section class="hero-section-ecoherois py-20">
<div class="container mx-auto px-4 hero-content">
<div class="max-w-3xl">
<h1 class="text-5xl md:text-6xl font-bold mb-4 text-white">EcoHeróis: A Liga da Nutrição</h1>
<p class="text-xl text-white mb-8 opacity-95">Seus filhos merecem superpoderes! Aqui, cada alimento é um herói que constrói um corpo forte e uma mente brilhante. Conteúdo seguro, divertido e aprovado por especialistas.</p>
<div class="flex flex-col sm:flex-row gap-4">
<button class="button-action">Conhecer a Liga!</button>
<button class="bg-white text-primary border-2 border-white px-6 py-3 !rounded-button whitespace-nowrap hover:bg-gray-100 transition-colors font-medium">Explorar Receitas</button>
</div>
</div>
</div>
</section>

<!-- Quartel-General Section -->
<section class="py-16 bg-white">
<div class="container mx-auto px-4">
<div class="comic-bubble">
<h2 class="text-3xl font-bold mb-4 text-primary">🎯 Bem-vindo ao Quartel-General!</h2>
<p class="text-gray-700 mb-4 text-lg">Aqui na Liga da Nutrição, acreditamos que aprender sobre alimentação saudável deve ser *divertido, seguro e envolvente* para toda a família!</p>
<p class="text-gray-700 mb-4">Cada receita e atividade foi cuidadosamente desenvolvida por nossos *nutricionistas e educadores*, garantindo que seu filho não apenas aprenda sobre nutrição, mas também se divirta no processo.</p>
<div class="bg-green-50 border-l-4 border-primary p-4 mt-6">
<p class="font-semibold text-primary mb-2">✓ Missão Saúde e Segurança</p>
<p class="text-gray-700 text-sm">Todas as receitas são testadas, seguras e adequadas para crianças de 4 a 12 anos. Cada atividade promove aprendizado sobre nutrição de forma leve e educativa.</p>
</div>
</div>
</section>

<!-- Arquivo de Heróis Section -->
<section class="py-16 bg-gray-50">
<div class="container mx-auto px-4">
<h2 class="section-title mb-12">Conheça a Liga!</h2>
<p class="text-gray-700 mb-12 text-lg">Cada alimento tem um superpoder especial. Conheça os heróis que vão transformar a saúde do seu filho:</p>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Herói 1 -->
<div class="card-hero p-6 rounded">
<div class="flex items-center mb-4">
<div class="icon-circle bg-red-100 mr-4">🥕</div>
<span class="badge-hero hero">Visão</span>
</div>
<h3 class="text-2xl font-bold mb-2">Capitão Caroteno</h3>
<p class="text-gray-600 mb-4"><strong>Alimento:</strong> Cenoura</p>
<p class="text-gray-700 mb-4"><strong>Superpoder:</strong> Visão Noturna</p>
<p class="text-sm text-gray-600"><strong>Missão:</strong> Protege os olhos e ajuda a enxergar melhor, especialmente à noite!</p>
<p class="text-xs text-gray-500 mt-4">💡 Dica: Coma cenoura crua ou cozida para ativar o superpoder!</p>
</div>

<!-- Herói 2 -->
<div class="card-hero power p-6 rounded">
<div class="flex items-center mb-4">
<div class="icon-circle bg-yellow-100 mr-4">🍌</div>
<span class="badge-hero power">Energia</span>
</div>
<h3 class="text-2xl font-bold mb-2">Banana Power</h3>
<p class="text-gray-600 mb-4"><strong>Alimento:</strong> Banana</p>
<p class="text-gray-700 mb-4"><strong>Superpoder:</strong> Energia Infinita</p>
<p class="text-sm text-gray-600"><strong>Missão:</strong> Fornece energia rápida para brincar, estudar e se exercitar!</p>
<p class="text-xs text-gray-500 mt-4">💡 Dica: Perfeita antes de atividades físicas!</p>
</div>

<!-- Herói 3 -->
<div class="card-hero shield p-6 rounded">
<div class="flex items-center mb-4">
<div class="icon-circle bg-orange-100 mr-4">🍊</div>
<span class="badge-hero shield">Proteção</span>
</div>
<h3 class="text-2xl font-bold mb-2">Escudo Laranja</h3>
<p class="text-gray-600 mb-4"><strong>Alimento:</strong> Laranja</p>
<p class="text-gray-700 mb-4"><strong>Superpoder:</strong> Escudo Protetor</p>
<p class="text-sm text-gray-600"><strong>Missão:</strong> Protege contra resfriados e doenças com vitamina C!</p>
<p class="text-xs text-gray-500 mt-4">💡 Dica: Suco fresco é o melhor!</p>
</div>

<!-- Herói 4 -->
<div class="card-hero speed p-6 rounded">
<div class="flex items-center mb-4">
<div class="icon-circle bg-green-100 mr-4">🥬</div>
<span class="badge-hero speed">Força</span>
</div>
<h3 class="text-2xl font-bold mb-2">Super Espinafre</h3>
<p class="text-gray-600 mb-4"><strong>Alimento:</strong> Espinafre</p>
<p class="text-gray-700 mb-4"><strong>Superpoder:</strong> Super-Força</p>
<p class="text-sm text-gray-600"><strong>Missão:</strong> Constrói músculos fortes e ossos saudáveis!</p>
<p class="text-xs text-gray-500 mt-4">💡 Dica: Misture em smoothies para disfarçar!</p>
</div>

<!-- Herói 5 -->
<div class="card-hero p-6 rounded">
<div class="flex items-center mb-4">
<div class="icon-circle bg-red-100 mr-4">🍓</div>
<span class="badge-hero hero">Antioxidante</span>
</div>
<h3 class="text-2xl font-bold mb-2">Morango Mágico</h3>
<p class="text-gray-600 mb-4"><strong>Alimento:</strong> Morango</p>
<p class="text-gray-700 mb-4"><strong>Superpoder:</strong> Memória Aguçada</p>
<p class="text-sm text-gray-600"><strong>Missão:</strong> Melhora a concentração e a memória para estudar melhor!</p>
<p class="text-xs text-gray-500 mt-4">💡 Dica: Fresco é mais poderoso!</p>
</div>

<!-- Herói 6 -->
<div class="card-hero power p-6 rounded">
<div class="flex items-center mb-4">
<div class="icon-circle bg-yellow-100 mr-4">🥛</div>
<span class="badge-hero power">Ossos</span>
</div>
<h3 class="text-2xl font-bold mb-2">Leiteman</h3>
<p class="text-gray-600 mb-4"><strong>Alimento:</strong> Leite/Iogurte</p>
<p class="text-gray-700 mb-4"><strong>Superpoder:</strong> Esqueleto de Aço</p>
<p class="text-sm text-gray-600"><strong>Missão:</strong> Constrói ossos fortes para crescer saudável!</p>
<p class="text-xs text-gray-500 mt-4">💡 Dica: Iogurte é uma opção deliciosa!</p>
</div>

<!-- Herói 7 -->
<div class="card-hero shield p-6 rounded">
<div class="flex items-center mb-4">
<div class="icon-circle bg-orange-100 mr-4">🍎</div>
<span class="badge-hero shield">Digestão</span>
</div>
<h3 class="text-2xl font-bold mb-2">Maçã Sábia</h3>
<p class="text-gray-600 mb-4"><strong>Alimento:</strong> Maçã</p>
<p class="text-gray-700 mb-4"><strong>Superpoder:</strong> Digestão Perfeita</p>
<p class="text-sm text-gray-600"><strong>Missão:</strong> Cuida da barriguinha e mantém tudo funcionando bem!</p>
<p class="text-xs text-gray-500 mt-4">💡 Dica: Com casca é mais poderosa!</p>
</div>

<!-- Herói 8 -->
<div class="card-hero speed p-6 rounded">
<div class="flex items-center mb-4">
<div class="icon-circle bg-green-100 mr-4">🥚</div>
<span class="badge-hero speed">Proteína</span>
</div>
<h3 class="text-2xl font-bold mb-2">Ovo Extraordinário</h3>
<p class="text-gray-600 mb-4"><strong>Alimento:</strong> Ovo</p>
<p class="text-gray-700 mb-4"><strong>Superpoder:</strong> Construtor de Músculos</p>
<p class="text-sm text-gray-600"><strong>Missão:</strong> Proteína pura para crescimento e força!</p>
<p class="text-xs text-gray-500 mt-4">💡 Dica: Cozido, frito ou mexido, sempre poderoso!</p>
</div>
</div>
</section>

<!-- Treinamento de Heróis Section -->
<section class="py-16 bg-white">
<div class="container mx-auto px-4">
<h2 class="section-title mb-12">Treinamento de Heróis: Receitas de Super-Força</h2>
<p class="text-gray-700 mb-12 text-lg">Combine os heróis e crie fórmulas secretas! Aqui estão receitas fáceis que você e seu filho podem fazer juntos:</p>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

<!-- Receita 1 -->
<div class="recipe-card">
<div class="bg-gradient-to-r from-red-100 to-orange-100 h-40 flex items-center justify-center text-6xl">🍓</div>
<div class="p-6">
<div class="flex justify-between items-start mb-3">
<h3 class="text-xl font-bold text-gray-800">Poção Mágica de Morango</h3>
<div class="recipe-difficulty">
<span class="star">★</span>
<span class="star empty">★</span>
<span class="star empty">★</span>
</div>
</div>
<p class="text-sm text-gray-600 mb-3"><strong>Heróis:</strong> Morango Mágico + Banana Power + Leiteman</p>
<p class="text-sm text-gray-600 mb-4"><strong>Tempo:</strong> 5 minutos | <strong>Dificuldade:</strong> Fácil</p>

<div class="bg-blue-50 p-3 rounded mb-4">
<p class="text-xs font-semibold text-blue-900 mb-2">🧠 O que a criança aprende:</p>
<p class="text-xs text-blue-800">Memória aguçada e energia para estudar!</p>
</div>

<div class="mb-4">
<p class="text-sm font-semibold text-gray-700 mb-2">Ingredientes:</p>
<ul class="text-sm text-gray-600 space-y-1">
<li>• 1 xícara de morangos frescos</li>
<li>• 1 banana</li>
<li>• 1 copo de leite</li>
<li>• 1 colher de mel</li>
</ul>
</div>

<div class="mb-4">
<p class="text-sm font-semibold text-gray-700 mb-2">Modo de Preparo:</p>
<div class="space-y-3">
<div class="flex gap-3">
<span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold flex-shrink-0">👨</span>
<div>
<p class="text-xs font-semibold text-gray-700">Adulto:</p>
<p class="text-xs text-gray-600">Prepare o liquidificador</p>
</div>
</div>
<div class="flex gap-3">
<span class="bg-secondary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold flex-shrink-0">👧</span>
<div>
<p class="text-xs font-semibold text-gray-700">Criança:</p>
<p class="text-xs text-gray-600">Coloque os morangos e a banana no liquidificador</p>
</div>
</div>
<div class="flex gap-3">
<span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold flex-shrink-0">👨</span>
<div>
<p class="text-xs font-semibold text-gray-700">Adulto:</p>
<p class="text-xs text-gray-600">Adicione o leite e o mel, bata até ficar homogêneo</p>
</div>
</div>
<div class="flex gap-3">
<span class="bg-secondary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold flex-shrink-0">👧</span>
<div>
<p class="text-xs font-semibold text-gray-700">Criança:</p>
<p class="text-xs text-gray-600">Despeje em copos e decore com morangos!</p>
</div>
</div>
</div>
</div>

<button class="button-action w-full">Ver Receita Completa</button>
</div>
</div>

<!-- Receita 2 -->
<div class="recipe-card">
<div class="bg-gradient-to-r from-green-100 to-lime-100 h-40 flex items-center justify-center text-6xl">🥕</div>
<div class="p-6">
<div class="flex justify-between items-start mb-3">
<h3 class="text-xl font-bold text-gray-800">Espetinho Herói</h3>
<div class="recipe-difficulty">
<span class="star">★</span>
<span class="star">★</span>
<span class="star empty">★</span>
</div>
</div>
<p class="text-sm text-gray-600 mb-3"><strong>Heróis:</strong> Capitão Caroteno + Escudo Laranja + Morango Mágico</p>
<p class="text-sm text-gray-600 mb-4"><strong>Tempo:</strong> 10 minutos | <strong>Dificuldade:</strong> Médio</p>

<div class="bg-green-50 p-3 rounded mb-4">
<p class="text-xs font-semibold text-green-900 mb-2">👀 O que a criança aprende:</p>
<p class="text-xs text-green-800">Visão aguçada e proteção contra resfriados!</p>
</div>

<div class="mb-4">
<p class="text-sm font-semibold text-gray-700 mb-2">Ingredientes:</p>
<ul class="text-sm text-gray-600 space-y-1">
<li>• 2 cenouras médias (cortadas em cubos)</li>
<li>• 1 laranja (em gomos)</li>
<li>• 8 morangos</li>
<li>• Palitos de madeira</li>
</ul>
</div>

<div class="mb-4">
<p class="text-sm font-semibold text-gray-700 mb-2">Modo de Preparo:</p>
<div class="space-y-3">
<div class="flex gap-3">
<span class="bg-primary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold flex-shrink-0">👨</span>
<div>
<p class="text-xs font-semibold text-gray-700">Adulto:</p>
<p class="text-xs text-gray-600">Corte a cenoura em cubos pequenos</p>
</div>
</div>
<div class="flex gap-3">
<span class="bg-secondary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold flex-shrink-0">👧</span>
<div>
<p class="text-xs font-semibold text-gray-700">Criança:</p>
<p class="text-xs text-gray-600">Coloque os ingredientes nos palitos, alternando cores</p>
</div>
</div>
<div class="flex gap-3">
<span class="bg-secondary text-white rounded-full w-6 h-6 flex items-center justify-center text-xs font-bold flex-shrink-0">👧</span>
<div>
<p class="text-xs font-semibold text-gray-700">Criança:</p>
<p class="text-xs text-gray-600">Organize no prato e sirva!</p>
</div>
</div>
</div>
</div>

</html>