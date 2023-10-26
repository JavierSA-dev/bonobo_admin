<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/themes/default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/themes/default.date.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link  href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css"  rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js" integrity="sha512-6UofPqm0QupIL0kzS/UIzekR73/luZdC6i/kXDbWnLOJoqwklBK6519iUnShaYceJ0y4FaiPtX/hRnV/X/xlUQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"  integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="  crossorigin="anonymous"  referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="icon" type="image/x-icon" href="/img/logo-bonobo.png">

    @yield('link-script')
    <title>Educacion | Programas Educativos</title>
    <style>
        .separador-linea{
            height: 1px;
            width: 100%;
            background-color: #cfd3d6;
            position: absolute;
            left: 0;
        }
        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* background-color: #ffcb40; */
            border-bottom: 4px solid #ffcb40;            
            height: 80px;
            padding: 16px 16px 16px 32px;
        }
        main {
            background: #fafafa;
        }
        .titulo-instalacion {
            position: relative !important;
            /* background-color: #0e2433 !important; */
            background-repeat: no-repeat !important;
            background-position: 50% !important;
            background-size: 100% auto !important;
        }
        .contenido-titulo {
            margin: 0 auto;
            padding: 32px 0 40px;
            color: white;
            text-shadow: 1px 1px 1px rgb(0 0 0 / 50%);
        }
        .contenido-titulo h1{
            font-size: 64px;
            font-weight: 600;
            line-height: 1.4;
            margin: 0;
            padding: 0;
        }
        .contenido-titulo .direccion{
            font-size: 16px;
            line-height: 1.4;
            text-indent: 4px;
        }
        .shadow-box {
            box-shadow: -1px 5px 17px 0 rgb(0 0 0 / 10%);
        }
        .card {
            background-color: white !important;
        }
        .contenido-principal {
            padding: 50px 0;
        }
        .filtros {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            border-bottom: 1px solid #f2f2f2;
        }
        .filtros .form-control {
            border: 0 !important;
            border-right: 1px solid #f2f2f2 !important;
            font-weight: bold;
        }
        .pistas-horario .celda {
            text-align: center !important;
            font-size: 1em;
            padding: 0 0 0 0px;
            font-weight: bold;
        }
        .tabla-horario {
            display: flex;
            position: relative;
        }

        @media(max-width: 1400px) {
            #containerScroll{
                display: block !important;
                position: relative;
            }
            .pistas-horario{
                position: fixed;
                z-index: 20;
                top: 0;
            }
            .actividadesCelda small{
                font-size: 1em;
            }
            .firstCelda{
                height: inherit !important;
            }

            .pistas-horario{
                position: sticky;
                z-index: 20;
                top: 0;
            }
            .actividadesCelda{
                width: 150px;
            }
            .arrow-show-container{
                display: none;
            }

            .messageInfo{
                max-width: 100% !important;
            }

            .pistas-horario .celda {
                text-align: center !important;
                font-size: 0.7em;}

            .pistas-horario {
                background: lightgray;
                display: flex !important;
            }
            .tabla-horario {
                display: block !important;
            }
            .tramos {
                display: flex !important;
            }
            .horas-tramos {
                display: block !important;
            }
            .horas-tramos-pistas {
                display: flex !important;
                width: 100% !important;
            }
            .horas-tramos-pistas>div, .horas-tramos-pistas>div>div, .pistas-horario .celda:not(:first-child) {
                width: 100% !important;
            }
            .horas-tramos-pistas .celda {
                height:40px !important;
                width: 100% !important;
            }
            .block-before{
                display: none !important;
            }
            .slots-horas {
                display: block
            }
            .pistas-horario .celda:first-child {
                padding: 19px;
            }
            h1 {
                font-size: 2rem !important;
            }
            .contenido-titulo {
                padding: 16px;
            }
            .card-reserva {
                width: auto !important;
            }

            .filtros>div {
                text-align: center;
                width: 100%
            }
            .show-responsive {
                display: block !important;
            }
            .slot-reserva a {
                display: flex !important;
                justify-content: center;
                align-items: center;
            }
            .contenido-principal {
                padding: 50px 15px;
            }
        }
        .show-responsive {
            display: none;
            color: white;
        }
        .leyenda {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 8px;
        }
        .leyenda div {
            color: rgba(1,1,1,.4);
            display: flex;
            align-items: center;
            margin-left: 16px;
            cursor: default;
        }
        .leyenda div::before{
            content: "";
            display: block;
            width: 12px;
            height: 12px;
            border: 1px solid #f2f2f2;
            margin-right: 8px;
            border-radius: 4px;
        }
        .disponible::before{
            background-color: #198754;
        }
        .reservada::before{
            background-color: #8f0d1a;
        }
        .no-disponible::before{
              background-color: grey;
          }
        .list-tags {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
        }
        .list-tags li {
            display: flex;
            align-items: center;
            margin: 4px;
            padding: 0 8px;
            height: 28px;
            line-height: 28px;
            font-size: 12px;
            font-weight: 500;
            background-color: #e7e9eb;
            border-radius: 14px;
            white-space: nowrap;
            color: #000;
            border: 0;
            cursor: default;
        }
        .group-horario li {
            display: flex;
            justify-content: space-between;
        }
        .group-horario li>div {
            font-weight: 500;
        }
        .card-info p {
            margin-bottom: 0.25rem;
        }
        .num-dia-evento {
            color: #335fff;
        }
        .titulo-evento {
            text-transform: uppercase;
            font-weight: 600;
            font-size: 17px;
            margin-bottom: 4px;
        }
        .cierre-inscrp {
            font-size: 14px;
        }
        .item-evento {
            border: solid 1px #eaeaea;
            border-left-color: rgb(149, 13, 22);
            margin-bottom: 3px;
        }
        .contenido-evento {
            padding: 10px 0;
        }
        .post-header {
            display: flex;
            justify-content: center;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            box-shadow: 0 8px 24px 0 rgb(47 51 51 / 10%);
            z-index: 10;
            background-color: #fff;
            border-top: 1px solid rgba(1,1,1,.05);
        }
        .menu-header {
            display: flex;
            align-items: center;
            font-size: 16px;
        }
        .menu-header a {
            display: block;
            padding: 1em 0;
            line-height: 1em;
            border-bottom: 2px solid transparent;
            text-decoration: none;
            opacity: .6;
            transition: all .15s;
            position: relative;
            color: black;
        }
        .menu-header a.active {
            opacity: 1;
            border-bottom-color: #335fff;
        }
        .menu-header>a+a {
            margin-left: 2em;
        }
        @media (max-width: 820px) {
            .cartel-evento img{
                max-width: 300px;
            }
            .menu-app{
                display: block !important;
            }
            .fecha_inicio_evento{
                display: block !important;
            }
            .menu-main-header {
                padding: 20px;
                position: absolute;
                top: 79px;
                background: white;
                z-index: 200;
                width: 100%;
                left: 0;
                z-index: 210;
                display: none;
            }
            .menu-main-header>div {
                flex-direction: column;
                width: 100%;
            }
            .menu-main-header .px-3 {
                padding-left: 2rem !important;
                padding-top: 1rem;
                padding-bottom: 1rem;
                opacity: 1;
            }
            .navbar-burger {
                display: block !important;
            }
            .menu-main-header>div>span{
                border-right: none !important;
                padding-right: 0 !important;
                text-wrap: balance;
                max-inline-size: 50ch;
            }
        }
        .navbar-burger {
            color: black;
            font-size: 20px;
            display: none;
        }
        .mesSeleccionado {
            cursor: pointer;
            background: white;
            font-weight: bold;
            position: absolute;
            z-index: 200;
            width: fit-content;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 14px;
        }
        #alt-select-fecha {
            cursor: pointer;
            background: white;
            font-weight: bold;
            position: absolute;
            z-index: 199;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 14px;
        }
        .form-control:disabled, .form-control[readonly]{
            background: white !important;
        }
        .select2-container--default {
            min-width: 132px;
        }
        .info-instalacion {
            max-height: 200px;
            overflow: hidden;
            transition: max-height .55s;
            font-size: 14px;
        }
        .toggle-ver-mas {
            display: block;
            padding: 5px 16px;
            font-size: 16px;
            color: #335fff;
            cursor: pointer;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            margin: 0 auto;
            background-color: #fff;
            border: 0;
            border-radius: 32px;
            border: 1px solid #335fff;
        }
        .info-instalacion:not(.no-max-height)::after {
            content: "";
            display: block;
            position: -webkit-sticky;
            position: sticky;
            bottom: 0;
            height: 40px;
            background: -webkit-gradient(linear,left bottom,left top,from(hsla(0,0%,100%,.8)),to(hsla(0,0%,100%,0)));
            background: -webkit-linear-gradient(bottom,hsla(0,0%,100%,.8),hsla(0,0%,100%,0));
            background: linear-gradient(0deg,hsla(0,0%,100%,.8) 0,hsla(0,0%,100%,0));
        }
        .no-max-height {
            max-height: 2000px;
            margin-bottom: 25px;
            transition: max-height .55s;
        }
        .galeria-intalacion input[type=radio] {
            display: none;
        }
        .galeria-intalacion .card {
        position: absolute;
        width: 60%;
        height: 100%;
        left: 0;
        right: 0;
        margin: auto;
        transition: transform 0.4s ease;
        cursor: pointer;
        }

        .galeria-intalacion .container {
            width: 100%;
            max-width: 800px;
            max-height: 600px;
            height: 100%;
            transform-style: preserve-3d;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .galeria-intalacion .cards {
            position: relative;
            width: 100%;
            height: 100%;
            margin-bottom: 20px;
        }

        .galeria-intalacion img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            -o-object-fit: cover;
                object-fit: cover;
        }

        #item-1:checked ~ .cards #song-3, #item-2:checked ~ .cards #song-1, #item-3:checked ~ .cards #song-2 {
            transform: translatex(-40%) scale(0.8);
            opacity: 0.4;
            z-index: 0;
        }

        #item-1:checked ~ .cards #song-2, #item-2:checked ~ .cards #song-3, #item-3:checked ~ .cards #song-1 {
            transform: translatex(40%) scale(0.8);
            opacity: 0.4;
            z-index: 0;
        }

        #item-1:checked ~ .cards #song-1, #item-2:checked ~ .cards #song-2, #item-3:checked ~ .cards #song-3 {
            transform: translatex(0) scale(1);
            opacity: 1;
            z-index: 1;
        }
        #item-1:checked ~ .cards #song-1 img, #item-2:checked ~ .cards #song-2 img, #item-3:checked ~ .cards #song-3 img {
            box-shadow: 0px 0px 5px 0px rgba(81, 81, 81, 0.47);
        }
        /* .galeria-intalacion{
            height: 350px;
        } */
        @media(max-width:1275px){
            .app-desc{
                display: none !important;
            }


        }
        .containerAlert{
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
    </style>
    @yield('style')
</head>
<body>
    <script>
        // set localstorage variable mantenimiento
        // if (localStorage.getItem('mantenimiento') != 'true') {
        //     window.location.href = '/mantenimiento';
        // }
    </script>
    <header>

        <div class="page-header">
            <a href="/">
                <img src="/img/logo-bonobo.png" style="max-height: 50px">
            </a>
            <a role="button" class="navbar-burger menu-app" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <i class="fas fa-bars"></i>
            </a>
            <div class="menu-main-header">
                <div class="d-flex align-items-center">

                    @if (auth()->user())
                    <span class="text-center" style="padding-right: 10px;border-right: 1px solid #dfd5d5;">
                        Has iniciado sesión como: {{ auth()->user()->name }} <br>
                        <small class="text-center" style="margin: 0 auto;display: block;" >

                        </small>
                    </span>
                    
                    
                        
                    @endif

                    @guest

                    <a href="{{ route('login') }}" class="px-3"><i class="fas fa-sign-in-alt mr-2"></i> Acceder</a>
                    @else

                    <a href="{{ route('admin.dashboard') }}" class="px-3" style="display: block"><i class="fa fa-cog" aria-hidden="true"></i> Administracción</a>
                    <a href="{{ route('signout') }}" class="px-3" style="display: block"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión</a>
                    @endguest
                </div>
            </div>
        </div>
        @yield('post-header')
    </header>
    <main>




        @if(session()->has('error'))
            <div class="row msg-div-error m-0">
                <div class="col-12 p-0">
                    <div class="card">
                        <div class="card-body bg-danger">
                            <p class="mb-0 text-center text-white">{{ session()->get('error') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if(session()->has('message'))
            <div class="row msg-div-error m-0">
                <div class="col-12 p-0">
                    <div class="card">
                        <div class="card-body bg-success">
                            <p class="mb-0 text-center text-white">{{ session()->get('message') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @yield('titulo')

        <div class="contenido-principal container">
            @yield('content')
        </div>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        
        $.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '< Ant',
            nextText: 'Sig >',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['D','L','M','X','J','V','S'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        var old_goToToday = $.datepicker._gotoToday;
        $.datepicker._gotoToday = function(id) {
            old_goToToday.call(this,id);
            this._selectDate(id);
            $('input[type="date"]').blur();
        }
        $.datepicker.setDefaults($.datepicker.regional['es']);
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
        $(document).ready(function () {
            $('.select2').select2({
                minimumResultsForSearch: -1
            });
            $('#modal-mensaje-difusion').modal('show');

            $('.navbar-burger').click(function (e) {
                e.preventDefault();
                $(this).next().toggle();
            });
            
            $('#modalAuth').modal({backdrop: 'static', keyboard: false})  

            $.ajax({
                type: "get",
                url: "/user-session",
                success: function (response) {
                    
                    if (response[1] != null && response[0] == null && response[1].rol != 'admin') {
                        $("#modalAuth").modal("show");
                    }          
                }
            });
            $(".select2").select2();

        });
    </script>
    @yield('script')
</body>
</html>
