 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="{{ asset('assets/css/styles_graficas.css') }}">

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 </head>
 <body>


  

@section('content')
<div class="container-dashboard">
    
    <div class="header">
        <div class="search-bar">
            <svg class="icon-search" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="11" cy="11" r="8" stroke="white" stroke-width="2" />
                <line x1="16" y1="16" x2="22" y2="22" stroke="white" stroke-width="2" />
            </svg>
            <input type="text" placeholder="Buscar...">
        </div>
        <div class="separator"></div>
        <h1>Dashboard</h1>
         
    </div>

    <!-- Tarjetas de métricas -->
    <div class="metrics">
        <div class="card">
            <div class="card-header">
                <div class="icon">
                    <!-- Icono de ojo para Pageviews -->
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 4.5C17.5 4.5 22 10 22 10s-4.5 5.5-10 5.5S2 10 2 10 6.5 4.5 12 4.5Z" 
                            stroke="#EAEFF4" stroke-width="2" fill="none" />
                        <circle cx="12" cy="10" r="3" stroke="#EAEFF4" stroke-width="2" fill="none" />
                    </svg>
                    <p>Pageviews</p>
                </div>
                <div class="menu">•••</div>
            </div>
            <h2>50.8K <span class="green">+8.2%</span></h2>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="icon">
                    <!-- Icono de usuario para Monthly users -->
                    <svg width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="7" r="4" stroke="#EAEFF4" stroke-width="2"/>
                        <path d="M4 18c0-3 3-5 6-5s6 2 6 5" stroke="#EAEFF4" stroke-width="2"/>
                    </svg>
                    <p>Monthly users</p>
                </div>
                <div class="menu">•••</div>
            </div>
            <h2>23.6K <span class="red">-3.4%</span></h2>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="icon">
                    <!-- Icono de registro para New sign ups -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                    <p>New sign ups</p>
                </div>
                <div class="menu">•••</div>
            </div>
            <h2>756 <span class="green">+5.2%</span></h2>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="icon">
                    <!-- Icono de estrella para VIP sign ups -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>

                    <p>New sign ups</p>
                </div>
                <div class="menu">•••</div>
            </div>
            <h2>2.3K <span class="green">+7.1%</span></h2>
        </div>
    </div>

    
    <!-- Gráficos pricipal y derecho-->
    <div class="chart-wrapper">

        <!-- Gráfico de ingresos -->
        <div class="chart-container">
            <div class="chart-header-g">
                <div>
                    <h3>Total revenue</h3>
                    <p class="revenue-amount-g">$240.8K <span class="change-percent-g">24.6% ⬆</span></p>
                </div>
                <button class="filter-btn-g" onclick="toggleDropdown()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="calendar-icon-g">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                    </svg>
                    <span id="selected-range-g">Jan 2024 - Dec 2024</span>
                </button>

                <div class="dropdown-g" id="dropdown-g">
                    <div onclick="selectRange('Jan 2024 - Dec 2024')">Jan 2024 - Dec 2024</div>
                    <div onclick="selectRange('Jan 2023 - Dec 2023')">Jan 2023 - Dec 2023</div>
                    <div onclick="selectRange('Jan 2022 - Dec 2022')">Jan 2022 - Dec 2022</div>
                    <div onclick="selectRange('Jan 2025 - Dec 2025')">Jan 2025 - Dec 2025</div>
                </div>
            </div>
                 
             
            <canvas id="revenueChart"></canvas>
        </div>
     


        <!-- Panel derecho -->
        <div class="right-panel">
            
            <div class="widget">
                <h3>Website Visitors</h3>
                <div class="progress-circle">
                    <div class="circle">
                        <svg width="100" height="100" viewBox="0 0 36 36" class="circular-chart">
                            <!-- Parte amarilla (Sell) -->
                            <path class="circle yellow" d="M18 2.0845 a 15.9155 15.9155 0 0 1 12.5 25.9155" />
                            <!-- Parte blanca (Distribute) -->
                            <path class="circle white" d="M30.5 28 a 15.9155 15.9155 0 0 1 -9.5 5" />
                            <!-- Parte oscura (Return) -->
                            <path class="circle dark" d="M21 33 a 15.9155 15.9155 0 0 1 -3 -0.5" />
                        </svg>
                        <div class="circle-text">
                            <strong>80%</strong>
                            <p>Transactions</p>
                        </div>
                    </div>
                    <!-- Leyendas -->
                    <div class="legend">
                        <div class="legend-item"><span class="dot yellow"></span> Sell</div>
                        <div class="legend-item"><span class="dot white"></span> Distribute</div>
                        <div class="legend-item"><span class="dot dark"></span> Return</div>
                    </div>
                </div>
            </div>

            <div class="widget2">
                <h4>Products</h4>
                <div class="product-table-container">
                    <table class="product-table">
                        <thead>
                            <tr>
                                <th>Products</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="product-item">
                                        <img src="assets/image/Doosan DA45-5.png" alt="Doosan DA45-5">
                                        <div class="product-info">
                                            <strong>Doosan DA45-5 - Heavy-Duty Construction & Mining Hauler</strong><br>
                                            <span class="in-stock">524 in stock</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$750,000.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item">
                                        <img src="assets/image/trucks_stock.png" alt="Caterpillar 745">
                                        <div class="product-info">
                                            <strong>Caterpillar 745 - Heavy-Duty Mining Articulated Truck</strong><br>
                                            <span class="in-stock">320 in stock</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$702,000.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item">
                                        <img src="assets/image/Volvo A45G.png" alt="Volvo A45G">
                                        <div class="product-info">
                                            <strong>Volvo A45G – High-Capacity Off-Road Articulated Hauler</strong><br>
                                            <span class="in-stock">150 in stock</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$120.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item">
                                        <img src="assets/image/escabadora.png" alt="Construction - excavator">
                                        <div class="product-info">
                                            <strong>Construction - excavator class - D176</strong><br>
                                            <span class="in-stock">200 in stock</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$250.00</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="product-item">
                                        <img src="assets/image/escabadora a.png" alt="Atlas Copco D65">
                                        <div class="product-info">
                                            <strong>Atlas Copco D65</strong><br>
                                            <span class="in-stock">180 in stock</span>
                                        </div>
                                    </div>
                                </td>
                                <td>$450,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>



   <!-- Tabla de órdenes -->
    <div class="orders-status">
        <div class="header-container">
            <h3>Orders Status</h3>
            <div class="actions-container">
                <button class="filter-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="calendar-icon">
                        <path d="M5.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H6a.75.75 0 0 1-.75-.75V12ZM6 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H6ZM7.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H8a.75.75 0 0 1-.75-.75V12ZM8 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H8ZM9.25 10a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H10a.75.75 0 0 1-.75-.75V10ZM10 11.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V12a.75.75 0 0 0-.75-.75H10ZM9.25 14a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H10a.75.75 0 0 1-.75-.75V14ZM12 9.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V10a.75.75 0 0 0-.75-.75H12ZM11.25 12a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H12a.75.75 0 0 1-.75-.75V12ZM12 13.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V14a.75.75 0 0 0-.75-.75H12ZM13.25 10a.75.75 0 0 1 .75-.75h.01a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75H14a.75.75 0 0 1-.75-.75V10ZM14 11.25a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 0 0 .75-.75V12a.75.75 0 0 0-.75-.75H14Z" />
                        <path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" />
                    </svg>
                    Jan 2024
                </button>
                <button class="create-btn">Create order</button>
            </div>
         
        </div>
         
        <div class="table-container">
            <table class="orders-table">
                <thead>
                    <tr>
                        <th>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="table-orders-oder">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                            </svg>
                            Order
                        </th>
                        <th>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>

                            Client
                        </th>
                        <th>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" />
                            </svg>

                            Date
                        </th>
                        <th>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path d="M10.362 1.093a.75.75 0 0 0-.724 0L2.523 5.018 10 9.143l7.477-4.125-7.115-3.925ZM18 6.443l-7.25 4v8.25l6.862-3.786A.75.75 0 0 0 18 14.25V6.443ZM9.25 18.693v-8.25l-7.25-4v7.807a.75.75 0 0 0 .388.657l6.862 3.786Z" />
                            </svg>

                            Status
                        </th>
                        <th>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="m9.69 18.933.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 0 0 .281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 1 0 3 9c0 3.492 1.698 5.988 3.355 7.584a13.731 13.731 0 0 0 2.273 1.765 11.842 11.842 0 0 0 .976.544l.062.029.018.008.006.003ZM10 11.25a2.25 2.25 0 1 0 0-4.5 2.25 2.25 0 0 0 0 4.5Z" clip-rule="evenodd" />
                            </svg>
                            Country
                        </th>
                        <th>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="M2.5 4A1.5 1.5 0 0 0 1 5.5V6h18v-.5A1.5 1.5 0 0 0 17.5 4h-15ZM19 8.5H1v6A1.5 1.5 0 0 0 2.5 16h15a1.5 1.5 0 0 0 1.5-1.5v-6ZM3 13.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5a.75.75 0 0 1-.75-.75Zm4.75-.75a.75.75 0 0 0 0 1.5h3.5a.75.75 0 0 0 0-1.5h-3.5Z" clip-rule="evenodd" />
                            </svg>

                            Total
                        </th>
                        <th>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                <path fill-rule="evenodd" d="M9.47 15.28a.75.75 0 0 0 1.06 0l4.25-4.25a.75.75 0 1 0-1.06-1.06L10 13.69 6.28 9.97a.75.75 0 0 0-1.06 1.06l4.25 4.25ZM5.22 6.03l4.25 4.25a.75.75 0 0 0 1.06 0l4.25-4.25a.75.75 0 0 0-1.06-1.06L10 8.69 6.28 4.97a.75.75 0 0 0-1.06 1.06Z" clip-rule="evenodd" />
                            </svg>

                            Actions
                        </th>
                    </tr>
                </thead>


                <tbody>

                    <tr>
                        <td class="id-order">
                            <input type="checkbox">
                            #1531
                        </td>
                        <td>
                            <div class="client-info">
                                <strong>John Carter</strong><br>
                                <span class="email">hello@jcarter.com</span>
                            </div>
                        </td>
                        <td>Jan 30, 2024</td>
                        <td>
                            <span class="status delivered">
                                <span class="status-dot-d"></span> Delivered
                            </span>
                        </td>
                        <td>United States</td>
                        <td>$ 1,099.24</td>
                        <td>
                            <div class="actions">
                                <div class="iconss-swrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="edit-icon" onclick="editOrder()">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                 
                                
                                 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"   class="delete-icon" onclick="deleteOrder()">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="id-order">
                            <input type="checkbox">
                            #1539
                        </td>
                        <td>
                            <div class="client-info">
                                <strong>Sophie Moore</strong><br>
                                <span class="email">contact@sophiemoore.com</span>
                            </div>
                        </td>
                        <td>Jan 27, 2024</td>
                        <td>
                            <span class="status canceled"> 
                                <span class="status-dot-r"></span> Canceled
                            </span>
                        </td>
                        <td>United Kingdom</td>
                        <td>$ 5,870.32</td>
                        <td>

                            <div class="actions">
                                <div class="iconss-swrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="edit-icon" onclick="editOrder()">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                 
                                
                                 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"   class="delete-icon" onclick="deleteOrder()">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </div>
                            </div>
                            
                        </td>
                    </tr>

                    <tr>
                        <td class="id-order">
                            <input type="checkbox">
                            #1530
                        </td>
                        <td>
                            <div class="client-info">
                                <strong>Matt Cannon</strong><br>
                                <span class="email">info@mattcannon.com</span>
                            </div>
                        </td>
                        <td>Jan 24, 2024</td>
                        <td>
                            <span class="status delivered">
                                <span class="status-dot-d"></span> Delivered
                            </span>
                        </td>
                        <td>Australia</td>
                        <td>$ 1,819.48</td>
                        <td>
                            <div class="actions">
                                <div class="iconss-swrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="edit-icon" onclick="editOrder()">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                 
                                
                                 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"   class="delete-icon" onclick="deleteOrder()">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </div>
                            </div>
                             
                        </td>
                    </tr>

                    <tr>
                        <td class="id-order">
                            <input type="checkbox">
                            #1529
                        </td>
                         
                        <td>
                            <div class="client-info">
                                <strong>Graham Hills</strong><br>
                                <span class="email">hi@grahamhills.com</span>
                            </div>
                        </td>
                        <td>Jan 21, 2024</td>
                        <td>
                            <span class="status pending">
                                <span class="status-dot-p"></span> Pending
                            </span>
                        </td>
                        <td>India</td>
                        <td>$ 1,059.12</td>
                        <td>
                        <div class="actions">
                                <div class="iconss-swrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="edit-icon" onclick="editOrder()">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                 
                                
                                 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"   class="delete-icon" onclick="deleteOrder()">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </div>
                            </div>
                           
                        </td>
                    </tr>

                    <tr>
                        <td class="id-order">
                            <input type="checkbox">
                            #1528
                        </td>
                         
                        <td>
                            <div class="client-info">
                                <strong>Sandy Houston</strong><br>
                                <span class="email">contact@sandyhouston.com</span>
                            </div>
                        </td>
                        <td>Jan 19, 2024</td>
                        <td>
                            <span class="status delivered">
                                <span class="status-dot-d"></span> Delivered
                            </span>
                        </td>
                        <td>Canada</td>
                        <td>$ 998.16</td>
                        <td>
                            <div class="actions">
                                <div class="iconss-swrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="edit-icon" onclick="editOrder()">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                 
                                
                                 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"   class="delete-icon" onclick="deleteOrder()">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </div>
                            </div>
                             
                        </td>
                    </tr>

                    <tr>
                        <td class="id-order">
                            <input type="checkbox">
                            #1527
                        </td>
                         
                        <td>
                            <div class="client-info">
                                <strong>Andy Smith</strong><br>
                                <span class="email">hello@andysmith.com</span>
                            </div>
                        </td>
                        <td>Jan 15, 2024</td>
                        <td>
                            <span class="status pending">
                                <span class="status-dot-p"></span> Pending
                            </span>
                        </td>
                        <td>United States</td>
                        <td>$ 2,449.64</td>
                        <td>
                            <div class="actions">
                                <div class="iconss-swrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6" class="edit-icon" onclick="editOrder()">
                                        <path strokeLinecap="round" strokeLinejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                 
                                
                                 
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"   class="delete-icon" onclick="deleteOrder()">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </div>
                            </div>
                           
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


</div>
 
<script src="{{ asset('assets/js/graficas_chart.js') }}"></script>
    
 </body>
 </html>