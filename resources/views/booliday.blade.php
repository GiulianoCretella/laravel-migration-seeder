@extends('layouts.default')

@section('PageTitle','Booliday')

@section('MainContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="p-2 card text-center">
                <img class="img-fluid" src="{{$booliday->image_url}}" alt="">
                <h4>{{$booliday->title}} - {{$booliday->stay}} giorni in {{$booliday->destination}}</h4>
                <p>{{$booliday->pricePerDay}}€ /notte</p>
                <p>Soggiorno: {{$booliday->stay}}  giorni</p>
                <p>{{$booliday->description}}</p>
                <p>Totale: {{$booliday->pricePerDay * $booliday->stay}} €</p>
            </div>
        </div>
    </div>
</div>

@endsection