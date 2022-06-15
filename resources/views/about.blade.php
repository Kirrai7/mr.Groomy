@extends('header_footer')
    <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="public/css/slider1.css">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- fancyBox CSS -->
    <link href="public/js/jquery.fancybox.min.css" rel="stylesheet">


<body>


    
    @section('main_content')

    <div class="wrapper">
            <span class="obs-el" id="obs-el">
            <h2>О салоне</h2>
            </span>
    </div>
    <div class="blockText">
        <pre><span class="textAbout">{{$about->text}}</span></pre>
        <img src="public/img/salon/2.jpeg" alt="">
    </div>
    
<div class="wrapper">
            <span class="obs-el1" id="obs-el1">
            <h2>Наши работники</h2>
            </span>
        </div>
    <div id="worker">
        
        <!-- Разметка слайдера -->
        <div class="slider">
        @foreach($master as $m)
            <div class="item">
                
                    <div>
                        <img src="{{$m->photo}}" alt="Первый слайд">
                        <div class="textsl">{{$m->name}}</div>
                        <div class="textsl">{{$m->time_work}}</div>
                    </div>
                
            </div>
            @endforeach 

            <a class="prev" onclick="minusSlide()">&#10094;</a>
            <a class="next" onclick="plusSlide()">&#10095;</a>
        </div>

        <div class="slider-dots">
            <span class="slider-dots_item" onclick="currentSlide(1)"></span>
            <span class="slider-dots_item" onclick="currentSlide(2)"></span>
            <span class="slider-dots_item" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <div class="question">
        <p>Остались вопросы? Задайте их нашим специалистам, позвонив по телефону +7 990 256 21 58.
            <br>Мы проконсультируем Вас по любым вопросам. </p>
    </div>
    <script src="public/js/wow.min.js"></script>
    <script src="public/js/main.js"></script>
    <script src="public/js/slider1.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    @endsection

</body>

</html>
