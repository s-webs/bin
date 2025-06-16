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
                <h1 class="text-end text-xl text-main-gray font-bold">Термины</h1>
            </div>
        </div>

        <div>
            @foreach($terms as $term)
                <div class="mb-4 last:mb-0">
                    <button
                        x-data
                        @click.prevent="
                                   selectedTerm.name = $el.dataset.name;
                                   selectedTerm.description = $el.dataset.description;
                                   showModal = true;
                               "
                        :data-name="'{{ $term->name }}'"
                        :data-description='@json($term->description)'
                        class="w-full text-lg p-2 border-2 border-main-primary font-semibold text-main-primary block rounded-[15px]">
                        {{ $term->name }}
                    </button>
                </div>
            @endforeach
        </div>
        <div
            x-show="showModal"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-90"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-90"
            class="fixed inset-0 z-50 flex items-center justify-center bg-main-dark/[30%] backdrop-blur-sm"
            x-cloak
        >
            <div class="bg-main-dark border-2 border-main-primary w-11/12 max-w-sm p-4 rounded-xl shadow-lg">
                <h2 class="text-lg font-semibold mb-2 text-center text-main-primary" x-text="selectedTerm.name"></h2>
                <p class="text-sm text-main-gray" x-html="selectedTerm.description"></p>
                <button
                    class="w-full mt-4 px-4 py-2 bg-main-primary text-main-dark rounded-md"
                    @click="showModal = false"
                >
                    Закрыть
                </button>
            </div>
        </div>
    </div>
@endsection
