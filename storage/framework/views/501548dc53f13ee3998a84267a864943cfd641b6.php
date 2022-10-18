<title>Digital Trend HTML Template</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend


-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="title" content="head.title">
<meta name="description" content="head.description">
<meta name="keywords" content="head.heywords">
<meta name="robots" content="head.robots">
<meta name="author" content="PSSI">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/aos.css')); ?>" rel="stylesheet">
<!--<link href="<?php echo e(asset('css/swiper.css')); ?>"  rel="stylesheet">-->
<link href="<?php echo e(asset('css/purpose.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
<link href="/toastr.min.css" rel="stylesheet"/>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="/css/lc_lightbox.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"
/>
<style>
    article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,video{display:inline-block}audio:not([controls]){display:none;height:0}[hidden]{display:none}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}a:focus{outline:thin dotted}a:active,a:hover{outline:0}h1{font-size:2em;margin:.67em 0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}mark{background:#ff0;color:#000}code,kbd,pre,samp{font-family:monospace,serif;font-size:1em}pre{white-space:pre-wrap}q{quotes:"\201C" "\201D" "\2018" "\2019"}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:0}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{border:0;padding:0}button,input,select,textarea{font-family:inherit;font-size:100%;margin:0}button,input{line-height:normal}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}table{border-collapse:collapse;border-spacing:0}

    #logo {
        background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAYlJREFUeNrcV4FtgzAQBJQB3AlCN0gmiNkgnaBhg25QMUHSCUInKJkgZgNGyAhskP6r58qJsCEUE5qXLMvI8t//359NGDhMytWepk3gz7LQ4VzSdAw8WxTc2WYd9ymlymQop5Td87/IQEVDR137AhAahPNlFZWvtpVgRgtmulcA5CO5BmFyQHou8wJjmm3YB0B9TwAp1fKJ5mcap7EB7Mh5/qNKJTv/GAuAQsSHq+/zMaQ4R6RfzGRqpwJrZvWbbwDaGeuEwLc1hmm6HNshS8BMTxG5aDkjxv5sSAAFIo07nsPR7/p0RuSI6vWGcwQ4UQwFQPaQ6FVDp0z/RTRJAMxovj75rbDsqP0pnmyVjYikIawjR1z/TgA5HaYguRXEqO29qCXa1Y6iiVuRZaNr3dQxrrUTfGg+j8wfBtwBJ+hBm8pxBj7hfNsAWpdncZm60grA5EOG/n5H+mIAEx2y8wtAl/XWLhCIiCW5pPECciZ9ROcvPyacuj3Y/Pg6MDqAzLOP3EZAtm8BBgDqc3bEpb6xyQAAAABJRU5ErkJggg==') no-repeat center center transparent;
        background-size: contain;
        width: 25px;
        height: 25px;
        display: inline-block;
        position: relative;
        bottom: -4px;
        left: -4px;
    }

    .elem, .elem * {
        box-sizing: border-box;
        margin: 0 !important;
    }
    .elem {
        display: inline-block;
        font-size: 0;
        width: 33%;
        border: 20px solid transparent;
        border-bottom: none;
        background: #fff;
        padding: 10px;
        height: auto;
        background-clip: padding-box;
    }
    .elem > span {
        display: block;
        cursor: pointer;
        height: 0;
        padding-bottom:	70%;
        background-size: cover;
        background-position: center center;
    }


    .testimonial p {
        font-size: 28px;
        letter-spacing: 0.02em;
        line-height: 35px;
    }
    .testimonial .name {
        font-weight: bold;
        font-size: 18px;
        letter-spacing: 0.04em;
        line-height: 35px;
        text-align: left;
    }
    .testimonial .designation {
        font-size: 14px;
        letter-spacing: 0.04em;
        text-align: left;
        color: #fff;
        opacity: 0.65;
    }
    .unt {
        margin-bottom: 20px;
        margin-top: 60px;
    }
    .hero-text {
        font-size: 30px;
        letter-spacing: 0.02em;
        color: #fff;
    }
    .gallery-thumbs {
        height: 100%;
        background-color: #f0f8ff;
    }
    .gallery-thumbs .swiper-wrapper {
        align-items: center;
    }
    .gallery-thumbs .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 250px !important;
        height: 330px;
        position: relative;
    }
    .gallery-thumbs .swiper-slide img {
        filter: contrast(0.5) blur(1px);
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }
    .gallery-thumbs .swiper-slide-active img {
        filter: contrast(1) blur(0px) !important;
    }
    .flex-row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    .flex-row .flex-col {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .gallery-thumbs .swiper-wrapper {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }


    .testimonial-section .quote {
        width: 75%;
        height: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 100px;
        padding-right: 100px;
    }
    .swiper-container.testimonial {
        height: 50vh;
    }
    .testimonial-section .user-saying {
        background: white;
        width: 60%;
        color: #fff;
        height: 100%;
    }
    .testi-user-img {
        width: 40%;
    }
    .testimonial-section {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        width: 100%;
        height: 50%;
    }
    .testimonial-section .quote p {
        font-size: 20px;
        font-weight: 300;
        line-height: 1.8;
        font-style: italic;
        margin: 0;
    }
    .quote-icon {
        width: 38px;
        display: block;
        margin-bottom: 30px;
    }

</style>
<?php /**PATH /Users/mac/Downloads/www/resources/views/common/head.blade.php ENDPATH**/ ?>