<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoLife Plantio – Cultive Saúde com a Terra</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset("style/plantio.css") }}">
    <script src="{{ asset(source/plantio.js) }}"></script>
</head>

<body>
    <!-- Header/Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <a href="#" class="font-['Pacifico'] text-3xl text-primary">EcoLife</a>
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="text-gray-700 hover:text-primary font-medium">Início</a>
                <a href="/receitas" class="text-gray-700 hover:text-primary font-medium">Receitas</a>
                <a href="/calculadora" class="text-gray-700 hover:text-primary font-medium">Calculadora de IMC</a>
                <a href="/plantio" class="text-gray-700 hover:text-primary font-medium">Plantio</a>
                <a href="#" class="text-gray-700 hover:text-primary font-medium">Infantil</a>
                <a href="/blog" class="text-gray-700 hover:text-primary font-medium">Blog</a>
                <a href="/profile" class="text-gray-700 hover:text-primary font-medium">Perfil</a>
            </nav>
@if(Auth::check())
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Sair</button>
</form>
@else
<div class="flex items-center space-x-4">
    <a href="/login">
        <button
            class="bg-primary text-white px-5 py-2 !rounded-button whitespace-nowrap hover:bg-opacity-90 transition-colors">
            Entrar
        </button>
    </a>
    <div class="w-10 h-10 flex items-center justify-center md:hidden">
        <i class="ri-menu-line ri-lg"></i>
    </div>
</div>
@endif

        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="hero text-white py-20 px-6">
        
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">Cultive Saúde com a Terra</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Descubra as melhores opções de cultivo para sua região
                e transforme seu espaço em um oásis verde</p>
            
        </div>
    </section>


    <!-- Region Selector -->
    <section id="como-funciona" class="content-section py-16 bg-white">
        <div class="leaf-decoration top-0 right-0 text-green-400 text-9xl">
            <i class="fas fa-seedling"></i>
        </div>
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 mb-4">🌍 Como funciona?</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Informe sua região e descubra quais plantas se
                    adaptam melhor ao seu clima local</p>
            </div>

            <div class="region-selector p-8 max-w-4xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold text-green-700 mb-4">Encontre plantas para sua região</h3>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Estado</label>
                            <select
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option>Selecione seu estado</option>
                                <option>São Paulo</option>
                                <option>Minas Gerais</option>
                                <option>Rio de Janeiro</option>
                                <option>Bahia</option>
                                <option>Rio Grande do Sul</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 mb-2">Tipo de Solo</label>
                            <select
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option>Selecione seu tipo de solo</option>
                                <option>Arenoso</option>
                                <option>Argiloso</option>
                                <option>Humoso (rico em matéria orgânica)</option>
                                <option>Misto</option>
                            </select>
                        </div>
                        <button
                            class="w-full bg-green-600 text-white py-3 px-6 rounded-lg hover:bg-green-700 transition duration-300 flex items-center justify-center">
                            <i class="fas fa-search mr-2"></i> Buscar Plantas
                        </button>
                    </div>
                    <div class="flex items-center">
                        <div class="bg-green-50 p-6 rounded-lg border border-green-100">
                            <h4 class="font-semibold text-green-700 mb-2">Exemplo para São Paulo:</h4>
                            <ul class="space-y-2">
                                <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Tomate</li>
                                <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Alface</li>
                                <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Cenoura</li>
                                <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Laranja</li>
                                <li class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i>
                                    Manjericão</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Plants -->
    <!-- Featured Plants -->
<section id="plantas" class="content-section py-16 bg-green-50">
  <div class="container mx-auto px-6">
    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold text-green-800 mb-4">🍓 O que você vai encontrar</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">Sugestões de frutas, legumes e hortaliças de fácil cultivo</p>
    </div>

    <!-- Grid de Plantas -->
    <div id="plantas-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Plant Card 1 -->
      <div class="plant-card bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105">
        <img src="https://cdn.wikifarmer.com/images/detailed/2020/11/Tudo-sobre-tomate-%E2%80%93-Fatos-interessantes-sobre-o-tomate.jpg" alt="Tomate" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-green-700">Tomate</h3>
          <p class="text-gray-600">Fácil de cultivar em vasos ou hortas.</p>
        </div>
      </div>

      <!-- Plant Card 2 -->
      <div class="plant-card bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105">
        <img src="https://trela.com.br/_next/image?url=https%3A%2F%2Fprod-zapt-images.s3.sa-east-1.amazonaws.com%2Fproducts%2Fe68246db-30a0-442d-975c-42b5514c0668.png&w=1920&q=75" alt="Alface" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-green-700">Alface</h3>
          <p class="text-gray-600">Ideal para climas frescos e colheita rápida.</p>
        </div>
      </div>

      <!-- Plant Card 3 -->
      <div class="plant-card bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105">
        <img src="https://image.tuasaude.com/media/article/lk/sf/manjericao_3994.jpg" alt="Manjericão" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-green-700">Manjericão</h3>
          <p class="text-gray-600">Perfeito para temperar pratos e fácil de manter.</p>
        </div>
      </div>

      <!-- Extras escondidos (mesmo design, só começam com hidden) -->
      <div class="plant-card bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hidden">
        <img src="https://www.infoescola.com/wp-content/uploads/2010/08/cenoura_250834906.jpg" alt="Cenoura" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-green-700">Cenoura</h3>
          <p class="text-gray-600">Boa para solos leves e bem drenados.</p>
        </div>
      </div>

      <div class="plant-card bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hidden">
        <img src="https://www.ceasa-ce.com.br/wp-content/uploads/sites/87/2019/09/morango.jpg" alt="Morango" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-green-700">Morango</h3>
          <p class="text-gray-600">Adapta-se bem em vasos suspensos.</p>
        </div>
      </div>

      <div class="plant-card bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hidden">
        <img src="https://manualdojardim.com.br/wp-content/uploads/2020/10/CEBOLINHA-01-Como-cuidar-scaled.jpg" alt="Cebolinha" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-green-700">Cebolinha</h3>
          <p class="text-gray-600">Resistente e cresce o ano todo.</p>
        </div>
      </div>

      <div class="plant-card bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hidden">
        <img src="https://ceagesp.gov.br/wp-content/uploads/2016/10/portalbobrinhabrasileira-600x469.jpg" alt="Abobrinha" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-green-700">Abobrinha</h3>
          <p class="text-gray-600">Precisa de bastante sol para crescer bem.</p>
        </div>
      </div>

      <div class="plant-card bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hidden">
        <img src="https://maisagro.syngenta.com.br/media/uploads/2025/01/closeup-of-various-bell-peppers-2022-12-15-23-40-49-utc-scaled.webp" alt="Pimentão" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-green-700">Pimentão</h3>
          <p class="text-gray-600">Melhor em climas quentes e ensolarados.</p>
        </div>
      </div>

      <div class="plant-card bg-white rounded-lg shadow-md overflow-hidden transition transform hover:scale-105 hidden">
        <img src="https://feed.continente.pt/media/ttedegse/plantar-rucula-em-casa.jpg?anchor=center&mode=crop&width=1600&height=900&rnd=133299123870100000&format=webp" alt="Rúcula" class="w-full h-40 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-semibold text-green-700">Rúcula</h3>
          <p class="text-gray-600">Rápida colheita e fácil cultivo.</p>
        </div>
      </div>
    </div>

    <!-- Botão -->
    <div class="text-center mt-10">
      <button id="btn-vermais"
        class="bg-green-600 text-white py-3 px-8 rounded-lg hover:bg-green-700 transition duration-300 inline-flex items-center">
        Ver mais plantas <i class="fas fa-chevron-down ml-2"></i>
      </button>
    </div>
  </div>
</section>

<!-- Script no final do body -->
<script>
  const cards = document.querySelectorAll("#plantas-grid .plant-card");
  const btnVerMais = document.getElementById("btn-vermais");
  let currentIndex = 3; // já mostra os 3 primeiros

  btnVerMais.addEventListener("click", () => {
    let nextIndex = currentIndex + 3;

    for (let i = currentIndex; i < nextIndex && i < cards.length; i++) {
      cards[i].classList.remove("hidden");
    }

    currentIndex = nextIndex;

    if (currentIndex >= cards.length) {
      btnVerMais.style.display = "none";
    }
  });
</script>


    <!-- Soil Types -->
    <section id="solos" class="content-section py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 mb-4">🌱 Tipos de Solo</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Conheça os diferentes tipos de solo e como
                    prepará-los para o plantio</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Soil Type 1 -->
                <div class="soil-type bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-amber-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-water text-amber-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3">Arenoso</h3>
                    <p class="text-gray-600 text-center">Solo que drena rápido. Ideal para plantas que não gostam de excesso de água. Corrija com matéria orgânica.</p>
                </div>

                <!-- Soil Type 2 -->
                <div class="soil-type bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-clay-brick text-red-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3">Argiloso</h3>
                    <p class="text-gray-600 text-center">Retém muita água. Excelente para plantas que precisam de
                        umidade constante. Adicione areia para melhorar drenagem.</p>
                </div>

                <!-- Soil Type 3 -->
                <div class="soil-type bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-leaf text-green-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3">Humoso</h3>
                    <p class="text-gray-600 text-center">Rico em matéria orgânica. O melhor para a maioria das plantas.
                        Mantenha com compostagem regular.</p>
                </div>

                <!-- Soil Type 4 -->
                <div class="soil-type bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4 mx-auto">
                        <i class="fas fa-blender text-blue-500 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-3">Misto</h3>
                    <p class="text-gray-600 text-center">Mistura de solos, funciona para diferentes plantas. Ajuste conforme a planta.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tips Section -->
    <section id="dicas" class="content-section py-16 bg-green-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-green-800 mb-4">📚 Guias Práticos</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Aprenda com nossos guias de plantio, rega e adubação
                    natural</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Tip 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="h-48 bg-cover bg-center"
                        style="background-image: url('https://st3.depositphotos.com/8696740/35633/v/450/depositphotos_356336930-stock-illustration-plants-and-people-gardening-harvesting.jpg');">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full mr-3">Calendário
                            </div>
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 5 min leitura</span>
                        </div>
                        <h3 class="text-xl font-bold text-green-800 mb-3">Calendário de Plantio Anual</h3>
                        <p class="text-gray-600 mb-4">Descubra as melhores épocas para plantar cada tipo de alimento
                            durante o ano todo.</p>
                        <button class="text-green-600 font-medium flex items-center" ><a href="calendarioplantio.html" class="btn">Ler Guia Completo</a>
                            <i class="fas fa-arrow-right ml-2"></i>
                            
                        </button>
                    </div>
                </div>

                <!-- Tip 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="h-48 bg-cover bg-center"
                        style="background-image: url('https://media-agro.estadao.com.br/uploads/2024/02/confira-essas-tres-receitas-que-irao-deixar-suas-p.jpeg');">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full mr-3">Adubação</div>
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 7 min leitura</span>
                        </div>
                        <h3 class="text-xl font-bold text-green-800 mb-3">Adubação Natural Caseira</h3>
                        <p class="text-gray-600 mb-4">Aprenda a fazer compostagem e outros adubos naturais com resíduos
                            domésticos.</p>
                        <button class="text-green-600 font-medium flex items-center">
                            Ler guia completo <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                </div>

                <!-- Tip 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="h-48 bg-cover bg-center"
                        style="background-image: url('https://cavazani.com.br/wp-content/uploads/2021/02/Como-fazer-uma-mini-horta-hidroponica-no-ape.webp');">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full mr-3">Hortas</div>
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 10 min leitura</span>
                        </div>
                        <h3 class="text-xl font-bold text-green-800 mb-3">Crie Sua Horta em Pequenos Espaços</h3>
                    </html>
