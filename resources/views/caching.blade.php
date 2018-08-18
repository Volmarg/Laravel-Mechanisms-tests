@extends('extendable')

@section('footer_scripts')

    @foreach($eloquent_return as $singleRow)
        {{$singleRow->name}}<br/>
    @endforeach

@endsection