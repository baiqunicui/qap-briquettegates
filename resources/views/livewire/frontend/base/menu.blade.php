<nav x-data="scrollToReveal()" x-ref="navbar" x-on:scroll.window="scroll()"
    :class="{'sticky top-0 bg-white dark:bg-primary/20 border-b {{(\Route::current()->getName() == 'contact.index') || (\Route::current()->getName() == 'products.index') ? '!text-primary' : ''}} dark:border-opacity-20': sticky, 'relative': !sticky}"
    class="{{(\Route::current()->getName() == 'contact.index') || (\Route::current()->getName() == 'products.index') ? '!text-white' : ''}} text-primary dark:text-white relative mx-auto z-[999] py-4">
    <section x-data="{menu: false}" class="flex flex-row items-center justify-between py-0 ">
        <h5 id="logo" class="!font-serif">
            {!! 'Bittersweet' !!}
        </h5>

        <div class="hidden space-x-5 lg:flex">
            @foreach ($header->menu as $key => $item)
            @if (isset($item['modal']))
            <div x-data="{ {{$item['title'] . ':' . 'false'}} }">
                <x-atom.a x-on:click="{{$item['title'] . ' = true'}}">
                    <small class="font-medium tracking-wider text-right uppercase">
                        {{$item['title']}}
                    </small>
                </x-atom.a>

                <x-orga.modal x-show="{{$item['title']}}" @keydown.escape.window="{{$item['title'] . ' = false'}}"
                    class="w-full mx-auto text-primary">

                    <x-atom.a x-on:click="{{$item['title'] . ' = false'}}"
                        class="absolute top-0 right-0 p-2 md:p-3 md:top-4 md:right-4 md:rounded-xl bg-secondary">
                        <x-atom.svg-close class="h-5 font-bold md:h-8" />
                    </x-atom.a>

                    <section class="relative p-0 m-auto">
                        <div class="flex items-center justify-center space-x-4 bg-red-200">
                            @foreach ($item['modal'] ?? [] as $modal)
                            <div class="flex-1 bg-white">
                                <h2>
                                    {{$modal['title']}}
                                </h2>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </x-orga.modal>
            </div>
            @else()
            <x-atom.a :href="$item['link']">
                <small class="font-medium tracking-wider text-right uppercase">
                    {{$item['title']}}
                </small>
            </x-atom.a>
            @endif
            @endforeach
        </div>

        <x-atom.a id="menubutton" x-on:click="menu = true" class="flex lg:hidden">
            <x-atom.svg-hamburger class="w-auto h-5" />
        </x-atom.a>

        <x-orga.modal id="modal" x-show="menu" class="w-full">
            <div class="w-10/12 p-3 mx-auto space-y-10 md:p-0 md:m-auto md:space-y-12">
                <x-atom.a x-on:click="menu = false"
                    class="absolute top-0 right-0 p-2 md:p-3 md:top-4 md:right-4 md:rounded-xl bg-secondary">
                    <x-atom.svg-close class="h-5 font-bold md:h-8" />
                </x-atom.a>

                <div class="w-full">
                    <h4 id="logo" class="!font-serif">
                        {!! 'Bittersweet' !!}
                    </h4>
                </div>

                <div class="flex justify-between">
                    <div class="grid w-auto gap-3 ml-auto md:grid-cols-2 md:gap-x-16 md:gap-y-8">
                        @foreach ($header->menu as $item)
                        <x-atom.a :href="$item['link']">
                            <h4 class="font-medium text-right capitalize">
                                {{$item['title']}}
                            </h4>
                        </x-atom.a>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col justify-between w-full space-y-4 md:space-y-0 md:flex-row">
                    <div class="w-auto space-y-2 text-right">
                        <p>
                            {!!'Perth, Western Australia<br>
                            New York, New York'!!}
                        </p>

                        <p>
                            {{'hello@bittersweet.com'}}
                        </p>
                    </div>

                    <div class="flex justify-end w-auto space-x-4">
                        asdasdsad
                    </div>
                </div>
            </div>
        </x-orga.modal>
    </section>
</nav>


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
