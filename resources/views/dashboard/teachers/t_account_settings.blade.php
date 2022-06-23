@extends('dashboard.teachers.app')

@section('content')
    <section id="lk-settings">
        <div class="wrp">
            <div class="reserv">
                <h2 class="header-sec">Настройки</h2>
            </div>
            <div class="lk-profile">
                <div class="lk-profile__img">
                    <img src="{{ asset('/assets/auth_and_dashboard/img') }}/prepod-img.jpg" alt="prepod">
                </div>
                <div class="lk-profile__info">
                    <p class="lk-profile__info-name">Наталья Смолова</p>
                    <p>Телефон: +78765564323</p>
                    <p>Email: natasim@gmail.com</p>
                    <p>Язык: RU</p>
                    <a href="#">Изменить аватар</a>
                </div>
            </div>
            <div class="profile-info">
                <h2 class="header-sec">Личное</h2>
                <div class="profile-info-wrp">
                    <div class="profile-info-item">
                        <p>Имя</p>
                        <p>Наталья Смолова</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Email</p>
                        <p>natasim@gmail.com</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Отвязать Email</p>
                        <p>natasim@gmail.com</p>
                        <a href="#">Отвязать Email</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Skype</p>
                        <p>@hadsadsa</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Учу</p>
                        <p>Английский</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Имя ребёнка</p>
                        <p>Наталья Смолова</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Пол ребёнка</p>
                        <p>Жен.</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Возраст ребёнка</p>
                        <p>15</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Дата рождения</p>
                        <p>13.07.2007</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Телефон</p>
                        <p>+78765564323</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Доп. телефон</p>
                        <p>+78765564323</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Язык интерфейса</p>
                        <p>Русский</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Часовой пояс</p>
                        <p>UTS +3</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Увлечения ребёнка</p>
                        <p>Спортивная тематика</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Пожелания к обучению</p>
                        <p style="opacity: .5;">Пожелания к обучению</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Учебные заметки</p>
                        <p style="opacity: .5;">Учебные заметки</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Комментарий администратора</p>
                        <p style="opacity: .5;">Комментарий администратора</p>
                        <a href="#" class="update_data">Изменить</a>
                    </div>
                </div>
            </div>
            <div class="profile-sub">
                <h2 class="header-sec">Уведомления</h2>
                <div class="profile-info-wrp">
                    <div class="profile-info-item-toggle">
                        <p>Получать email напоминания об уроках:</p>
                        <label class="toggle">
                            <input name="Подписки" value="Получать email напоминания об уроках:" type="checkbox" />
                            <div class="toggle-block"></div>
                        </label>
                    </div>
                    <div class="profile-info-item-toggle">
                        <p>Получать уведомления в Ваш мессенджер:</p>
                        <label class="toggle">
                            <input name="Подписки" value="Получать уведомления в Ваш мессенджер:" type="checkbox" />
                            <div class="toggle-block"></div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
