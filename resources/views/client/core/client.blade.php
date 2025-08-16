<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#0d0d0d">
    <meta name="description" content="CristoNet - Provedor de internet rápida e estável. Planos de fibra óptica com alta velocidade e suporte de qualidade para sua casa ou empresa.">
    <meta name="keywords" content="CristoNet, provedor de internet, internet fibra óptica, planos de internet, internet rápida, internet residencial, internet empresarial, Wi-Fi, banda larga, internet veloz, provedor de fibra, internet estável, internet para empresas, internet de qualidade">
    <title>CristoNet</title>
    <meta property="og:url" content="https://www.cristonettelecom.com.br">
    <meta property="og:type" content="website">
    <meta property="og:title" content="CristoNet">
    <meta property="og:description" content="CristoNet - Provedor de internet rápida e estável. Planos de fibra óptica com alta velocidade e suporte de qualidade para sua casa ou empresa.">
    <meta name="twitter:card" content=summary_large_image>
    <meta name="twitter:url" content=https://www.cristonettelecom.com.br>
    <meta name="twitter:title" content="CristoNet">
    <meta name="twitter:description" content="CristoNet - Provedor de internet rápida e estável. Planos de fibra óptica com alta velocidade e suporte de qualidade para sua casa ou empresa.">
    <meta name="twitter:image" content=https://www.cristonettelecom.com.br/build/client/images/logo.svg>
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="copyright" content="Direitos reservados WHI">
    <meta name="author" content="WHI">
    <link rel="shortcut icon" href="https://www.cristonettelecom.com.br/build/client/images/favicon.svg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    
    <link rel="preload" as=style href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" onload='this.onload=null,this.rel="stylesheet"'>
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap">
    </noscript>

    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"></noscript>
    <link rel="preload" href="{{ asset('build/admin/js/libs/sweetalert2/sweetalert2.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="{{ asset('build/client/css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="preload" href="{{ asset('build/client/css/bootstrap-icons/bootstrap-icons.css') }}" as="style" onload="this.rel='stylesheet'">
    <link href="{{ asset('build/client/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" media="print" onload="this.media='all'">
    <noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    </noscript>
    <link href="{{ asset('build/client/lgpd/style.css') }}" rel="stylesheet" type="text/css" />
    

    <script type=application/ld+json>
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "@id": "https://www.cristonettelecom.com.br/#organization",
            "name": "CristoNet",
            "legalName": "CristoNet",
            "url": "https://www.cristonettelecom.com.br",
            "logo": "https://www.cristonettelecom.com.br/build/client/images/logo.svg",
            "image": "https://www.cristonettelecom.com.br/build/client/images/logo.svg",
            "description": "CristoNet - Provedor de internet rápida e estável. Planos de fibra óptica com alta velocidade e suporte de qualidade para sua casa ou empresa.",
            "foundingDate": "2007",
            "email": "Jrdinario@hotmail.com",
            "telephone": "+55 71 98655-0508",
            "sameAs": [
                "https://www.instagram.com/cristonettelecom"
            ],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Rua Direta da Mata Escura, 550 - Mata Escura",                
                "addressLocality": "Salvador",
                "addressRegion": "BA",
                "postalCode": "41225-190",
                "addressCountry": "BR"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+55 71 98655-0508",
                "contactType": "customer service",
                "email": "Jrdinario@hotmail.com",
                "areaServed": "BR",
                "availableLanguage": ["pt", "en"]
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:00",
                "closes": "17:00"
            },
            "identifier": {
                "@type": "PropertyValue",
                "propertyID": "CNPJ",
                "value": "46.645.660/0001-20"
            },
            "slogan": "CristoNet",
            "keywords": [
                "CristoNet",
                "provedor de internet",
                "internet fibra óptica",
                "planos de internet",
                "internet rápida",
                "internet residencial",
                "internet empresarial",
                "Wi-Fi",
                "banda larga",
                "internet veloz",
                "provedor de fibra",
                "internet estável",
                "internet para empresas",
                "internet de qualidade"
            ]
        }
    </script>
</head>
<body>
    <div id="organization" hidden></div>
    <header id="header" class="w-100 d-flex flex-column position p-0 mt-0">   
        <div class="w-100 py-3 py-sm-5 bg-transparent">
            <div class="container m-auto p-0 d-flex align-items-center justify-content-between flex-row">
                <div class="logo-img rounded-2 d-flex justify-content-start align-items-center">
                    <a href="{{route('index')}}">
                        <img src="{{asset('build/client/images/logo.svg')}}" alt="CristoNet" title="CristoNet" class="img-fluid">
                    </a>
                </div>
        
                <div class="social-links d-flex justify-content-between align-items-center gap-4 text-center col-9">
                    <nav class="none site-navigation ul position-relative text-end width-75">
                        <ul class="d-flex flex-row justify-content-start align-items-center gap-4 mb-0 list-unstyled">
                            <li><a href="{{route('index')}}#hero" class="nav-link montserrat-regular font-18">Home</a></li>
                            <li><a href="{{route('index')}}#about" class="nav-link montserrat-regular font-18">Sobre</a></li>
                            <li><a href="{{route('index')}}#plans" class="nav-link montserrat-regular font-18">Planos</a></li>
                            <li><a href="{{route('index')}}#products" class="nav-link montserrat-regular font-18">Produtos</a></li>
                            <li><a href="{{route('index')}}#depoiment" class="nav-link montserrat-regular font-18">Depoimentos</a></li>
                            <li><a href="{{route('index')}}#contact" class="nav-link montserrat-regular font-18">Contato</a></li>
                        </ul>                      
                    </nav>

                    <nav class="none site-navigation position-relative text-end w-auto redes-sociais">
                        <ul class="p-0 d-flex justify-content-start gap-4 flex-row mb-0">
                            @if (isset($contact) && $contact->link_insta)
                                <li class="li d-flex justify-content-start align-items-center rounded-circle">
                                    <a href="{{$contact->link_insta}}" rel="nofollow noopener noreferrer" target="_blank">
                                        <img src="{{asset('build/client/images/insta.svg')}}" alt="Instagram">
                                    </a>
                                </li>
                            @endif
                            @if (isset($contact) && $contact->link_x)
                                <li class="li d-flex justify-content-start align-items-center rounded-circle">
                                    <a href="{{$contact->link_x}}" rel="nofollow noopener noreferrer" target="_blank">
                                        <img src="{{asset('build/client/images/x.svg')}}" alt="X">
                                    </a>
                                </li>
                            @endif
                            @if (isset($contact) && $contact->link_youtube)
                                <li class="li d-flex justify-content-start align-items-center rounded-circle">
                                    <a href="{{$contact->link_youtube}}" rel="nofollow noopener noreferrer" target="_blank">
                                        <img src="{{asset('build/client/images/youtube.svg')}}" alt="Youtube">
                                    </a>
                                </li>
                            @endif
                            @if (isset($contact) && $contact->link_face)
                                <li class="li d-flex justify-content-start align-items-center rounded-circle">
                                    <a href="{{$contact->link_face}}" rel="nofollow noopener noreferrer" target="_blank">
                                        <img src="{{asset('build/client/images/face.svg')}}" alt="Facebook">
                                    </a>
                                </li>
                            @endif
                            @if (isset($contact) && $contact->link_tik_tok)
                                <li class="li d-flex justify-content-start align-items-center rounded-circle">
                                    <a href="{{$contact->link_tik_tok}}a" rel="nofollow noopener noreferrer" target="_blank">
                                        <img src="{{asset('build/client/images/tiktok.svg')}}" alt="Tiktok">
                                    </a>
                                </li>
                            @endif
                        </ul> 
                    </nav>

                    {{-- Aqui vai o codigo de login --}}

                    <!-- Botão menu sandwich -->
                    <button id="menu-toggle" class="d-lg-none btn btn-link p-0 ms-2" aria-label="Abrir menu" type="button">
                        <span class="menu-icon" style="display:inline-block;width:32px;height:32px;">
                            <span class="d-block w-100 rounded-1" style="height:4px;background:#FFF;margin:6px 0;"></span>
                            <span class="d-block w-100 rounded-1" style="height:4px;background:#FFF;margin:6px 0;"></span>
                            <span class="d-block w-100 rounded-1" style="height:4px;background:#FFF;margin:6px 0;"></span>
                        </span>
                    </button>
                </div>         
            </div>
        </div>     
        @if ($blogCategories->count())
            <div class="header--category w-100 grey-medium-background social-links">
                {{-- Versão Mobile (com Swiper) --}}
                <nav class="d-block d-sm-none position-relative">
                    <div class="swiper carrossel-mobile category-swiper">
                        <div class="swiper-wrapper">
                            @foreach ($blogCategories as $category)
                                <div class="swiper-slide">
                                    <a href="{{ route('blog', ['category' => $category->slug]) }}#news"
                                    class="carrossel title-blue montserrat-semiBold font-14 d-inline-block px-2
                                    {{ (request()->routeIs('blog-inner') && isset($blogInner) && $blogInner->category->id === $category->id) ||
                                        (request()->routeIs('blog') && request()->route('category') === $category->slug)
                                        ? 'active' : '' }}">
                                        {{ $category->title }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </nav>

                {{-- Versão Desktop (sem Swiper) --}}
                <nav class="d-none d-sm-block">
                    <ul class="list-unstyled d-flex justify-content-center flex-wrap gap-2 px-3 py-2 mb-0">
                        @foreach ($blogCategories as $category)
                            <li>
                                <a href="{{ route('blog', ['category' => $category->slug]) }}#news"
                                class="title-blue montserrat-semiBold font-14 d-inline-block px-2
                                {{ (request()->routeIs('blog-inner') && isset($blogInner) && $blogInner->category->id === $category->id) ||
                                    (request()->routeIs('blog') && request()->route('category') === $category->slug)
                                    ? 'active' : '' }}">
                                    {{ $category->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        @endif
        <script>
            let swiperInstance = null;

            function initCategorySwiper() {
                if (window.innerWidth < 576 && !swiperInstance) {
                    swiperInstance = new Swiper('.category-swiper', {
                        slidesPerView: 3,
                        spaceBetween: 10,
                        freeMode: true,
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                        breakpoints: {
                            0: {
                                slidesPerView: 2,
                            },
                            476: {
                                slidesPerView: 3,
                            },
                        }
                    });
                } else if (window.innerWidth >= 576 && swiperInstance) {
                    swiperInstance.destroy(true, true);
                    swiperInstance = null;
                }
            }

            window.addEventListener('load', initCategorySwiper);
            window.addEventListener('resize', initCategorySwiper);
        </script>

    </header>
    <!-- Modal de Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content header-color">

                <div class="modal-header">
                    <h5 class="modal-title text-uppercase montserrat-bold font-22 text-white" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <div class="modal-body">
                    <form action="{{route('client.user.authenticate')}}" method="POST">
                        <!-- CSRF token (Laravel) -->
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label montserrat-medium font-15">E-mail</label>
                            <input type="email" class="form-control montserrat-regular font-15" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label montserrat-medium font-15">Senha</label>
                            <input type="password" class="form-control montserrat-regular font-15" id="password" name="password" required>
                        </div>

                        <div class="d-flex justify-content-center mt-3 mb-4">
                            <button type="submit" class="btn px-5 background-red rounded-3 text-white montserrat-medium font-15">Entrar</button>
                        </div>

                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <p class="montserrat-regular font-15 text-white text-center">
                                Ainda não tem uma conta?
                                <a href="#" class="text-decoration-underline montserrat-bold ms-1 under" 
                                data-bs-dismiss="modal"
                                data-bs-toggle="modal"
                                data-bs-target="#registerModal">Registre-se</a>
                                aqui <br>
                                <a href="#" 
                                class="text-decoration-underline montserrat-bold ms-1 under" 
                                data-bs-dismiss="modal"
                                data-bs-toggle="modal"
                                data-bs-target="#forgotPasswordModal">
                                Esqueceu sua senha?
                                </a>
                            </p>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Modal de Cadastro -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content header-color">

                <div class="modal-header">
                    <h5 class="modal-title text-uppercase montserrat-bold font-22 text-white" id="registerModalLabel">Cadastro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <div class="modal-body">
                    <form action="{{route('register-client')}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label montserrat-medium font-15">Nome</label>
                            <input type="text" class="form-control montserrat-regular font-15" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="emailRegister" class="form-label montserrat-medium font-15">E-mail</label>
                            <input type="email" class="form-control montserrat-regular font-15" id="emailRegister" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="passwordRegister" class="form-label montserrat-medium font-15">Senha</label>
                            <input type="password" class="form-control montserrat-regular font-15" id="passwordRegister" name="password" required>
                        </div>

                        <div class="d-flex justify-content-center my-2">
                            <button type="submit" class="btn px-4 background-red rounded-3 text-white montserrat-medium font-15">Cadastrar</button>
                        </div>

                        <div class="d-flex justify-content-center">
                            <p class="montserrat-regular font-15 text-white text-center">
                                Já tem uma conta?
                                <a href="#" class="text-decoration-underline montserrat-bold ms-1 under"
                                data-bs-dismiss="modal"
                                data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                                Fazer login
                                </a>
                            </p>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    @if (Auth::guard('client')->check())
        @php
            $user = Auth::guard('client')->user();
            $defaultImage = $user && $user->path_image ? url('storage/'.$user->path_image) : '';
        @endphp
        <!-- Modal de Edição -->
        <div class="modal fade" id="editClientModal-{{Auth::guard('client')->user()->id}}" tabindex="-1" aria-labelledby="editClientModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content header-color">

                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase montserrat-bold font-22 text-white" id="editClientModalLabel">Editar Informações</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>

                    <div class="modal-body">
                        <form action="{{ route('client.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label montserrat-medium font-15">Nome</label>
                                <input type="text" class="form-control montserrat-regular font-15" id="name" name="name" value="{{Auth::guard('client')->user()->name}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="emailRegister" class="form-label montserrat-medium font-15">E-mail</label>
                                <input type="email" class="form-control montserrat-regular font-15" id="emailRegister" name="email" value="{{Auth::guard('client')->user()->email}}" required>
                            </div>

                            <div class="mb-3">
                                <label for="passwordRegister" class="form-label montserrat-medium font-15">Senha</label>
                                <input type="password" class="form-control montserrat-regular font-15" id="passwordRegister" name="password">
                            </div>
                            <div class="col-lg-12">
                                <div class="mt-3">
                                    <label for="title" class="form-label montserrat-regular font-15">Imagem de perfil </label>
                                    <input 
                                        type="file" 
                                        name="path_image" 
                                        data-plugins="dropify" 
                                        data-default-file="{{ $defaultImage }}" 
                                    />
                                    <p class="montserrat-regular text-white font-12 mt-2 mb-0">{{__('dashboard.text_img_size')}} <b class="text-danger">2 MB</b>.</p>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn bg-secondary rounded-3 text-white montserrat-medium font-15" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn px-4 background-red rounded-3 text-white montserrat-medium font-15">Salvar alterações</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>        
        </div>
    @endif

    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content header-color">

                <div class="modal-header">
                    <h5 class="modal-title text-uppercase montserrat-bold font-22 text-white" id="forgotPasswordModalLabel">
                        Recuperar Senha
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <div class="modal-body">
                    {{-- {{ route('client.password.email') }} --}}
                    <form action="{{ route('client.password.email') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="recover_email" class="form-label montserrat-medium font-15">Digite seu e-mail</label>
                            <input type="email" class="form-control montserrat-regular font-15" id="recover_email" name="email" required>
                        </div>

                        <div class="d-flex justify-content-center mt-3 mb-4">
                            <button type="submit" class="btn px-5 background-red rounded-3 text-white montserrat-medium font-15">
                                Enviar link de recuperação
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div id="menu-mobile" class="menu-mobile d-flex flex-column justify-content-start align-items-center">
        <div class="d-flex justify-content-end align-items-start w-100">    
            <button id="menu-close" aria-label="Fechar menu" class="col-2 btn-close-menu p-0 bg-transparent" type="button">&times;</button>
        </div>
        <div class="col-10 logo-img px-3 py-2 mb-4 rounded-2 d-flex justify-content-center align-items-center">
            <img src="{{asset('build/client/images/logo.svg')}}" alt="CristoNet" title="CristoNet" class="img-fluid">
        </div>
        <div class="row justify-content-center gap-5">
            <nav class="mt-5">
                <ul class="list-unstyled text-center">
                    <li><a href="{{route('index')}}#hero" class="text-white nav-link montserrat-regular font-18">Home</a></li>
                    <li><a href="{{route('index')}}#about" class="text-white nav-link montserrat-regular font-18">Sobre</a></li>
                    <li><a href="{{route('index')}}#plans" class="text-white nav-link montserrat-regular font-18">Planos</a></li>
                    <li><a href="{{route('index')}}#products" class="text-white nav-link montserrat-regular font-18">Produtos</a></li>
                    <li><a href="{{route('index')}}#depoiment" class="text-white nav-link montserrat-regular font-18">Depoimentos</a></li>
                    <li><a href="{{route('index')}}#contact" class="text-white nav-link montserrat-regular font-18">Contato</a></li>
                </ul>
            </nav>
            <nav class="site-navigation position-relative text-end w-auto redes-sociais">
                <ul class="p-0 d-flex justify-content-start gap-4 flex-row mb-0">
                    @if (isset($contact) && $contact->link_insta)
                        <li class="li d-flex justify-content-start align-items-center rounded-circle">
                            <a href="{{$contact->link_insta}}" rel="nofollow noopener noreferrer" target="_blank">
                                <img src="{{asset('build/client/images/insta.svg')}}" alt="Instagram">
                            </a>
                        </li>
                    @endif
                    @if (isset($contact) && $contact->link_x)
                        <li class="li d-flex justify-content-start align-items-center rounded-circle">
                            <a href="{{$contact->link_x}}" rel="nofollow noopener noreferrer" target="_blank">
                                <img src="{{asset('build/client/images/x.svg')}}" alt="X">
                            </a>
                        </li>
                    @endif
                    @if (isset($contact) && $contact->link_youtube)
                        <li class="li d-flex justify-content-start align-items-center rounded-circle">
                            <a href="{{$contact->link_youtube}}" rel="nofollow noopener noreferrer" target="_blank">
                                <img src="{{asset('build/client/images/youtube.svg')}}" alt="Youtube">
                            </a>
                        </li>
                    @endif
                    @if (isset($contact) && $contact->link_face)
                        <li class="li d-flex justify-content-start align-items-center rounded-circle">
                            <a href="{{$contact->link_face}}" rel="nofollow noopener noreferrer" target="_blank">
                                <img src="{{asset('build/client/images/face.svg')}}" alt="Facebook">
                            </a>
                        </li>
                    @endif
                    @if (isset($contact) && $contact->link_tik_tok)
                        <li class="li d-flex justify-content-start align-items-center rounded-circle">
                            <a href="{{$contact->link_tik_tok}}a" rel="nofollow noopener noreferrer" target="_blank">
                                <img src="{{asset('build/client/images/tiktok.svg')}}" alt="Tiktok">
                            </a>
                        </li>
                    @endif
                </ul> 
            </nav>
        </div>
    </div>

    @include('client/includes/lgpd/lgpd')

     @if (isset($contact) && $contact->phone_one <> null)
        @php
            // Remove caracteres não numéricos do telefone
            $phone = preg_replace('/\D/', '', $contact->phone_one);

            // Monta mensagem com ícones e quebras de linha
            $mensagem = "Olá! Encontrei seu site e gostaria de conhecer mais sobre os planos disponíveis.%0A";
        @endphp

        <a
            href="https://wa.me/55{{ $phone }}?text={{ $mensagem }}"
            class="whatsapp-float"
            aria-label="Fale conosco no WhatsApp"
            target="_blank"
            rel="noopener noreferrer"
            >
            <!-- Ícone SVG do WhatsApp -->
            <svg viewBox="0 0 32 32" aria-hidden="true">
                <path d="M19.11 17.27c-.23-.12-1.37-.67-1.58-.75-.21-.08-.36-.12-.52.12-.16.23-.6.74-.74.89-.14.15-.27.17-.5.06-.23-.12-.97-.36-1.85-1.12-.68-.6-1.14-1.34-1.27-1.57-.13-.23-.01-.35.1-.47.1-.1.23-.27.35-.4.12-.13.16-.23.24-.39.08-.16.04-.3-.02-.42-.06-.12-.52-1.25-.71-1.72-.19-.46-.38-.4-.52-.4h-.45c-.16 0-.42.06-.64.3-.22.23-.84.82-.84 2 0 1.18.86 2.32.98 2.48.12.16 1.69 2.58 4.1 3.61.57.25 1.01.4 1.35.52.57.18 1.1.16 1.52.1.46-.07 1.37-.56 1.57-1.1.19-.54.19-1 .13-1.1-.06-.1-.21-.16-.44-.27zM16 3.2c-7.06 0-12.8 5.73-12.8 12.8 0 2.26.61 4.36 1.67 6.17L3.2 28.8l6.78-1.6c1.74.95 3.74 1.5 5.87 1.5 7.07 0 12.8-5.73 12.8-12.8S23.07 3.2 16 3.2zm0 22.94c-1.98 0-3.81-.58-5.35-1.57l-.38-.24-4.02.95.95-3.92-.25-.4a10.58 10.58 0 0 1-1.64-5.62c0-5.86 4.77-10.62 10.63-10.62S26.62 9.38 26.62 15.24 21.86 26.14 16 26.14z"/>
            </svg>
        </a>
    @endif

    <style>
        .whatsapp-float{
            position: fixed;
            bottom: 30%;
            right: 18px;
            transform: translateY(-30%);
            width: 56px;
            height: 56px;
            border-radius: 9999px;
            background: #25D366;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(0,0,0,.15);
            z-index: 9999;
            transition: transform .15s ease, filter .15s ease, box-shadow .15s ease;
        }
        .whatsapp-float svg{
            width: 40px;
            height: 40px;
            fill: #fff;
            display: block;
        }
        .whatsapp-float:hover{
            transform: translateY(-30%) scale(1.05);
            filter: brightness(1.05);
            box-shadow: 0 14px 32px rgba(0,0,0,.2);
        }
        /* Ajuste em telas menores */
        @media (max-width: 768px){
            .whatsapp-float{
            right: 12px;
            width: 52px;
            height: 52px;
            }
            .whatsapp-float svg{ width: 35px; height: 35px; }
        }
        /* Não mostrar na impressão */
        @media print{
            .whatsapp-float{ display: none; }
        }
        /* Respeita usuários com redução de movimento */
        @media (prefers-reduced-motion: reduce){
            .whatsapp-float{ transition: none; }
            .whatsapp-float:hover{ transform: translateY(-50%); }
        }
    </style>

    <main>
        <div  class="mt-0">
            @include('client.includes.announcement')

            @if ($announcements->isEmpty())
                <style>
                    .contact, .blog-inn {
                        margin-top: 35px;
                    }
                </style>
            @endif

        </div>
        @yield('content') 
    </main>

    <footer id="footer" class="footer position-relative dark-background-medium animate-on-scroll" data-animation="animate__fadeInUp">
        <div class="container pt-5 pb-3">
            <div class="sitemap mt-2 mb-5 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 g-3 justify-content-between align-items-baseline">
                <div class=logo>
                    <img src="{{asset('build/client/images/logo.svg')}}" alt="WHI - Web de Alta Inovação" title="WHI - Web de Alta Inovação" loading="lazy" class="w-100">
                </div>
                <ul class="list-unstyled text-start mt-0">
                    <li class="montserrat-regular font-16 mb-3"><a href="{{route('index')}}#hero" class="nav-link montserrat-regular font-16 mb-3">Home</a></li>
                    <li><a href="{{route('index')}}#about" class="nav-link montserrat-regular font-16 mb-3">Sobre</a></li>
                    <li><a href="{{route('index')}}#plans" class="nav-link montserrat-regular font-16 mb-3">Planos</a></li>
                </ul>
                <ul class="list-unstyled text-start">                    
                    <li><a href="{{route('index')}}#products" class="nav-link montserrat-regular font-16 mb-3">Produtos</a></li>
                    <li><a href="{{route('index')}}#depoiment" class="nav-link montserrat-regular font-16 mb-3">Depoimentos</a></li>
                    <li class="montserrat-regular font-16 mb-3"><a href="{{route('index')}}#contact" class="nav-link montserrat-regular font-16 mb-3">Contato</a></li>
                    <li><a href="https://policies.google.com/privacy?hl=pt-BR" rel="noopener noreferrer" target="_blank" class="nav-link montserrat-regular font-16 mb-3">Política de privacidade</a></li>
                </ul>
                <div class="d-flex justify-content-end flex-column w-auto montserrat-semiBold">
                    <span>
                        <a href="https://www.google.com/maps?q=Rua+Do+Tesouro,+56+-+Edif+Santa+Cruz+Andar+7+Sala+700+-+Comércio,+Salvador+-+BA,+40020-056" target=_blank rel="noopener noreferrer" class="montserrat-regular font-15 d-flex justify-content-start gap-3 align-item-center">
                            <svg width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 0C4.03157 0 0 4.125 0 9.20857C0 18.7864 8.63908 21.9136 8.72355 21.9529C8.8157 21.9843 8.90017 22 9 22C9.09215 22 9.1843 21.9843 9.26877 21.9529C9.36092 21.9214 18 18.7943 18 9.20857C18 4.125 13.9608 0 9 0ZM9 14.0407C6.36604 14.0407 4.23123 11.8486 4.23123 9.16929C4.23123 6.47429 6.37372 4.29 9 4.29C11.6263 4.29 13.7611 6.48214 13.7611 9.16929C13.7611 11.8486 11.6263 14.0407 9 14.0407Z" fill="#F9F9F9"/>
                            </svg>

                            R. Direta da Mata Escura, 550 - Mata Escura, <br> Salvador - BA, 41225-190
                        </a>
                    </span>
                    <span>
                        <a href="mailto:atendimento@sindacsba.org.br" target=_blank rel="noopener noreferrer" class="montserrat-regular font-15 d-flex justify-content-start gap-3 align-item-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.34863 5.87552L1.72205 6.89199C1.57774 6.98287 1.45218 7.08811 1.347 7.2061L3.34861 8.81489L3.34863 5.87552ZM10 7.13034C10.2422 7.13034 10.4615 7.03388 10.6197 6.87921C10.7778 6.72455 10.8765 6.5101 10.8765 6.27331C10.8765 6.03653 10.7778 5.82209 10.6197 5.66741C10.4615 5.51195 10.2422 5.41628 10 5.41628C9.75785 5.41628 9.53854 5.51195 9.38035 5.66741C9.22218 5.82207 9.12352 6.03653 9.12352 6.27331C9.12352 6.5101 9.22217 6.72453 9.38035 6.87921C9.53852 7.03387 9.75785 7.13034 10 7.13034ZM11.2972 7.54171C10.9645 7.86698 10.5063 8.06787 10 8.06787C9.49371 8.06787 9.03466 7.86697 8.70284 7.54171C8.37101 7.21724 8.16554 6.76839 8.16554 6.27333C8.16554 5.77827 8.371 5.32942 8.70284 5.00496C9.03466 4.6805 9.49371 4.47959 10 4.47959C10.3775 4.47959 10.7281 4.59121 11.02 4.78175C11.1064 4.69884 11.2254 4.64781 11.3559 4.64781C11.6209 4.64781 11.8353 4.85747 11.8353 5.11659V6.27416C11.8353 6.42962 11.9014 6.57152 12.0065 6.67515L12.0049 6.67675C12.1109 6.77879 12.256 6.84257 12.4158 6.84257C12.5748 6.84257 12.7199 6.77879 12.8259 6.67515C12.9319 6.57152 12.9971 6.43041 12.9971 6.27416C12.9971 5.46499 12.6612 4.73153 12.119 4.20143C11.5768 3.67127 10.8276 3.34283 9.99926 3.34283C9.17171 3.34283 8.4216 3.67129 7.87947 4.20143C7.33727 4.73159 7.00137 5.46423 7.00137 6.27416C7.00137 7.08333 7.33729 7.81679 7.87947 8.34689C8.42167 8.87705 9.17094 9.20549 9.99926 9.20549C10.8268 9.20549 11.5769 8.87783 12.119 8.34689C12.2952 8.17469 12.4484 7.98175 12.5764 7.77209C12.5234 7.77767 12.4696 7.78006 12.4158 7.78006C12.0351 7.78006 11.6853 7.64294 11.4154 7.41654C11.3779 7.46039 11.3388 7.50344 11.2972 7.5441L11.2972 7.54171ZM12.7966 9.0078C12.0807 9.70776 11.0917 10.1407 9.99926 10.1407C8.90753 10.1407 7.91772 9.70776 7.20195 9.0078C6.48609 8.30784 6.04256 7.3408 6.04256 6.2726C6.04256 5.20511 6.48528 4.23728 7.20195 3.5374C7.91781 2.83743 8.9068 2.40454 9.99926 2.40454C11.091 2.40454 12.0808 2.83743 12.7966 3.5374C13.5124 4.23736 13.956 5.20439 13.956 6.2726C13.956 7.34009 13.5132 8.30792 12.7966 9.0078ZM4.30655 9.58498L8.20382 12.7182L8.34079 12.6081C8.82835 12.2159 9.41376 12.0206 9.99916 12.0206C10.5846 12.0206 11.1708 12.2167 11.6575 12.6081L11.7945 12.7182L15.6918 9.58498V2.44513C15.6918 2.02977 15.5181 1.65349 15.2393 1.38003C14.9596 1.10659 14.5748 0.937565 14.15 0.937565H5.84761C5.42365 0.937565 5.03799 1.10737 4.75833 1.38003C4.47868 1.65347 4.30581 2.02977 4.30581 2.44513V9.58498H4.30655ZM16.6515 8.81408L18.6531 7.20528C18.5479 7.08729 18.4223 6.98205 18.278 6.89117L16.6514 5.87471L16.6515 8.81408ZM16.6515 4.76658L18.7909 6.10353C19.1757 6.34429 19.4782 6.6592 19.6836 7.02591C19.6934 7.04345 19.7024 7.06099 19.7122 7.07773L19.713 7.07933L19.7187 7.08969C19.903 7.44207 20 7.8367 20 8.25602V17.4433C20 18.1472 19.7065 18.7866 19.2328 19.2498C18.7591 19.713 18.106 20 17.3852 20H2.61476C1.89483 20 1.24094 19.713 0.767224 19.2498C0.293527 18.7866 0 18.1481 0 17.4433V8.25602C0 7.83747 0.0970227 7.44205 0.281296 7.08969L0.287003 7.07933L0.287818 7.07773C0.297602 7.06019 0.306571 7.04265 0.316355 7.02591C0.522632 6.65839 0.823489 6.34348 1.20913 6.10353L3.34854 4.76658V2.44507C3.34854 1.77141 3.62902 1.16074 4.08232 0.717496C4.53483 0.275031 5.161 0 5.84912 0H14.1515C14.8404 0 15.465 0.274255 15.9183 0.717496C16.3708 1.15996 16.6521 1.77143 16.6521 2.44507V4.76658H16.6515ZM3.5566 10.19C3.53377 10.1749 3.51258 10.1574 3.49301 10.139L0.965582 8.10691C0.961505 8.15554 0.959059 8.20577 0.959059 8.25599V17.4433C0.959059 17.7677 1.05771 18.0707 1.22731 18.325L7.45143 13.3224L3.55582 10.1908L3.5566 10.19ZM16.5064 10.139C16.4868 10.1582 16.4656 10.1749 16.4428 10.19L12.5472 13.3216L18.7713 18.3242C18.9409 18.0699 19.0396 17.7678 19.0396 17.4425V8.25522C19.0396 8.205 19.0371 8.15557 19.033 8.10614L16.5056 10.1383L16.5064 10.139ZM8.51377 13.6771L8.49991 13.6883L1.97315 18.9348C2.17045 19.0161 2.38734 19.0616 2.61399 19.0616H17.3845C17.6119 19.0616 17.8288 19.0161 18.0253 18.9348L11.4986 13.6883L11.4847 13.6771L11.0518 13.3287C10.7427 13.0808 10.3718 12.9572 9.99917 12.9572C9.62739 12.9572 9.25559 13.0816 8.94658 13.3287L8.51377 13.6771Z" fill="#F9F9F9"/>
                            </svg>

                            Jrdinario@hotmail.com
                        </a>
                    </span>
                    <span>                        
                        <a href="tel:7130174112" target=_blank rel="noopener noreferrer" class="montserrat-regular font-15 d-flex justify-content-start gap-3 align-item-center">
                            <svg width="13" height="22" viewBox="0 0 13 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 17H2V3H11M6.5 21C6.10218 21 5.72064 20.842 5.43934 20.5607C5.15804 20.2794 5 19.8978 5 19.5C5 19.1022 5.15804 18.7206 5.43934 18.4393C5.72064 18.158 6.10218 18 6.5 18C6.89782 18 7.27936 18.158 7.56066 18.4393C7.84196 18.7206 8 19.1022 8 19.5C8 19.8978 7.84196 20.2794 7.56066 20.5607C7.27936 20.842 6.89782 21 6.5 21ZM10.5 0H2.5C1.83696 0 1.20107 0.263392 0.732233 0.732233C0.263392 1.20107 0 1.83696 0 2.5V19.5C0 20.163 0.263392 20.7989 0.732233 21.2678C1.20107 21.7366 1.83696 22 2.5 22H10.5C11.163 22 11.7989 21.7366 12.2678 21.2678C12.7366 20.7989 13 20.163 13 19.5V2.5C13 1.83696 12.7366 1.20107 12.2678 0.732233C11.7989 0.263392 11.163 0 10.5 0Z" fill="#F9F9F9"/>
                            </svg>
                            71 98655-0508
                        </a>
                    </span>
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-5">
                <div class="text-center"></div>
                <div class="copyright">
                    <p id="footer-text" class="montserrat-regular font-16 text-start text-white mb-0"></p>  
                    <script defer>
                        const currentYear = (new Date).getFullYear();
                        document.getElementById("footer-text").innerHTML = `Copyright© ${currentYear} <span> CRISTONET todos os direitos reservados.</span>`
                    </script>
                </div>
                <div class=credits>
                    <a href="https://www.whi.dev.br/" target=_blank rel="noopener noreferrer">
                        <img src="{{asset('build/client/images/developed.svg')}}"  alt="WHI - Web de Alta Inovação" title="WHI - Web de Alta Inovação" loading=lazy>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
    <script src="https://cdn.ckeditor.com/4.22.1/basic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('build/client/css/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('build/admin/js/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('build/client/lgpd/script.js') }}"></script>
    <script src="{{ asset('build/client/js/default.js') }}"></script>
    
    <script defer>
        // Ativa a classe manualmente com base na rolagem ou clique
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function () {
            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            });
        });
    </script>


    {{-- Modais alert --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let successMessage = @json(session('success'));
            let errorMessage = @json(session('error'));

            if (successMessage) {
                Swal.fire({
                    title: 'Sucesso!',
                    text: successMessage,
                    icon: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
            }

            if (errorMessage) {
                Swal.fire({
                    title: 'Erro!',
                    text: errorMessage,
                    icon: 'error',
                    timer: 2500,
                    showConfirmButton: false
                });
            }
        });
    </script>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                Swal.fire({
                    title: 'Erro!',
                    text: @json($error),
                    icon: 'error',
                    timer: 2500,
                    showConfirmButton: false
                });
            </script>
        @endforeach
    @endif
</body>
</html>