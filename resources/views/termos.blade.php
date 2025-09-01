<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termos de Serviço</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('style/termo.css') }}">
</head>
<body class="bg-gray-50 text-gray-800 scroll-smooth">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-10">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-file-contract text-2xl text-blue-600"></i>
                <h1 class="text-xl font-bold text-gray-800">Termos de Serviço</h1>
            </div>
            <div class="flex space-x-4">
                <button id="printBtn" class="px-3 py-1 bg-blue-100 text-blue-600 rounded hover:bg-blue-200 transition">
                    <i class="fas fa-print mr-1"></i> Imprimir
                </button>
                <button id="acceptBtn" class="px-3 py-1 bg-green-100 text-green-600 rounded hover:bg-green-200 transition">
                    <i class="fas fa-check-circle mr-1"></i> Aceitar Termos
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class="fas fa-home mr-2"></i>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400"></i>
                        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Legal</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400"></i>
                        <span class="ml-1 text-sm font-medium text-blue-600 md:ml-2">Termos de Serviço</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Document Header -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 border-l-4 border-blue-500">
            <div class="flex justify-between items-start">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Termos de Serviço</h1>
                    <p class="text-gray-600">Última atualização: <span class="font-semibold">15 de junho de 2023</span></p>
                </div>
                <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                    <i class="fas fa-info-circle mr-1"></i> Versão 2.1
                </div>
            </div>
        </div>

        <!-- Table of Contents -->
        <div class="bg-gray-100 rounded-lg p-6 mb-8">
            <h2 class="text-xl font-semibold mb-4 flex items-center">
                <i class="fas fa-list-ul mr-2 text-blue-600"></i> Índice
            </h2>
            <ul class="space-y-2">
                <li><a href="#introducao" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> 1. Introdução</a></li>
                <li><a href="#conta" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> 2. Criação de Conta</a></li>
                <li><a href="#conduta" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> 3. Conduta do Usuário</a></li>
                <li><a href="#propriedade" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> 4. Propriedade Intelectual</a></li>
                <li><a href="#privacidade" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> 5. Privacidade</a></li>
                <li><a href="#responsabilidade" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> 6. Limitação de Responsabilidade</a></li>
                <li><a href="#alteracoes" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> 7. Alterações nos Termos</a></li>
                <li><a href="#jurisdicao" class="text-blue-600 hover:underline flex items-center"><i class="fas fa-chevron-right text-xs mr-2"></i> 8. Jurisdição</a></li>
            </ul>
        </div>

        <!-- Terms Content -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <!-- Section 1 -->
            <section id="introducao" class="mb-8">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 border-b pb-2 flex items-center">
                    <span class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">1</span>
                    Introdução
                </h2>
                <p class="mb-4 text-gray-700">Bem-vindo aos nossos Termos de Serviço. Estes termos governam seu uso do nosso site e serviços. Ao acessar ou usar nosso serviço, você concorda em cumprir estes termos.</p>
                <p class="mb-4 text-gray-700">Nossa plataforma oferece <span class="highlight">serviços digitais</span> conforme descrito em nosso site. Reservamo-nos o direito de modificar ou descontinuar o serviço a qualquer momento sem aviso prévio.</p>
                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-circle text-yellow-500"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-yellow-700">
                                <strong>Importante:</strong> Ao continuar usando nossos serviços, você concorda com todos os termos abaixo. Se você não concordar com algum termo, não deve usar nossos serviços.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section 2 -->
            <section id="conta" class="mb-8">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 border-b pb-2 flex items-center">
                    <span class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">2</span>
                    Criação de Conta
                </h2>
                <p class="mb-4 text-gray-700">Para acessar certos recursos do serviço, você pode precisar criar uma conta. Ao criar uma conta, você concorda em:</p>
                <ul class="list-disc pl-5 mb-4 space-y-2 text-gray-700">
                    <li>Fornecer informações precisas, completas e atualizadas</li>
                    <li>Manter a segurança de sua senha e aceitar todos os riscos de acesso não autorizado</li>
                    <li>Ser responsável por todas as atividades que ocorram em sua conta</li>
                    <li>Notificar-nos imediatamente sobre qualquer violação de segurança ou uso não autorizado</li>
                </ul>
                <p class="text-gray-700">Reservamo-nos o direito de recusar serviço, encerrar contas ou remover conteúdo a nosso critério.</p>
            </section>

            <!-- Section 3 -->
            <section id="conduta" class="mb-8">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 border-b pb-2 flex items-center">
                    <span class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">3</span>
                    Conduta do Usuário
                </h2>
                <p class="mb-4 text-gray-700">Você concorda em não usar o serviço para:</p>
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <div class="bg-red-50 p-4 rounded-lg border border-red-100">
                        <h3 class="font-semibold text-red-700 mb-2 flex items-center">
                            <i class="fas fa-ban mr-2"></i> Proibições
                        </h3>
                        <ul class="list-disc pl-5 space-y-1 text-red-700">
                            <li>Violar qualquer lei ou regulamento</li>
                            <li>Infringir direitos de propriedade intelectual</li>
                            <li>Enviar spam ou conteúdo malicioso</li>
                            <li>Assediar, abusar ou prejudicar outros</li>
                        </ul>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg border border-green-100">
                        <h3 class="font-semibold text-green-700 mb-2 flex items-center">
                            <i class="fas fa-check-circle mr-2"></i> Conduta Esperada
                        </h3>
                        <ul class="list-disc pl-5 space-y-1 text-green-700">
                            <li>Respeitar outros usuários</li>
                            <li>Manter discussões civilizadas</li>
                            <li>Reportar problemas encontrados</li>
                            <li>Seguir as diretrizes da comunidade</li>
                        </ul>
                    </div>
                </div>
                <p class="text-gray-700">Violações destes termos podem resultar em encerramento imediato de sua conta e possível ação legal.</p>
            </section>

            <!-- Section 4 -->
            <section id="propriedade" class="mb-8">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 border-b pb-2 flex items-center">
                    <span class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">4</span>
                    Propriedade Intelectual
                </h2>
                <p class="mb-4 text-gray-700">Todo o conteúdo do serviço, incluindo textos, gráficos, logotipos, ícones, imagens, clipes de áudio, downloads digitais e compilações de dados são propriedade nossa ou de nossos fornecedores de conteúdo e protegidos por leis de direitos autorais.</p>
                <div class="bg-blue-50 p-4 rounded-lg mb-4">
                    <h3 class="font-semibold text-blue-700 mb-2 flex items-center">
                        <i class="fas fa-copyright mr-2"></i> Direitos Autorais
                    </h3>
                    <p class="text-blue-700">Você concorda em não reproduzir, duplicar, copiar, vender, revender ou explorar qualquer parte do serviço sem nossa permissão expressa por escrito.</p>
                </div>
                <p class="text-gray-700">Se você acredita que seu trabalho foi copiado de maneira que constitui violação de direitos autorais, entre em contato conosco através dos canais oficiais.</p>
            </section>

            <!-- Section 5 -->
            <section id="privacidade" class="mb-8">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 border-b pb-2 flex items-center">
                    <span class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">5</span>
                    Privacidade
                </h2>
                <p class="mb-4 text-gray-700">Sua privacidade é importante para nós. Nossa <a href="#" class="text-blue-600 hover:underline">Política de Privacidade</a> explica como coletamos, usamos e protegemos suas informações pessoais.</p>
                <p class="text-gray-700">Ao usar o serviço, você concorda com a coleta e uso de informações de acordo com nossa política de privacidade.</p>
            </section>

            <!-- Section 6 -->
            <section id="responsabilidade" class="mb-8">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 border-b pb-2 flex items-center">
                    <span class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">6</span>
                    Limitação de Responsabilidade
                </h2>
                <p class="mb-4 text-gray-700">Em nenhuma circunstância seremos responsáveis por quaisquer danos indiretos, incidentais, especiais, consequenciais ou por perda de lucros resultantes de:</p>
                <ul class="list-disc pl-5 mb-4 space-y-2 text-gray-700">
                    <li>Seu acesso ou uso ou incapacidade de acessar ou usar o serviço</li>
                    <li>Qualquer conduta ou conteúdo de terceiros no serviço</li>
                    <li>Qualquer conteúdo obtido do serviço</li>
                    <li>Acesso não autorizado, uso ou alteração de suas transmissões ou conteúdo</li>
                </ul>
                <p class="text-gray-700">Nossa responsabilidade total em qualquer caso será limitada ao valor pago por você pelo serviço nos últimos 12 meses.</p>
            </section>

            <!-- Section 7 -->
            <section id="alteracoes" class="mb-8">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 border-b pb-2 flex items-center">
                    <span class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">7</span>
                    Alterações nos Termos
                </h2>
                <p class="mb-4 text-gray-700">Podemos modificar estes termos a qualquer momento. Publicaremos os termos revisados nesta página e atualizaremos a data de "Última atualização" no topo deste documento.</p>
                <p class="text-gray-700">O uso contínuo do serviço após tais alterações constitui sua concordância com os novos termos. Se você não concordar com os termos revisados, deve descontinuar o uso do serviço.</p>
            </section>

            <!-- Section 8 -->
            <section id="jurisdicao">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 border-b pb-2 flex items-center">
                    <span class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">8</span>
                    Jurisdição
                </h2>
                <p class="mb-4 text-gray-700">Estes Termos serão regidos e interpretados de acordo com as leis do Brasil, sem considerar seus conflitos de disposições legais.</p>
                <p class="text-gray-700">Qualquer disputa decorrente ou relacionada a estes Termos estará sujeita à jurisdição exclusiva dos tribunais do estado onde nossa empresa tem sua sede.</p>
            </section>
        </div>

        <!-- Acceptance Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 border-t-4 border-green-500">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Aceitação dos Termos</h2>
            <div class="flex items-start mb-4">
                <input type="checkbox" id="acceptCheckbox" class="mt-1 mr-3">
                <label for="acceptCheckbox" class="text-gray-700">Eu li e concordo com os Termos de Serviço acima e com a Política de Privacidade.</label>
            </div>
            <button id="finalAcceptBtn" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded transition disabled:opacity-50" disabled>
                <i class="fas fa-check-circle mr-2"></i> Aceitar Termos e Continuar
            </button>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-blue-300 transition">Termos de Serviço</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Política de Privacidade</a></li>
                        <li><a href="#" class="hover:text-blue-300 transition">Cookies</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contato</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center"><i class="fas fa-envelope mr-2"></i> contato@empresa.com</li>
                        <li class="flex items-center"><i class="fas fa-phone mr-2"></i> (11) 1234-5678</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Siga-nos</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-2xl hover:text-blue-300 transition"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300 transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300 transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300 transition"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© 2023 Nossa Empresa. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-6 right-6 bg-blue-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-blue-700 transition opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Modal -->
    <div id="acceptModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg p-6 max-w-md w-full mx-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-gray-800">Termos Aceitos</h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="mb-4">
                <div class="bg-green-100 border-l-4 border-green-500 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-check-circle text-green-500"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-green-700">
                                <strong>Sucesso!</strong> Você aceitou nossos Termos de Serviço e Política de Privacidade.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-gray-700 mb-4">Obrigado por aceitar nossos termos. Você agora pode acessar todos os recursos do nosso serviço.</p>
            <button id="continueBtn" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                Continuar
            </button>
        </div>
    </div>
<script src="s{{ asset('source/termos.js') }}"></script>
</body>
</html>