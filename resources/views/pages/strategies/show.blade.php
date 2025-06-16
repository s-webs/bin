@extends('layout.base')

@section('content')
    <div class="relative">
        <div class="mb-4 pb-2 flex items-center justify-between border-b border-b-main-gray">
            <div>
                <a href="{{ route('strategies.index') }}">
                    <i class="ph-bold ph-caret-left text-2xl text-main-gray"></i>
                </a>
            </div>
            <div>
                <h1 class="text-end text-xl text-main-gray font-bold">{{ $strategy->name }}</h1>
            </div>
        </div>
        @if($strategy->video)
            <div class="text-center">
                <video class="w-[200px] mx-auto" controls autoplay>
                    <source src="/{{ $strategy->video }}" type="video/mp4">
                    Ваш браузер не поддерживает данный формат видео.
                </video>
            </div>
        @endif
        <div class="text-main-gray mt-4">
            {!! $strategy->description !!}
        </div>
        <div>

        </div>
@endsection
