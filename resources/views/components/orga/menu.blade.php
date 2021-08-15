<div class="absolute inset-0 z-2">
    <nav x-data="scrollToReveal()" x-ref="navbar" x-on:scroll.window="scroll()"
        :class="{'py-4 top-0 bg-primary border-b border-opacity-20': sticky, 'relative': !sticky}"
        class="relative py-6 mx-auto text-white z-[999]">
        <div x-data="{menu: false}" class="flex items-center justify-between w-10/12 mx-auto md:w-10/12 lg:w-8/12">
            <h4 id="logo" class="!font-serif">
                {!! 'Bittersweet' !!}
            </h4>

            <x-atom.a id="menubutton" x-on:click="menu = true">
                <x-atom.svg-hamburger />
            </x-atom.a>

            <x-orga.modal id="modal" x-show="menu" class="w-full z-2">
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
                            @foreach ($menu as $item)
                            <x-atom.a :href="$item->link">
                                <h4 class="font-medium text-right capitalize">{{$item->title}}</h4>
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
                            @foreach ($socmed as $item)
                            <x-atom.a :href="$item->link">
                                <x-atom.img :src="$item->icon->first()['url']" class="w-auto h-5" />
                            </x-atom.a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </x-orga.modal>
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
