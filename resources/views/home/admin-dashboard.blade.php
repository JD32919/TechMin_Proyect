<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard/Products-TechMin</title>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_header_s_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_body_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_image_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_cards_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_footer_dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles_dashboard_myModal.css') }}">
     
</head>
<header class="header-custom-s">

    <div class="navbar_search">
        <svg class="icon-search" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="11" cy="11" r="8" stroke="black" stroke-width="2"/>
            <line x1="16" y1="16" x2="22" y2="22" stroke="black" stroke-width="2"/>
        </svg>
        <input type="text" class="search-input" placeholder="Buscar...">
    </div>


    <div class="user_menu">

        <img src="assets/image/icono_usuario.png" alt="Client Photo">
        
        <!-- Formulario de logout -->
        <form action="/logout" method="POST" style="display:inline;">

            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </div>
                    
    <div class="separator"></div>
</header>



<body>
    
 
    <!-- Menu lateral -->
    <div class="sidebar" id="sidebar">
        <div class="header">
            <div class="menu-btn" id="menu-btn">
                <svg width="8" height="20" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 26L2 14L14 2" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

            <!--Logo TechMin -->
            <div class="brand">
                 <a href="{{ route('index') }}"  >
                    <svg width="124" height="22" viewBox="0 0 124 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.21 21V2.58H11.1V21H6.21ZM0.27 5.28V0.569998H17.1V5.28H0.27ZM21.4523 13.08V8.46H29.9123V13.08H21.4523ZM21.3623 5.19L23.1923 3.15V18.6L21.2123 16.35H31.5323V21H18.3323V0.569998H31.5323V5.19H21.3623ZM43.0312 21.39C40.8912 21.39 39.0412 20.94 37.4812 20.04C35.9212 19.14 34.7212 17.9 33.8812 16.32C33.0412 14.72 32.6212 12.88 32.6212 10.8C32.6212 9.24 32.8712 7.82 33.3712 6.54C33.8712 5.24 34.5812 4.12 35.5012 3.18C36.4212 2.22 37.5212 1.49 38.8012 0.989998C40.0812 0.469999 41.4912 0.209999 43.0312 0.209999C45.4312 0.209999 47.4212 0.749999 49.0012 1.83C50.5812 2.89 51.7512 4.44 52.5113 6.48L48.1612 8.25C47.5812 7.13 46.8813 6.3 46.0612 5.76C45.2412 5.2 44.2312 4.92 43.0312 4.92C41.9712 4.92 41.0312 5.16 40.2113 5.64C39.3912 6.12 38.7412 6.8 38.2612 7.68C37.8012 8.56 37.5712 9.6 37.5712 10.8C37.5712 12 37.8012 13.04 38.2612 13.92C38.7412 14.8 39.3912 15.48 40.2113 15.96C41.0312 16.42 41.9712 16.65 43.0312 16.65C44.2312 16.65 45.2412 16.38 46.0612 15.84C46.8813 15.3 47.5812 14.47 48.1612 13.35L52.5113 15.12C51.7512 17.16 50.5812 18.72 49.0012 19.8C47.4212 20.86 45.4312 21.39 43.0312 21.39ZM65.9334 21V0.569998H70.8234V21H65.9334ZM53.7534 21V0.569998H58.6134V21H53.7534ZM56.9034 13.35V8.64H67.6134V13.35H56.9034ZM72.2004 21L75.7704 0.569998H80.1504L84.8004 14.22H84.4704L89.1204 0.569998H93.4704L97.0404 21H92.2104L90.8904 12.09C90.7304 10.93 90.5704 9.77 90.4104 8.61C90.2704 7.45 90.1504 6.29 90.0504 5.13H91.4004C91.1004 6.33 90.8104 7.49 90.5304 8.61C90.2504 9.73 89.9204 10.86 89.5404 12L86.5404 20.82H82.7304L79.7004 12C79.3204 10.86 78.9804 9.73 78.6804 8.61C78.4004 7.49 78.1204 6.33 77.8404 5.13H79.2204C79.1004 6.29 78.9704 7.45 78.8304 8.61C78.6904 9.77 78.5304 10.93 78.3504 12.09L77.0304 21H72.2004ZM103.322 21H98.4616V0.569998H103.322V21ZM119.181 21L108.711 6.57L110.661 6.03V21H105.801V0.569998H110.301L120.621 14.88L118.791 15.3V0.569998H123.651V21H119.181Z"
                            fill="#FCE803" />
                    </svg>
                 </a>
            </div>  
            
            <div class="avatar">Admin</div>

        </div>

        <div class="menu-container">
            <ul class="menu">
                <li class="menu-item menu-item-static active">
                    <a href="#" class="menu-link">
                        <svg width="45" height="31" viewBox="0 0 45 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M26.7501 23.0786C28.3032 24.5528 28.6625 26.8079 27.4655 28.6452C25.9985 30.897 22.7494 31.6685 20.2085 30.3685C17.6676 29.0684 16.797 26.189 18.264 23.9372C19.4572 22.1057 21.8294 21.2534 24.0406 21.6987L30.7626 11.1947C30.9329 10.9286 31.3144 10.8353 31.6146 10.9862L33.2456 11.8059C33.5458 11.9568 33.6512 12.2948 33.4809 12.5609L26.7501 23.0786ZM23.9585 24.6124C25.0048 25.1477 25.3632 26.3333 24.7592 27.2605C24.1551 28.1877 22.8173 28.5054 21.771 27.9701C20.7247 27.4348 20.3663 26.2491 20.9703 25.3219C21.5744 24.3947 22.9122 24.077 23.9585 24.6124Z" fill="#FCE803"/>
                            <path d="M0.342947 23.4078C0.45208 23.9554 0.587168 24.4995 0.748081 25.0386C0.924653 25.6302 1.63364 25.948 2.29028 25.7587L16.9089 21.5454C17.5653 21.3562 17.906 20.7277 17.8732 20.1167C17.858 19.8343 17.8753 19.5504 17.9256 19.2693C17.9887 18.916 18.1029 18.5727 18.2642 18.2475L18.2668 18.2421C18.4007 17.9732 18.5668 17.7168 18.7631 17.4774C19.1979 16.9471 19.7682 16.5154 20.4273 16.2178C21.0864 15.9202 21.8156 15.7651 22.5554 15.7651C23.0861 15.7651 23.6114 15.8449 24.1093 16C24.435 16.1014 24.8105 15.9969 24.9672 15.7243L25.8184 14.2438C25.9751 13.9712 25.8536 13.6355 25.5345 13.5188C24.5915 13.1741 23.5795 12.9957 22.5554 12.9957C21.3225 12.9957 20.1071 13.2542 19.0086 13.7503C17.9101 14.2463 16.9596 14.9657 16.2349 15.8496C15.5102 16.7336 15.0319 17.7569 14.8391 18.8361C14.8144 18.974 14.7945 19.1124 14.7793 19.2509L3.34886 22.5423C3.04649 20.7948 3.0495 19.0108 3.36354 17.2537C3.84185 14.5774 5.0281 12.0394 6.8253 9.84726C8.62249 7.6551 10.9796 5.87101 13.7039 4.64085C16.4283 3.4107 19.4424 2.7694 22.5 2.7694C25.5576 2.7694 28.5717 3.4107 31.2961 4.64085C34.0204 5.87101 36.3775 7.6551 38.1747 9.84726C39.9719 12.0394 41.1581 14.5774 41.6365 17.2537C41.9505 19.0108 41.9535 20.7948 41.6511 22.5423L32.3567 19.866C32.0665 19.7824 31.7507 19.8967 31.6095 20.1364L30.7294 21.6301C30.5504 21.9339 30.7225 22.3073 31.0903 22.4132L42.7099 25.7591C43.3665 25.9482 44.0753 25.6304 44.2518 25.0389C44.4128 24.4997 44.5479 23.9555 44.6571 23.4078C45.0897 21.2368 45.1144 19.0106 44.723 16.8204C44.1675 13.7125 42.79 10.7652 40.7029 8.21944C38.6158 5.67371 35.8785 3.60187 32.7148 2.1733C29.5511 0.744729 26.0507 -1.63555e-07 22.5 0C18.9493 2.3623e-07 15.4489 0.74473 12.2852 2.1733C9.12149 3.60187 6.38419 5.67371 4.29712 8.21944C2.21005 10.7652 0.832471 13.7125 0.277015 16.8204C-0.114418 19.0106 -0.0897464 21.2368 0.342947 23.4078Z" fill="#FCE803"/>
                            </svg>   
                            <span>Dashboard</span>                    
                    </a>
                </li>

                <li class="menu-item menu-item-static">
                    <a href="{{ route('stock.stock') }}" class="menu-link">
                        <svg width="41" height="41" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.42188 16.2266V2.42188H11.8672V16.2266H2.42188Z" fill="#FCE803" />
                            <path d="M19.1328 7.50781V2.42188H28.5781V7.50781H19.1328Z" fill="#FCE803" />
                            <path d="M19.1328 28.5781V14.7734H28.5781V28.5781H19.1328Z" fill="#FCE803" />
                            <path d="M2.42188 28.5781V23.4922H11.8672V28.5781H2.42188Z" fill="#FCE803" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.7109 0.96875C16.7109 0.433724 17.1447 0 17.6797 0H30.0312C30.5663 0 31 0.433724 31 0.96875V8.96094C31 9.49596 30.5663 9.92969 30.0312 9.92969H17.6797C17.1447 9.92969 16.7109 9.49596 16.7109 8.96094V0.96875ZM19.1328 2.42188V7.50781H28.5781V2.42188H19.1328ZM16.7109 13.3203C16.7109 12.7853 17.1447 12.3516 17.6797 12.3516H30.0312C30.5663 12.3516 31 12.7853 31 13.3203V30.0312C31 30.5663 30.5663 31 30.0312 31H17.6797C17.1447 31 16.7109 30.5663 16.7109 30.0312V13.3203ZM19.1328 14.7734V28.5781H28.5781V14.7734H19.1328Z"
                                fill="#FCE803" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.3203 0H0.96875C0.433724 0 0 0.433724 0 0.96875V17.6797C0 18.2147 0.433724 18.6484 0.96875 18.6484H13.3203C13.8553 18.6484 14.2891 18.2147 14.2891 17.6797V0.96875C14.2891 0.433725 13.8553 0 13.3203 0ZM2.42188 2.42188V16.2266H11.8672V2.42188H2.42188Z"
                                fill="#FCE803" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.3203 21.0703H0.96875C0.433724 21.0703 0 21.504 0 22.0391V30.0312C0 30.5663 0.433724 31 0.96875 31H13.3203C13.8553 31 14.2891 30.5663 14.2891 30.0312V22.0391C14.2891 21.504 13.8553 21.0703 13.3203 21.0703ZM2.42188 23.4922V28.5781H11.8672V23.4922H2.42188Z"
                                fill="#FCE803" />
                        </svg>                          
                            <span>Products</span>                    
                    </a>
                </li>

                <li class="menu-item menu-item-static">
                    <a href="#" class="menu-link">
                        <svg width="42" height="45" viewBox="0 0 32 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.20411 21.6645L9.11805 20.4751L8.20411 21.6645ZM4.63132 12.9748L3.17097 13.3174L4.63132 12.9748ZM7.9699 21.4758L8.93762 20.3297L7.9699 21.4758ZM29.3641 13.6276L27.9038 13.285L29.3641 13.6276ZM26.5918 21.0955L25.5296 20.0364L26.5918 21.0955ZM25.4861 21.9864L24.6778 20.7228L25.4861 21.9864ZM29.2637 8.32545L30.3048 7.24559L29.2637 8.32545ZM29.7347 8.93548L28.427 9.67042L29.7347 8.93548ZM3.45701 1.64345C3.26009 0.838768 2.44814 0.346076 1.64345 0.542992C0.838768 0.739908 0.346076 1.55186 0.542992 2.35655L3.45701 1.64345ZM21.5281 19.46C22.3565 19.46 23.0281 18.7884 23.0281 17.96C23.0281 17.1316 22.3565 16.46 21.5281 16.46V19.46ZM13.7168 16.46C12.8884 16.46 12.2168 17.1316 12.2168 17.96C12.2168 18.7884 12.8884 19.46 13.7168 19.46V16.46ZM3.37039 9.1H24.711V6.1H3.37039V9.1ZM17.7313 21.5H17.0743V24.5H17.7313V21.5ZM6.09168 12.6322L4.83074 7.2574L1.91004 7.9426L3.17097 13.3174L6.09168 12.6322ZM17.0743 21.5C14.6607 21.5 12.9819 21.4975 11.6848 21.3435C10.4277 21.1943 9.69427 20.9179 9.11805 20.4751L7.29018 22.854C8.45195 23.7467 9.77622 24.138 11.331 24.3226C12.8458 24.5025 14.7331 24.5 17.0743 24.5V21.5ZM3.17097 13.3174C3.71711 15.6453 4.15337 17.5149 4.6755 18.972C5.20976 20.4629 5.88531 21.6789 7.00218 22.6219L8.93762 20.3297C8.3782 19.8574 7.93856 19.1848 7.49965 17.9599C7.04862 16.7013 6.65374 15.028 6.09168 12.6322L3.17097 13.3174ZM9.11805 20.4751C9.05686 20.4281 8.9967 20.3796 8.93762 20.3297L7.00218 22.6219C7.0964 22.7015 7.19242 22.7789 7.29018 22.854L9.11805 20.4751ZM27.9038 13.285C27.4176 15.3574 27.0762 16.8048 26.6994 17.907C26.3319 18.982 25.9736 19.5911 25.5296 20.0364L27.6541 22.1546C28.5443 21.2618 29.0928 20.1802 29.5381 18.8774C29.9742 17.6018 30.352 15.9842 30.8245 13.9702L27.9038 13.285ZM17.7313 24.5C19.7569 24.5 21.3899 24.5019 22.7111 24.3654C24.0641 24.2256 25.2311 23.9301 26.2944 23.25L24.6778 20.7228C24.1564 21.0563 23.5027 21.2676 22.4028 21.3812C21.2712 21.4981 19.8192 21.5 17.7313 21.5V24.5ZM25.5296 20.0364C25.2703 20.2965 24.9846 20.5265 24.6778 20.7228L26.2944 23.25C26.7856 22.9357 27.2415 22.5684 27.6541 22.1546L25.5296 20.0364ZM24.711 9.1C26.0175 9.1 26.8568 9.10276 27.4697 9.17916C28.0549 9.25211 28.1832 9.36727 28.2226 9.40531L30.3048 7.24559C29.5918 6.55817 28.7105 6.31062 27.8408 6.2022C26.9989 6.09724 25.938 6.1 24.711 6.1V9.1ZM30.8245 13.9702C31.111 12.7488 31.3592 11.7021 31.4547 10.8482C31.5528 9.97125 31.5234 9.05657 31.0423 8.20055L28.427 9.67042C28.4611 9.73102 28.5416 9.90389 28.4733 10.5146C28.4024 11.1484 28.2077 11.9894 27.9038 13.285L30.8245 13.9702ZM28.2226 9.40531C28.3022 9.48201 28.3713 9.57119 28.427 9.67042L31.0423 8.20055C30.8442 7.84819 30.596 7.52629 30.3048 7.24559L28.2226 9.40531ZM4.8274 7.24345L3.45701 1.64345L0.542992 2.35655L1.91338 7.95655L4.8274 7.24345ZM21.5281 16.46H13.7168V19.46H21.5281V16.46Z"
                                fill="#FCE803" />
                            <path
                                d="M11.75 33.25C13.5584 33.25 14.75 31.6329 14.75 30C14.75 28.3671 13.5584 26.75 11.75 26.75C9.94158 26.75 8.75 28.3671 8.75 30C8.75 31.6329 9.94158 33.25 11.75 33.25ZM22.25 33.25C24.0584 33.25 25.25 31.6329 25.25 30C25.25 28.3671 24.0584 26.75 22.25 26.75C20.4416 26.75 19.25 28.3671 19.25 30C19.25 31.6329 20.4416 33.25 22.25 33.25Z"
                                fill="#0F161E" stroke="#FCE803" stroke-width="2.5" />
                        </svg>
                                                    
                            <span>Orders</span>                    
                    </a>
                </li>

                <li class="menu-item menu-item-static">
                    <a href="#" class="menu-link">
                        <svg width="41" height="41" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.13472 9.48971C5.94693 11.0605 5.81515 13.8403 6.99788 15.0236C6.99788 15.0236 6.44111 11.9699 11.4323 8.13853C13.442 6.59618 13.9065 4.49837 13.2048 2.92501C12.8061 2.0337 12.078 1.2974 11.4455 0.783282C11.0765 0.481011 11.3598 -0.0176059 11.8968 0.000478612C15.1453 0.114153 20.4099 0.822034 22.6469 5.22433C23.6287 7.1568 23.7011 9.15385 23.2333 11.1845C22.9368 12.4814 21.8826 15.3646 24.2876 15.7185C26.004 15.9717 26.8342 14.9022 27.2065 14.1323C27.3614 13.8119 27.8984 13.7318 28.1883 13.9876C31.0875 16.5737 31.3346 19.6196 30.735 22.2419C29.5753 27.3107 23.0291 31 16.5257 31C8.40135 31 1.93419 27.3547 0.257275 20.7564C-0.418103 18.0928 -0.0754719 12.8224 5.16283 9.10218C5.55158 8.82316 6.18743 9.07118 6.13472 9.48971Z"
                                fill="#FCE803" />
                        </svg>
                            <span>Offerts</span>                    
                    </a>
                </li>

                <li class="menu-item menu-item-dropdown">
                    <a href="#" class="menu-link">
                        <svg width="44" height="46" viewBox="0 0 34 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.32357 23.9515C4.21885 28.4279 4.66649 30.6661 6.1456 32.1076C6.41898 32.374 6.71474 32.6165 7.02961 32.8323C8.73324 34 11.0158 34 15.5808 34H18.4191C22.9841 34 25.2666 34 26.9703 32.8323C27.2852 32.6165 27.5809 32.374 27.8543 32.1076C29.3334 30.6661 29.781 28.4279 30.6763 23.9515C31.9617 17.5248 32.6043 14.3114 31.1249 12.0345C30.857 11.6222 30.5444 11.2408 30.1926 10.8973C28.25 9 24.973 9 18.4191 9H15.5808C9.02688 9 5.74991 9 3.80728 10.8973C3.45554 11.2408 3.14288 11.6222 2.875 12.0345C1.39557 14.3114 2.03823 17.5248 3.32357 23.9515Z"
                                stroke="#FCE803" stroke-width="3" />
                            <circle cx="21.9997" cy="15.6667" r="1.66667" fill="#FCE803" />
                            <circle cx="11.9997" cy="15.6667" r="1.66667" fill="#FCE803" />
                            <path d="M12 8.99998V7.33331C12 4.57189 14.2386 2.33331 17 2.33331C19.7614 2.33331 22 4.57189 22 7.33331V8.99998"
                                stroke="#FCE803" stroke-width="3" stroke-linecap="round" />
                        </svg>
                            
                            <span>Categories</span>
                            <svg width="28" height="30" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 2.5L11 11.5L20 2.5" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>                               
                    </a>
                    <ul class="sub-menu">
                    <li><a href="#" class="sub-menu-link">Articulated Trucks</a></li> 
                    <li><a href="#" class="sub-menu-link">Excavators</a></li>
                    <li><a href="#" class="sub-menu-link">Backhoe-Excavators</a></li>
                    <li><a href="#" class="sub-menu-link">Elevated Platforms</a></li>
                    <li><a href="#" class="sub-menu-link">Front Loader</a></li>
                    <li><a href="#" class="sub-menu-link">Tractor Bull Dozer</a></li>
                    <li><a href="#" class="sub-menu-link">Luminaires</a></li>
                    <li><a href="#" class="sub-menu-link">Motor Graders</a></li> 
                    </ul>
                </li>

            </ul>
        </div>
    </div>    
<!-- Fin del menu lateral-->

    <div class="image-category">
        <img src="assets/image/category.png" alt="Category">
        <div class="image-overlay">
            <a href="#" class="add-product-btn" onclick="openModal()">
                Add Product
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="16"></line>
                    <line x1="8" y1="12" x2="16" y2="12"></line>
                </svg>
            </a>
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            
            <div id="modal-body">

            </div>
        </div>
    </div>


<main>

    <!-- Cards section  -->
    <div class="Carousel-section">
        <div class="card-container">

            <div class="card">
                <img src="assets/image/trucks_stock.png" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Caterpillar 745 – Heavy-Duty Mining Articulated Truck</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>

            <div class="card">
                <img src="assets/image/perforadora.jpeg" alt="Atlas Copco SmartROC D50 Drill Rig">
                <p class="title">Atlas Copco SmartROC D50 Drill Rig</p>
                <span class="stars">★★★★★</span>
                <p class="id">id: 12345689</p>
                <p class="old-price">$250,000</p>

                <div class="price-cart-container">
                    <p class="new-price">$235,000</p>
                    <button class="cart-button">
                    <img src="assets/image/carrito.png" alt="Carrito">
                    </button>
                </div>
            </div>
 
        </div>
    </div>
 
</main>

    <!-- footer section -->
    <footer id="footer-section" class="footer-section"  >
        <div class="footer-container">
             
            <!-- Enlaces de Productos y Soporte -->
            <div class="footer-column1">
                <div class="footer-logo">
                    <h2>TECHMIN</h2>
                </div>
                <h3>Products and Support</h3>
                <ul>
                    <li><a href="#">Equipment</a></li>
                    <li><a href="#">Financing</a></li>
                    <li><a href="#">Spare Parts</a></li>
                    <li><a href="#">Find a dealer</a></li>
                </ul>
            </div>
            <!-- Enlaces de Información de la Empresa -->
            <div class="footer-column">
                <h3>TECHMIN</h3>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Team</a></li>
                </ul>
            </div>
            <!-- Enlaces de Categorías -->
            <div class="footer-column">
                <h3>Categories</h3>
                <ul>
                    <li><a href="#">Drilling and Exploration</a></li>
                    <li><a href="#">Shippers and Transportation</a></li>
                    <li><a href="#">Crushing and Grinding</a></li>
                    <li><a href="#">Spare Parts and Accessories</a></li>
                </ul>
            </div>
            <!-- Redes Sociales y Derechos Reservados -->
            <div class="footer-social">
                <h3>Join Us</h3>
                <div class="social-icons">
                    <a href="#"><img src="assets/image/logo_facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="assets/image/logo_twitter.png" alt="Twitter"></a>
                    <a href="#"><img src="assets/image/logo_instagram.png" alt="Instagram"></a>
                </div>
                <p>Techmin © 2023. All rights reserved.</p>
            </div>
        </div>
    </footer>
 
     
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard_myModal.js') }}"></script>
    <script src="{{ asset('assets/js/funcion_sidebar_footer.js') }}"></script>
    
</body>
</html>