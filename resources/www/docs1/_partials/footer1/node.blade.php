{{-- header와 sub는 별도의 루프에서 처리 --}}
@foreach($rows as $i => $item)
    @if(isset($item['items']))
        <li>
            @includeIf(inSlotPartial("footer1.sub"), [
            'ref' => "",
            'rows' => $rows['items']
        ])

        </li>
    @endif
@endforeach
<div class="container pt-2 border-bottom ">
{{-- item들만 d-flex로 감싸서 처리 --}}
    <div class="d-flex justify-content-between py-2 ">
        @foreach($rows as $i => $item)
            @if(!isset($item['header']) && !isset($item['items']))
                {{-- item에만 d-flex 적용 --}}
                @includeIf(inSlotPartial(viewFile: "footer1.item"))

            @endif
        @endforeach
    </div>
@partials('footer_social_link')
</div>