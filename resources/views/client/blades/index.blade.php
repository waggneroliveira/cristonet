@extends('client.core.client')
@section('content')
<section id=hero class="hero position-relative d-flex flex-column section dark-background overflow-hidden">
    @foreach ($slides as $slide)
        <picture>
            <source srcset="{{ asset('storage/' . $slide->path_image_mobile) }}" media="(max-width: 885px)">
            <img src="{{ asset('storage/' . $slide->path_image) }}" alt="Banner Hero" title="Banner Hero" class="image-hero">
        </picture>
    @endforeach
</section>

<section id="topics">
    <div class="col-12 topics">
        <div class="row text-white text-center">
            <div class="col-md-4 grey-background p-4 d-flex justify-content-between align-items-center">
                <div class="mb-3">
                    <i class="bi bi-stars" style="font-size: 2rem;"></i>
                </div>
                <div class="description text-start col-10">
                    <h5 class="montserrat-bold font-25">Experiência</h5>
                    <p class="mb-0 montserrat-regular font-15 text-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    </p>
                </div>
            </div>

            <div class="col-md-4 bg-secondary p-4 d-flex justify-content-between align-items-center">
                <div class="mb-3">
                    <i class="bi bi-patch-check" style="font-size: 2rem;"></i>
                </div>
                <div class="description text-start col-10">                
                    <h5 class="montserrat-bold font-25">Qualidade</h5>
                    <p class="mb-0 montserrat-regular font-15 text-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    </p>
                </div>
            </div>

            <div class="col-md-4 bg-dark p-4 d-flex justify-content-between align-items-center">
                <div class="mb-3">
                    <i class="bi bi-speedometer2" style="font-size: 2rem;"></i>
                </div>
                <div class="description text-start col-10">                    
                    <h5 class="montserrat-bold font-25">Velocidade</h5>
                    <p class="mb-0 montserrat-regular font-15 text-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="position-relative">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-start about flex-wrap w-100 py-5">
            <div class="col-12 col-lg-6">
                <h1 class="d-flex align-items-start gap-2 montserrat-semiBold font-28 text-black before text-uppercase">SOMOS A PROVEDORA PARA UM NOVO CONCEITO DE INTERNET</h1>
        
                <p class="montserrat-regular font-15 mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centurie</p>
                
                <div class="call-to-action mt-4">
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="btn background-red rounded-5 px-3 py-2 text-white montserrat-semiBold font-15">Confira aqui</a>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="image d-flex justify-content-end">
                    <img src="{{asset('build/client/images/woman.svg')}}" alt="About" class="w-100 h-100 about-image d-none d-sm-block" loading="lazy">
                </div>
            </div>            
        </div>
        <div class="partners">
            <div class="container py-5">
                <div class="row g-3 justify-content-center">
                    @for ($p = 0; $p < 6; $p++)                        
                        <div class="col-6 col-sm-4 col-md-2">
                            <div class="partner-card border rounded-2 d-flex justify-content-center align-items-center">
                                <img src="{{asset('build/client/images/petrobras.png')}}" alt="Petrobras" loading="lazy"/>                            
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('build/client/images/firu.webp')}}" alt="Firlua about" class="firula-about position-absolute d-none d-sm-block" loading="lazy">
</section>

<section id="plans" class="background-plan py-5 plan">
    <div class="content m-auto me-0 justify-content-end d-flex flex-wrap flex-column flex-md-row">
        <aside class="col-12 col-md-4">
            <div class="w-100">
                <h2 class="montserrat-medium font-25 text-white">Planos Disponíveis</h2>
                <h3 class="text-uppercase montserrat-ExtraBold font-35 text-white">PARA VOCÊ</h3>
            </div>

            <ul class="d-flex justify-content-center align-items-start gap-4 flex-column p-0 mt-5 col-12 col-md-6">
                <li class="list-unstyled border-bottom pb-4 col-12">
                    <a href="" class="montserrat-medium font-15 text-white background-red py-2 px-3 rounded-5 d-flex w-100 justify-content-center gap-3 align-items-center">
                        <svg width="23" height="17" viewBox="0 0 23 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.349854 13.4493V0.972636C0.349854 0.553457 0.699853 0.208252 1.12485 0.208252H21.9249C22.3499 0.208252 22.6999 0.553457 22.6999 0.972636V13.4493C22.6999 13.8685 22.3499 14.2137 21.9249 14.2137H1.12485C0.674854 14.1891 0.349854 13.8685 0.349854 13.4493ZM21.3999 1.09592H1.62485C1.42485 1.09592 1.27485 1.24387 1.27485 1.44113V12.9809C1.27485 13.1781 1.42485 13.3261 1.62485 13.3261H21.3999C21.5999 13.3261 21.7499 13.1781 21.7499 12.9809V1.44113C21.7499 1.24387 21.5749 1.09592 21.3999 1.09592Z" fill="white"/>
                        <path d="M17.3999 15.1754C17.6499 15.1754 17.8499 15.3727 17.8499 15.6193C17.8499 15.8658 17.6499 16.0384 17.3999 16.0384H5.6749C5.3749 16.0384 5.1499 15.9151 5.1499 15.6193C5.1499 15.274 5.3749 15.1754 5.6999 15.1754H17.3999Z" fill="white"/>
                        <path d="M9.59976 4.42468C9.67476 4.474 9.77476 4.52331 9.87476 4.57263C11.3748 5.43564 12.8998 6.274 14.3998 7.13701C14.8748 7.40824 14.8748 7.6055 14.3748 7.87674C12.8748 8.73975 11.3998 9.57811 9.89976 10.4165C9.42476 10.6877 9.24976 10.5891 9.24976 10.0466C9.24976 8.32057 9.24976 6.6192 9.24976 4.89318C9.24976 4.67126 9.24976 4.44934 9.59976 4.42468Z" fill="white"/>
                        </svg>

                        Planos + TV BOX
                    </a>
                </li>
                <li class="list-unstyled border-bottom pb-4 col-12">
                    <a href="" class="montserrat-medium font-15 text-white background-red py-2 px-3 rounded-5 d-flex w-100 justify-content-center gap-3 align-items-center">
                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                        <path d="M20.8559 2.36636H19.6157C19.1437 1.41389 18.3279 0.6732 17.3303 0.288514C16.3338 -0.0961714 15.2268 -0.0961714 14.2293 0.288514C13.2317 0.6732 12.4159 1.41389 11.944 2.36636H0.293285C0.215833 2.36636 0.141479 2.39705 0.0857135 2.45128C0.0309814 2.5055 0 2.58018 0 2.65691V15.6909C0 15.8515 0.13115 15.9814 0.29329 15.9814H8.21507V17.7176L5.76761 17.7186C5.60548 17.7186 5.47329 17.8485 5.47329 18.0091V19.8476C5.47432 20.0082 5.60547 20.1381 5.76761 20.1381H15.3819C15.4604 20.1392 15.5347 20.1085 15.5905 20.0542C15.6462 19.999 15.6772 19.9253 15.6772 19.8476V18.0091C15.6772 17.8485 15.5461 17.7186 15.3829 17.7186H12.9344V15.9825L20.8562 15.9814C20.9336 15.9814 21.008 15.9507 21.0638 15.8965C21.1185 15.8423 21.1495 15.7676 21.1495 15.6909V2.65693C21.1495 2.5802 21.1185 2.50551 21.0638 2.45129C21.008 2.39707 20.9336 2.36637 20.8562 2.36637L20.8559 2.36636ZM11.5071 4.37363C11.5195 4.74501 11.5804 5.1133 11.6899 5.46933C9.4954 5.12864 7.26065 5.7558 5.57213 7.18604C3.88472 8.61627 2.91286 10.7063 2.91286 12.9071C2.91286 13.0677 3.04401 13.1987 3.20615 13.1987H5.28392C5.36137 13.1987 5.43675 13.168 5.49149 13.1127C5.54726 13.0585 5.57823 12.9848 5.57823 12.9071C5.57823 11.1607 6.51798 9.54738 8.04428 8.67366C9.57161 7.801 11.4522 7.801 12.9784 8.67366C14.5047 9.54735 15.4455 11.1607 15.4455 12.9071C15.4455 13.0677 15.5767 13.1976 15.7388 13.1976H17.8176C17.9797 13.1976 18.1119 13.0677 18.1119 12.9071C18.1119 11.2804 17.5801 9.69666 16.5949 8.39447C17.5935 8.20111 18.4889 7.66297 19.1229 6.87521V13.9741H2.02574V4.37376L11.5071 4.37363ZM15.7803 8.47113C15.8227 8.47113 15.865 8.47113 15.9073 8.46908V8.4701C16.0974 8.6962 16.2729 8.93559 16.433 9.18421L15.139 9.92388V9.92491C14.7187 9.28549 14.1683 8.74021 13.5229 8.3238L13.7366 7.95756L13.7377 7.95653C14.3635 8.29518 15.0667 8.47217 15.7803 8.47113ZM17.5183 12.6155H16.0261C15.9858 11.8533 15.7845 11.1085 15.4333 10.4282L16.7263 9.68851C17.2044 10.5949 17.4749 11.5945 17.5183 12.6166V12.6155ZM13.0148 8.03217C12.3281 7.68434 11.5763 7.48484 10.8069 7.44493V5.96763C11.189 5.98298 11.5701 6.02902 11.945 6.10574C12.2475 6.71242 12.6926 7.23929 13.242 7.64239L13.0148 8.03217ZM4.29994 9.68953L5.59182 10.4282C5.24072 11.1085 5.03935 11.8533 4.99906 12.6165H3.50683C3.54918 11.5945 3.81974 10.595 4.29994 9.68953ZM5.88615 9.92484L4.59426 9.18619L4.59529 9.18721C5.14882 8.32476 5.88718 7.59431 6.75671 7.04491L7.50231 8.32476C6.85791 8.74113 6.30749 9.28645 5.88615 9.92484ZM8.01039 8.03216L7.2648 6.75231C8.17768 6.27658 9.18765 6.00855 10.2183 5.96659V7.44491C9.44895 7.48481 8.69611 7.68431 8.01039 8.03216ZM15.7804 0.581254C17.2716 0.581254 18.6171 1.47131 19.1884 2.83712C19.7595 4.2029 19.4435 5.77438 18.3891 6.8199C17.3337 7.86446 15.7475 8.17751 14.3689 7.61175C12.9913 7.04598 12.0918 5.71396 12.0918 4.23553C12.0949 2.21805 13.744 0.584397 15.7804 0.581254ZM15.0875 19.557H6.06065V18.2997H15.0875V19.557ZM12.3468 17.7186H8.80373V15.9824H12.3489L12.3468 17.7186ZM20.5618 15.4003H0.587447V2.94751H11.7065C11.6187 3.22272 11.5588 3.50508 11.5278 3.79155H1.73275C1.57061 3.79155 1.43946 3.92251 1.43946 4.08313V14.2647C1.43946 14.4253 1.57061 14.5563 1.73275 14.5563H19.4166C19.5787 14.5563 19.7099 14.4253 19.7099 14.2647V5.9052C20.1157 4.96808 20.1663 3.91842 19.8544 2.94751H20.5618L20.5618 15.4003ZM13.0098 3.44487C13.7162 2.66528 14.7241 2.22128 15.7804 2.22128C16.8379 2.22128 17.8447 2.66528 18.551 3.44487C18.6594 3.56457 18.6501 3.74768 18.5293 3.85512C18.4085 3.96254 18.2226 3.95333 18.1142 3.83363C17.5193 3.17785 16.6705 2.8034 15.7803 2.8034C14.8901 2.8034 14.0413 3.17785 13.4464 3.83363C13.338 3.95333 13.1521 3.96356 13.0313 3.85614C12.9115 3.7477 12.9014 3.56456 13.0098 3.44487ZM17.8604 4.06076C17.9689 4.18046 17.9586 4.36463 17.8377 4.47203C17.7169 4.57946 17.53 4.56922 17.4216 4.44953C17.0033 3.98813 16.4064 3.72418 15.7796 3.72418C15.1528 3.72418 14.5559 3.98813 14.1376 4.44953C14.0292 4.56923 13.8433 4.57843 13.7225 4.47101C13.6017 4.36359 13.5924 4.17943 13.7008 4.06076C14.2306 3.47556 14.9865 3.14205 15.7796 3.14205C16.5727 3.14205 17.3287 3.47556 17.8595 4.06076L17.8604 4.06076ZM17.1685 4.67564C17.277 4.79534 17.2666 4.9795 17.1458 5.08691C17.026 5.19433 16.8402 5.18512 16.7317 5.06542C16.489 4.79841 16.1431 4.64596 15.7806 4.64596C15.4181 4.64596 15.0732 4.79839 14.8305 5.06542C14.7221 5.18512 14.5362 5.19433 14.4154 5.08691C14.2946 4.97948 14.2853 4.79533 14.3937 4.67564C14.7469 4.28585 15.2519 4.06283 15.7816 4.06283C16.3104 4.06283 16.8154 4.28586 17.1696 4.67564H17.1685ZM15.7816 4.98971L15.7806 4.99074C15.5235 4.99074 15.2911 5.1442 15.193 5.37951C15.0949 5.61584 15.1496 5.88695 15.3314 6.06701C15.5131 6.24707 15.7868 6.30027 16.0243 6.20308C16.2629 6.10589 16.4178 5.8757 16.4178 5.62094C16.4167 5.27208 16.1317 4.99075 15.7806 4.9897L15.7816 4.98971ZM15.7806 5.66904C15.7372 5.66904 15.7156 5.61687 15.7465 5.58617C15.7765 5.55651 15.8302 5.57799 15.8302 5.62096C15.8291 5.64756 15.8075 5.66904 15.7806 5.66904ZM10.5128 12.9503C10.8959 12.9503 11.2512 12.7518 11.4484 12.4275C11.6467 12.1021 11.6581 11.6991 11.4794 11.3635L12.9024 10.0304C12.9603 9.97724 12.9933 9.9046 12.9964 9.82685C12.9985 9.7491 12.9696 9.67339 12.9159 9.61712C12.8622 9.56085 12.7878 9.52812 12.7093 9.52607C12.6319 9.52402 12.5555 9.55369 12.4987 9.60689L11.0766 10.9399C10.7844 10.766 10.4271 10.7374 10.109 10.8622C9.79198 10.987 9.55238 11.252 9.46049 11.5773C9.36961 11.9037 9.43674 12.2535 9.64327 12.5226C9.84981 12.7917 10.172 12.9503 10.5128 12.9503ZM10.5128 11.3665C10.7173 11.3665 10.9021 11.4893 10.9796 11.6755C11.058 11.8627 11.0157 12.0786 10.8711 12.2218C10.7266 12.365 10.5087 12.408 10.3197 12.3303C10.1307 12.2525 10.0078 12.0704 10.0078 11.8678C10.0078 11.5916 10.234 11.3676 10.5128 11.3676L10.5128 11.3665Z" fill="#FFF6F6"/>
                        </svg>

                        Planos Internet
                    </a>
                </li>
                <li class="list-unstyled pb-4 col-12">
                    <a href="" class="montserrat-medium font-15 text-white background-red py-2 px-3 rounded-5 d-flex w-100 justify-content-center gap-3 align-items-center">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_367_3)">
                        <path d="M9.67734 0.698975C4.5229 0.698975 0.329834 4.91945 0.329834 10.1076C0.329834 15.2957 4.5229 19.5162 9.67734 19.5162C14.8318 19.5162 19.0248 15.2957 19.0248 10.1076C19.0248 4.91945 14.8318 0.698975 9.67734 0.698975ZM9.67734 18.8889C4.86649 18.8889 0.953001 14.9499 0.953001 10.1076C0.953001 5.26528 4.86649 1.32621 9.67734 1.32621C14.4882 1.32621 18.4017 5.26528 18.4017 10.1076C18.4017 14.9499 14.4882 18.8889 9.67734 18.8889ZM16.2205 10.1076C16.2205 10.2809 16.0811 10.4212 15.9089 10.4212H9.98873V16.3801C9.98873 16.5534 9.84929 16.6937 9.67714 16.6937C9.50499 16.6937 9.36556 16.5534 9.36556 16.3801V10.4212H3.44537C3.27322 10.4212 3.13379 10.2809 3.13379 10.1076C3.13379 9.9343 3.27322 9.79396 3.44537 9.79396H9.36556V3.83507C9.36556 3.6618 9.50499 3.52145 9.67714 3.52145C9.84929 3.52145 9.98873 3.6618 9.98873 3.83507V9.79396H15.9089C16.0811 9.79396 16.2205 9.9343 16.2205 10.1076Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_367_3">
                        <rect width="20" height="20" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>

                        Adicional*
                    </a>
                </li>
            </ul>
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
