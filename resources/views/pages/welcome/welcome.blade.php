@extends('layout.base')

@section('content')
<div class="">
    <div class="">
        <div>
            <div class="h-[150px] rounded-[15px] border-2 border-main-primary mb-4">
                <a href="{{ route('terms.index') }}" class="flex items-end p-4 text-xl font-bold text-main-primary w-full h-full">Термины</a>
            </div>
            <div class="h-[150px] rounded-[15px] border-2 border-main-primary mb-4">
                <a href="{{ route('strategies.index') }}" class="flex items-end p-4 text-xl font-bold text-main-primary w-full h-full">Стратегии</a>
            </div>
            <div class="h-[150px] rounded-[15px] border-2 border-main-primary mb-4">
                <a href="##" class="flex items-end p-4 text-xl font-bold text-main-primary w-full h-full">Интересные валюты</a>
            </div>
            <div class="h-[150px] rounded-[15px] border-2 border-main-primary mb-4">
                <a href="##" class="flex items-end p-4 text-xl font-bold text-main-primary w-full h-full">Инструкции</a>
            </div>
        </div>
    </div>
</div>
@endsection
