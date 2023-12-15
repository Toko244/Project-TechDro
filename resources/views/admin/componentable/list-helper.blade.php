<ol class="dd-list">
    @if (isset($componentables))
        @foreach ($componentables as $component)
            <li class="dd-item sections-list-li" data-id="{{ $component->id }}">
                <div class="dd-handle">
                    {{ $component->title }}
                </div>
                <div class="change-icons">
                    <a href="/{{ app()->getLocale() }}/admin/componentPosts/{{ $component->componentable_id }}"
                        class="far fa-eye"></a>
                    <a href="/{{ app()->getLocale() }}/admin/componentable/edit/{{ $component->id }}"
                        class="fas fa-pencil-alt"></a>
                    <a href="{{ route('componanatable.destroy', [app()->getLocale(), $component->id]) }}"
                        onclick="return confirm_alert(this);" class="fas fa-trash-alt"></a>
                </div>
            </li>
        @endforeach
    @endif
</ol>
<script>
    function confirm_alert(node) {
        return confirm("Do you want to delete this Section?");
    }
</script>
