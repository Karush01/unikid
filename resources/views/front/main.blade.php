@extends('front.app')

@section('content')
    <section id="main">
        <div class="wrp">
            <h1>Английский<br> онлайн для детей</h1>
            <img src="{{ asset('/assets/front/img') }}/main-girl.png" alt="main-girl">
            <a href="#" class="button">Записаться на пробный урок</a>
        </div>
    </section>

    <section id="about">
        <div class="wrp">
            <h2 class="header-sec">О платформе</h2>
            <img src="{{ asset('/assets/front/img') }}/about-img.svg" alt="about">
            <p>
                Классная комната, разработанная с заботой о ребенке и его успехах. Тематические игры, учебные материалы, домашние задания, задачи по интересам вовлекают ребенка в процесс обучения с первых минут.
            </p>
        </div>
    </section>

    <section id="lesson">
        <div class="wrp">
            <div class="lesson">
                <h2 class="header-sec">Об обучении</h2>
                <img src="{{ asset('/assets/front/img') }}/lesson-img.svg" alt="lesson">
                <p>
                    Мы используем эффективный метод полного физического<br>
                    реагирования (TPR) и Кембриджскую коммуникативную методику
                </p>
                <p class="lesson-item">
                    По результатам прохождения курсов наши ученики сдают<br>
                    внутренний экзамен и подтверждают уровень владения языком по<br>
                    международному стандарту.
                </p>
                <p class="lesson-item">
                    По окончании обучения возможность получения<br>
                    сертификата об обучении.
                </p>
            </div>
        </div>
    </section>

    <section id="podhod">
        <div class="wrp">
            <div class="podhod">
                <h2 class="header-sec">Индивидуальный подход</h2>
                <img src="{{ asset('/assets/front/img') }}/podhod-img.png" alt="podhod">
                <p>
                    Уроки 1 на 1 с учителем. Учитываем особенности каждого ребенка. Составляем план обучения, исходя из целей, интересов и уровня владения языком. После каждого урока отправляем обратную связь от учителя о прогрессе ребенка. Все ученики школы посещают тематические групповые занятия с ровесниками из разных стран. Ребенок погружается в языковую среду и практикует разговорные навыки. Учится проявлять себя и выражать свои мысли на английском.
                </p>
            </div>
        </div>
    </section>

    <section id="adva">
        <div class="wrp">
            <h2 class="header-sec">Почему Unikid?</h2>
            <div class="adva">
                <div class="adva-item">
                    <div class="adva-item__img">
                        <img src="{{ asset('/assets/front/img') }}/adva1.png" alt="adva">
                    </div>
                    <div class="adva-item__text">
                        <p>Индивидуальные занятия онлайн</p>
                        <p>
                            Уроки проходят в комфортной для ребенка обстановке. Вы экономите время на поездках к репетитору и оффлайн-школы. Онлайн формат позволяет составить максимально удобный график.
                        </p>
                    </div>
                </div>
                <div class="adva-item">
                    <div class="adva-item__img">
                        <img src="{{ asset('/assets/front/img') }}/adva2.png" alt="adva">
                    </div>
                    <div class="adva-item__text">
                        <p>Уроки, которые нравятся детям</p>
                        <p>
                            На уроках мы выбираем различные темы под интересы ребенка. Обучение проходит через увлекающий сюжет.
                        </p>
                    </div>
                </div>
                <div class="adva-item">
                    <div class="adva-item__img">
                        <img src="{{ asset('/assets/front/img') }}/adva3.png" alt="adva">
                    </div>
                    <div class="adva-item__text">
                        <p>Спокойствие для родителей</p>
                        <p>
                            Подберем преподавателя, составим удобный график обучения, напомним об уроках и проконтролируем усвоение знаний. Сопроводим Вас от отправки заявки на пробный урок до завершения полного прохождения курсов.
                        </p>
                    </div>
                </div>
                <div class="adva-item">
                    <div class="adva-item__img">
                        <img src="{{ asset('/assets/front/img') }}/adva4.png" alt="adva">
                    </div>
                    <div class="adva-item__text">
                        <p>Разговорная практика</p>
                        <p>
                            Помогаем ребенку преодолеть языковой барьер и развиваем навык говорения. На каждом уроке ученик говорит более 50% времени. Практикуем разговорный английский со сверстниками в небольших группах.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="first-lesson">
        <div class="wrp">
            <div class="first-lesson">
                <h2 class="header-sec">Что будет на пробном уроке?</h2>
                <img src="{{ asset('/assets/front/img') }}/first-lesson-img.png" alt="first-lesson">
                <div class="first-lesson-info">
                    <ul>
                        <li>Знакомство с преподавателем;</li>
                        <li>Определяем уровень знаний;</li>
                        <li>Подбираем программу обучения;</li>
                    </ul>
                    <a href="#" class="button">Записаться на пробный урок</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contacts">
        <div class="wrp">
            <h2 class="header-sec">Контакты</h2>
            <div class="contacts">
                <div class="contacts-item">
                    <p>Телефон</p>
                    <a href="tel:+7 (944) 323-23-11">+7 (944) 323-23-11</a>
                    <a href="tel:+7 (944) 323-23-11">+7 (944) 323-23-11</a>
                </div>
                <div class="contacts-item">
                    <p>Соц. сети</p>
                    <a href="#"><img src="{{ asset('/assets/front/img') }}/vk-icon.svg" alt="vk"></a>
                    <a href="#"><img src="{{ asset('/assets/front/img') }}/telegram-icon.svg" alt="telegram"></a>
                </div>
                <div class="contacts-item">
                    <p>Email</p>
                    <a href="mailto:help@uni-kid.ru">help@uni-kid.ru</a>
                    <a href="mailto:support@uni-kid.ru">support@uni-kid.ru</a>
                </div>
            </div>
        </div>
    </section>

    <section id="blago">
        <div class="wrp">
            <p>
                <img src="{{ asset('/assets/front/img') }}/heart.svg" alt="heart">
                Благодаря вам мы помогаем<br>
                бездомным животным
            </p>
        </div>
    </section>
@endsection
