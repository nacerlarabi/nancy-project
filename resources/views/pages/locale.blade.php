@extends('layouts.emptymain')

@section('content')
    <!-- HERO -->
<link rel="stylesheet" href="{{ asset('css/main.css?v=2') }}" />
<link rel="stylesheet" href="{{ asset('css/noscript.css?v=2') }}" />

<body class="is-loading">

<!-- Wrapper -->
<div id="wrapper" class="fade-in">
    <div style="position: fixed;width:100%; top:0;">
        <!--                 <div id='coronaBanner' style="display:inline-block; font-size:0.8em; width:100%;background-color:#F8F8FF;margin:auto;padding: 5px;text-align: center;box-shadow: inset 0px -15px 42px -23px rgba(0,0,0,0.75);">
                            <h2 style="color: orange;">INFO COVID-19</h2>
                            <p style="display:inline-block; font-family: Verdana,  Georgia, 'sans serif';line-height: 1.6;">Due to the covid-19 pandemic, the 2020 summer program is canceled</p>
                        </div> -->
    </div>
    <!-- Intro -->
    <div id="intro">Welcome to<br />
        <h1>France Summer Courses</h1>
        <p>Choisissez votre langue </p>
        <p>Choose your language</p>
        <p>Выберите свой язык</p>
        <p>选择你的语言</p>
        <ul class="actions">
            <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="#" class="logo">Massively</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links icons" style="margin: auto;">
            <li class="">
                <a href="/locale/en/">
                    <img src="{{ asset('images/countries/head_en.png') }}" label="English"/>
                </a>
            </li>
            <li class="">
                <a href="/locale/fr/">
                    <img src="{{ asset('images/countries/head_fr.png') }}" label="French"/>
                </a>
            </li>
            <li class="">
                <a href="/locale/zh/">
                    <img src="{{ asset('images/countries/head_su.png') }}" label="chinese"/>
                </a>
            </li>
            <li class="">
                <a href="/locale/ru/">
                    <img src="{{ asset('images/countries/head_ru.png') }}" label="russian"/>
                </a>
            </li>
        </ul>
    </nav>
</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js?1"></script>

</body>
