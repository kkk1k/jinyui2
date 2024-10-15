<!-- Page container -->
@livewire('site-widget-menu', [
    'code' => "header",
    'widget_path' => "header_menu",
    'viewFile' => inSlotPartial("header.layout")//"jiny-site::site.menus.footer1.layout"
])
<div class="container pt-4">
        <!-- Page content -->
    <main class="col-lg-9 pt-1 pb-5 mb-sm-2 mb-md-3">
        {{$slot}}
    </main>
</div>
<x-www-footer />
@livewire('site-widget-menu', [
    'code' => "footer",
    'widget_path' => "footer_menu",
    'viewFile' => inSlotPartial("footer1.layout")//"jiny-site::site.menus.footer1.layout"
])