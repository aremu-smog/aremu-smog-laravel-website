@php
    $books = array(
        'the autobiography of malcomX.jpg',
        'the book of joy.jpg',
        'shoe dog.jpg',
       'ego is the enemy.jpg',
       'purple cow.jpg',
       'how to make love like a pornstar.jpeg',
       'long walk to freedom.jpeg',
       'Losing_my_Virginity.png',
       'zero-to-one.jpg',
       'how to win friends and influence people.png',
       'richest man in babylon.jpg',
    );
@endphp
@extends('layout.page')

@section('heading')
    Reading List
@endsection

@section('page-content')

<div class="reading-list col-10">
        <div class="row">
            @foreach ($books as $book)
        <div class="col-3"> <div class="book"><img src="/img/books/{{$book}}" alt="{{$book}}"></div></div>
            @endforeach
            
           

        </div>
</div>
    
@endsection