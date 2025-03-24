@extends('layouts.app')

@section('content')
<div class="container-dashboard">
    <div class="header">
        <h1>Dashboard</h1>
        <div class="search-bar">
            <input type="text" placeholder="Buscar...">
        </div>
    </div>

    <!-- Tarjetas de métricas -->
    <div class="metrics">
        <div class="card">
            <p>Pageviews</p>
            <h2>50.8K <span class="green">+8.2%</span></h2>
        </div>
        <div class="card">
            <p>Monthly users</p>
            <h2>23.6K <span class="red">-3.4%</span></h2>
        </div>
        <div class="card">
            <p>New sign ups</p>
            <h2>756 <span class="green">+5.2%</span></h2>
        </div>
        <div class="card">
            <p>New sign ups</p>
            <h2>2.3K <span class="green">+7.1%</span></h2>
        </div>
    </div>

    <!-- Gráfico de ingresos -->
    <div class="chart-container">
        <h3>Total revenue</h3>
        <canvas id="revenueChart"></canvas>
    </div>

    <!-- Panel derecho -->
    <div class="right-panel">
        <div class="widget">
            <h3>Website Visitors</h3>
            <div class="progress-circle">
                <div class="circle">
                    <strong>80%</strong>
                </div>
                <p>Traffic rate</p>
            </div>
        </div>

        <div class="widget">
            <h3>Products</h3>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Charging station</td>
                        <td>$120.00</td>
                    </tr>
                    <tr>
                        <td>Construction tools</td>
                        <td>$250.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tabla de órdenes -->
    <div class="orders-status">
        <h3>Orders Status</h3>
        <table class="orders-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Client</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#101</td>
                    <td>John Doe</td>
                    <td>June 1, 2023</td>
                    <td><span class="status success">Completed</span></td>
                    <td>United States</td>
                </tr>
                <tr>
                    <td>#102</td>
                    <td>Ana Smith</td>
                    <td>June 3, 2023</td>
                    <td><span class="status pending">Pending</span></td>
                    <td>United Kingdom</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
