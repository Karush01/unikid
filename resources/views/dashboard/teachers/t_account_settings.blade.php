@extends('dashboard.teachers.app')

@section('content')
    @if($data != '0')
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
                        <p class="lk-profile__info-name">{{$data->name}}</p>
                        <p>Телефон:{{$data->phone}}</p>
                        <p>Email: {{$data->email}}</p>
                        <p>Язык: RU</p>
                        <a href="#">Изменить аватар</a>
                    </div>
                </div>

                <div class="profile-info">
                    <h2 class="header-sec">Личное</h2>
                    <div class="profile-info-wrp">
                        <div class="profile-info-item">
                            <p>Имя</p>
                            <p>{{$data->name}}</p>
                            <input type="text" name="name" value="{{$data->name}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Email</p>
                            <p>{{$data->email}}</p>
                            <input type="text" name="email" value="{{$data->email}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Отвязать Email</p>
                            <p>natasim@gmail.com</p>
                            <a href="#">Отвязать Email</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Skype</p>
                            <p>{{$data->skype}}</p>
                            <input type="text" name="skype" value="{{$data->skype}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Учу</p>
                            <p>{{$data->teaching_profession}}</p>
                            <input type="text" name="teaching_profession" value="{{$data->teaching_profession}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Имя ребёнка</p>
                            <p>{{$data->child_name}}</p>
                            <input type="text" name="child_name" value="{{$data->child_name}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Пол ребёнка</p>
                            <p>{{$data->child_gender}}</p>
                            <input type="text" name="child_gender" value="{{$data->child_gender}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Возраст ребёнка</p>
                            <p>{{$data->child_age}}</p>
                            <input type="text" name="child_age" value="{{$data->child_age}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Дата рождения</p>
                            <p>{{$data->birth_date}}</p>
                            <input type="date" name="birth_date" value="{{$data->birth_date}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Телефон</p>
                            <p>{{$data->phone}}</p>
                            <input type="text" name="phone" value="{{$data->phone}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Доп. телефон</p>
                            <p>{{$data->another_phone}}</p>
                            <input type="text" name="another_phone" value="{{$data->another_phone}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Язык интерфейса</p>
                            <p>{{$data->interface_language}}</p>
                            <input type="text" name="interface_language" value="{{$data->interface_language}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Часовой пояс</p>
                            <p>{{$data->time_zone}}</p>
                            <input type="text" name="time_zone" value="{{$data->time_zone}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Увлечения ребёнка</p>
                            <p>{{$data->child_hobbies}}</p>
                            <input type="text" name="child_hobbies" value="{{$data->child_hobbies}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Пожелания к обучению</p>
                            <p style="opacity: .5;">{{$data->wishes_for_training}}</p>
                            <input type="text" name="wishes_for_training" value="{{$data->wishes_for_training}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Учебные заметки</p>
                            <p style="opacity: .5;">{{$data->study_notes}}</p>
                            <input type="text" name="study_notes" value="{{$data->study_notes}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Комментарий администратора</p>
                            <p style="opacity: .5;">{{$data->admin_comments}}</p>
                            <input type="text" name="admin_comments" value="{{$data->admin_comments}}"/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                    </div>
                    <div class="profile-info-buttons" style="display: none">
                        <a href="#" class="button">
                            Редактировать
                        </a>
                        <a href="#" class="button">
                            Сохранить
                        </a>
                    </div>
                </div>

                <div class="profile-sub">
                    <h2 class="header-sec">Уведомления</h2>
                    <div class="profile-info-wrp">
                        <div class="profile-info-item-toggle">
                            <p>Получать email напоминания об уроках:</p>
                            <label class="toggle">
                                <input name="receive_email" value="Получать email напоминания об уроках:" type="checkbox"/>
                                <div class="toggle-block"></div>
                            </label>
                        </div>
                        <div class="profile-info-item-toggle">
                            <p>Получать уведомления в Ваш мессенджер:</p>
                            <label class="toggle">
                                <input name="Подписки" value="Получать уведомления в Ваш мессенджер:" type="checkbox"/>
                                <div class="toggle-block"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
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
                        <p class="lk-profile__info-name"></p>
                        <p>Телефон:</p>
                        <p>Email: </p>
                        <p>Язык: RU</p>
                        <a href="#">Изменить аватар</a>
                    </div>
                </div>

                <div class="profile-info">
                    <h2 class="header-sec">Личное</h2>
                    <div class="profile-info-wrp">
                        <div class="profile-info-item">
                            <p>Имя</p>
                            <p></p>
                            <input type="text" name="name" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Email</p>
                            <p></p>
                            <input type="text" name="email" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Отвязать Email</p>
                            <p>natasim@gmail.com</p>
                            <a href="#">Отвязать Email</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Skype</p>
                            <p></p>
                            <input type="text" name="skype" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Учу</p>
                            <p></p>
                            <input type="text" name="teaching_profession" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Имя ребёнка</p>
                            <p></p>
                            <input type="text" name="child_name" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Пол ребёнка</p>
                            <p></p>
                            <input type="text" name="child_gender" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Возраст ребёнка</p>
                            <p></p>
                            <input type="text" name="child_age" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Дата рождения</p>
                            <p></p>
                            <input type="date" name="birth_date" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Телефон</p>
                            <p></p>
                            <input type="text" name="phone" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Доп. телефон</p>
                            <p></p>
                            <input type="text" name="another_phone" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Язык интерфейса</p>
                            <p></p>
                            <input type="text" name="interface_language" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Часовой пояс</p>
                            <p></p>
                            <input type="text" name="time_zone" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Увлечения ребёнка</p>
                            <p></p>
                            <input type="text" name="child_hobbies" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Пожелания к обучению</p>
                            <p style="opacity: .5;"></p>
                            <input type="text" name="wishes_for_training" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Учебные заметки</p>
                            <p style="opacity: .5;"></p>
                            <input type="text" name="study_notes" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                        <div class="profile-info-item">
                            <p>Комментарий администратора</p>
                            <p style="opacity: .5;"></p>
                            <input type="text" name="admin_comments" value=""/>
                            <a href="#" class="edit_data">Изменить</a>
                            <a href="#" class="save_data">Сохранить</a>
                        </div>
                    </div>
                    <div class="profile-info-buttons" style="display: none">
                        <a href="#" class="button">
                            Редактировать
                        </a>
                        <a href="#" class="button">
                            Сохранить
                        </a>
                    </div>
                </div>

                <div class="profile-sub">
                    <h2 class="header-sec">Уведомления</h2>
                    <div class="profile-info-wrp">
                        <div class="profile-info-item-toggle">
                            <p>Получать email напоминания об уроках:</p>
                            <label class="toggle">
                                <input name="receive_email" value="Получать email напоминания об уроках:" type="checkbox"/>
                                <div class="toggle-block"></div>
                            </label>
                        </div>
                        <div class="profile-info-item-toggle">
                            <p>Получать уведомления в Ваш мессенджер:</p>
                            <label class="toggle">
                                <input name="Подписки" value="Получать уведомления в Ваш мессенджер:" type="checkbox"/>
                                <div class="toggle-block"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection
<style>
    .save_data,
    .profile-info-item input {
        display: none;
    }
</style>
