@extends('dashboard.teachers.app')

@section('content')
    <section id="lk-student">
        <div class="wrp">
            <div class="reserv">
                <h2 class="header-sec">Ученик: Daniil</h2>
            </div>
            <div class="profile-link">
                <h2 class="header-sec">Классная комната</h2>
                <p>
                    <span id="profile-link">https://allright.com/ru/admin/edit-user?user_id=304579</span>
                    <a nohref="" onclick="profilelink()"><img src="{{ asset('/assets/auth_and_dashboard/img') }}/profile-link-icon.svg" alt="link"></a>
                </p>
            </div>
            <div class="lesson-prev">
                <h2 class="header-sec">Прошедший урок</h2>
                <div class="lesson-prev-wrp">
                    <div class="lesson-prev__img">
                        <img src="{{ asset('/assets/auth_and_dashboard/img') }}/prepod-img.jpg" alt="prepod">
                    </div>
                    <div class="lesson-prev__info">
                        <p class="lesson-prev__info-date">Суббота, 12 марта 2022, 9:30</p>
                        <div>
                            <div class="lesson-prev__info-main">
                                <div class="lesson-prev__info-main-info">
                                    <p>Anastasia G.</p>
                                    <p>25 мин.</p>
                                </div>
                                <div class="lesson-prev__info-main-rating">
                                    <p>Оцените этот урок</p>
                                    <img src="{{ asset('/assets/auth_and_dashboard/img') }}/rating-icons.svg" alt="rating">
                                </div>
                                <a href="#" class="button">Домашнее задание</a>
                            </div>
                            <div class="lesson-prev__info-main-comment">
                                <p>Комментарий учителя</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="lesson-prev__link">Предыдущие</a>
                </div>
            </div>
            <div class="lesson-next">
                <h2 class="header-sec">Следующие уроки</h2>
                <div class="lesson-next-item">
                    <div class="lesson-next-item__img">
                        <img src="{{ asset('/assets/auth_and_dashboard/img') }}/prepod-img.jpg" alt="prepod">
                    </div>
                    <div class="lesson-next-item__info">
                        <p class="lesson-next-item__info-date">Суббота, 14 марта 2022, 9:30</p>
                        <div class="lesson-next-item__info-main">
                            <div class="lesson-next-item__info-main-info">
                                <p>Anastasia G.</p>
                                <p>25 мин.</p>
                            </div>
                            <div class="lesson-next-item__info-main-time">
                                <p>Москва UTC+3</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="lesson-next-item__link">Предыдущие</a>
                </div>
                <div class="lesson-next-item">
                    <div class="lesson-next-item__img">
                        <img src="{{ asset('/assets/auth_and_dashboard/img') }}/prepod-img.jpg" alt="prepod">
                    </div>
                    <div class="lesson-next-item__info">
                        <p class="lesson-next-item__info-date">Суббота, 14 марта 2022, 9:30</p>
                        <div class="lesson-next-item__info-main">
                            <div class="lesson-next-item__info-main-info">
                                <p>Anastasia G.</p>
                                <p>25 мин.</p>
                            </div>
                            <div class="lesson-next-item__info-main-time">
                                <p>Москва UTC+3</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="lesson-next-item__link">Предыдущие</a>
                </div>
                <div class="lesson-next-item">
                    <div class="lesson-next-item__img">
                        <img src="{{ asset('/assets/auth_and_dashboard/img') }}/prepod-img.jpg" alt="prepod">
                    </div>
                    <div class="lesson-next-item__info">
                        <p class="lesson-next-item__info-date">Суббота, 14 марта 2022, 9:30</p>
                        <div class="lesson-next-item__info-main">
                            <div class="lesson-next-item__info-main-info">
                                <p>Anastasia G.</p>
                                <p>25 мин.</p>
                            </div>
                            <div class="lesson-next-item__info-main-time">
                                <p>Москва UTC+3</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="lesson-next-item__link">Предыдущие</a>
                </div>
                <a href="#" class="button">Забронировать урок</a>
            </div>
        </div>
    </section>
@endsection
