<div {{$attributes->except('class')}}
    class="fixed top-0 right-0 z-[99999] w-full h-screen bg-[#eeeeee] dark:bg-primary dark:bg-opacity-50 bg-opacity-90">
    <div {{$attributes->merge(['class' => 'static flex flex-col h-screen'])}}>
        {{$slot}}
    </div>
</div>
