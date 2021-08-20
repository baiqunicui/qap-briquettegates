<div>
    <nav x-data="scrollToReveal()" x-ref="navbar" x-on:scroll.window="scroll()"
        :class="{'fixed top-0 bg-white': sticky, 'absolute': !sticky}" class="z-[999] absolute top-0 w-full">
        <div class="relative z-0 flex flex-col items-center justify-center py-6 mx-auto border-b border-gray-300"
            data-aos="fade-in">
            <div class="absolute left-0 px-6">
                <x-atom.img src="{{$collection->logo->first()['url'] ?? ''}}" class="w-auto h-8"></x-atom.img>
            </div>

            {{-- Dekstop --}}
            <x-orga.section class="justify-between hidden lg:flex">
                <div class="hidden space-x-10 lg:flex">
                    @foreach ($collection->menu as $key => $item)
                    @if ($key === 2)
                    <li class="relative block" x-data="{showChildren:false}" @click.away="showChildren=false">
                        <x-atom.a href="#" @click.prevent="showChildren=!showChildren"
                            label="{{$item[lang()][0]['heading']}}" />

                        <div class="absolute left-0 top-auto w-auto min-w-full mt-4 text-sm z-[999] !text-primary dark:!text-white"
                            x-show="showChildren" x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                            <div class="relative z-[999] min-w-max px-6 py-4 bg-white dark:bg-primary border">
                                <ul class="space-y-1">
                                    @foreach ($product as $p)
                                    <a href="{{ route('products.show', ['item'=> $p['slug']]) }}"
                                        class="flex cursor-pointer dark:hover:bg-primary hover:text-secondary">
                                        <small class="font-medium tracking-wider capitalize">
                                            {{$p['heading'][0][lang()]}}
                                        </small>
                                    </a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    @elseif ($key !== 2)
                    <x-atom.a href="{{$item[lang()][0]['link']}}" label="{{$item[lang()][0]['heading']}}" />
                    @endif
                    @endforeach
                </div>

                <div class="flex items-center space-x-12">
                    <x-atom.a href="{{ url()->current() }}?lang={{ 'en' }}" label="{{'en'}}" />
                    <x-atom.svg-line class="w-20" />
                    <x-atom.a href="{{ url()->current() }}?lang={{ 'id' }}" label="{{'id'}}" />
                </div>
            </x-orga.section>

            {{-- Mobile --}}
            <div x-data="{menu: false}" class="absolute right-0 px-6 lg:hidden">
                <x-orga.modal id="modal" x-show="menu" class="w-full">
                    <div class="flex flex-col justify-center w-10/12 p-3 mx-auto my-auto space-y-10">
                        <x-atom.a x-on:click="menu = false"
                            class="absolute top-0 right-0 p-2 md:p-3 md:top-4 md:right-4 md:rounded-xl bg-secondary">
                            <x-atom.svg-close class="h-5 font-bold md:h-8" />
                        </x-atom.a>

                        <ul class="my-auto space-y-6 text-center">
                            @foreach ($collection->menu as $key => $item)
                            @if ($key === 2)
                            {{-- {{dd($product)}} --}}
                            <li class="relative block" x-data="{showChildren:false}" @click.away="showChildren=false">
                                <x-atom.a href="#" @click.prevent="showChildren=!showChildren">
                                    <h4 class="font-medium capitalize">
                                        {{ $item[lang()][0]['heading'] }}
                                    </h4>
                                </x-atom.a>

                                <ul class="mt-6" x-show="showChildren" style="display: none;">
                                    @foreach ($product as $p)
                                    <x-atom.a href="{{ route('products.show', ['item'=> $p['slug']]) }}"
                                        class="text-center">
                                        <p class="font-medium capitalize !text-black">
                                            {{$p['heading'][0][lang()]}}
                                        </p>
                                    </x-atom.a>
                                    @endforeach
                                </ul>
                            </li>
                            @elseif ($key !== 2)
                            <x-atom.a href="{{ $item[lang()][0]['link'] }}">
                                <h4 class="font-medium capitalize">
                                    {{ $item[lang()][0]['heading'] }}
                                </h4>
                            </x-atom.a>
                            @endif
                            @endforeach
                        </ul>

                        <div class="flex items-center justify-center space-x-12">
                            <x-atom.a href="{{ url()->current() }}?lang={{ 'en' }}" label="{{'en'}}" />
                            <x-atom.svg-line class="w-20" />
                            <x-atom.a href="{{ url()->current() }}?lang={{ 'id' }}" label="{{'id'}}" />
                        </div>
                    </div>
                </x-orga.modal>

                <x-atom.a id="menubutton" x-on:click="menu = true">
                    <x-atom.svg-hamburger class="w-auto h-5" />
                </x-atom.a>
            </div>

            <div class="absolute right-0 hidden px-6 lg:flex">
                <a href="{{ $collection->button[0]['link'] ?? '' }}">
                    <button class="px-4 py-1 bg-[#2F6B00] rounded-full">
                        <small
                            class="font-medium text-white capitalize">{{ $collection->button[0][lang()] ?? '' }}</small>
                    </button>
                </a>
            </div>
        </div>
    </nav>
</div>


<script>
    function scrollToReveal() {
        return {
            sticky: false,
            lastPos: window.scrollY + 0,
            scroll() {
                this.sticky = window.scrollY > this.$refs.navbar.offsetHeight && this.lastPos > window.scrollY;
                this.lastPos = window.scrollY;
            }
        }
    }
</script>
