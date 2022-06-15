@extends('header_footer')
<link rel="stylesheet" href="public/css/hotel.css">
<link rel="stylesheet" href="public/css/uikit.min.css" />
<script src="public/js/uikit.min.js"></script>
<script src="public/js/uikit-icons.min.js"></script>
@section('main_content')
<style>
    .btn {
        width: 200px;
        border-radius: 90pt;
        border-color: darkred;
        color: darkred;
    }

    .desc {
        width: 20px;
        background-color: red;
    }

</style>
<script>
    $(document).ready(function () {
        $('.rec').click(function () {
            $('#modal').fadeIn(300);
        });
        $('#modal').on('click', function (e) {
            if (e.target.id == 'modal') {
                $(this).hide();
            }
        });
    });

</script>


<div class="mainContent" style="overflow-x: hidden">

    <div id="modal">
        <div id="form1">

            <h5>Забронировать</h5>
            <form action="{{route('booking')}}" method="GET" enctype="multipart/form-data">
                @method('GET')
                @csrf
                Имя: <input type="text" required id="name" name="name" class="form-control"
                    placeholder="Введите ваше имя"><br>

                Дата въезда: <input type="date" name="date1" class="form-control" id="datePickerId"><br>
                Дата выезда: <input type="date" name="date2" class="form-control"><br>

                Желаемая комната:
                <div id="reveal-wrap">
                    <p id="reveal-click" class="form-select optin">Выберите комнату</p>
                    <div id="hidden-div">
                        <ul class="optin" style="font-size:15px">
                            <div class="form-check">
                                @foreach ($room as $rooms)
                                <input type="checkbox" name="rooms[]" value="{{ $rooms['title'] }}"
                                    class="form-check-input">
                                <label class="form-check-label" for="exampleCheck1"></label>{{ $rooms['title'] }}
                                </label><br>
                                @endforeach
                            </div>
                        </ul>

                    </div>
                </div>
                Номер телефона: <input type="tel" name="number" class="form-control" placeholder="+7" required>
                <br>
                <button type="submit" class="btn btn-default" id="but2">Отправить</button>
            </form>
        </div>
    </div>
    <div class="baner">
        <img src="public/img/hotel/043.jpg" alt="" class="imgMain">
    </div>

    <!-- <div id="entry">
    <h4>Не с кем оставить своего питомца?</h6>
    Зоогостиница Mr.Groomy поможет вам с этим. Забронируйте уютный номер-бокс и наши сотрудники присмотрят за вашим любимцем. Все работники имеют ветеринарное образование и смогут оказать первую помощь, если что-то пойдёт не так. Умеем находить подход ко всем, наша цель избавить питомцев от стресса и развлечь их на время отсутствия хозяев.
    </div> -->

    <div id="wherefore">
        <h3>Пригодится, если: </h3>
        <div class="icon">
            <div>
                <img src="public/img/hotel/icon/beach.png" alt="">
                <p>Отпуск</p>
            </div>
            <div>
                <img src="public/img/hotel/icon/case.png" alt="">
                <p>Командировка</p>
            </div>
            <div>
                <img src="public/img/hotel/icon/moving.png" alt="">
                <p>Переезд</p>
            </div>
            <div>
                <img src="public/img/hotel/icon/repair.png" alt="">
                <p>Ремонт</p>
            </div>
        </div>
    </div>

    <div id="whatGet">
        <h3>Что вы у нас получите: </h3>
        <div class="whatGetIcon">
            <img src="public/img/hotel/dog3.png" alt="" class="whatGetImg" style="">
            <div>
                <img src="public/img/hotel/icon/miska3.png" alt="" style="padding-top:14px">
                <p>Кормление по вашему расписанию</p>
            </div>
            <div>
                <img src="public/img/hotel/icon/house.png" alt="">
                <p>Просторные номера</p>
            </div>
            <div>
                <img src="public/img/hotel/icon/tree.png" alt="">
                <p>Выгул 3 раза в день</p>
            </div>
            <div>
                <img src="public/img/hotel/icon/video.png" alt="" style="margin-top:30px">
                <p>Фотоотчёт</p>
            </div>
            <div>
                <img src="public/img/hotel/icon/zabor.png" alt="" style="margin-top:30px">
                <p>Огороженная территория</p>
            </div>
            <div>
                <img src="public/img/hotel/icon/sel.png" alt="" style="margin-top:30px">
                <p style="">Акции</p>
            </div>
        </div>
    </div>

    <div id="rules">
        <h3><img src="public/img/hotel/icon/warning2.png" alt="" style="width:30px; padding-bottom:5px"> Важно</h3>
        Мы принимаем только клинически здоровых и привитых животных.
        На момент приема в зоогостиницу в наличии должен быть ветеринарный паспорт с отметкой о плановой прививке.
        <br><br>
        Рекомендуем привезти с собой любимый корм, лежанку и игрушки. Для кошек также понадобится привычный наполнитель.
        Это нужно для того, чтобы питомцу было комфортнее в новой обстановке.
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        <h6 style="color: black">{{session('success')}}</h6>
    </div>
    @endif

    <div class="tab" id="tab">
        <div>
            <img src="public/img/hotel/cat.gif" alt="" style="width: 70px">
        </div>
        <button class="tablinks" onclick="openCity(event, 'Cat')" id="defaultOpen">Кошки</button>
        <button class="tablinks" onclick="openCity(event, 'Dog')">Собаки</button>
    </div>

    <div id="Cat" class="tabcontent">
        @foreach($room as $roomCat)
        @if($roomCat['id']<=3) 
        <div class="room">
            <div class="t">
                <div>
                <h3>{{$roomCat->title}}</h3>
                <span style="">{{$roomCat->description}}</span>
                </div>
                <div >
                
                <span></span>
                <p class="price" >{{$roomCat->price}} руб/сутки </p>
                </div> 
            </div>
            <div class="panel-heading">
                            <button type="button" class="btn more form-select" onclick="changeText()"
                                data-toggle="collapse">Подробнее</button>
                            <button class="btn rec"
                                style="background-color: darkred; color:white">Забронировать</button>
                        </div>
                        <div class="panel-collapse collapse out ">
                            <div class="panel-body">
                                {{$roomCat->description2}}
                            </div>
                            <div class="panel-body row uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                                <div class="row uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                                    <a class="uk-inline" href="{{$roomCat->photo}}">
                                        <img class="img-fluid" src="{{$roomCat->photo}}" alt="{{$roomCat->photo}}">
                                    </a>
                                </div>
                            </div>
                            </div></div>
            <!-- <table>
                <tr>
                    <td>
                        <h3>{{$roomCat->title}}</h3>
                    </td>
                </tr>
                <tr>
                    <td style="padding-right: 50px">{{$roomCat->description}}</td>
                    <td class="price">{{$roomCat->price}} руб/сутки <br>
                    </td>
                </tr>
                <tr width="1050">
                    <td colspan="2">
                        <div class="panel-heading">
                            <button type="button" class="btn more form-select" onclick="changeText()"
                                data-toggle="collapse">Подробнее</button>
                            <button class="btn rec"
                                style="background-color: darkred; color:white; font-size: 20px;">Забронировать</button>
                        </div>
                        <div class="panel-collapse collapse out ">
                            <div class="panel-body">
                                {{$roomCat->description2}}
                            </div>
                            <div class="panel-body row uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                                <div class="row uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                                    <a class="uk-inline" href="{{$roomCat->photo}}">
                                        <img class="img-fluid" src="{{$roomCat->photo}}" alt="{{$roomCat->photo}}">
                                    </a>
                                </div>
                            </div>
                    </td>
                </tr>
            </table>
    </div>
     -->
<hr>
    @endif
    @endforeach
</div>

<div id="Dog" class="tabcontent">
    @foreach($room as $roomDog)
    @if($roomDog['id']>=4 )
    <div class="room">
            <div class="t">
                <div>
                <h3>{{$roomDog->title}}</h3>
                <span style="">{{$roomDog->description}}</span>
                </div>
                <div >
                
                <span></span>
                <p class="price" >{{$roomCat->price}} руб/сутки </p>
                </div> 
            </div>
                    <div class="panel-heading">
                        <button type="button" class="btn btn-default btn-xs more form-select"
                            data-toggle="collapse">Подробнее</button>
                        <button class="btn rec"
                            style="background-color: darkred;">Забронировать</button>
                    </div>
                    <div class="panel-collapse collapse out">
                        <div class="panel-body">
                            {{$roomDog->description2}}
                        </div>
                        <div class="panel-body row uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                                <div class="row uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                                    <a class="uk-inline" href="{{$roomDog->photo}}">
                                        <img class="img-fluid" src="{{$roomDog->photo}}" alt="{{$roomDog->photo}}">
                                    </a>
                                </div>
                            </div>
                    </div>
                </td>


            </tr>
        </table>
    </div>
    <hr>
    @endif
    @endforeach
</div>


</div>
<script>
    datePickerId.min = new Date().toLocaleDateString('en-ca');
    $(".more").click(function () {
        $(this).parent().next().collapse('toggle');
    });

</script>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

</script>
@endsection
