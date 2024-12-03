@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloDashboard.css">
</head>
<div style="background-color: #4e72a7;
background-image: linear-gradient(45deg, #4e72a7 0%, #ad44d0 100%);
" class="dashboard">
    <div class="header">
        <h1>Dashboard</h1>
        <form method="get" action="{{url('clientes/create')}}">
            <button type="submit" class="create-btn">Crear nuevo cliente</button>
        </form>

    </div>

    <div class="summary">
        <a href="/clientes" class="summary-card">
            <div>
                <div class="summary-title">
                    <span>Clientes</span>
                    <img style="width: 50px;" src="/img/user.png" alt="">
                </div>
                <div class="summary-number">{{$totalClientes}} </div>
            </div>
        </a>

        <a href="{{route('vehiculos.index')}}" class="summary-card">
            <div>
                <div class="summary-title">
                    <span>Vehiculos</span>
                    <img style="width: 50px;" src="/img/car.png" alt="">
                </div>
                <div class="summary-number">{{$totalVehiculos}}</div>
            </div>
        </a>

        <a href="{{route('serviciosVehiculos.index')}}" class="summary-card">
            <div class="summary-title">
                <span>Servicios</span>
                <img style="width: 50px;" src="/img/services.png" alt="">
            </div>
            <div class="summary-number">{{$totalServicios}}</div>
        </a>
        <a href="{{route('inventarios.index')}}" class="summary-card">
            <div class="summary-title">
                <span>Inventario</span>
                <img style="width: 50px;" src="/img/inventary.png" alt="">
            </div>
            <div class="summary-number">{{$totalinventarios}}</div>
        </a>

    </div>
    <!-- <div class="projects-table">
        <h2>Active Projects</h2>
        <table>
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Hours</th>
                    <th>Priority</th>
                    <th>Members</th>
                    <th>Progress</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <img src="/api/placeholder/20/20" alt="Dropbox" style="vertical-align: middle; margin-right: 10px;">
                        Dropbox Design System
                    </td>
                    <td>34</td>
                    <td><span class="priority priority-medium">Medium</span></td>
                    <td class="members">
                        <img src="/api/placeholder/30/30" alt="Member 1">
                        <img src="/api/placeholder/30/30" alt="Member 2">
                        <img src="/api/placeholder/30/30" alt="Member 3">
                        <span>+5</span>
                    </td>
                    <td>
                        <div class="progress-bar">
                            <div class="progress-bar-fill" style="width: 15%;"></div>
                        </div>
                    </td>
                </tr>
                <!-- Añade más filas aquí para los otros proyectos -->
    <div class="container">
        <div class="cloud front">
            <span class="left-front"></span>
            <span class="right-front"></span>
        </div>
        <span class="sun sunshine"></span>
        <span class="sun"></span>
        <div class="cloud back">
            <span class="left-back"></span>
            <span class="right-back"></span>
        </div>
    </div>
    </tbody>
    </table>
</div> -->
</div>
<style>
    .container {
        width: 250px;
        height: 250px;
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cloud {
        width: 250px;
    }

    .front {
        padding-top: 45px;
        margin-left: 25px;
        display: inline;
        position: absolute;
        z-index: 11;
        animation: clouds 8s infinite;
        animation-timing-function: ease-in-out;
    }

    .back {
        margin-top: -30px;
        margin-left: 150px;
        z-index: 12;
        animation: clouds 12s infinite;
        animation-timing-function: ease-in-out;
    }

    .right-front {
        width: 45px;
        height: 45px;
        border-radius: 50% 50% 50% 0%;
        background-color: #4c9beb;
        display: inline-block;
        margin-left: -25px;
        z-index: 5;
    }

    .left-front {
        width: 65px;
        height: 65px;
        border-radius: 50% 50% 0% 50%;
        background-color: #4c9beb;
        display: inline-block;
        z-index: 5;
    }

    .right-back {
        width: 50px;
        height: 50px;
        border-radius: 50% 50% 50% 0%;
        background-color: #4c9beb;
        display: inline-block;
        margin-left: -20px;
        z-index: 5;
    }

    .left-back {
        width: 30px;
        height: 30px;
        border-radius: 50% 50% 0% 50%;
        background-color: #4c9beb;
        display: inline-block;
        z-index: 5;
    }

    .sun {
        width: 120px;
        height: 120px;
        background: -webkit-linear-gradient(to right, #fcbb04, #fffc00);
        background: linear-gradient(to right, #fcbb04, #fffc00);
        border-radius: 60px;
        display: inline;
        position: absolute;
    }

    .sunshine {
        animation: sunshines 2s infinite;
    }

    @keyframes sunshines {
        0% {
            transform: scale(1);
            opacity: 0.6;
        }

        100% {
            transform: scale(1.4);
            opacity: 0;
        }
    }

    @keyframes clouds {
        0% {
            transform: translateX(15px);
        }

        50% {
            transform: translateX(0px);
        }

        100% {
            transform: translateX(15px);
        }
    }
</style>

@endsection