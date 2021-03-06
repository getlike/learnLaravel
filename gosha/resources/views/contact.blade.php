@extends('layouts.app')

@section('title-block')
    contact page
@endsection

@section('content')
    <h1>контакты</h1>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>


            @endforeach
        </ul>
    </div>

    @endif
    <form action="{{ route('contact-form') }}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите Email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Текст сообщения</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success"> отправить </button>

    </form>
@endsection