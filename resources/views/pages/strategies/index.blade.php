@extends('layout.base')

@section('content')
    <div
        x-data="{ showModal: false, selectedTerm: { name: '', description: '' } }"
        class="relative"
    >
        <div class="mb-4 pb-2 flex items-center justify-between border-b border-b-main-gray">
            <div>
                <a href="{{ route('welcome.index') }}">
                    <i class="ph-bold ph-caret-left text-2xl text-main-gray"></i>
                </a>
            </div>
            <div>
                <h1 class="text-end text-xl text-main-gray font-bold">Стратегии</h1>
            </div>
        </div>

        <div>
            @foreach($strategies as $strategy)
                <div class="mb-4 last:mb-0">
                    <a href="{{ route('strategies.show', $strategy->slug) }}"
                        class="flex items-end w-full h-[150px] text-lg p-4 border-2 border-main-primary font-semibold text-main-primary rounded-[15px]">
                        <div>{{ $strategy->name }}</div>
                    </a>
                </div>
            @endforeach
        </div>
@endsection
