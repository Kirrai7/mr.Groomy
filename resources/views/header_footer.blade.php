<!doctype html>
<html lang="ru">

<head>
    <link rel="icon" href="public/img/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <title>Груминг-салон mr.Groomy </title>
    <meta name="description" content="Груминг-салон в Челябинске, где окажут профессиональные услуги груминга (стрижка, мытьё, чистка ушей и зубов), а также есть возможность забронировать номер в зоогостинице">


    <link rel="stylesheet" href="public/css/header1.css">
    <link rel="stylesheet" href="public/css/footer.css">
    
   
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />

   
    <style>
        .mainContent{
            background-color: rgb(255, 253, 253);
            overflow-x:hidden;
        }

    </style>
</head>

<body>
    <header class="header">
        <a href="{{ route('index') }}" id="logo"><img src="public/img/лого.png"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="/services">Услуги</a></li>
            <li><a href="/about">О нас</a></li>
            <li><a href="/stock">Акции</a></li>
            <li><a href="/hotel">Гостиница</a></li>
            <li><a href="{{ route('index') }}#gallery">Галерея</a></li>
            <li><a href="/contact">Контакты</a></li>
            <a href="/selectKind"><button type="button" class="border-button" id="but1" value="записаться">Записаться</button></a>
            
        </ul>
    </header>

    <!--  -->


    @yield('main_content')
    <footer>
        <div id="f">
            <div class="f">
                <div class="one">
                    <div class="logo_f">
                        <img src="public/img/лого.png" class="logo_f_img">
                    </div>
                    <div class="contact">
                        <p>
                            г. Челябинск, ул. Ленина, 53<br>
                            ПН-ВС с 9:00 до 21:00<br>
                            Телефон: <br>
                            +7 (990) 256-21-00
                        </p>
                    </div>
                </div>
                <div class='hr'>
                    <p class="ul_f">
                        <li><a href="/services">Услуги</a></li>
                        <li><a href="/about">О нас</a></li>
                        <li><a href="/stock">Акции</a></li>

                    </p>
                </div>
                <div>
                    <p class="ul_f">
                    <li><a href="/hotel">Гостиница</a></li>
                    <li><a href="{{ route('index') }}#gallery">Галерея</a></li>
                    <li><a href="/contact">Контакты</a></li>
                    </p>
                </div>
                <div class="soc_container">
                    <p >
                        Мы в социальных сетях: <br>
                        <a href="https://vk.com/"><img src="public/img/icon/icons8-vk-в-круге-50.png" class="soc"></a>
                        <a href="https://www.whatsapp.com/"><img src="public/img/icon/icons8-whatsapp-50.png" class="soc"></a>
                        <a href="https://web.telegram.org/k/"><img src="public/img/icon/icons8-телеграмма-app-50.png" class="soc"></a>
                    </p>
                </div>

            </div>
        </div>
    </footer>

    <script>
        var select = document.getElementById('agriculture');
            select.addEventListener('change', function(){  
            var getValue = this.value;
            // this в этом контексте - элемент, который запустил фукнцию. То же, что и select.value;
            console.log( getValue );
            });
    </script>

    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */

        function myFunction() {

            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>
    <script>
        $('#reveal-click').click(function () {
            $('#reveal-wrap #hidden-div').slideToggle({
                direction: "up"
            }, 300);
            $(this).toggleClass('clientsClose');
        }); // end click

    </script>
    <script src="public/js/tel.js"></script>
    <script src="public/js/h.js"></script>
    
</body>

</html>
