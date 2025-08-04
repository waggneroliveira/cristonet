@extends('client.core.client')
@section('content')
<section id="hero" class="hero position-relative d-flex flex-column section dark-background overflow-hidden">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            @foreach ($slides as $slide)
                <div class="swiper-slide">
                    <picture>
                        <source srcset="{{ asset('storage/' . $slide->path_image_mobile) }}" media="(max-width: 885px)">
                        <img src="{{ asset('storage/' . $slide->path_image) }}" alt="Banner Hero" title="Banner Hero" class="image-hero w-100">
                    </picture>
                </div>
            @endforeach
        </div>
        <!-- Paginação opcional -->
        <div class="swiper-pagination"></div>
    </div>
</section>
@if (!empty($topics))
    <section id="topics">
        <div class="col-12 topics">
            <div class="row text-white text-center">
                @foreach ($topics as $topic)                
                    <div class="box-topic col-md-4 grey-background p-4 d-flex justify-content-between align-items-center">
                        <div class="mb-3">
                            {{-- <i class="bi bi-stars" style="font-size: 2rem;"></i> --}}
                            <img src="{{asset('storage/'.$topic->path_image)}}" alt="{{$topic->title}}">
                        </div>
                        <div class="description text-start col-10">
                            <h5 class="montserrat-bold font-25">{{$topic->title}}</h5>
                            <p class="mb-0 montserrat-regular font-15 text-white">
                                {{$topic->description}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
@if (!empty($about) || !empty($partners))
    <section id="about" class="position-relative">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-start about flex-wrap w-100 pt-5">
                <div class="col-12 col-lg-6">
                    <h1 class="d-flex align-items-start gap-2 montserrat-semiBold font-28 text-black before text-uppercase">{{$about->title}}</h1>
            
                    <div class="description mt-4">{!!$about->description!!}</div>
                    
                    @if ($about->link)                        
                        <div class="call-to-action mt-4">
                            <a href="{{$about->link}}" target="_blank" rel="noopener noreferrer" class="btn background-red rounded-5 px-4 py-2 text-white montserrat-semiBold font-15">{{$about->title_button}}</a>
                        </div>
                    @endif
                </div>

                <div class="col-12 col-lg-6">
                    <div class="image d-flex justify-content-end">
                        <img src="{{asset('storage/'.$about->path_image)}}" alt="About" class="w-100 h-100 about-image d-none d-sm-block" loading="lazy">
                    </div>
                </div>            
            </div>
            @if (!empty($partners))
                <div class="partners">
                    <div class="container py-5">
                        <div class="row g-3 justify-content-start">
                            @foreach ($partners as $partner)                        
                                <div class="col-6 col-sm-4 col-md-2">
                                    <div class="partner-card border rounded-2 d-flex justify-content-center align-items-center">
                                        <img src="{{asset('storage/'.$partner->path_image)}}" alt="Logo dos parceiro" loading="lazy"/>                            
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <img src="{{asset('build/client/images/firu.webp')}}" alt="Firlua about" class="firula-about position-absolute d-none d-sm-block" loading="lazy">
    </section>
@endif

<section id="plans" class="background-plan py-5 plan">
    <div class="content m-auto me-0 justify-content-end d-flex flex-wrap flex-column flex-md-row">
        <aside class="col-12 col-md-4">
            <div class="w-100">
                <h2 class="montserrat-medium font-25 text-white">Planos Disponíveis</h2>
                <h3 class="text-uppercase montserrat-ExtraBold font-35 text-white">PARA VOCÊ</h3>
            </div>
            @if (!empty($planCategories))                
                <ul class="d-flex justify-content-center align-items-start gap-4 flex-column p-0 mt-5 col-12 col-md-6">
                    @foreach ($planCategories as $planCategory)                    
                        <li class="list-unstyled border-bottom pb-4 col-12">
                            <a href="" class="montserrat-medium font-15 text-white background-red py-2 px-3 rounded-5 d-flex w-100 justify-content-center gap-3 align-items-center">
                                <img src="{{asset('storage/' . $planCategory->path_image)}}" alt="Imagem da categoria">

                                {{$planCategory->title}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
            <div class="obs mt-4 col-12 col-md-8">
                <p class="montserrat-regular font-15 text-white">
                    *Os planos poderão ser reajustados no período de 12 meses (CONSUMIDOR PESSOA FÍSICA), conforme contrato e norma da ANATEL.
                    <br><br>
                    *Consulte viabilidade para o seu endereço.
                    <br><br>
                    *Adicional disponível apenas para clientes Cristonet
                </p>
            </div>
        </aside>
        <div class="col-12 col-md-7">
            <div class="swiper init-swiper" style="padding: 0 0 35px 0">
                <script type=application/json class=swiper-config>
                    {
                        "speed": 500,
                        "slidesPerView": 3.5,
                        "slidesPerGroup": 1,
                        "centeredSlides": false,
                        "initialSlide": 0,
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 1.5,
                                "spaceBetween": 5
                            },
                            "475": {
                                "slidesPerView": 2,
                                "spaceBetween": 5
                            },
                            "631": {
                                "slidesPerView": 3.2,
                                "spaceBetween": 5
                            },
                            "768": {
                                "slidesPerView": 3.2,
                                "spaceBetween": 5
                            },
                            "1025": {
                                "slidesPerView": 3.2,
                                "spaceBetween": 10
                            }
                        }
                    }
                </script>

                <div class="swiper-wrapper align-items-center">   
                    @for ($i = 0; $i < 6; $i++)                        
                        <div class=swiper-slide>
                            <div class="card-plan bg-white rounded-3 p-3">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <div class="title">
                                        <h4 class="montserrat-medium text-black font-18 mb-1">Plano</h4>
                                        <h5 class="subtitle-plan montserrat-bold font-18 mb-0">VIP Ilimitado</h5>
                                    </div>
                                    <div class="qtd-mb">
                                        <span class="subtitle-plan montserrat-bold font-20 lh-sm">1000</span>
                                        <p class="montserrat-medium font-15 text-black mb-0 lh-sm">Megas</p>
                                    </div>
                                </div>
                                <ul class="p-0 mt-4">
                                    @for ($j = 0; $j < 4; $j++)                                        
                                        <li class="list-unstyled border-bottom pb-3 col-12 mb-3">
                                            <a href="" class="montserrat-medium font-15 text-black">
                                                <svg width="21" height="19" viewBox="0 0 21 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_137_482)">
                                                <path d="M11.9764 -0.857526C7.33766 -1.11332 2.40109 0.862206 1.04479 5.73632C-2.49455 18.4554 20.511 20.9476 21.0675 9.33308C20.9648 3.84391 17.5824 -0.54842 11.9764 -0.857526ZM5.79238 14.8688C2.11142 12.6785 0.725338 8.67947 2.30272 4.6575C4.28123 -0.387281 10.9283 -1.84162 15.4201 0.650014C18.6435 2.43806 20.0298 6.03297 20.0965 9.59652C19.7643 16.529 10.7186 17.8001 5.79238 14.8688ZM15.9536 3.9086C16.3199 4.72603 15.3841 5.7192 14.9739 6.40928C13.9924 8.06082 13.0109 9.71235 12.0293 11.3639C11.6822 11.948 11.2964 13.0172 10.5079 13.1272C9.55436 13.2601 8.40475 11.8791 7.76743 11.3774C6.94204 10.7277 4.94741 9.80777 5.33163 8.56939C5.33103 8.56538 5.33395 8.56028 5.33455 8.55586C5.33529 8.55359 5.33526 8.55147 5.336 8.5492C5.33695 8.5463 5.34041 8.54407 5.34159 8.54122C5.34609 8.52941 5.34625 8.51897 5.35915 8.50456C5.90809 7.89101 6.37568 7.15125 7.27456 7.39509C8.07191 7.61139 8.93869 8.65399 9.62028 9.35368C10.2574 8.30181 10.8947 7.24993 11.5318 6.19803C12.0763 5.29921 12.6501 3.70002 13.5357 3.08891C14.2696 2.58246 15.5838 3.08349 15.9536 3.9086Z" fill="black"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_137_482">
                                                <rect width="21" height="19" fill="white"/>
                                                </clipPath>
                                                </defs>
                                                </svg>
                                                Modem Wifi 5G Modem Wifi 5G 
                                            </a>
                                        </li>
                                    @endfor
                                </ul>
                                <div class="price">
                                    <span class="montserrat-semiBold font-25 text-red d-block text-center">R$ 220,00</span>
                                </div>
                                <div class="call-to-action mt-3 text-center">
                                    <a href="http://" target="_blank" rel="noopener noreferrer" class="btn background-red rounded-5 px-5 py-2 text-white montserrat-semiBold font-15">Quero esse</a>
                                </div>
                            </div>
                        </div>
                    @endfor                    
                </div>
                <div class=btn-navigation>
                    <div class=swiper-button-prev></div>
                    <div class=swiper-button-next></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="all-complete">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-12 col-md-4 mb-3 mb-md-0">
                <h2 class="d-flex align-items-start gap-2 montserrat-semiBold font-28 text-black before text-uppercase">
                    TUDO COMPLETO PARA VOCÊ!
                </h2>
            </div>
            <div class="col-12 col-md-8">
                <p class="montserrat-regular font-15 mt-2 mt-md-3">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
            </div>
        </div>
    </div>
</section>
<section id="products" class="background-plan py-5 products position-relative">
    <div class="content m-auto me-0 justify-content-end d-flex flex-wrap flex-column flex-md-row">
        <aside class="col-12 col-md-4">
            <div class="w-100">
                <h2 class=" montserrat-medium font-25 text-white">Conheça nossos</h2>
                <h3 class="text-uppercase montserrat-ExtraBold font-35 text-white">PRODUTOS</h3>
            </div>

            <div class="obs mt-4 col-12 col-md-8">
                <p class="montserrat-regular font-15 text-white">
                    Conheça os nossos produtos exclusivos e disponíveis para você. 
                    <br><br>
                    *Consulte disponibilidade
                </p>
            </div>

            <img src="{{asset('build/client/images/woman-product.webp')}}" alt="imagem woman-firula" class="d-none d-sm-block position-absolute bottom-0" loading="lazy">
        </aside>
        <div class="col-12 col-md-7">
            <div class="swiper init-swiper" style="padding: 0 0 35px 0">
                <script type=application/json class=swiper-config>
                    {
                        "speed": 500,
                        "slidesPerView": 3.5,
                        "slidesPerGroup": 1,
                        "centeredSlides": false,
                        "initialSlide": 0,
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 1.5,
                                "spaceBetween": 5
                            },
                            "475": {
                                "slidesPerView": 2,
                                "spaceBetween": 5
                            },
                            "631": {
                                "slidesPerView": 3.2,
                                "spaceBetween": 5
                            },
                            "768": {
                                "slidesPerView": 3.2,
                                "spaceBetween": 5
                            },
                            "1025": {
                                "slidesPerView": 3.2,
                                "spaceBetween": 10
                            }
                        }
                    }
                </script>

                <div class="swiper-wrapper align-items-center">   
                    @for ($i = 0; $i < 6; $i++)                        
                        <div class=swiper-slide>
                            <div class="card-plan bg-white rounded-3 p-3">
                                <div class="d-flex justify-content-center align-items-center flex-column">
                                    <div class="image mb-3">
                                        <img src="{{asset('build/client/images/modem.png')}}" alt="imagem do produto">
                                    </div>
                                    <div class="title">
                                        <h5 class="subtitle-plan montserrat-bold font-18 mb-0 text-center">CAIXA SERVIDOR 2.0</h5>
                                    </div>
                                </div>
                                <div class="description p-0 mt-4">                                                                           
                                    <p class="col-12 text-center montserrat-medium font-15 text-black">
                                        Servidor confiável e de alto desempenho para hospedar seus sites e aplicações com segurança e velocidade e velocidade.e velocidade.
                                    </p>                                    
                                </div>
                                <div class="price">
                                    <span class="montserrat-semiBold font-25 text-red d-block text-center">R$ 220,00</span>
                                </div>
                                <div class="call-to-action mt-3 text-center">
                                    <a href="http://" target="_blank" rel="noopener noreferrer" class="btn background-red rounded-5 px-5 py-2 text-white montserrat-semiBold font-15">Quero esse</a>
                                </div>
                            </div>
                        </div>
                    @endfor                    
                </div>
                <div class=btn-navigation>
                    <div class=swiper-button-prev></div>
                    <div class=swiper-button-next></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="depoiment" class="depoiment position-relative">
    <div class="content m-auto me-0 justify-content-end d-flex flex-wrap align-items-center h-100 flex-column flex-md-row">
        <div class="col-12 col-lg-4">
            <h2 class="title mb-0 text-uppercase font-35 montserrat-semiBold text-black before">Depoimentos</h2>
            
            <p class="mb-0 mt-4 text-start p-0 montserrat-medium font-15 col-12 col-lg-8">Veja sobre o depoimento de pessoas que viveram uma experiência conosco!</p>
            
            <div class="call-to-action mt-3">
                <a href="http://" target="_blank" rel="noopener noreferrer" class="btn background-red rounded-5 px-5 py-2 text-white montserrat-semiBold font-15">Conhecer</a>
            </div>
        </div>

        <div class="col-12 col-md-7 position-relative">
            <div class="project-list-details-slider swiper init-swiper">
                <script type=application/json class=swiper-config>
                    {
                        "speed": 500,
                        "slidesPerView": 5,
                        "slidesPerGroup": 1,
                        "centeredSlides": true,
                        "initialSlide": 0,
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".swiper-button-next",
                            "prevEl": ".swiper-button-prev"
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 1.3,
                                "spaceBetween": 5
                            },
                            "475": {
                                "slidesPerView": 1.3,
                                "spaceBetween": 5
                            },
                            "631": {
                                "slidesPerView": 2.3,
                                "spaceBetween": 5
                            },
                            "768": {
                                "slidesPerView": 2.3,
                                "spaceBetween": 5
                            },
                            "991": {
                                "slidesPerView": 2.3,
                                "spaceBetween": 5
                            },
                            "1025": {
                                "slidesPerView": 2.5,
                                "spaceBetween": 5
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper align-items-center">
                    @for ($d = 0; $d < 6 ; $d++)                        
                        <div class="swiper-slide">
                            <div class="project-list-item dark-background px-3 py-4 rounded-4">
                                <svg class="position-absolute start-0 ms-2 mt-2 top-0" width="29" height="29" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 13.0833H10.6667C12.0013 13.0833 13.0833 12.0013 13.0833 10.6667V3.41667C13.0833 2.08199 12.0013 1 10.6667 1H3.41667C2.08199 1 1 2.08199 1 3.41667V13.0833ZM1 13.0833V21.5417C1 26.2131 4.78692 30 9.45833 30M17.9167 13.0833H27.5833C28.9181 13.0833 30 12.0013 30 10.6667V3.41667C30 2.08199 28.9181 1 27.5833 1H20.3333C18.9987 1 17.9167 2.08199 17.9167 3.41667V13.0833ZM17.9167 13.0833V21.5417C17.9167 26.2131 21.7036 30 26.375 30" stroke="#F2E416"/>
                                </svg>

                                <div class="row">
                                    <div class="content position-relative">
                                        <p class="depoiment-text m-auto mt-2 montserrat-regular font-15 text-white">
                                            Atendimento maravilhoso, Maiara, uma excelente profissional, sempre muito cuidadosa em cada movimento, recomendo super!!
                                        </p>                                          
                                    </div>
    
                                    <div class="client-info d-flex flex-column m-auto mt-4 gap-1">
                                        <span class="font-16 montserrat-medium">Hosana Costa</span>
                                        <span class="font-12 montserrat-regular text-white">Cliente há 3 anos</span>
                                        <div class="image-rating">
                                            <img src="{{asset('build/client/images/rating.svg')}}" loading="lazy" alt="Rating" class="w-100" loading="lazy">
                                        </div>
                                    </div> 
                                </div> 

                                <svg class="position-absolute end-0 me-2 mb-2 bottom-0" width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36 21.4167L24.3333 21.4167C22.7225 21.4167 21.4167 22.7225 21.4167 24.3333L21.4167 33.0833C21.4167 34.6941 22.7225 36 24.3333 36L33.0833 36C34.6941 36 36 34.6942 36 33.0833L36 21.4167ZM36 21.4167L36 11.2083C36 5.57042 31.4296 1 25.7917 1M15.5833 21.4167L3.91666 21.4167C2.30579 21.4167 0.999997 22.7225 0.999997 24.3333L0.999996 33.0833C0.999996 34.6941 2.30579 36 3.91666 36L12.6667 36C14.2775 36 15.5833 34.6941 15.5833 33.0833L15.5833 21.4167ZM15.5833 21.4167L15.5833 11.2083C15.5833 5.57042 11.0129 1 5.375 1" stroke="#F2E416"/>
                                </svg>
                              
                            </div>
                        </div>
                    @endfor
                </div>
                <div class=btn-navigation>
                    <div class=swiper-button-prev></div>
                    <div class=swiper-button-next></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact-section py-5 bg-contact text-white">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <!-- Coluna Esquerda - Formulário -->
            <div class="col-12 col-lg-5 mb-4 mb-lg-0">
                <h4 class="title mb-0 text-uppercase font-32 montserrat-semiBold before">
                    ENTRE EM CONTATO AGORA!
                </h4>
                <p class="mt-4 montserrat-regular text-white font-15">
                    Deixe seu número abaixo que entraremos em contato em breve. Ou, fale conosco pelo WhatsApp.
                </p>

                <div class="d-flex align-items-center mb-4">
                    <span class="me-3 montserrat-regular font-15"><i class="bi bi-instagram me-2"></i> @cristonet</span>
                    <span class="montserrat-regular font-15"><i class="bi bi-whatsapp me-2"></i> 71 98655-0508</span>
                </div>

                <form class="col-12 col-lg-11">
                    <div class="input-group mb-3">
                        <input type="tel" class="form-control montserrat-regular font-15" placeholder="Telefone" required>
                        <button class="btn btn-danger montserrat-medium font-15 col-3" type="submit">Enviar</button>
                    </div>
                    <div class="form-check small">
                        <input class="form-check-input" type="checkbox" value="" id="privacyCheck" required>
                        <label class="form-check-label montserrat-regular font-15" for="privacyCheck">
                            Aceito os termos descritos na Política de Privacidade
                        </label>
                    </div>
                </form>
            </div>

            <!-- Coluna Direita - Mapa -->
            <div class="col-12 col-lg-5">
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.google.com/maps?q=Rua%20da%20Paz%20e%20Castelo%20Branco&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                     </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
