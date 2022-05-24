@extends('front.app')

@section('content')
    <section id="programm">
        <div class="wrp">
            <h2 class="header-sec">Программа курса</h2>
            <div class="programm-category">
                <a href="#programm" data-tab="preschool" class="active">Preschool</a>
                <a href="#programm" data-tab="starter1">Starter 1</a>
                <a href="#programm" data-tab="starter2">Starter 2</a>
                <a href="#programm" data-tab="mover1">Mover 1</a>
                <a href="#programm" data-tab="mover2">Mover 2</a>
                <a href="#programm" data-tab="flyer1">Flyer 1</a>
                <a href="#programm" data-tab="flyer2">Flyer 2</a>
            </div>
            <div data-tab-content="preschool" class="programm-item active">
                <h2 class="header-sec">Preschool</h2>
                <p>
                    <span>Влюбляюсь в английский</span>
                    20 уроков / 25 минут / 2-3 месяца
                </p>
                <ul>
                    <li>Узнает звучание английской речи</li>
                    <li>Понимает просьбы учителя и реагирует на них</li>
                    <li>Отвечает на вопросы о любимой игрушке, домашнем животном и своем доме.</li>
                </ul>
                <p>По завершению уровня <span>Preschool</span> ученик достигает следующих результатов:</p>
                <div class="programm-item__category">
                    <div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/hands-icon.svg" alt="hands"></div>
                                <p>Коммуникативные навыки</p>
                            </div>
                            <ul>
                                <li>Прощается и здоровается, благодарит.</li>
                                <li>Называет своё имя и возраст.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                            </ul>
                        </div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/book-icon.svg" alt="book"></div>
                                <p>Чтение</p>
                            </div>
                            <ul>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                            </ul>
                        </div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/mouth-icon.svg" alt="mouth"></div>
                                <p>Лексика</p>
                            </div>
                            <ul>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/thought-icon.svg" alt="thought"></div>
                                <p>Говорение</p>
                            </div>
                            <ul>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                            </ul>
                        </div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/ear-icon.svg" alt="ear"></div>
                                <p>Аудирование</p>
                            </div>
                            <ul>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                            </ul>
                        </div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/hand-icon.svg" alt="hand"></div>
                                <p>Письмо</p>
                            </div>
                            <ul>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                            </ul>
                        </div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/read-icon.svg" alt="read"></div>
                                <p>Грамматика</p>
                            </div>
                            <ul>
                                <p style="text-decoration: underline; line-height: 140%;">Грамматика представлена в виде готовых<br> структур, а не правил.</p>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div data-tab-content="starter1" class="programm-item">
                <h2 class="header-sec">Starter 1</h2>
                <p>
                    <span>Влюбляюсь в английский</span>
                    20 уроков / 25 минут / 2-3 месяца
                </p>
                <ul>
                    <li>Узнает звучание английской речи</li>
                    <li>Понимает просьбы учителя и реагирует на них</li>
                    <li>Отвечает на вопросы о любимой игрушке, домашнем животном и своем доме.</li>
                </ul>
                <p>По завершению уровня <span>Preschool</span> ученик достигает следующих результатов:</p>
                <div class="programm-item__category">
                    <div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/hands-icon.svg" alt="hands"></div>
                                <p>Коммуникативные навыки</p>
                            </div>
                            <ul>
                                <li>Прощается и здоровается, благодарит.</li>
                                <li>Называет своё имя и возраст.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                            </ul>
                        </div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/book-icon.svg" alt="book"></div>
                                <p>Чтение</p>
                            </div>
                            <ul>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                            </ul>
                        </div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/mouth-icon.svg" alt="mouth"></div>
                                <p>Лексика</p>
                            </div>
                            <ul>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/thought-icon.svg" alt="thought"></div>
                                <p>Говорение</p>
                            </div>
                            <ul>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                            </ul>
                        </div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/ear-icon.svg" alt="ear"></div>
                                <p>Аудирование</p>
                            </div>
                            <ul>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                            </ul>
                        </div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/hand-icon.svg" alt="hand"></div>
                                <p>Письмо</p>
                            </div>
                            <ul>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                            </ul>
                        </div>
                        <div class="programm-item__category-item">
                            <div class="programm-item__category-item-head">
                                <div><img src="{{ asset('/assets/front/img') }}/lesson-icons/read-icon.svg" alt="read"></div>
                                <p>Грамматика</p>
                            </div>
                            <ul>
                                <p style="text-decoration: underline; line-height: 140%;">Грамматика представлена в виде готовых<br> структур, а не правил.</p>
                                <li>Умеет петь песни из программы курса.</li>
                                <li>Отвечает на простые вопросы учителя: “Как тебя зовут?”, “Сколько тебе лет?” и т.д.</li>
                                <li>Описывает предмет или животное, используя знакомые слова и выражения. (1-2 предложения)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div data-tab-content="starter2" class="programm-item">
                <h2 class="header-sec">Starter 2</h2>
                <p>
                    <span>Влюбляюсь в английский</span>
                    20 уроков / 25 минут / 2-3 месяца
                </p>
                <ul>
                    <li>Узнает звучание английской речи</li>
                    <li>Понимает просьбы учителя и реагирует на них</li>
                    <li>Отвечает на вопросы о любимой игрушке, домашнем животном и своем доме.</li>
                </ul>
                <p>По завершению уровня <span>Preschool</span> ученик достигает следующих результатов:</p>
            </div>
            <div data-tab-content="mover1" class="programm-item">
                <h2 class="header-sec">Mover 1</h2>
                <p>
                    <span>Влюбляюсь в английский</span>
                    20 уроков / 25 минут / 2-3 месяца
                </p>
                <ul>
                    <li>Узнает звучание английской речи</li>
                    <li>Понимает просьбы учителя и реагирует на них</li>
                    <li>Отвечает на вопросы о любимой игрушке, домашнем животном и своем доме.</li>
                </ul>
                <p>По завершению уровня <span>Preschool</span> ученик достигает следующих результатов:</p>
            </div>
            <div data-tab-content="mover2" class="programm-item">
                <h2 class="header-sec">Mover 2</h2>
                <p>
                    <span>Влюбляюсь в английский</span>
                    20 уроков / 25 минут / 2-3 месяца
                </p>
                <ul>
                    <li>Узнает звучание английской речи</li>
                    <li>Понимает просьбы учителя и реагирует на них</li>
                    <li>Отвечает на вопросы о любимой игрушке, домашнем животном и своем доме.</li>
                </ul>
                <p>По завершению уровня <span>Preschool</span> ученик достигает следующих результатов:</p>
            </div>
            <div data-tab-content="flyer1" class="programm-item">
                <h2 class="header-sec">Flyer 1</h2>
                <p>
                    <span>Влюбляюсь в английский</span>
                    20 уроков / 25 минут / 2-3 месяца
                </p>
                <ul>
                    <li>Узнает звучание английской речи</li>
                    <li>Понимает просьбы учителя и реагирует на них</li>
                    <li>Отвечает на вопросы о любимой игрушке, домашнем животном и своем доме.</li>
                </ul>
                <p>По завершению уровня <span>Preschool</span> ученик достигает следующих результатов:</p>
            </div>
            <div data-tab-content="flyer2" class="programm-item">
                <h2 class="header-sec">Flyer 2</h2>
                <p>
                    <span>Влюбляюсь в английский</span>
                    20 уроков / 25 минут / 2-3 месяца
                </p>
                <ul>
                    <li>Узнает звучание английской речи</li>
                    <li>Понимает просьбы учителя и реагирует на них</li>
                    <li>Отвечает на вопросы о любимой игрушке, домашнем животном и своем доме.</li>
                </ul>
                <p>По завершению уровня <span>Preschool</span> ученик достигает следующих результатов:</p>
            </div>
        </div>
    </section>
@endsection
