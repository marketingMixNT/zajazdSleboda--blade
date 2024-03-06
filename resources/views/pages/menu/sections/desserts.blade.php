<x-menu.section id="desery">
    <!--TITLE-->
    <x-menu.section-title>Desery</x-menu.section-title>
    <!--ITEMS CONTAINER-->
    <x-menu.items-container class="flex flex-col gap-4">
        <!--ITEMS-->
        @foreach ($desserts as $item)
        <x-menu.single-item title="{{$item['title']}}" price="{{$item['price']}}">{{$item['ingredients']}}</x-menu.single-item>
    @endforeach

        
</x-menu.items-container>
</x-menu.section>