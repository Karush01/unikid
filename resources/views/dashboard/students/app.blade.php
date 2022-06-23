<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="{{ asset('/assets/auth_and_dashboard/css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/auth_and_dashboard/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/auth_and_dashboard/css/media.css') }}" rel="stylesheet">
</head>
<body>

<header id="header">
    <div class="wrp">
        <a href="/" class="header-logo">
            <img src="{{ asset('/assets/auth_and_dashboard/img') }}/logo.svg" alt="logo">
            Unikid
        </a>
        <input id="menu__toggle" type="radio" />
        <label class="menu__btn" for="menu__toggle">
            <div>
                <span></span>
            </div>
        </label>
        <div class="header-second-menu">
            <a href="#" id="header-second-menu-toggle"><img src="{{ asset('/assets/auth_and_dashboard/img') }}/message-icon.svg" alt="message"></a>
            <div class="header-second-menu-wrp">
                <div class="header-second-menu-items">
                    <a href="#" class="active">Ученики</a>
                    <a href="#">Материалы</a>
                    <a href="#">Настройки</a>
                </div>
            </div>
        </div>
        <ul class="header-menu">
            <li><a href="#">Преподаватели</a></li>
            <li><a href="#">Стоимость</a></li>
            <li><a href="#">Программа курса</a></li>
            <li><a href="#">Новости</a></li>
        </ul>
        <div class="header-in">
            <a href="{{ url('/logout') }}" class="header-in-exit button">Выйти</a>
            <a href="#" class="header-in-profile">
                <img src="{{ asset('/assets/auth_and_dashboard/img') }}/prepod-img.jpg" alt="prepod">
            </a>
        </div>
    </div>
</header>
<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>
<footer id="footer">
    <div class="wrp">
        <a href="#">Пользовательское соглашение</a>
        <a href="#">Политика конфиденциальности</a>
        <a href="#">Политика использования файлов cookie</a>
        <p>© Uni-kid.ru</p>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('/assets/auth_and_dashboard/js/main.js') }}"></script>
<script>
    (function() {
        $(document).on("click",".edit_data",function(e) {
            e.preventDefault();
            var this_elem = $(this).get(0);
            this_elem.style.display = 'none';
            this_elem.previousElementSibling.style.display = 'block';
            this_elem.nextElementSibling.style.display = 'block';
        });
        $(document).on("click",".save_data",function(e) {
            e.preventDefault();
            var this_elem = $(this).get(0);
            var input_val = this_elem.parentElement.getElementsByTagName('input')[0].value;
            var form_container = document.getElementsByClassName('profile-info')[0];
            var get_inputs = form_container.getElementsByTagName('input');
            var form_all_data = [];
            for(var i=0;i<get_inputs.length;i++){
                var current_inp = get_inputs[i];
                var key_new = current_inp.name;
                form_all_data[current_inp.name] = current_inp.value
                // form_all_data.push({
                //     key_new: current_inp.value
                // });
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{ url('/student/edit-account-data') }}",
                method: 'post',
                dataType: 'JSON',
                data: {
                    form_data:{
                        name: form_all_data['name'],
                        email: form_all_data['email'],
                        skype: form_all_data['skype'],
                        teaching_profession: form_all_data['teaching_profession'],
                        child_name: form_all_data['child_name'],
                        child_gender: form_all_data['child_gender'],
                        child_age: form_all_data['child_age'],
                        birth_date: form_all_data['birth_date'],
                        phone: form_all_data['phone'],
                        another_phone: form_all_data['another_phone'],
                        interface_language: form_all_data['interface_language'],
                        time_zone: form_all_data['time_zone'],
                        child_hobbies: form_all_data['child_hobbies'],
                        wishes_for_training: form_all_data['wishes_for_training'],
                        study_notes: form_all_data['study_notes'],

                        admin_comments: form_all_data['admin_comments'],
                        receive_email: form_all_data['receive_email'],
                        receive_notifications_messenger: form_all_data['receive_notifications_messenger']
                    },
                    _token: "{{ csrf_token() }}"
                },
                success: function(response){
                    window.location.reload();
                }});

            // this_elem.style.display = 'none';
            // this_elem.previousElementSibling.style.display = 'block';
            // this_elem.nextElementSibling.style.display = 'block';
        });
    })();
</script>
</body>
</html>
