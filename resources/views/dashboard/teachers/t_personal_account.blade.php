@extends('dashboard.teachers.app')

@section('content')
    <section id="lk-teacher">
        <div class="wrp">
            <div class="reserv">
                <h2 class="header-sec">Ученики</h2>
            </div>
            @if(!empty($students))
                <div class="lk-teacher">
                    <h2 class="header-sec">Все ученики</h2>
                    <div class="profile-info-wrp">
                        @foreach($students as $student)
                            <div class="profile-info-item">
                                <p>{{$student->name}}</p>
                                <p>Суббота, 14 марта 2022, 9:30</p>
                                <a href="#">Перейти</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
