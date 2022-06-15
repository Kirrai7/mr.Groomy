@extends('header_footer')
    <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/services.css">
    <link rel="stylesheet" href="public/css/checkbox.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>

    </style>



<body>
    @section('main_content')
<div class="main_content">


    <div class="wrapper">
            <span class="obs-el" id="obs-el">
            <h2>Услуги для кошек</h2>
            </span>
    </div>

    <table id="table_cat">
        <tr>
            <th>Название</th>
            <th>Для короткошёрстных</th>
            <th>Для длинношёрстных</th>
        </tr>
        @foreach($servicesCat as $s_cat)
        <tr>
            <td>{{$s_cat->title}}</td>
            <td>{{$s_cat->price_short}} руб</td>
            <td>{{$s_cat->price_long}} руб</td>
        </tr>
        @endforeach
    </table>

    <div class="prompt">
        <img src="public/img/icon/icons8-звездочка-50.png" alt="" class="star">
        В комплекс входит: мытьё, стрижка, стрижка когтей, чистка зубов.
    </div>


    <div class="wrapper">
            <span class="obs-el1" id="obs-el1">
            <h2>Услуги для собак</h2>
            </span>
    </div>

    <table id="table_dog">
        <tr>
            <th>Название</th>
            <th>До 10кг</th>
            <th>10-30кг</th>
            <th>От 30кг</th>
        </tr>
        @foreach($servicesDog as $s_short)
        <tr>
            <td>{{$s_short->title}}</td>
            <td>{{$s_short->price10}} руб</td>
            <td>{{$s_short->price10_30}} руб</td>
            <td>{{$s_short->price30}} руб</td>
        </tr>
        @endforeach
    </table>

    <div class="prompt">
        <img src="public/img/icon/icons8-звездочка-50.png" alt="" class="star">
        В комплекс &#171на выставку&#187 входит: стрижка когтей, чистка ушей, купание, креативная стрижка.
        <img src="public/img/icon/icons8-звездочка-50.png" alt="" class="star">
        В комплекс &#171домашний&#187 входит: стрижка когтей, чистка ушей, купание, гигиеническая стрижка.
    </div>
    @endsection
    
</div>
</body>

</html>
