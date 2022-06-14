@extends('layouts.default')

@section('PageTitle','Boolidays - Travels')
@section('MainContent')
<div class="container">
    <div class="row">
        @foreach ($boolidays as $item)
        <div class="col-2">
            <div class="p-2 card">
                <img src="{{$item->image_url}}" alt="">
                <h4>{{$item->title}} - {{$item->stay}} giorni in {{$item->destination}}</h4>
                <p>{{$item->description}}</p>
                <a href="{{route('booliday',$item->id)}}">Vedi l'offerta</a>
            </div> 
        </div>
            
        @endforeach
    </div>
</div>
@endsection