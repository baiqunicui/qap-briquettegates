<div>
    <nav x-data="scrollToReveal()" x-ref="navbar" x-on:scroll.window="scroll()"
        :class="{'fixed top-0': sticky, 'absolute': !sticky}" class="z-[999] absolute top-0 w-full">
        <div class="relative z-0 flex flex-col items-center justify-center py-6 mx-auto border-b border-gray-300"
            data-aos="fade-in">
            <div class="absolute left-0 px-6">
                <x-atom.img src="/assets/logo.svg" class="w-auto h-8"></x-atom.img>
            </div>

            <x-orga.section x-data="{menu: false}" class="flex justify-between">
                <div class="hidden space-x-10 lg:flex">
                    @foreach ($collection->menu as $item)
                    <x-atom.a href="{{$item[lang()][0]['link']}}" label="{{$item[lang()][0]['heading']}}" />
                    @endforeach
                </div>

                <div class="flex items-center space-x-12">
                    <x-atom.a href="{{ url()->current() }}?lang={{ 'en' }}" label="{{'en'}}" />
                    <x-atom.svg-line class="w-20" />
                    <x-atom.a href="{{ url()->current() }}?lang={{ 'id' }}" label="{{'id'}}" />
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

                                @foreach ($collection->menu as $item)
                                <x-atom.a href="{{ $item[lang()][0]['link'] }}">
                                    <h4 class="font-medium text-right capitalize">
                                        {{ $item[lang()][0]['heading'] }}
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
            </x-orga.section>

            <div class="absolute right-0 px-6">
                <button class="px-4 py-1 bg-[#2F6B00] rounded-full">
                    <small class="font-medium text-white">{{'Chat us'}}</small>
                </button>
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
