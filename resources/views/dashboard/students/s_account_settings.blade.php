@extends('dashboard.students.app')

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
                    <p class="lk-profile__info-name">{{$data[0]->name}}</p>
                    <p>Телефон:{{$data[0]->phone}}</p>
                    <p>Email: {{$data[0]->email}}</p>
                    <p>Язык: RU</p>
                    <a href="#">Изменить аватар</a>
                </div>
            </div>

            <div class="profile-info">
                <h2 class="header-sec">Личное</h2>
                <div class="profile-info-wrp">
                    <div class="profile-info-item">
                        <p>Имя</p>
                        <p>{{$data[0]->name}}</p>
                        <input type="text" name="name" value="{{$data[0]->name}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Email</p>
                        <p>{{$data[0]->email}}</p>
                        <input type="text" name="email" value="{{$data[0]->email}}"/>
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
                        <p>{{$data[0]->skype}}</p>
                        <input type="text" name="skype" value="{{$data[0]->skype}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Учу</p>
                        <p>{{$data[0]->teaching_profession}}</p>
                        <input type="text" name="teaching_profession" value="{{$data[0]->teaching_profession}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Имя ребёнка</p>
                        <p>{{$data[0]->child_name}}</p>
                        <input type="text" name="child_name" value="{{$data[0]->child_name}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Пол ребёнка</p>
                        <p>{{$data[0]->child_gender}}</p>
                        <input type="text" name="child_gender" value="{{$data[0]->child_gender}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Возраст ребёнка</p>
                        <p>{{$data[0]->child_age}}</p>
                        <input type="text" name="child_age" value="{{$data[0]->child_age}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Дата рождения</p>
                        <p>{{$data[0]->birth_date}}</p>
                        <input type="date" name="birth_date" value="{{$data[0]->birth_date}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Телефон</p>
                        <p>{{$data[0]->phone}}</p>
                        <input type="text" name="phone" value="{{$data[0]->phone}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Доп. телефон</p>
                        <p>{{$data[0]->another_phone}}</p>
                        <input type="text" name="another_phone" value="{{$data[0]->another_phone}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Язык интерфейса</p>
                        <p>{{$data[0]->interface_language}}</p>
                        <input type="text" name="interface_language" value="{{$data[0]->interface_language}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Часовой пояс</p>
                        <p>{{$data[0]->time_zone}}</p>
                        <input type="text" name="time_zone" value="{{$data[0]->time_zone}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Увлечения ребёнка</p>
                        <p>{{$data[0]->child_hobbies}}</p>
                        <input type="text" name="child_hobbies" value="{{$data[0]->child_hobbies}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Пожелания к обучению</p>
                        <p style="opacity: .5;">{{$data[0]->wishes_for_training}}</p>
                        <input type="text" name="wishes_for_training" value="{{$data[0]->wishes_for_training}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Учебные заметки</p>
                        <p style="opacity: .5;">{{$data[0]->study_notes}}</p>
                        <input type="text" name="study_notes" value="{{$data[0]->study_notes}}"/>
                        <a href="#" class="edit_data">Изменить</a>
                        <a href="#" class="save_data">Сохранить</a>
                    </div>
                    <div class="profile-info-item">
                        <p>Комментарий администратора</p>
                        <p style="opacity: .5;">{{$data[0]->admin_comments}}</p>
                        <input type="text" name="admin_comments" value="{{$data[0]->admin_comments}}"/>
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

