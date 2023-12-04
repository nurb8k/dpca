@extends('layouts.layout')
@section('content')
    <section class="cabinet-info contacts-section tab-content">
        @error('errors')
            {{ $message }}
        @enderror
        <div>
            <div style="display: flex; justify-content:center;">
                <img style="margin-bottom: 20px; border-radius: 12px" width="300" src="{{asset('images/dpca_large2.png')}}" alt="">
            </div>
            <p class="section-text"> <span class="text-blue bold"> DPCA
                </span> (Digital Publishing Central Asia) - компания,<br>
                расположенная в г. Алматы, Казахстан, которая <br>
                предоставляет цифровые сервисы по поддержке <br>
                научных изданий в странах Центральной Азии.<br>
                Компания создана для упрощения процесса <br>
                издания научных статей и журналов и обеспечения <br>
                их соответствия международным требованиям</p>
        </div>
        <form action="{{route('apply')}}" class="form-contacts" method="post">
            @csrf

            <label class="modal-login-label-text">{{__('your.name')}}</label>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="name"  class="ui-input modal-login-input" placeholder="{{__('your.name')}}">

            <label class="modal-login-label-text">{{__('your.phone')}}</label>
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="number" name="phone" required class="ui-input modal-login-input" placeholder="+_ (___)-___-__-__">

            <label class="modal-login-label-text">{{__('your.message')}}</label>
            <textarea rows="10" type="text" name="message" class="ui-input modal-login-input">
            </textarea>
            @if(session('success'))
                <a class="alert alert-success">
                   {{__('apply.message')}}
                </a>
            @endif
            <button class="btn-primary" type="submit">{{__('apply')}}</button>
        </form>
    </section>


@endsection