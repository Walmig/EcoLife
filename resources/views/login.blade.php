<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sua Jornada Saudável Começa Aqui</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>
        tailwind.config = {
            theme: {

                extend: {
                    colors: {
                        primary: "#4CAF50",
                        secondary: "#FF9800",
                    },
                    borderRadius: {
                        none: "0px",
                        sm: "4px",
                        DEFAULT: "8px",
                        md: "12px",
                        lg: "16px",
                        xl: "20px",
                        "2xl": "24px",
                        "3xl": "32px",
                        full: "9999px",
                        button: "8px",
                    },
                },
            },
        };
    </script>
    <link rel="stylesheet" href="{{asset('style/login.css')}}" />
</head>

<body class="min-h-screen flex flex-col">
    <div class="flex-1 flex flex-col md:flex-row">
        <div class="hidden md:block md:w-1/2 relative">
            <div style="background-image:
url('https://readdy.ai/api/search-image?query=A%20vibrant%2C%20healthy%20food%20composition%20with%20fresh%20vegetables%2C%20fruits%2C%20nuts%2C%20and%20grains%20arranged%20artistically%20on%20a%20dark%20background.%20The%20image%20shows%20colorful%20produce%20like%20avocados%2C%20berries%2C%20leafy%20greens%2C%20and%20whole%20grains.%20The%20lighting%20is%20dramatic%20and%20highlights%20the%20natural%20textures%20and%20colors%20of%20the%20food%20items.%20The%20composition%20suggests%20health%2C%20vitality%2C%20and%20nutritious%20eating%20habits.&width=800&height=1200&seq=123&orientation=portrait');"
                class="absolute inset-0 bg-cover bg-center object-top"></div>

            <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/40"></div>
            <div class="absolute inset-0 flex items-center justify-center p-12">
                <div class="text-white max-w-md">
                    <h2 class="text-3xl font-bold mb-6">
                        Transforme sua relação com a alimentação
                    </h2>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center mr-3 mt-0.5

bg-primary/20 rounded-full">
                                <i class="ri-check-line text-primary"></i>
                            </div>
                            <span>Planos alimentares personalizados baseados em seus

                                objetivos</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center mr-3 mt-0.5

bg-primary/20 rounded-full">
                                <i class="ri-check-line text-primary"></i>
                            </div>
                            <span>Acompanhamento nutricional com profissionais

                                qualificados</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-6 h-6 flex items-center justify-center mr-3 mt-0.5

bg-primary/20 rounded-full">
                                <i class="ri-check-line text-primary"></i>
                            </div>
                            <span>Receitas saudáveis e deliciosas para todos os

                                gostos</span>
                        </li>
                        <li class="flex items-start">

                            <div class="w-6 h-6 flex items-center justify-center mr-3 mt-0.5

bg-primary/20 rounded-full">
                                <i class="ri-check-line text-primary"></i>
                            </div>
                            <span>Comunidade de apoio para sua jornada de alimentação

                                saudável</span>
                        </li>
                    </ul>
                    <div class="mt-8 pt-8 border-t border-white/10">
                        <p class="text-sm text-white/70 mb-4">O que nossos usuários

                            dizem:</p>

                        <div class="bg-white/5 p-4 rounded">
                            <div class="flex items-center mb-2">
                                <div class="flex text-secondary">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <p class="text-sm italic">
                                "Depois de 3 meses usando o aplicativo, perdi 8kg e minha
                                relação com a comida melhorou significativamente. Recomendo a todos!"

                            </p>
                            <p class="text-xs text-white/50 mt-2">
                                — Mariana Oliveira, São Paulo
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 flex items-center justify-center p-6 md:p-12">
            <div class="w-full max-w-md">
                <div class="text-center mb-8">
                    <h1 class="font-['Pacifico'] text-3xl text-primary mb-2">logo</h1>

                    <h2 class="text-2xl font-bold">Sua Jornada Saudável Começa
                        Aqui</h2>
                    <p class="text-white/60 mt-2">
                        Acesse sua conta ou crie uma nova para começar
                    </p>
                </div>
                <div class="flex border-b border-white/10 mb-8">
                    <button id="login-tab" class="tab-active flex-1 py-3 font-medium text-center transition-all

!rounded-button">
                        Entrar
                    </button>
                    <button id="register-tab" class="flex-1 py-3 font-medium text-center text-white/60 transition-all

!rounded-button">
                        Cadastrar
                    </button>
                </div>
                <div id="login-form" class="form-container active">
                @if($errors->any())
    <div class="bg-red-500 text-white p-3 rounded mb-4">
        <strong>Ops!</strong> E-mail ou senha incorretos. Por favor, verifique seus dados e tente novamente.
    </div>
@endif
<form action="/login" method="POST">
    @csrf
    <!-- E-mail -->
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium">E-mail</label>
        <div class="relative">
            <input type="email" name="email" class="form-input pl-10" placeholder="Seu e-mail" required />
            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center text-white/50">
                <i class="ri-mail-line"></i>
            </div>
        </div>
    </div>

    <!-- Senha -->
    <div class="mb-5">
        <div class="flex justify-between mb-2">
            <label class="text-sm font-medium">Senha</label>
            <a href="#" class="text-sm text-primary hover:underline">Esqueceu a senha?</a>
        </div>
        <div class="relative">
            <input type="password" name="senha" id="login-password" class="form-input pl-10" placeholder="Sua senha" required />
            <div class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center text-white/50">
                <i class="ri-lock-line"></i>
            </div>
            <div class="password-toggle" onclick="togglePassword('login-password')">
                <i class="ri-eye-line"></i>
            </div>
        </div>
    </div>

    <!-- Lembrar conta -->
    <div class="flex items-center mb-6">
        <input type="checkbox" name="remember" id="remember-me" class="custom-checkbox" />
        <label for="remember-me" class="text-sm">Lembrar minha conta</label>
    </div>

    <!-- Botão de login -->
    <button type="submit" class="w-full bg-primary hover:bg-primary/90 text-white py-3 font-medium transition-all !rounded-button">
        Entrar
    </button>

    <!-- Login social -->
    <div class="mt-6">
        <div class="flex items-center mb-4">
            <div class="flex-1 h-px bg-white/10"></div>
            <span class="px-4 text-sm text-white/60">ou continue com</span>
            <div class="flex-1 h-px bg-white/10"></div>
        </div>
        <div class="grid grid-cols-3 gap-3">
            <button type="button" id="google-login-btn" class="social-login-btn !rounded-button">
                <div class="flex items-center justify-center">
                    <i class="ri-google-fill text-lg"></i>
                </div>
            </button>
            <button type="button" id="facebook-login-btn" class="social-login-btn !rounded-button">
                <div class="flex items-center justify-center">
                    <i class="ri-facebook-fill text-lg"></i>
                </div>
            </button>
            <button type="button" id="apple-login-btn" class="social-login-btn !rounded-button">
                <div class="flex items-center justify-center">
                    <i class="ri-apple-fill text-lg"></i>
                </div>
            </button>
        </div>
    </div>
</form>

                </div>
                <div id="register-form" class="form-container">
                    <form action="/register" method="POST">
    @csrf
    <!-- Nome completo -->
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium">Nome completo</label>
        <input type="text" name="nome" class="form-input" placeholder="Seu nome completo" required />
    </div>

    <!-- E-mail -->
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium">E-mail</label>
        <input type="email" name="email" class="form-input" placeholder="Seu e-mail" required />
    </div>

    <!-- Criar senha -->
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium">Criar senha</label>
        <div class="relative">
            <input type="password" name="senha" id="register-password" class="form-input"
                placeholder="Crie uma senha forte" required onkeyup="checkPasswordStrength()" />
            <div class="password-toggle" onclick="togglePassword('register-password')">
                <i class="ri-eye-line"></i>
            </div>
        </div>
        <div class="password-strength mt-2">
            <div id="password-strength-bar" class="password-strength-bar"></div>
        </div>
        <p id="password-strength-text" class="text-xs mt-1 text-white/60">
            Use 8+ caracteres com letras, números e símbolos
        </p>
    </div>

    <!-- Confirmar senha -->
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium">Confirmar senha</label>
        <div class="relative">
            <input type="password" name="senha_confirmation" id="confirm-password" class="form-input"
                placeholder="Confirme sua senha" required />
            <div class="password-toggle" onclick="togglePassword('confirm-password')">
                <i class="ri-eye-line"></i>
            </div>
        </div>
    </div>

    <!-- Objetivo alimentar -->
    <div class="mb-5">
        <label class="block mb-2 text-sm font-medium">Objetivo alimentar (opcional)</label>
        <div class="relative">
            <select name="objetivo" class="form-input pr-8 appearance-none">
                <option value="" selected disabled>Selecione seu objetivo</option>
                <option value="weight-loss">Perda de peso</option>
                <option value="muscle-gain">Ganho de massa muscular</option>
                <option value="health">Alimentação mais saudável</option>
                <option value="energy">Mais energia no dia a dia</option>
                <option value="specific">Dieta específica (vegana, sem glúten, etc)</option>
            </select>
            <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                <i class="ri-arrow-down-s-line"></i>
            </div>
        </div>
    </div>

    <!-- Termos de uso -->
    <div class="flex items-center mb-6">
        <input type="checkbox" id="terms" class="custom-checkbox" required />
        <label for="terms" class="text-sm">
            Concordo com os
            <a href="#" class="text-primary hover:underline">Termos de Uso</a>
            e
            <a href="#" class="text-primary hover:underline">Política de Privacidade</a>
        </label>
    </div>

    <!-- Botão de cadastro -->
    <button type="submit"
        class="w-full bg-primary hover:bg-primary/90 text-white py-3 font-medium transition-all !rounded-button">
        Criar conta
    </button>
</form>

                </div>
                <div class="mt-8 text-center">
                    <div class="flex items-center justify-center gap-2 mb-2">
                        <div class="w-5 h-5 flex items-center justify-center">
                            <i class="ri-shield-check-line text-primary"></i>
                        </div>
                        <span class="text-sm text-white/60">Seus dados estão

                            protegidos</span>
                    </div>
                    <p class="text-xs text-white/40">
                        © 2025 logo. Todos os direitos reservados.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('source/login.js')}}"></script>
</body>

</html>