@extends('front.app')

@section('content')
    <section id="prepod">
        <div class="wrp">
            <h2 class="header-sec">
                Преподователи<br>
                английского языка
            </h2>
            <div class="prepod-filter">
                <div class="prepod-filter-item">
                    <p>Тип</p>
                    <div class="custom-select">
                        <select>
                            <option value="Стандарт">Стандарт</option>
                            <option value="Стандарт">Стандарт</option>
                            <option value="Премиум">Премиум</option>
                        </select>
                    </div>
                </div>
                <div class="prepod-filter-item">
                    <p>Возраст ребёнка</p>
                    <div class="custom-select">
                        <select>
                            <option value="Стандарт">15</option>
                            <option value="Стандарт">10</option>
                            <option value="Премиум">12</option>
                        </select>
                    </div>
                </div>
                <div class="prepod-filter-item">
                    <p>День</p>
                    <div class="custom-select">
                        <select>
                            <option value="Стандарт">07, февраль, вс.</option>
                            <option value="Стандарт">08, февраль, пн.</option>
                            <option value="Премиум">09, февраль, вт.</option>
                            <option value="Стандарт">10, февраль, вс.</option>
                            <option value="Стандарт">11, февраль, пн.</option>
                            <option value="Премиум">12, февраль, вт.</option>
                        </select>
                    </div>
                </div>
                <div class="prepod-filter-item">
                    <p>Время</p>
                    <div class="custom-select">
                        <select>
                            <option value="Стандарт">13:00</option>
                            <option value="Стандарт">14:00</option>
                            <option value="Премиум">15:00</option>
                            <option value="Стандарт">16:00</option>
                            <option value="Стандарт">17:00</option>
                            <option value="Премиум">18:00</option>
                        </select>
                    </div>
                </div>
                <a href="#" class="button">Применить</a>
            </div>
            <div class="prepod-items">
                <div class="prepod-item">
                    <div class="prepod-item-img">
                        <img src="{{ asset('/assets/front/img') }}/prepod-img.jpg" alt="prepod">
                    </div>
                    <div class="prepod-item-info">
                        <div class="prepod-item-info__top">
                            <p>Anastasia G.</p>
                            <div class="prepod-item-info__top-rating">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <p>(54)</p>
                            </div>
                        </div>
                        <div class="prepod-item-info__main">
                            <div class="prepod-item-info__main-left">
                                <p><span>Обучаю</span>5 лет</p>
                                <p><span>Урок</span>от 1.500₽</p>
                                <a href="#" class="button"><img src="{{ asset('/assets/front/img') }}/play-icon.svg" alt="play">Видео приветствие</a>
                                <a href="#" class="button">Забронировать урок</a>
                            </div>
                            <div class="prepod-item-info__main-right">
                                <p>
                                    <span>Преподаю</span>
                                    Английский
                                </p>
                                <p>
                                    <span>Говорю</span>
                                    Русский, английский, украинский, китайский, испанский
                                </p>
                                <p>
                                    <span>Специализация</span>
                                    TOEFL
                                </p>
                                <p>
                                    <span>Интересы</span>
                                    Languages, Painting, Travelling, Reading, Cultures, China, Music
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prepod-item">
                    <div class="prepod-item-img">
                        <img src="{{ asset('/assets/front/img') }}/prepod-img.jpg" alt="prepod">
                    </div>
                    <div class="prepod-item-info">
                        <div class="prepod-item-info__top">
                            <p>Anastasia G.</p>
                            <div class="prepod-item-info__top-rating">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <p>(54)</p>
                            </div>
                        </div>
                        <div class="prepod-item-info__main">
                            <div class="prepod-item-info__main-left">
                                <p><span>Обучаю</span>5 лет</p>
                                <p><span>Урок</span>от 1.500₽</p>
                                <a href="#" class="button"><img src="{{ asset('/assets/front/img') }}/play-icon.svg" alt="play">Видео приветствие</a>
                                <a href="#" class="button">Забронировать урок</a>
                            </div>
                            <div class="prepod-item-info__main-right">
                                <p>
                                    <span>Преподаю</span>
                                    Английский
                                </p>
                                <p>
                                    <span>Говорю</span>
                                    Русский, английский, украинский, китайский, испанский
                                </p>
                                <p>
                                    <span>Специализация</span>
                                    TOEFL
                                </p>
                                <p>
                                    <span>Интересы</span>
                                    Languages, Painting, Travelling, Reading, Cultures, China, Music
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prepod-item">
                    <div class="prepod-item-img">
                        <img src="{{ asset('/assets/front/img') }}/prepod-img.jpg" alt="prepod">
                    </div>
                    <div class="prepod-item-info">
                        <div class="prepod-item-info__top">
                            <p>Anastasia G.</p>
                            <div class="prepod-item-info__top-rating">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <p>(54)</p>
                            </div>
                        </div>
                        <div class="prepod-item-info__main">
                            <div class="prepod-item-info__main-left">
                                <p><span>Обучаю</span>5 лет</p>
                                <p><span>Урок</span>от 1.500₽</p>
                                <a href="#" class="button"><img src="{{ asset('/assets/front/img') }}/play-icon.svg" alt="play">Видео приветствие</a>
                                <a href="#" class="button">Забронировать урок</a>
                            </div>
                            <div class="prepod-item-info__main-right">
                                <p>
                                    <span>Преподаю</span>
                                    Английский
                                </p>
                                <p>
                                    <span>Говорю</span>
                                    Русский, английский, украинский, китайский, испанский
                                </p>
                                <p>
                                    <span>Специализация</span>
                                    TOEFL
                                </p>
                                <p>
                                    <span>Интересы</span>
                                    Languages, Painting, Travelling, Reading, Cultures, China, Music
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prepod-item">
                    <div class="prepod-item-img">
                        <img src="{{ asset('/assets/front/img') }}/prepod-img.jpg" alt="prepod">
                    </div>
                    <div class="prepod-item-info">
                        <div class="prepod-item-info__top">
                            <p>Anastasia G.</p>
                            <div class="prepod-item-info__top-rating">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <img src="{{ asset('/assets/front/img') }}/star.svg" alt="star">
                                <p>(54)</p>
                            </div>
                        </div>
                        <div class="prepod-item-info__main">
                            <div class="prepod-item-info__main-left">
                                <p><span>Обучаю</span>5 лет</p>
                                <p><span>Урок</span>от 1.500₽</p>
                                <a href="#" class="button"><img src="{{ asset('/assets/front/img') }}/play-icon.svg" alt="play">Видео приветствие</a>
                                <a href="#" class="button">Забронировать урок</a>
                            </div>
                            <div class="prepod-item-info__main-right">
                                <p>
                                    <span>Преподаю</span>
                                    Английский
                                </p>
                                <p>
                                    <span>Говорю</span>
                                    Русский, английский, украинский, китайский, испанский
                                </p>
                                <p>
                                    <span>Специализация</span>
                                    TOEFL
                                </p>
                                <p>
                                    <span>Интересы</span>
                                    Languages, Painting, Travelling, Reading, Cultures, China, Music
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
