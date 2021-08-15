{{-- @section('title', __($title)) --}}

<form>
    @foreach($this->fields() as $field)
    {{ $field->render()->with($field->data()) }}
    @endforeach

    <div class="gap-2 d-flex justify-content-end">
        @foreach($this->buttons() as $button)
        {{ $button->render()->with($button->data()) }}
        @endforeach
    </div>
</form>
