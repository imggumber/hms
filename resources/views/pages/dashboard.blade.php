@extends('layouts.main')

@section('pageTitle', 'Dashboard')

@section('content')
<div class="overview">


    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <div class="shadow-md rounded-md p-4">
            <x-common.card-component />
        </div>
        <div class="shadow-md rounded-md p-4">
            <x-common.card-component />
        </div>
        <div class="shadow-md rounded-md p-4">
            <x-common.card-component />
        </div>
    </div>

</div>
@endsection