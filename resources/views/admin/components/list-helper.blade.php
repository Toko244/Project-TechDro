<ol class="dd-list">
    @foreach ($components as $component)
        <li class="dd-item sections-list-li" data-id="{{ $component->id }}">
            <div class="dd-handle">
                {{ $component->title }}
            </div>
            <div class="change-icons">
                <a href="/{{ app()->getLocale() }}/admin/componentPosts/{{ $component->id }}" class="far fa-eye"></a>
                <a href="/{{ app()->getLocale() }}/admin/component/{{ $component->id }}/edit"
                    class="fas fa-pencil-alt"></a>
                <a href="/{{ app()->getLocale() }}/admin/component/{{ $component->id }}/destroy"
                    onclick="return confirm_alert(this);" class="fas fa-trash-alt"></a>
            </div>
        </li>
    @endforeach
</ol>
<script>
    function confirm_alert(node) {
        return confirm("Do you want to delete this Section?");
    }
</script>
