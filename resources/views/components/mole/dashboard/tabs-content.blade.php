<div {{ $attributes->merge(['class' => 'p-8 bg-white space-y-8']) }}>
    <div>
        {{ $contentTop ?? '' }}
    </div>

    <div class="grid grid-cols-6 gap-y-6">
        {{ $contentMiddle ?? '' }}
    </div>

    <div>
        {{ $contentBottom ?? '' }}
    </div>
</div>
