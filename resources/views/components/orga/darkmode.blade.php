<body
    x-init="darkMode = JSON.parse(localStorage.getItem('darkMode')); $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    x-data="{'darkMode': false}" class="antialiased">
    <div :class="{'dark': darkMode === true}"
        class="w-full mx-auto bg-white dark:bg-primary text-primary dark:text-white">
        {{ $slot }}

        <div class="sticky bottom-0 z-[99999] w-auto py-2">
            <div class="flex items-center justify-center w-1/3 mx-auto space-x-2">
                <small class="dark:text-white">
                    Light
                </small>

                <label for="toggle"
                    class="flex items-center h-5 p-1 duration-300 ease-in-out bg-gray-300 rounded-full cursor-pointer w-9 dark:bg-gray-600">
                    <div
                        class="w-4 h-4 duration-300 ease-in-out transform bg-white rounded-full shadow-md toggle-dot dark:translate-x-3">
                    </div>
                </label>

                <small class="dark:text-white">
                    Dark
                </small>

                <input id="toggle" type="checkbox" class="hidden" :value="darkMode" @change="darkMode = !darkMode" />
            </div>
        </div>
    </div>

    {{$script}}
</body>
