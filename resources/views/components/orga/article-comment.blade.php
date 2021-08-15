<div class="mt-20 h-16 flex justify-between">
    <label>{{$heading ?? 'comment'}}</label>
</div>

<div class="space-y-8">
    <x-mole.article-comment-card src="/assets/profile.png" name="Alton John"
        comment="I thought of Druckerman’s credo several years ago when I accompanied a friend and her two-and-half-year-old"
        date="23 Jan, 2021 21.04" />
</div>

<x-mole.article-comment-form class="mt-16">
    <x-atom.input class="w-2/3" placeholder="Comment ..." />

    <x-atom.a class="w-1/3 flex justify-end">
        <label>SEND</label>
    </x-atom.a>
</x-mole.article-comment-form>
