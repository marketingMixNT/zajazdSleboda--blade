<form action="{!! $url !!}" {!! $attributes !!}>
    @csrf
    <button type="submit" class="{!! $basename !!}__link " style='background-color:black;border:1px solid black'>
        <span class="{!! $basename !!}__label">{{ $label }}</span>
    </button>
</form>
