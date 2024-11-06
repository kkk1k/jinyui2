<!-- Page container -->

@livewire('site-widget-menu', [
    'code' => "header",
    'widget_path' => "header_menu",
    'viewFile' => inSlotPartial("header.layout")
])

<div class="container pt-4">
    <div class="row pt-sm-2">
        <!-- Sidebar navigation -->
        <aside class="col-lg-3 pe-xl-4">
            @livewire('site-widget-menu', [
                    'code_key' => "side",
                    'widget_path' => "sidebar"
                ])
        </aside>

        <!-- Page content -->
        <main class="col-lg-9 pt-1 pb-5 mb-sm-2 mb-md-3" style="min-height: 25vw;"> 
            {{$slot}}
        </main>
    </div>
</div>

@livewire('site-widget-menu', [
    'code' => "footer",
    'widget_path' => "footer_menu",
    'viewFile' => inSlotPartial("footer1.layout")
])
