<div id="section" class="text-black">
    <div x-data="{
                foodArray: [
                    @foreach ($hero as $item)
                    '{{$item->category->first()['slug']}}',
                    @endforeach
                ],
                selectedFoodType: null}" class="bg-red-200">

        <nav class="flex space-x-5">
            <a href="#" class="" :class="{ 'pink b--pink' : selectedFoodType == null }"
                x-on:click.prevent="selectedFoodType = null, console.log('selectedFoodType = everything')">
                <h6>All</h6>
            </a>

            <template x-for="foodItem in foodArray" :key="foodItem">
                <a @click.prevent="selectedFoodType = foodItem, console.log('selectedFoodType = '+selectedFoodType)">
                    <h6 x-text="foodItem"></h6>
                </a>
            </template>
        </nav>

        @foreach ($hero as $item)
        <div class="m4" x-show="selectedFoodType == null || selectedFoodType == '{{$item->category->first()['slug']}}'">
            {{$item->id}}
        </div>
        @endforeach
    </div>
</div>
