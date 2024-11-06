{{-- header와 sub는 별도의 루프에서 처리 --}}
@foreach($rows as $i => $item)
    @if(isset($item['header']) && $item['header'])

        @includeIf(inSlotPartial("header.title"))
    @endif

    @if(isset($item['items']))
        <li>
            @includeIf(inSlotPartial("header.sub"))
        </li>
    @endif
@endforeach

{{-- item들만 d-flex로 감싸서 처리 --}}
<div class="container d-flex justify-content-between py-2 border-bottom ">
    @foreach($rows as $i => $item)
        @if(!isset($item['header']) && !isset($item['items']))
            {{-- item에만 d-flex 적용 --}}
            @includeIf(inSlotPartial("header.item"))
        @endif
    @endforeach
</div>