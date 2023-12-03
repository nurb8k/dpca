@extends('layouts.layout')
@section('content')
    <section class="cabinet-info contacts-section tab-content">
        <div>
            <div style="display: flex; justify-content:center;">
                <img style="margin-bottom: 20px; border-radius: 12px" width="300" src="{{asset('images/dpca_large2.png')}}" alt="">
            </div>
            <p class="section-text"> <span class="text-blue bold"> DPCA </span> (Digital Publishing Central Asia) - компания,<br> расположенная в г. Алматы, Казахстан, которая <br> предоставляет цифровые сервисы по поддержке <br> научных изданий в странах Центральной Азии.<br> Компания создана для упрощения процесса <br> издания научных статей и журналов и обеспечения <br> их соответствия международным требованиям</p>
        </div>
        <form action="#" class="form-contacts">
            @csrf
            <label class="modal-login-label-text">Ваше имя</label>
            <input type="text" name="name" class="ui-input modal-login-input" placeholder="Имя">

            <label class="modal-login-label-text">Ваш номер</label>
            <input type="text" name="org_name" class="ui-input modal-login-input" placeholder="+_ (___)-___-__-__">


            <label class="modal-login-label-text">Ваша сообщение</label>
            <textarea rows="10" type="text" name="org_name" class="ui-input modal-login-input">
            </textarea>


            <button class="btn-primary" type="submit">Оставить заявку</button>
        </form>
    </section>


@endsection