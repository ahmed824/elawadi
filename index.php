<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركة الوادي الدولي</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Google Fonts (Tajawal) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>
</head>

<body>

    <!-- Header -->
    <header class="header fixed-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item"><a class="nav-link" href="#hero">الرئيسية</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">من نحن</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">خدماتنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="#clients">عملاؤنا</a></li>
                        <li>
                            <a class="navbar-brand" href="#">
                                <img class="logo" src="./assets/Logo.svg" alt="logo">
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#news">المدونة</a></li>
                        <li class="nav-item"><a class="nav-link" href="#locations">أماكن تواجدنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">تواصل معنا</a></li>
                        <li class="nav-item"><button id="lang-toggle" class="btn nav-link">
                                EN
                                <svg class="lang-svg me-1" width="13" height="13" viewBox="0 0 13 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.55723 10.5567C9.47338 10.5305 9.38771 10.5044 9.30142 10.4771C9.34517 10.2913 9.38588 10.0879 9.42295 9.87356C9.60098 9.75152 9.77901 9.62583 9.95401 9.4971C9.96312 9.60822 9.9692 9.71569 9.97467 9.82195C9.83856 10.0855 9.69942 10.3326 9.55723 10.5567ZM4.7856 2.21322C4.88708 2.13489 4.98855 2.06203 5.08759 1.9922C5.09184 1.94059 5.0967 1.89201 5.10157 1.84465C5.20061 1.8064 5.29843 1.76875 5.39505 1.73414C5.5111 1.88716 5.64478 2.07781 5.79 2.29883C5.74382 2.3468 5.69764 2.39598 5.65085 2.44638C5.49409 2.49981 5.33489 2.55568 5.1763 2.61214C5.19453 2.44031 5.21458 2.28062 5.23706 2.13671C5.1757 2.23508 5.11372 2.33951 5.05053 2.44881C4.94176 2.45245 4.833 2.4567 4.72545 2.46095C4.74489 2.37412 4.76494 2.29155 4.7856 2.21322ZM12.9319 6.40467C12.777 6.59351 12.5947 6.79327 12.3906 7.00154C12.3869 7.12662 12.3827 7.25292 12.3778 7.378C12.3006 7.48608 12.221 7.59477 12.1372 7.70528C12.0576 7.37922 11.967 7.0404 11.8625 6.69491C11.7465 6.51093 11.6219 6.32331 11.4901 6.13265C11.1826 6.05614 10.8496 5.97842 10.4984 5.89827C10.3945 5.79869 10.2876 5.69972 10.1794 5.59953C10.1272 5.63111 10.0761 5.66207 10.0239 5.69304C10.1059 5.89099 10.1855 6.08893 10.2621 6.28748C10.3806 6.22312 10.4984 6.15815 10.6115 6.095C10.7658 6.22737 10.9147 6.35792 11.0574 6.48543C10.6345 6.78113 10.1679 7.09201 9.67633 7.40593C9.44239 6.89285 9.18537 6.35792 8.91498 5.82662C8.85908 5.83512 8.80318 5.84423 8.74728 5.85334C9.02557 6.48604 9.29292 7.12419 9.52503 7.72957C9.78084 7.60023 10.0306 7.47151 10.2718 7.34461C10.1892 7.63059 10.1004 7.91537 10.0069 8.19407C9.75167 8.4333 9.48796 8.66889 9.22243 8.89902C9.2352 9.22326 9.24188 9.53232 9.24066 9.81831C9.09301 9.91971 8.94597 10.0181 8.79771 10.1134C8.49512 10.519 8.19617 10.8706 7.91241 11.1414C7.67422 11.173 7.43725 11.2009 7.2021 11.2282C7.02529 10.9513 6.81566 10.5731 6.58719 10.1237C6.64127 9.91789 6.699 9.69809 6.75733 9.46553C6.61332 9.06114 6.46081 8.61971 6.30647 8.16007C5.78939 8.19164 5.27777 8.21896 4.7777 8.24143C4.48848 7.96941 4.2029 7.69192 3.92461 7.41322C3.96107 6.96632 4.00664 6.50972 4.0595 6.05553C4.33111 5.71672 4.61182 5.37791 4.89376 5.04517C5.42603 4.9468 5.96985 4.85147 6.51003 4.761C6.54405 4.90005 6.57747 5.04031 6.6115 5.18118C6.83328 5.32265 7.05567 5.46716 7.27866 5.61168C7.36373 5.49327 7.44697 5.37548 7.53022 5.26011C7.86805 5.34755 8.20285 5.4362 8.53218 5.52546C8.61603 5.47445 8.69928 5.42405 8.78191 5.37426C8.81594 5.2504 8.84753 5.12835 8.87974 5.00752C8.65674 4.96623 8.4301 4.92373 8.20164 4.88244C8.12447 4.75675 8.04669 4.63106 7.96953 4.50719C7.91423 4.48108 7.86015 4.45437 7.80608 4.42704C7.76354 4.58066 7.7204 4.73732 7.67544 4.8958C7.57093 4.76829 7.46702 4.6426 7.36251 4.51812C7.36798 4.4149 7.37345 4.31289 7.3771 4.2121C7.24038 4.10948 7.10428 4.00929 6.96939 3.91093C6.88857 3.87328 6.80837 3.83624 6.72816 3.79981C6.73606 3.89636 6.74214 3.99472 6.75003 4.0943C6.91834 4.20117 7.08909 4.30986 7.25983 4.42097C7.17354 4.51569 7.08666 4.61284 6.99855 4.71182C6.87338 4.55334 6.75003 4.3979 6.62912 4.2461C6.54101 4.15077 6.45473 4.05666 6.36784 3.96436C6.16611 4.05726 5.96256 4.15381 5.75901 4.25096C5.61318 4.46105 5.46553 4.67721 5.31849 4.89762C5.10339 4.86726 4.89072 4.83811 4.67988 4.80958C4.67684 4.54787 4.67623 4.29225 4.67806 4.04755C4.94358 4.05848 5.21215 4.07062 5.48437 4.08519C5.40294 3.95647 5.32274 3.83017 5.24375 3.70752C5.19757 3.60733 5.152 3.50897 5.10703 3.41425C5.30998 3.35231 5.51353 3.29099 5.71587 3.2327C5.83132 3.10336 5.94433 2.97889 6.05674 2.85988C6.14545 2.85441 6.23477 2.84834 6.32288 2.84288C6.30587 2.77669 6.28824 2.71172 6.27123 2.64918C6.32956 2.58968 6.38546 2.53382 6.44136 2.47735C6.4839 2.56964 6.52704 2.66618 6.57018 2.76637C6.81687 2.77123 7.06357 2.77852 7.30965 2.78641C7.37284 2.64675 7.43178 2.51439 7.4889 2.39052C7.58247 2.41481 7.67605 2.4397 7.76962 2.46399C7.73073 2.37655 7.69184 2.29337 7.65356 2.21383C7.78967 2.18589 7.92213 2.15918 8.05459 2.13368C8.00659 2.09785 7.95859 2.06385 7.91119 2.03045C7.79332 2.04928 7.67301 2.06992 7.55148 2.09117C7.50044 2.02074 7.45001 1.95395 7.40079 1.8908C7.39411 1.8908 7.38803 1.89019 7.38135 1.89019C7.38378 1.88533 7.38621 1.88108 7.38925 1.87623C7.3692 1.85012 7.34793 1.82461 7.32727 1.80093C7.37284 1.78211 7.41842 1.76329 7.46277 1.74629C7.49862 1.68557 7.52779 1.64064 7.55999 1.59145C7.51563 1.58781 7.47067 1.58356 7.42631 1.57992C7.36312 1.61817 7.29811 1.66189 7.23188 1.70743C7.17841 1.77665 7.12251 1.85497 7.06417 1.93877C7.13709 1.98674 7.21061 2.03531 7.28474 2.08631C7.22337 2.21018 7.16018 2.34741 7.09212 2.49435C6.98214 2.52592 6.87156 2.5575 6.75915 2.59028C6.69596 2.43788 6.63337 2.2964 6.57322 2.16586C6.44744 2.21504 6.31863 2.26544 6.1892 2.31887C6.12905 2.29215 6.07011 2.26726 6.01117 2.24176C6.02454 2.11242 6.03912 1.99281 6.0537 1.88655C6.16186 1.83676 6.26759 1.79122 6.37088 1.74811C6.45959 1.63456 6.54466 1.54106 6.62365 1.4688C6.82416 1.42812 7.01678 1.39472 7.20028 1.3674C7.66632 1.38865 8.15303 1.42265 8.6458 1.46394C9.32877 1.44087 10.157 1.41112 10.5221 1.39351C9.41566 0.5234 8.02178 0 6.50456 0C4.95634 0 3.53634 0.542831 2.41954 1.44512C2.49427 1.45544 2.5684 1.46637 2.64375 1.47791C2.6881 1.58902 2.73854 1.70925 2.79808 1.84404C2.81753 1.91266 2.83879 1.98613 2.86188 2.06203C2.74401 2.17436 2.62795 2.2958 2.51493 2.42513C2.49124 2.48888 2.46815 2.55325 2.44566 2.62004C2.35938 2.66861 2.27553 2.7184 2.19168 2.76819C2.13699 2.94974 2.08656 3.14162 2.03978 3.34078C1.93709 3.3262 1.83562 3.31224 1.73779 3.29888C1.66913 2.90178 1.62963 2.56053 1.59804 2.24115C1.29605 2.58786 1.02688 2.96432 0.802664 3.37053C0.836083 3.3426 0.867072 3.31527 0.901098 3.28795C0.987988 3.72695 1.0925 4.20845 1.23468 4.73246C0.9491 4.91644 0.692685 5.09921 0.471512 5.27529C0.310493 5.42405 0.171956 5.57039 0.0522552 5.71065C0.0212667 5.96931 0 6.23223 0 6.49939C0 7.05376 0.0771675 7.5893 0.207198 8.1036C0.322645 8.14549 0.448422 8.18678 0.588175 8.22746C0.800841 8.47034 1.04328 8.71686 1.31003 8.96035C1.36836 9.13461 1.43033 9.30584 1.49535 9.47403C1.84169 9.68958 2.22024 9.89846 2.61458 10.0946C2.49549 10.4638 2.40374 10.785 2.33508 11.0624C2.18135 11.0667 2.03248 11.0703 1.88544 11.0734C3.06301 12.2629 4.6975 13 6.50516 13C10.0366 13 12.9046 10.1851 13 6.67851C12.9763 6.58683 12.9575 6.49757 12.9319 6.40467Z"
                                        fill="#B0ADA4" />
                                </svg>
                            </button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section id="hero" class="hero d-flex align-items-center justify-content-center">
            <div class="container text-center w-50">
                <h1>شركة الوادي الدولي</h1>
                <h2>نربط التقنية بالعالم ونبني المستقبل </h2>
                <h3>شركة سعودية رائدة تقدم حلولاً تقنية متكاملة، تركز على تمكين التحول الرقمي والأمن السيبراني وخدمات
                    الأنظمة، للجهات الحكومية وكبرى جهات القطاع الخاص </h3>
                <div class="hero-buttons mt-4 d-flex justify-content-center gap-3">
                    <a href="#contact" class="btn hero-btn-contact">تواصل معنا</a>
                    <a href="#services" class="btn hero-btn-services">اكتشف خدماتنا</a>
                </div>
            </div>
        </section>

        <!-- About Us Section -->
        <section id="about" class="py-5">
            <img src="./assets/styles/right-style.png" alt="styles circles" class="lines-right">

            <div class="container">
                <div class="section-title text-center mb-5">
                    <h2>من نحن</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-us-container">
                            <img src="./assets/about-us.jpg" class="about-us-img" alt="من نحن" />
                            <div class="about-us-overlay"></div>
                            <div class="icon-circle">
                                <div class="icon-wrapper">
                                    <!-- 5 icon images -->
                                    <div class="icon"><img src="./assets/services/service1.png" alt=""></div>
                                    <div class="icon"><img src="./assets/services/service2.png" alt=""></div>
                                    <div class="icon"><img src="./assets/services/service3.png" alt=""></div>
                                    <div class="icon"><img src="./assets/services/service4.png" alt=""></div>
                                    <div class="icon"><img src="./assets/services/service5.png" alt=""></div>

                                    <!-- 5 dots between icons -->
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 d-flex flex-column   about-us-text mt-5 mt-lg-0">
                        <h2 class="about-us-title">
                            حلول تقنية متكاملة <br class="d-none d-md-block"> للجهات الحكومية والخاصة
                        </h2>
                        <p class="about-us-description">
                            الوادي الدولي هي شركة سعودية رائدة تقدم حلولاً تقنية متكاملة، تركز على تمكين التحول الرقمي
                            والأمن السيبراني وخدمات الأنظمة، للجهات الحكومية وكبرى جهات القطاع الخاص
                        </p>
                        <div class="about-us-mission-vision d-flex   gap-3 mt-3">
                            <div class="d-flex align-items-center gap-3">
                                <svg width="32" height="28" viewBox="0 0 32 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.24767 14.0035C7.24767 9.88916 10.1485 6.44021 14.0122 5.59277C10.9898 5.97759 7.82948 7.28789 4.76732 9.44085C2.00709 11.3816 0.302622 13.3055 0.231445 13.3864C0.0822391 13.5561 -6.10352e-05 13.7742 -6.10352e-05 14.0001C-6.10352e-05 14.2261 0.0822391 14.4442 0.231445 14.6139C0.302622 14.6948 2.00709 16.6186 4.76738 18.5594C7.80458 20.6949 10.9383 22.0013 13.9383 22.398C10.1115 21.5232 7.24767 18.0916 7.24767 14.0035Z"
                                        fill="url(#paint0_linear_42_3599)" />
                                    <path
                                        d="M9.10614 14.0033C9.10614 17.7265 12.1352 20.7555 15.8584 20.7555C19.5815 20.7555 22.6106 17.7265 22.6106 14.0033C22.6106 10.2801 19.5815 7.2511 15.8584 7.2511C12.1352 7.2511 9.10614 10.2801 9.10614 14.0033ZM17.0973 11.2124H19.5752C20.0883 11.2124 20.5044 11.6284 20.5044 12.1416V14.6194C20.5044 15.1326 20.0883 15.5486 19.5752 15.5486C19.062 15.5486 18.646 15.1326 18.646 14.6194V14.3848L16.5154 16.5154C16.1525 16.8783 15.5642 16.8783 15.2013 16.5154L13.9983 15.3126L12.8129 16.498C12.45 16.8609 11.8617 16.861 11.4988 16.498C11.1359 16.1352 11.1359 15.5469 11.4988 15.184L13.3413 13.3414C13.704 12.9785 14.2928 12.9788 14.6553 13.3414L15.8584 14.5443L17.3319 13.0708H17.0973C16.5841 13.0708 16.1681 12.6547 16.1681 12.1416C16.1681 11.6284 16.5841 11.2124 17.0973 11.2124Z"
                                        fill="url(#paint1_linear_42_3599)" />
                                    <path
                                        d="M31.4852 13.3863C31.4141 13.3053 29.7096 11.3815 26.9493 9.44077C23.8872 7.28774 20.7269 5.9775 17.7045 5.59269C21.5682 6.44006 24.469 9.88902 24.469 14.0033C24.469 18.0914 21.6051 21.523 17.7784 22.3979C20.7783 22.0012 23.9122 20.6947 26.9493 18.5592C29.7096 16.6185 31.414 14.6946 31.4852 14.6137C31.6344 14.4441 31.7167 14.2259 31.7167 14C31.7167 13.7741 31.6344 13.5559 31.4852 13.3863ZM23.1674 22.943C22.9108 22.4985 22.3426 22.3462 21.8982 22.6029C21.4537 22.8595 21.3014 23.4277 21.5581 23.8722L22.5182 25.5353C22.7756 25.9811 23.3444 26.1312 23.7875 25.8753C24.232 25.6188 24.3843 25.0505 24.1276 24.6061L23.1674 22.943ZM15.8583 3.71681C16.3715 3.71681 16.7875 3.30078 16.7875 2.78761V0.929204C16.7875 0.416035 16.3715 0 15.8583 0C15.3452 0 14.9291 0.416035 14.9291 0.929204V2.78761C14.9291 3.30078 15.3452 3.71681 15.8583 3.71681ZM21.9291 5.34348C22.3716 5.59901 22.9407 5.44984 23.1984 5.00339L24.1276 3.39401C24.3843 2.9496 24.232 2.38124 23.7875 2.12472C23.3431 1.86801 22.7748 2.02027 22.5182 2.46481L21.589 4.07419C21.3324 4.51859 21.4847 5.08689 21.9291 5.34348ZM15.8583 24.2212C15.3452 24.2212 14.9291 24.6373 14.9291 25.1504V27.0708C14.9291 27.584 15.3452 28 15.8583 28C16.3715 28 16.7875 27.584 16.7875 27.0708V25.1504C16.7875 24.6373 16.3715 24.2212 15.8583 24.2212ZM8.51824 5.00339C8.77563 5.44922 9.34443 5.59938 9.78753 5.34348C10.232 5.08689 10.3843 4.51859 10.1276 4.07419L9.19842 2.46481C8.94177 2.02027 8.37353 1.86807 7.92913 2.12472C7.48466 2.3813 7.33239 2.9496 7.58904 3.39401L8.51824 5.00339ZM9.81851 22.6029C9.3741 22.3461 8.80574 22.4986 8.54921 22.943L7.58904 24.6061C7.33239 25.0505 7.48466 25.6188 7.92913 25.8753C8.3718 26.131 8.94078 25.9815 9.19842 25.5353L10.1586 23.8722C10.4152 23.4278 10.263 22.8595 9.81851 22.6029Z"
                                        fill="url(#paint2_linear_42_3599)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_42_3599" x1="0.65856" y1="22.3837" x2="14.295"
                                            y2="12.1079" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#CBA228" />
                                            <stop offset="1" stop-color="#EFCA5E" />
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_42_3599" x1="9.74089" y1="20.744" x2="21.0824"
                                            y2="10.494" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#CBA228" />
                                            <stop offset="1" stop-color="#EFCA5E" />
                                        </linearGradient>
                                        <linearGradient id="paint2_linear_42_3599" x1="8.6043" y1="27.9762" x2="31.5488"
                                            y2="10.0152" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#CBA228" />
                                            <stop offset="1" stop-color="#EFCA5E" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div>
                                    <h5 class="mb-1">رؤيتنا</h5>
                                    <p class="mb-0 small">أن نكون الشريك التقني الأول في المملكة والمنطقة لتمكين التحول
                                        الرقمي الشامل وبناء مستقبل مستدام من الابتكار والتطور الرقمي</p>
                                </div>
                            </div>

                            <div class="d-flex align-items-center gap-3">
                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.2724 9.72396C14.4108 9.91311 12.6929 10.8099 11.4735 12.2292C10.2541 13.6485 9.62624 15.4818 9.71962 17.3506C9.813 19.2195 10.6205 20.9811 11.9753 22.2718C13.3301 23.5624 15.1288 24.2835 17 24.2862C17.9597 24.2912 18.9109 24.1053 19.7981 23.7393C20.6853 23.3733 21.4909 22.8346 22.168 22.1544C23.5319 20.7852 24.2994 18.9325 24.3032 17C24.3032 16.7824 24.3032 16.5308 24.0142 16.5308H22.1C21.811 16.5308 21.811 16.7824 21.811 17C21.8019 18.2799 21.296 19.5063 20.4 20.4204C19.4975 21.3206 18.2748 21.8262 17 21.8262C15.7253 21.8262 14.5025 21.3206 13.6 20.4204C12.7016 19.5073 12.1932 18.2809 12.1822 17C12.1849 15.7227 12.6932 14.4985 13.5961 13.595C14.4989 12.6916 15.7228 12.1824 17 12.1788C17.2176 12.1788 17.4692 12.1788 17.4692 11.8898V2.24056C17.4792 2.17291 17.4745 2.1039 17.4554 2.03824C17.4363 1.97257 17.4033 1.91179 17.3586 1.86002C17.3139 1.80826 17.2586 1.76673 17.1964 1.73827C17.1343 1.7098 17.0667 1.69507 16.9983 1.69507C16.9299 1.69507 16.8623 1.7098 16.8002 1.73827C16.738 1.76673 16.6827 1.80826 16.638 1.86002C16.5933 1.91179 16.5603 1.97257 16.5412 2.03824C16.5221 2.1039 16.5174 2.17291 16.5274 2.24056V9.43496C16.5295 9.50595 16.5048 9.57514 16.4582 9.62871C16.4115 9.68228 16.3464 9.71629 16.2758 9.72396H16.2724ZM29.9472 8.06136L25.7516 12.24C25.7087 12.287 25.6561 12.3242 25.5973 12.3488C25.5386 12.3735 25.4752 12.3851 25.4116 12.3828H22.6746C22.5236 12.3889 22.381 12.4535 22.2768 12.563L17.2856 17.527C17.243 17.5698 17.1923 17.6039 17.1365 17.6272C17.0807 17.6504 17.0209 17.6625 16.9604 17.6627C16.9 17.6628 16.8401 17.6511 16.7841 17.6281C16.7282 17.6051 16.6774 17.5713 16.6345 17.5287C16.5916 17.486 16.5576 17.4354 16.5343 17.3796C16.511 17.3238 16.499 17.2639 16.4988 17.2035C16.4987 17.143 16.5104 17.0831 16.5334 17.0272C16.5564 16.9713 16.5902 16.9204 16.6328 16.8776L21.59 11.9272C21.6529 11.8749 21.7014 11.8076 21.7312 11.7315C21.7609 11.6554 21.7708 11.573 21.76 11.492V8.77196C21.7617 8.71112 21.7756 8.65123 21.8007 8.59577C21.8258 8.54032 21.8616 8.49042 21.9062 8.44896L26.1494 4.22956C26.2158 4.16527 26.2997 4.12202 26.3905 4.10523C26.4814 4.08843 26.5752 4.09885 26.6602 4.13516C26.7452 4.17148 26.8175 4.23207 26.8682 4.30935C26.9189 4.38663 26.9456 4.47715 26.945 4.56956V6.99036C26.9446 7.02844 26.9517 7.06622 26.9661 7.10149C26.9804 7.13676 27.0017 7.1688 27.0286 7.19573C27.0556 7.22266 27.0876 7.24393 27.1229 7.25829C27.1581 7.27265 27.1959 7.27982 27.234 7.27936H29.614C29.7079 7.27533 29.8007 7.29999 29.8803 7.35006C29.9598 7.40013 30.0221 7.47323 30.059 7.55963C30.096 7.64602 30.1057 7.74162 30.0869 7.83368C30.0682 7.92574 30.0218 8.0099 29.954 8.07496L29.9472 8.06136ZM25.5272 16.5172H31.8648C31.9892 16.5172 32.1086 16.5666 32.1966 16.6546C32.2846 16.7426 32.334 16.8619 32.334 16.9864C32.334 17.1108 32.2846 17.2301 32.1966 17.3181C32.1086 17.4061 31.9892 17.4556 31.8648 17.4556H29.4066C29.3677 17.4519 29.3285 17.4568 29.2918 17.4701C29.2551 17.4833 29.2217 17.5044 29.1941 17.5321C29.1665 17.5597 29.1453 17.593 29.1321 17.6298C29.1189 17.6665 29.1139 17.7057 29.1176 17.7446C28.9411 20.2271 28.0377 22.6027 26.52 24.5752C24.8334 26.7216 22.4725 28.2368 19.8186 28.8762C19.601 28.9136 19.346 28.8762 19.346 28.5872V25.0818C19.3543 25.023 19.3792 24.9678 19.4178 24.9226C19.4563 24.8775 19.5069 24.8442 19.5636 24.8268C20.7886 24.3996 21.9018 23.7024 22.8208 22.7868C24.3624 21.2543 25.2341 19.1736 25.245 17C25.245 16.7824 25.245 16.5308 25.534 16.5308L25.5272 16.5172ZM17.4658 25.5V31.824C17.4558 31.9419 17.4018 32.0519 17.3146 32.132C17.2274 32.2121 17.1133 32.2565 16.9949 32.2565C16.8765 32.2565 16.7624 32.2121 16.6752 32.132C16.588 32.0519 16.534 31.9419 16.524 31.824V29.444C16.5269 29.3728 16.5025 29.3031 16.4557 29.2494C16.4089 29.1956 16.3433 29.1618 16.2724 29.155C13.679 28.9813 11.21 27.9788 9.22968 26.2954C7.24931 24.6119 5.86237 22.3366 5.27341 19.805C5.20201 19.5874 5.27341 19.3732 5.52501 19.3732H8.89101C8.95686 19.3683 9.02226 19.3872 9.07531 19.4266C9.12836 19.4659 9.16551 19.5229 9.18001 19.5874C9.72722 21.2286 10.7769 22.6562 12.1803 23.6679C13.5838 24.6796 15.2699 25.2242 17 25.2246C17.2176 25.2246 17.4692 25.2246 17.4692 25.5136L17.4658 25.5ZM8.45581 17.442H2.16241C2.03797 17.442 1.91862 17.3925 1.83063 17.3045C1.74264 17.2165 1.69321 17.0972 1.69321 16.9728C1.69321 16.8483 1.74264 16.729 1.83063 16.641C1.91862 16.553 2.03797 16.5036 2.16241 16.5036H4.62061C4.69883 16.5109 4.77698 16.4888 4.83984 16.4417C4.90269 16.3946 4.94574 16.3257 4.96061 16.2486C5.0898 13.6573 6.03905 11.1741 7.67134 9.1574C9.30364 7.14071 11.5345 5.69487 14.042 5.02856C14.0851 5.02074 14.1294 5.02226 14.1718 5.03302C14.2143 5.04378 14.2539 5.06352 14.2881 5.09092C14.3222 5.11831 14.3501 5.15272 14.3699 5.19182C14.3896 5.23092 14.4007 5.2738 14.4024 5.31756V8.96236C14.4079 9.02358 14.3933 9.08494 14.3608 9.13711C14.3283 9.18927 14.2796 9.22939 14.2222 9.25136C13.0821 9.66295 12.045 10.3172 11.1826 11.169C10.4115 11.9319 9.79914 12.84 9.38074 13.8407C8.96233 14.8415 8.7462 15.9152 8.74481 17C8.74481 17.2176 8.74481 17.4692 8.45581 17.4692V17.442ZM20.5768 16.5036H20.1076C20.0703 16.5024 20.0334 16.5121 20.0014 16.5314C19.9695 16.5507 19.9438 16.5788 19.9274 16.6124L18.1526 18.3838C16.5988 19.9138 14.28 17.5644 15.8032 16.048L17.357 14.4568C17.3898 14.4395 17.4173 14.4135 17.4364 14.3818C17.4556 14.35 17.4658 14.3136 17.4658 14.2766V13.4096C17.461 13.3345 17.429 13.2637 17.3758 13.2105C17.3226 13.1574 17.2519 13.1254 17.1768 13.1206C16.3943 13.0921 15.6214 13.3007 14.9594 13.7191C14.2975 14.1375 13.7773 14.7461 13.4672 15.4651C13.1571 16.1841 13.0714 16.9801 13.2214 17.7487C13.3714 18.5172 13.7501 19.2226 14.3079 19.7722C14.8657 20.3219 15.5765 20.6902 16.3471 20.8289C17.1178 20.9677 17.9124 20.8703 18.6269 20.5497C19.3413 20.2291 19.9422 19.7001 20.3508 19.0321C20.7594 18.3641 20.9567 17.5882 20.9168 16.8062C20.9045 16.7251 20.8633 16.6512 20.8009 16.5981C20.7384 16.545 20.6588 16.5162 20.5768 16.5172V16.5036Z"
                                        fill="url(#paint0_linear_42_3579)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_42_3579" x1="3.13343" y1="32.2305"
                                            x2="28.8067" y2="8.96777" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#CBA228" />
                                            <stop offset="1" stop-color="#EFCA5E" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <div>
                                    <h5 class="mb-1">رسالتنا</h5>
                                    <p class="mb-0 small">نقدم حلولاً تقنية واستثمارية متكاملة بتركيز على التحول الرقمي
                                        والأمن السيبراني، لتمكين عملائنا من التميز والنمو المستدام، عبر خبراتنا
                                        وشراكاتنا</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="about-us-counters d-flex justify-content-around text-center mt-5">
                        <div class="count-card">
                            <h4 class="mb-0">+300</h4>
                            <span class="small">مشروع منجز</span>
                        </div>
                        <div class="mid-count count-card">
                            <h4 class="mb-0">+150</h4>
                            <span class="small">عميل راضي</span>
                        </div>
                        <div class="count-card">
                            <h4 class="mb-0">2025</h4>
                            <span class="small">سنة التأسيس</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section -->
        <section id="services" class=" bg-black">
            <img src="./assets/styles/top-style.png" alt="styles circles" class="gold-lines-top">
            <div class="container">
                <div class="section-title text-center mb-5">
                    <h2>خدماتنا</h2>
                    <h3>خدماتنا المتميزة</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service1.png" alt="service1" class="service-img">
                                </div>
                                <h5 class="card-title">التحول الرقمي
                                    وهيكلة الإجراءات </h5>
                                <p class="card-text">تطوير الأدلة التقنية ، إعادة هندسة العمليات وتحسينها.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service2.png" alt="service2" class="service-img">
                                </div>
                                <h5 class="card-title">الأمن السيبراني والحماية المتقدمة</h5>
                                <p class="card-text">الامتثال لمعايير الهيئة الوطنية للأمن السيبراني ، تقييم الثغرات .
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service3.png" alt="service3" class="service-img">
                                </div>
                                <h5 class="card-title">الخدمات المدارة والدعم التقنى</h5>
                                <p class="card-text">دعم تقني وتشغيلي مستمر، إدارة البنية التحتية.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service4.png" alt="service4" class="service-img">
                                </div>
                                <h5 class="card-title">تطوير وتخصيص أنظمة ERP</h5>
                                <p class="card-text">دعم تقني وتشغيلي مستمر، إدارة البنية التحتية.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service5.png" alt="service5" class="service-img">
                                </div>
                                <h5 class="card-title">تحسين أداء الأنظمة السحابية</h5>
                                <p class="card-text">ترحيل وإدارة البيانات ، تحسين الأداء السحابي.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service6.png" alt="service6" class="service-img">
                                </div>
                                <h5 class="card-title">تصميم المواقع
                                    والتطبيقات والهويات</h5>
                                <p class="card-text">مواقع متقدمة، تصميم UI/UX ، هوية بصرية متكاملة.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service7.png" alt="service7" class="service-img">
                                </div>
                                <h5 class="card-title">تراخيص الكثير من البرمجيات</h5>
                                <p class="card-text">Windows / Office / Oracle / Adobe وغيرها</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service8.png" alt="service8" class="service-img">
                                </div>
                                <h5 class="card-title">إنشاء وتشغيل
                                    المنصات الرقمية</h5>
                                <p class="card-text">إنشاء وتشغيل المنصات، تطوير الأنظمة الإلكترونية وحلول الأعمال </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service9.png" alt="service9" class="service-img">
                                </div>
                                <h5 class="card-title">استشارات تقنية
                                    ودعم فني
                                </h5>
                                <p class="card-text">ترحيل وإدارة البيانات ، تحسين الأداء السحابي </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service10.png" alt="service10" class="service-img">
                                </div>
                                <h5 class="card-title">الكاميرات
                                    والأنظمة الأمنية
                                </h5>
                                <p class="card-text">مواقع متقدمة، تصميم UI/UX ، هوية بصرية متكاملة.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service11.png" alt="service11" class="service-img">
                                </div>
                                <h5 class="card-title">اعداد وتجهيز
                                    القاعات الذكية
                                </h5>
                                <p class="card-text">Windows / Office / Oracle / Adobe وغيرها.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 mb-4">
                        <div class="card service-card">
                            <div class="card-body">
                                <div class="service-img-bg mb-3">
                                    <img src="./assets/services/service12.png" alt="service12" class="service-img">
                                </div>
                                <h5 class="card-title">ذكاء الأعمال
                                    ومستودعات البيانات
                                </h5>
                                <p class="card-text">إنشاء وتشغيل المنصات، تطوير الأنظمة الإلكترونية وحلول الأعمال.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="./assets/styles/bottom-style.png" alt="styles circles" class="gold-lines-bottom">

        </section>

        <!-- Clients Section -->
        <section id="clients" class="py-5">
            <div class="section-title text-end mb-4">
                <h2>شركاؤنا في النجاح</h2>
                <h3>عملاؤنا وشركاؤنا الكرام</h3>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0 py-5">
                        <div class="swiper-title text-end mb-4">
                            <h2>عملاؤنا الكرام</h2>
                        </div>
                        <div class="swiper clients-swiper clients-swiper-local">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="./assets/clients/client1.png" alt="عميل 1"></div>
                                <div class="swiper-slide"><img src="./assets/clients/client2.png" alt="عميل 2"></div>
                                <div class="swiper-slide"><img src="./assets/clients/client3.png" alt="عميل 3"></div>
                                <div class="swiper-slide"><img src="./assets/clients/client4.png" alt="عميل 4"></div>
                                <div class="swiper-slide"><img src="./assets/clients/client5.png" alt="عميل 5"></div>
                                <div class="swiper-slide"><img src="./assets/clients/client3.png" alt="عميل 3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 py-5">
                        <div class="swiper-title text-end mb-4 ">
                            <h2>شركاؤنا الدوليين</h2>
                        </div>
                        <div class="swiper clients-swiper clients-swiper-international">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img src="./assets/clients/client1.png" alt="شريك 1"></div>
                                <div class="swiper-slide"><img src="./assets/clients/client2.png" alt="شريك 2"></div>
                                <div class="swiper-slide"><img src="./assets/clients/client3.png" alt="شريك 3"></div>
                                <div class="swiper-slide"><img src="./assets/clients/client4.png" alt="شريك 4"></div>
                                <div class="swiper-slide"><img src="./assets/clients/client5.png" alt="شريك 5"></div>
                                <div class="swiper-slide"><img src="./assets/clients/client3.png" alt="شريك 3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Last News Section -->
        <section id="news" class="py-5 ">
            <div class="container">
                <div class="section-title text-center mb-5">
                    <h2>آخر الأخبار</h2>
                    <h3>مدونتنا التقنية </h3>
                </div>
                <div class="container position-relative">
                    <div class="swiper news-swiper overflow-visible px-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="news-card">
                                    <img src="./assets/touch-img.jpg" class="card-img-top" alt="News 2">
                                    <div class="news-card-body">
                                        <div class="d-flex date-container align-items-center mb-2">
                                            <!-- Calendar SVG Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="#CBA228" class="me-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 3v1h14V3a1 1 0 0 0-1-1h-1v.5a.5.5 0 0 1-1 0V2h-8v.5a.5.5 0 0 1-1 0V2H2a1 1 0 0 0-1 1zm14 2H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            </svg>
                                            <span class="small text-muted">2024-06-01</span>
                                        </div>
                                        <h5 class="card-title">الدور المحوري للأمن السيبراني
                                            في تمكين التحول الرقمي</h5>
                                        <p class="card-text">كيف يمكن للشركات السعودية الاستفادة من تقنيات الذكاء
                                            الاصطناعى
                                            لتحسين عملياتها وزيادة كفاءتها.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="news-card">
                                    <img src="./assets/touch-img.jpg" class="card-img-top" alt="News 2">
                                    <div class="news-card-body">
                                        <div class="d-flex date-container align-items-center mb-2">
                                            <!-- Calendar SVG Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="#CBA228" class="me-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 3v1h14V3a1 1 0 0 0-1-1h-1v.5a.5.5 0 0 1-1 0V2h-8v.5a.5.5 0 0 1-1 0V2H2a1 1 0 0 0-1 1zm14 2H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            </svg>
                                            <span class="small text-muted">2024-06-01</span>
                                        </div>
                                        <h5 class="card-title">الدور المحوري للأمن السيبراني
                                            في تمكين التحول الرقمي</h5>
                                        <p class="card-text">كيف يمكن للشركات السعودية الاستفادة من تقنيات الذكاء
                                            الاصطناعى
                                            لتحسين عملياتها وزيادة كفاءتها.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="news-card">
                                    <img src="./assets/sim.jpg" class="card-img-top" alt="News 3">
                                    <div class="news-card-body">
                                        <div class="d-flex date-container align-items-center mb-2">
                                            <!-- Calendar SVG Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="#CBA228" class="me-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 3v1h14V3a1 1 0 0 0-1-1h-1v.5a.5.5 0 0 1-1 0V2h-8v.5a.5.5 0 0 1-1 0V2H2a1 1 0 0 0-1 1zm14 2H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            </svg>
                                            <span class="small text-muted">2024-06-01</span>
                                        </div>
                                        <h5 class="card-title">الدور المحوري للأمن السيبراني
                                            في تمكين التحول الرقمي</h5>
                                        <p class="card-text">كيف يمكن للشركات السعودية الاستفادة من تقنيات الذكاء
                                            الاصطناعى لتحسين عملياتها وزيادة كفاءتها.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="news-card">
                                    <img src="./assets/touch-img.jpg" class="card-img-top" alt="News 2">
                                    <div class="news-card-body">
                                        <div class="d-flex date-container align-items-center mb-2">
                                            <!-- Calendar SVG Icon -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                fill="#CBA228" class="me-2" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 3v1h14V3a1 1 0 0 0-1-1h-1v.5a.5.5 0 0 1-1 0V2h-8v.5a.5.5 0 0 1-1 0V2H2a1 1 0 0 0-1 1zm14 2H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z" />
                                            </svg>
                                            <span class="small text-muted">2024-06-01</span>
                                        </div>
                                        <h5 class="card-title">الدور المحوري للأمن السيبراني
                                            في تمكين التحول الرقمي</h5>
                                        <p class="card-text">كيف يمكن للشركات السعودية الاستفادة من تقنيات الذكاء
                                            الاصطناعى
                                            لتحسين عملياتها وزيادة كفاءتها.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
        </section>

        <!-- Locations Section -->
        <section id="locations" class="py-5">
            <div class="locations-pin-wrapper">
                <div class="container">
                    <div class="section-title text-center mb-5">
                        <h2>تواجدنا العالمي</h2>
                        <h3>أماكن تواجدنا</h3>
                    </div>
                    <div class="stars" id="stars"></div>
                    <div class="map-container">
                        <img src="./assets/styles/map.png" alt="World Map" class="map-background" />
                        <svg class="world-map" viewBox="0 0 1000 500" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="goldGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" style="stop-color:#ffd700;stop-opacity:1" />
                                    <stop offset="50%" style="stop-color:#ffed4a;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#ff4500;stop-opacity:1" />
                                </linearGradient>
                                <radialGradient id="markerGradient" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" style="stop-color:#ffd700;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#ff4500;stop-opacity:1" />
                                </radialGradient>
                                <radialGradient id="travelerGradient" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" style="stop-color:#ff4500;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#ff1744;stop-opacity:1" />
                                </radialGradient>
                            </defs>

                            <!-- Journey path connecting the three locations -->
                            <!-- Coordinates adjusted for realistic world map positions -->
                            <path id="journeyPath" class="journey-path"
                                d="M180 210 Q380 100 580 279 Q600 300 620 288" />

                            <!-- Location markers positioned on actual world map coordinates -->
                            <!-- USA (approximate center) -->
                            <circle class="location-marker" cx="180" cy="210" data-location="usa" />
                            <!-- Saudi Arabia (Middle East, between USA and UAE) -->
                            <circle class="location-marker" cx="580" cy="279" data-location="saudi" />
                            <!-- UAE (Middle East, rightmost) -->
                            <circle class="location-marker" cx="620" cy="288" data-location="uae" />

                            <!-- Traveler dot -->
                            <circle id="traveler" class="traveler" cx="580" cy="279" />

                            <!-- Location labels -->
                            <text class="location-label" x="180" y="210" id="label-usa">الولايات المتحدة</text>
                            <text class="location-label" x="580" y="279" id="label-saudi">المملكة العربية
                                السعودية</text>
                            <text class="location-label mb-4" x="620" y="288" id="label-uae">الإمارات العربية</text>
                        </svg>
                    </div>

                    <div class="info-panel" id="infoPanel">
                        <h3 id="locationTitle">اختر موقعاً</h3>
                        <p id="locationDescription">مرر للأسفل لبدء الرحلة حول العالم</p>
                    </div>

                   
                </div>
            </div>
            <div class="scroll-container" id="scrollContainer"></div>
        </section>

        <!-- Contact Us Section -->
        <section id="contact" class="py-5">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-6 yellow-shadow">
                        <form>
                            <h4 class="mb-4">من فضلك املأ البيانات التالية</h4>
                            <div class="form-group mb-4">
                                <label for="name" class="mb-2">الاسم</label>
                                <div class="input-group">
                                    <i class="fa-solid fa-user form-icon"></i>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="الاسم"
                                        required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="email" class="mb-2">البريد الإلكتروني</label>
                                <div class="input-group">
                                    <i class="fa-solid fa-envelope form-icon"></i>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="البريد الإلكتروني" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="phone" class="mb-2">رقم الجوال</label>
                                <div class="input-group">
                                    <i class="fa-solid fa-phone form-icon"></i>
                                    <input type="tel" class="form-control" name="phone" id="phone"
                                        placeholder="رقم الجوال" required>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="message" class="mb-2">الرسالة</label>
                                <div class="input-group">
                                    <i class="fa-solid fa-comment form-icon"></i>
                                    <textarea class="form-control" name="message" id="message" rows="5"
                                        placeholder="الرسالة" required></textarea>
                                </div>
                            </div>
                            <div class="text-center"><button type="submit" class="btn btn-primary">إرسال</button></div>
                        </form>
                    </div>
                    <div class="col-lg-6 section-title text-center mb-5 mt-4 mt-lg-0 ">
                        <h2>تواصل معنا</h2>
                        <h3>اترك لنا رسالتك
                            فنحن هنا لاستقبال طلبك.</h3>
                        <div class="social-media-container">
                            <img src="./assets/styles/v.png" alt="decoratin V shape" class="v-img">
                            <a href="https://www.linkedin.com/" target="_blank" class="social-icon icon-linkedin" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://x.com/" target="_blank" class="social-icon icon-x" aria-label="X (Twitter)">
                                <i class="fab fa-x-twitter"></i>
                            </a>
                            <a href="https://facebook.com/" target="_blank" class="social-icon icon-facebook" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://wa.me/966XXXXXXXXX" target="_blank" class="social-icon icon-whatsapp" aria-label="WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" class="social-icon icon-linkedin-sec" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/966XXXXXXXXX" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
        <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M13.5 0.685547C6.42305 0.685547 0.685547 6.42305 0.685547 13.5C0.685547 16.0893 1.45547 18.5045 2.7791 20.5189L1.12852 26.1088L6.93457 24.5004C8.8541 25.65 11.1006 26.3092 13.5 26.3092C20.577 26.3092 26.3145 20.5717 26.3145 13.4947C26.3145 6.42305 20.577 0.685547 13.5 0.685547Z"
                fill="white" />
            <path
                d="M20.54 17.0174C20.5242 16.8486 20.424 16.701 20.2711 16.6324C19.2375 16.1578 18.1986 15.6832 17.165 15.2086C17.049 15.1558 16.9066 15.1822 16.8223 15.2824L15.4195 16.8644C15.3088 16.991 15.1348 17.0332 14.9818 16.9699C14.2541 16.6693 13.2732 16.1631 12.2818 15.3088C11.0953 14.291 10.3992 13.1994 10.009 12.4875C10.2041 12.3557 10.7367 11.9601 10.974 11.2271C10.974 11.2219 10.9793 11.2166 10.9793 11.2166C11.127 10.7631 11.0953 10.2726 10.9318 9.8244C10.6523 9.08085 10.0934 7.6412 9.87715 7.41971C9.84024 7.3828 9.79805 7.34589 9.79805 7.34589C9.63985 7.2035 9.43418 7.1244 9.21797 7.11385C9.14414 7.10858 9.06504 7.10858 8.98067 7.10858C8.73809 7.10331 8.52188 7.10331 8.36367 7.1244C7.91543 7.18768 7.58848 7.48827 7.38281 7.74139C7.13496 8.04198 6.83965 8.49022 6.64453 9.08085C6.62871 9.13358 6.61289 9.18104 6.59707 9.23378C6.38086 9.98261 6.42305 10.7842 6.68145 11.5224C6.92403 12.2133 7.27735 13.0359 7.80996 13.906C8.71172 15.3879 9.69258 16.3055 10.357 16.9119C11.1059 17.6027 12.034 18.4517 13.5053 19.1584C14.8658 19.8123 16.0998 20.0549 16.9277 20.1551C17.2652 20.1867 17.8875 20.192 18.5994 19.923C18.9264 19.7965 19.2006 19.6435 19.4221 19.4801C20.0074 19.0635 20.4188 18.4359 20.5242 17.7293C20.5242 17.724 20.5242 17.7187 20.5242 17.7135C20.5611 17.4445 20.5559 17.2125 20.54 17.0174Z"
                fill="url(#paint0_linear_82_5)" />
            <defs>
                <linearGradient id="paint0_linear_82_5" x1="7.12059" y1="20.1589" x2="18.1452" y2="9.41008"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#CBA228" />
                    <stop offset="1" stop-color="#EFCA5E" />
                </linearGradient>
            </defs>
        </svg>
    </a>

    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="d-flex content flex-row-reverse justify-content-center align-items-stretch gap-2 py-4">
                <div class="contact-info-item text-center flex-fill" style="min-width:200px;">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-phone text-primary"></i>
                    </div>
                    <div class="contact-label">الهاتف</div>
                    <a href="tel:00966548010732" class="contact-link">00966548010732</a>
                </div>
                <div class="contact-info-item text-center flex-fill" style="min-width:200px;">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-inbox text-primary"></i>
                    </div>
                    <div class="contact-label">البريد الخاص</div>
                    <a href="mailto:h@iv.sa" class="contact-link">h@iv.sa</a>
                </div>
                <div class="contact-info-item text-center flex-fill" style="min-width:200px;">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-envelope text-primary"></i>
                    </div>
                    <div class="contact-label">البريد الإلكتروني</div>
                    <a href="mailto:info@iv.sa" class="contact-link">info@iv.sa</a>
                </div>
                <div class="contact-info-item text-center flex-fill" style="min-width:200px;">
                    <div class="contact-info-icon">
                        <i class="fa-solid fa-user text-primary"></i>
                    </div>
                    <div class="contact-label">المسؤول</div>
                    <div class="contact-link">حامد خالد حامد أزهر </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center ">
        <div class="container">
            <img src="./assets/footer-logo.svg" class="footer-logo" alt="Footerlogo">
            <p> شركة سعودية رائدة تقدم حلولاً تقنية متكاملة، تركز على تمكين التحول الرقمي والأمن السيبراني وخدمات
                الأنظمة، للجهات الحكومية وكبرى جهات القطاع الخاص</p>
        </div>
        <img src="./assets/styles/bottom-style.png" alt="styles circles" class="gold-lines-bottom">
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const langToggle = document.getElementById('lang-toggle');
            const html = document.documentElement;
            const cssLink = document.querySelector('link[rel="stylesheet"][href*="css/style.css"]');
            let isArabic = html.getAttribute('lang') === 'ar';
            langToggle.addEventListener('click', function () {
                isArabic = !isArabic;
                if (isArabic) {
                    langToggle.innerHTML = `AR <svg class="lang-svg me-1" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.55723 10.5567C9.47338 10.5305 9.38771 10.5044 9.30142 10.4771C9.34517 10.2913 9.38588 10.0879 9.42295 9.87356C9.60098 9.75152 9.77901 9.62583 9.95401 9.4971C9.96312 9.60822 9.9692 9.71569 9.97467 9.82195C9.83856 10.0855 9.69942 10.3326 9.55723 10.5567ZM4.7856 2.21322C4.88708 2.13489 4.98855 2.06203 5.08759 1.9922C5.09184 1.94059 5.0967 1.89201 5.10157 1.84465C5.20061 1.8064 5.29843 1.76875 5.39505 1.73414C5.5111 1.88716 5.64478 2.07781 5.79 2.29883C5.74382 2.3468 5.69764 2.39598 5.65085 2.44638C5.49409 2.49981 5.33489 2.55568 5.1763 2.61214C5.19453 2.44031 5.21458 2.28062 5.23706 2.13671C5.1757 2.23508 5.11372 2.33951 5.05053 2.44881C4.94176 2.45245 4.833 2.4567 4.72545 2.46095C4.74489 2.37412 4.76494 2.29155 4.7856 2.21322ZM12.9319 6.40467C12.777 6.59351 12.5947 6.79327 12.3906 7.00154C12.3869 7.12662 12.3827 7.25292 12.3778 7.378C12.3006 7.48608 12.221 7.59477 12.1372 7.70528C12.0576 7.37922 11.967 7.0404 11.8625 6.69491C11.7465 6.51093 11.6219 6.32331 11.4901 6.13265C11.1826 6.05614 10.8496 5.97842 10.4984 5.89827C10.3945 5.79869 10.2876 5.69972 10.1794 5.59953C10.1272 5.63111 10.0761 5.66207 10.0239 5.69304C10.1059 5.89099 10.1855 6.08893 10.2621 6.28748C10.3806 6.22312 10.4984 6.15815 10.6115 6.095C10.7658 6.22737 10.9147 6.35792 11.0574 6.48543C10.6345 6.78113 10.1679 7.09201 9.67633 7.40593C9.44239 6.89285 9.18537 6.35792 8.91498 5.82662C8.85908 5.83512 8.80318 5.84423 8.74728 5.85334C9.02557 6.48604 9.29292 7.12419 9.52503 7.72957C9.78084 7.60023 10.0306 7.47151 10.2718 7.34461C10.1892 7.63059 10.1004 7.91537 10.0069 8.19407C9.75167 8.4333 9.48796 8.66889 9.22243 8.89902C9.2352 9.22326 9.24188 9.53232 9.24066 9.81831C9.09301 9.91971 8.94597 10.0181 8.79771 10.1134C8.49512 10.519 8.19617 10.8706 7.91241 11.1414C7.67422 11.173 7.43725 11.2009 7.2021 11.2282C7.02529 10.9513 6.81566 10.5731 6.58719 10.1237C6.64127 9.91789 6.699 9.69809 6.75733 9.46553C6.61332 9.06114 6.46081 8.61971 6.30647 8.16007C5.78939 8.19164 5.27777 8.21896 4.7777 8.24143C4.48848 7.96941 4.2029 7.69192 3.92461 7.41322C3.96107 6.96632 4.00664 6.50972 4.0595 6.05553C4.33111 5.71672 4.61182 5.37791 4.89376 5.04517C5.42603 4.9468 5.96985 4.85147 6.51003 4.761C6.54405 4.90005 6.57747 5.04031 6.6115 5.18118C6.83328 5.32265 7.05567 5.46716 7.27866 5.61168C7.36373 5.49327 7.44697 5.37548 7.53022 5.26011C7.86805 5.34755 8.20285 5.4362 8.53218 5.52546C8.61603 5.47445 8.69928 5.42405 8.78191 5.37426C8.81594 5.2504 8.84753 5.12835 8.87974 5.00752C8.65674 4.96623 8.4301 4.92373 8.20164 4.88244C8.12447 4.75675 8.04669 4.63106 7.96953 4.50719C7.91423 4.48108 7.86015 4.45437 7.80608 4.42704C7.76354 4.58066 7.7204 4.73732 7.67544 4.8958C7.57093 4.76829 7.46702 4.6426 7.36251 4.51812C7.36798 4.4149 7.37345 4.31289 7.3771 4.2121C7.24038 4.10948 7.10428 4.00929 6.96939 3.91093C6.88857 3.87328 6.80837 3.83624 6.72816 3.79981C6.73606 3.89636 6.74214 3.99472 6.75003 4.0943C6.91834 4.20117 7.08909 4.30986 7.25983 4.42097C7.17354 4.51569 7.08666 4.61284 6.99855 4.71182C6.87338 4.55334 6.75003 4.3979 6.62912 4.2461C6.54101 4.15077 6.45473 4.05666 6.36784 3.96436C6.16611 4.05726 5.96256 4.15381 5.75901 4.25096C5.61318 4.46105 5.46553 4.67721 5.31849 4.89762C5.10339 4.86726 4.89072 4.83811 4.67988 4.80958C4.67684 4.54787 4.67623 4.29225 4.67806 4.04755C4.94358 4.05848 5.21215 4.07062 5.48437 4.08519C5.40294 3.95647 5.32274 3.83017 5.24375 3.70752C5.19757 3.60733 5.152 3.50897 5.10703 3.41425C5.30998 3.35231 5.51353 3.29099 5.71587 3.2327C5.83132 3.10336 5.94433 2.97889 6.05674 2.85988C6.14545 2.85441 6.23477 2.84834 6.32288 2.84288C6.30587 2.77669 6.28824 2.71172 6.27123 2.64918C6.32956 2.58968 6.38546 2.53382 6.44136 2.47735C6.4839 2.56964 6.52704 2.66618 6.57018 2.76637C6.81687 2.77123 7.06357 2.77852 7.30965 2.78641C7.37284 2.64675 7.43178 2.51439 7.4889 2.39052C7.58247 2.41481 7.67605 2.4397 7.76962 2.46399C7.73073 2.37655 7.69184 2.29337 7.65356 2.21383C7.78967 2.18589 7.92213 2.15918 8.05459 2.13368C8.00659 2.09785 7.95859 2.06385 7.91119 2.03045C7.79332 2.04928 7.67301 2.06992 7.55148 2.09117C7.50044 2.02074 7.45001 1.95395 7.40079 1.8908C7.39411 1.8908 7.38803 1.89019 7.38135 1.89019C7.38378 1.88533 7.38621 1.88108 7.38925 1.87623C7.3692 1.85012 7.34793 1.82461 7.32727 1.80093C7.37284 1.78211 7.41842 1.76329 7.46277 1.74629C7.49862 1.68557 7.52779 1.64064 7.55999 1.59145C7.51563 1.58781 7.47067 1.58356 7.42631 1.57992C7.36312 1.61817 7.29811 1.66189 7.23188 1.70743C7.17841 1.77665 7.12251 1.85497 7.06417 1.93877C7.13709 1.98674 7.21061 2.03531 7.28474 2.08631C7.22337 2.21018 7.16018 2.34741 7.09212 2.49435C6.98214 2.52592 6.87156 2.5575 6.75915 2.59028C6.69596 2.43788 6.63337 2.2964 6.57322 2.16586C6.44744 2.21504 6.31863 2.26544 6.1892 2.31887C6.12905 2.29215 6.07011 2.26726 6.01117 2.24176C6.02454 2.11242 6.03912 1.99281 6.0537 1.88655C6.16186 1.83676 6.26759 1.79122 6.37088 1.74811C6.45959 1.63456 6.54466 1.54106 6.62365 1.4688C6.82416 1.42812 7.01678 1.39472 7.20028 1.3674C7.66632 1.38865 8.15303 1.42265 8.6458 1.46394C9.32877 1.44087 10.157 1.41112 10.5221 1.39351C9.41566 0.5234 8.02178 0 6.50456 0C4.95634 0 3.53634 0.542831 2.41954 1.44512C2.49427 1.45544 2.5684 1.46637 2.64375 1.47791C2.6881 1.58902 2.73854 1.70925 2.79808 1.84404C2.81753 1.91266 2.83879 1.98613 2.86188 2.06203C2.74401 2.17436 2.62795 2.2958 2.51493 2.42513C2.49124 2.48888 2.46815 2.55325 2.44566 2.62004C2.35938 2.66861 2.27553 2.7184 2.19168 2.76819C2.13699 2.94974 2.08656 3.14162 2.03978 3.34078C1.93709 3.3262 1.83562 3.31224 1.73779 3.29888C1.66913 2.90178 1.62963 2.56053 1.59804 2.24115C1.29605 2.58786 1.02688 2.96432 0.802664 3.37053C0.836083 3.3426 0.867072 3.31527 0.901098 3.28795C0.987988 3.72695 1.0925 4.20845 1.23468 4.73246C0.9491 4.91644 0.692685 5.09921 0.471512 5.27529C0.310493 5.42405 0.171956 5.57039 0.0522552 5.71065C0.0212667 5.96931 0 6.23223 0 6.49939C0 7.05376 0.0771675 7.5893 0.207198 8.1036C0.322645 8.14549 0.448422 8.18678 0.588175 8.22746C0.800841 8.47034 1.04328 8.71686 1.31003 8.96035C1.36836 9.13461 1.43033 9.30584 1.49535 9.47403C1.84169 9.68958 2.22024 9.89846 2.61458 10.0946C2.49549 10.4638 2.40374 10.785 2.33508 11.0624C2.18135 11.0667 2.03248 11.0703 1.88544 11.0734C3.06301 12.2629 4.6975 13 6.50516 13C10.0366 13 12.9046 10.1851 13 6.67851C12.9763 6.58683 12.9575 6.49757 12.9319 6.40467Z" fill="#B0ADA4"/></svg>`;
                    html.setAttribute('lang', 'ar');
                    html.setAttribute('dir', 'rtl');
                    if (cssLink) cssLink.setAttribute('href', 'css/style-ar.css');
                } else {
                    langToggle.innerHTML = `EN <svg class="lang-svg me-1" width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.55723 10.5567C9.47338 10.5305 9.38771 10.5044 9.30142 10.4771C9.34517 10.2913 9.38588 10.0879 9.42295 9.87356C9.60098 9.75152 9.77901 9.62583 9.95401 9.4971C9.96312 9.60822 9.9692 9.71569 9.97467 9.82195C9.83856 10.0855 9.69942 10.3326 9.55723 10.5567ZM4.7856 2.21322C4.88708 2.13489 4.98855 2.06203 5.08759 1.9922C5.09184 1.94059 5.0967 1.89201 5.10157 1.84465C5.20061 1.8064 5.29843 1.76875 5.39505 1.73414C5.5111 1.88716 5.64478 2.07781 5.79 2.29883C5.74382 2.3468 5.69764 2.39598 5.65085 2.44638C5.49409 2.49981 5.33489 2.55568 5.1763 2.61214C5.19453 2.44031 5.21458 2.28062 5.23706 2.13671C5.1757 2.23508 5.11372 2.33951 5.05053 2.44881C4.94176 2.45245 4.833 2.4567 4.72545 2.46095C4.74489 2.37412 4.76494 2.29155 4.7856 2.21322ZM12.9319 6.40467C12.777 6.59351 12.5947 6.79327 12.3906 7.00154C12.3869 7.12662 12.3827 7.25292 12.3778 7.378C12.3006 7.48608 12.221 7.59477 12.1372 7.70528C12.0576 7.37922 11.967 7.0404 11.8625 6.69491C11.7465 6.51093 11.6219 6.32331 11.4901 6.13265C11.1826 6.05614 10.8496 5.97842 10.4984 5.89827C10.3945 5.79869 10.2876 5.69972 10.1794 5.59953C10.1272 5.63111 10.0761 5.66207 10.0239 5.69304C10.1059 5.89099 10.1855 6.08893 10.2621 6.28748C10.3806 6.22312 10.4984 6.15815 10.6115 6.095C10.7658 6.22737 10.9147 6.35792 11.0574 6.48543C10.6345 6.78113 10.1679 7.09201 9.67633 7.40593C9.44239 6.89285 9.18537 6.35792 8.91498 5.82662C8.85908 5.83512 8.80318 5.84423 8.74728 5.85334C9.02557 6.48604 9.29292 7.12419 9.52503 7.72957C9.78084 7.60023 10.0306 7.47151 10.2718 7.34461C10.1892 7.63059 10.1004 7.91537 10.0069 8.19407C9.75167 8.4333 9.48796 8.66889 9.22243 8.89902C9.2352 9.22326 9.24188 9.53232 9.24066 9.81831C9.09301 9.91971 8.94597 10.0181 8.79771 10.1134C8.49512 10.519 8.19617 10.8706 7.91241 11.1414C7.67422 11.173 7.43725 11.2009 7.2021 11.2282C7.02529 10.9513 6.81566 10.5731 6.58719 10.1237C6.64127 9.91789 6.699 9.69809 6.75733 9.46553C6.61332 9.06114 6.46081 8.61971 6.30647 8.16007C5.78939 8.19164 5.27777 8.21896 4.7777 8.24143C4.48848 7.96941 4.2029 7.69192 3.92461 7.41322C3.96107 6.96632 4.00664 6.50972 4.0595 6.05553C4.33111 5.71672 4.61182 5.37791 4.89376 5.04517C5.42603 4.9468 5.96985 4.85147 6.51003 4.761C6.54405 4.90005 6.57747 5.04031 6.6115 5.18118C6.83328 5.32265 7.05567 5.46716 7.27866 5.61168C7.36373 5.49327 7.44697 5.37548 7.53022 5.26011C7.86805 5.34755 8.20285 5.4362 8.53218 5.52546C8.61603 5.47445 8.69928 5.42405 8.78191 5.37426C8.81594 5.2504 8.84753 5.12835 8.87974 5.00752C8.65674 4.96623 8.4301 4.92373 8.20164 4.88244C8.12447 4.75675 8.04669 4.63106 7.96953 4.50719C7.91423 4.48108 7.86015 4.45437 7.80608 4.42704C7.76354 4.58066 7.7204 4.73732 7.67544 4.8958C7.57093 4.76829 7.46702 4.6426 7.36251 4.51812C7.36798 4.4149 7.37345 4.31289 7.3771 4.2121C7.24038 4.10948 7.10428 4.00929 6.96939 3.91093C6.88857 3.87328 6.80837 3.83624 6.72816 3.79981C6.73606 3.89636 6.74214 3.99472 6.75003 4.0943C6.91834 4.20117 7.08909 4.30986 7.25983 4.42097C7.17354 4.51569 7.08666 4.61284 6.99855 4.71182C6.87338 4.55334 6.75003 4.3979 6.62912 4.2461C6.54101 4.15077 6.45473 4.05666 6.36784 3.96436C6.16611 4.05726 5.96256 4.15381 5.75901 4.25096C5.61318 4.46105 5.46553 4.67721 5.31849 4.89762C5.10339 4.86726 4.89072 4.83811 4.67988 4.80958C4.67684 4.54787 4.67623 4.29225 4.67806 4.04755C4.94358 4.05848 5.21215 4.07062 5.48437 4.08519C5.40294 3.95647 5.32274 3.83017 5.24375 3.70752C5.19757 3.60733 5.152 3.50897 5.10703 3.41425C5.30998 3.35231 5.51353 3.29099 5.71587 3.2327C5.83132 3.10336 5.94433 2.97889 6.05674 2.85988C6.14545 2.85441 6.23477 2.84834 6.32288 2.84288C6.30587 2.77669 6.28824 2.71172 6.27123 2.64918C6.32956 2.58968 6.38546 2.53382 6.44136 2.47735C6.4839 2.56964 6.52704 2.66618 6.57018 2.76637C6.81687 2.77123 7.06357 2.77852 7.30965 2.78641C7.37284 2.64675 7.43178 2.51439 7.4889 2.39052C7.58247 2.41481 7.67605 2.4397 7.76962 2.46399C7.73073 2.37655 7.69184 2.29337 7.65356 2.21383C7.78967 2.18589 7.92213 2.15918 8.05459 2.13368C8.00659 2.09785 7.95859 2.06385 7.91119 2.03045C7.79332 2.04928 7.67301 2.06992 7.55148 2.09117C7.50044 2.02074 7.45001 1.95395 7.40079 1.8908C7.39411 1.8908 7.38803 1.89019 7.38135 1.89019C7.38378 1.88533 7.38621 1.88108 7.38925 1.87623C7.3692 1.85012 7.34793 1.82461 7.32727 1.80093C7.37284 1.78211 7.41842 1.76329 7.46277 1.74629C7.49862 1.68557 7.52779 1.64064 7.55999 1.59145C7.51563 1.58781 7.47067 1.58356 7.42631 1.57992C7.36312 1.61817 7.29811 1.66189 7.23188 1.70743C7.17841 1.77665 7.12251 1.85497 7.06417 1.93877C7.13709 1.98674 7.21061 2.03531 7.28474 2.08631C7.22337 2.21018 7.16018 2.34741 7.09212 2.49435C6.98214 2.52592 6.87156 2.5575 6.75915 2.59028C6.69596 2.43788 6.63337 2.2964 6.57322 2.16586C6.44744 2.21504 6.31863 2.26544 6.1892 2.31887C6.12905 2.29215 6.07011 2.26726 6.01117 2.24176C6.02454 2.11242 6.03912 1.99281 6.0537 1.88655C6.16186 1.83676 6.26759 1.79122 6.37088 1.74811C6.45959 1.63456 6.54466 1.54106 6.62365 1.4688C6.82416 1.42812 7.01678 1.39472 7.20028 1.3674C7.66632 1.38865 8.15303 1.42265 8.6458 1.46394C9.32877 1.44087 10.157 1.41112 10.5221 1.39351C9.41566 0.5234 8.02178 0 6.50456 0C4.95634 0 3.53634 0.542831 2.41954 1.44512C2.49427 1.45544 2.5684 1.46637 2.64375 1.47791C2.6881 1.58902 2.73854 1.70925 2.79808 1.84404C2.81753 1.91266 2.83879 1.98613 2.86188 2.06203C2.74401 2.17436 2.62795 2.2958 2.51493 2.42513C2.49124 2.48888 2.46815 2.55325 2.44566 2.62004C2.35938 2.66861 2.27553 2.7184 2.19168 2.76819C2.13699 2.94974 2.08656 3.14162 2.03978 3.34078C1.93709 3.3262 1.83562 3.31224 1.73779 3.29888C1.66913 2.90178 1.62963 2.56053 1.59804 2.24115C1.29605 2.58786 1.02688 2.96432 0.802664 3.37053C0.836083 3.3426 0.867072 3.31527 0.901098 3.28795C0.987988 3.72695 1.0925 4.20845 1.23468 4.73246C0.9491 4.91644 0.692685 5.09921 0.471512 5.27529C0.310493 5.42405 0.171956 5.57039 0.0522552 5.71065C0.0212667 5.96931 0 6.23223 0 6.49939C0 7.05376 0.0771675 7.5893 0.207198 8.1036C0.322645 8.14549 0.448422 8.18678 0.588175 8.22746C0.800841 8.47034 1.04328 8.71686 1.31003 8.96035C1.36836 9.13461 1.43033 9.30584 1.49535 9.47403C1.84169 9.68958 2.22024 9.89846 2.61458 10.0946C2.49549 10.4638 2.40374 10.785 2.33508 11.0624C2.18135 11.0667 2.03248 11.0703 1.88544 11.0734C3.06301 12.2629 4.6975 13 6.50516 13C10.0366 13 12.9046 10.1851 13 6.67851C12.9763 6.58683 12.9575 6.49757 12.9319 6.40467Z" fill="#B0ADA4"/></svg>`;
                    html.setAttribute('lang', 'en');
                    html.setAttribute('dir', 'ltr');
                    if (cssLink) cssLink.setAttribute('href', 'css/style.css');
                }
            });
        });
    </script>
    <script>
        gsap.registerPlugin(ScrollTrigger, MotionPathPlugin);

        // Pin the locations section during scroll
        ScrollTrigger.create({
            trigger: "#locations",
            start: "top top",
            end: () => "+=" + document.getElementById("scrollContainer").offsetHeight,
            pin: ".locations-pin-wrapper",
            scrub: true,
            anticipatePin: 1
        });

        // Your existing timeline should use the scrollContainer for progress
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: "#scrollContainer",
                start: "top top",
                end: "bottom bottom",
                scrub: 1,
                // Remove pin here, pinning is handled above
                onUpdate: (self) => {
                    const progress = self.progress * 100;
                    document.getElementById('progressFill').style.width = progress + '%';
                    if (progress < 33) {
                        showLocationInfo('usa');
                    } else if (progress < 66) {
                        showLocationInfo('saudi');
                    } else {
                        showLocationInfo('uae');
                    }
                }
            }
        });

        // Location data
        const locations = {
            usa: {
                title: "الولايات المتحدة الأمريكية",
                description: "أرض الحريات والفرص اللامحدودة، موطن التكنولوجيا والابتكار"
            },
            saudi: {
                title: "المملكة العربية السعودية",
                description: "أرض الحرمين الشريفين ومهد الحضارة العربية الإسلامية"
            },
            uae: {
                title: "الإمارات العربية المتحدة",
                description: "واحة الحداثة في الشرق الأوسط، حيث تلتقي التقاليد مع المستقبل"
            }
        };

        // Create stars background
        function createStars() {
            const starsContainer = document.getElementById('stars');
            for (let i = 0; i < 100; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.left = Math.random() * 100 + '%';
                star.style.top = Math.random() * 100 + '%';
                star.style.width = Math.random() * 3 + 1 + 'px';
                star.style.height = star.style.width;
                star.style.animationDelay = Math.random() * 3 + 's';
                starsContainer.appendChild(star);
            }
        }

        // Animate traveler along the path (calm, smooth)
        tl.to('#traveler', {
            motionPath: {
                path: '#journeyPath',
                autoRotate: false,
                alignOrigin: [0.5, 0.5]
            },
            duration: 3, // slower, more calm
            ease: 'power1.inOut' // gentle ease
        }, 0);

        // Animate path drawing (calm, smooth)
        tl.fromTo('#journeyPath', {
            strokeDashoffset: 2000
        }, {
            strokeDashoffset: 0,
            duration: 3, // match traveler duration
            ease: 'power1.inOut'
        }, 0);

        // Traveler dot gentle fade/scale in at start
        gsap.fromTo('#traveler', {
            opacity: 0,
            scale: 0.5
        }, {
            opacity: 1,
            scale: 1,
            duration: 1.2,
            ease: 'power2.out',
            delay: 0.5
        });

        // Show location info
        function showLocationInfo(locationKey) {
            const location = locations[locationKey];
            const infoPanel = document.getElementById('infoPanel');
            const title = document.getElementById('locationTitle');
            const description = document.getElementById('locationDescription');

            title.textContent = location.title;
            description.textContent = location.description;

            infoPanel.classList.add('active');

            // Show corresponding label
            document.querySelectorAll('.location-label').forEach(label => {
                label.classList.remove('active');
            });
            document.getElementById(`label-${locationKey}`).classList.add('active');
        }

        // Location marker hover effects
        document.querySelectorAll('.location-marker').forEach(marker => {
            marker.addEventListener('mouseenter', () => {
                const location = marker.dataset.location;
                showLocationInfo(location);
                gsap.to(marker, { r: 15, duration: 0.3 });
            });

            marker.addEventListener('mouseleave', () => {
                gsap.to(marker, { r: 8, duration: 0.3 });
            });
        });

        // Initialize
        createStars();

        // Initial fade in
        gsap.fromTo('.map-container', {
            opacity: 0,
            scale: 0.8
        }, {
            opacity: 1,
            scale: 1,
            duration: 2,
            ease: 'power2.out',
            delay: 0.5
        });

        // Animate location markers on load
        gsap.fromTo('.location-marker', {
            scale: 0.5,
            opacity: 0
        }, {
            scale: 1,
            opacity: 1,
            duration: 1.5,
            stagger: 0.3,
            ease: 'back.out(1.7)',
            delay: 1.2
        });

        // Initial info panel state
        setTimeout(() => {
            showLocationInfo('usa');
        }, 2000);
    </script>

    <script>


        function setBlurOnSlides(swiper) {
            swiper.slides.forEach((slide, idx) => {
                if (slide.classList.contains('swiper-slide-active')) {
                    slide.classList.remove('blurred');
                } else {
                    slide.classList.add('blurred');
                }
            });
        }
    </script>

    <script>
        // GSAP Social Media Animation (from index.html)
        document.addEventListener('DOMContentLoaded', function() {
            initializeScrollAnimations();
            setupAdvancedHoverEffects();
        });

        function initializeScrollAnimations() {
            gsap.fromTo('.v-img', {
                opacity: 0,
                scale: 0.8,
                rotation: -10
            }, {
                opacity: 1,
                scale: 1,
                rotation: 0,
                duration: 1.2,
                ease: "back.out(1.7)",
                scrollTrigger: {
                    trigger: '.social-media-container',
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse'
                }
            });

            const socialIcons = gsap.utils.toArray('.social-icon');
            gsap.set(socialIcons, {
                opacity: 0,
                scale: 0,
                rotation: 180
            });
            gsap.to(socialIcons, {
                opacity: 1,
                scale: 1,
                rotation: 0,
                duration: 0.8,
                ease: "back.out(1.7)",
                stagger: {
                    amount: 0.6,
                    from: "start"
                },
                scrollTrigger: {
                    trigger: '.social-media-container',
                    start: 'top 70%',
                    end: 'bottom 30%',
                    toggleActions: 'play none none reverse',
                    onComplete: function() {
                        addFloatingEffect();
                    }
                }
            });
            socialIcons.forEach((icon, index) => {
                gsap.to(icon, {
                    y: (index % 2 === 0 ? -30 : 30),
                    scrollTrigger: {
                        trigger: '.social-media-container',
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: 1
                    }
                });
            });
        }

        function setupAdvancedHoverEffects() {
            const socialIcons = document.querySelectorAll('.social-icon');
            socialIcons.forEach((icon, index) => {
                icon.addEventListener('mouseenter', function() {
                    gsap.killTweensOf(this);
                    const hoverTl = gsap.timeline();
                    hoverTl
                        .to(this, {
                            scale: 1.2,
                            rotation: 360,
                            duration: 0.4,
                            ease: "back.out(1.7)"
                        })
                        .to(this.querySelector('i'), {
                            scale: 1.3,
                            duration: 0.3,
                            ease: "back.out(1.7)"
                        }, "-=0.2");
                    this.classList.add('animate-pulse');
                });
                icon.addEventListener('mouseleave', function() {
                    gsap.killTweensOf(this);
                    const leaveTl = gsap.timeline();
                    leaveTl
                        .to(this, {
                            scale: 1,
                            rotation: 0,
                            duration: 0.3,
                            ease: "back.out(1.7)"
                        })
                        .to(this.querySelector('i'), {
                            scale: 1,
                            duration: 0.2,
                            ease: "back.out(1.7)"
                        }, "-=0.1");
                    this.classList.remove('animate-pulse');
                });
                icon.addEventListener('click', function(e) {
                    gsap.to(this, {
                        scale: 0.9,
                        duration: 0.1,
                        ease: "power2.out",
                        yoyo: true,
                        repeat: 1
                    });
                });
            });
        }

        function addFloatingEffect() {
            const socialIcons = gsap.utils.toArray('.social-icon');
            socialIcons.forEach((icon, index) => {
                gsap.to(icon, {
                    y: "random(-8, 8)",
                    x: "random(-3, 3)",
                    rotation: "random(-5, 5)",
                    duration: "random(2, 4)",
                    ease: "sine.inOut",
                    repeat: -1,
                    yoyo: true,
                    delay: index * 0.2
                });
            });
        }
    </script>

    <script>
        // Close navbar collapse on link click (for mobile)
        document.addEventListener('DOMContentLoaded', function () {
            var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            var navbarCollapse = document.getElementById('navbarNav');
            navLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                        var bsCollapse = bootstrap.Collapse.getOrCreateInstance(navbarCollapse);
                        bsCollapse.hide();
                    }
                });
            });
        });
    </script>

</body>

</html>