<!-- Page container -->
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
        <main class="col-lg-9 pt-1 pb-5 mb-sm-2 mb-md-3">
            {{$slot}}
        </main>
    </div>

</div>