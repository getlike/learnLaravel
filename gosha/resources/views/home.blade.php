@extends('layouts.app')
@section('title-block')
    home page
@endsection
@section('content')
    <h1>home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aut consectetur cum, delectus dolores explicabo
        impedit laborum minima perferendis quod ratione rerum ut voluptas? Architecto cum facere illo sunt veniam?</p>
@endsection


@section('aside')
    @parent
    <p>дополнительній текс</p>
@endsection
