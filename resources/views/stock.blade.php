@extends('header_footer')
    <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/stock.css">


<body>
    @section('main_content')
    <div id="main">
<div class="wrapper">
            <span class="obs-el" id="obs-el">
            <h2>Специальные предложения</h2>
            </span>
    </div>
        <div class="portfolio-wrap">
            @foreach($stock1 as $st)
            <div class="portfolio-item">
                <div class="portfolio-item-wrap">
                    <a href="">
                        <img src="{{$st->photo}}">
                        <div class="portfolio-item-inner">
                            <div class="portfolio-heading">
                                <h3>{{$st->title}}</h3>
                            </div>
                            <ul>
                                <pre><li>{{$st->text}}</li></pre>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach





        </div>
    </div>
    </div>
    </div>
    @endsection
</body>

</html>
