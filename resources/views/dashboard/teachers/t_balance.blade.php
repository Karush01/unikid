@extends('dashboard.teachers.app')

@section('content')
    <section id="lk-balance">
        <div class="wrp">
            <div class="reserv">
                <h2 class="header-sec">Мой баланс</h2>
            </div>
            <div class="balance-standart">
                <h2 class="header-sec">Стандарт</h2>
                <div class="balance-standart-wrp">
                    <div class="balance-standart-item">
                        <p>Доступно</p>
                        <p>200 уроков</p>
                    </div>
                    <div class="balance-standart-item">
                        <p>Забронировано</p>
                        <p>5 уроков</p>
                    </div>
                    <a href="#">Изменение баланса</a>
                    <a href="#" class="button">Забронировать</a>
                </div>
            </div>
        </div>
    </section>
@endsection
