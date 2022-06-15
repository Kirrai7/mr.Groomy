@extends('header_footer')
    <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="public/css/contact.css">

<body>


@section('main_content')

<div id="block">

<div>
<div class="wrapper">
            <span class="obs-el" id="obs-el">
            <h2>Контакты</h2>
            </span>
        </div>
<div class="info">
    <img src="public/img/icon/icons8-заказ-доставлен-50.png" alt=""> {{$contact->adres}} <br><br>
   <img src="public/img/icon/icons8-телефон-60.png" alt=""> {{$contact->number}}<br><br>
    <img src="public/img/icon/icons8-почта-50.png" alt="">  {{$contact->email}}<br><br>
    <img src="public/img/icon/icons8-время-доставки-50.png" alt="">  {{$contact->time_work}}
    </div>
</div>
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2279.600130759154!2d61.2952722153098!3d55.15527584538444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43c5924fdee7d645%3A0x7b9cd894e9b67182!2z0YPQuy4g0JvQtdC90LjQvdCwLCA1Mywg0KfQtdC70Y_QsdC40L3RgdC6LCDQp9C10LvRj9Cx0LjQvdGB0LrQsNGPINC-0LHQuy4sIDQ1NDkwMg!5e0!3m2!1sru!2sru!4v1647517928041!5m2!1sru!2sru" width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
@endsection

</body>
</html>