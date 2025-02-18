@extends('layouts.master')

@section('content')
    <img loading="eager" fetchpriority="high" src="{{ asset('assets') }}/image/svg-icons.svg" alt="Social Icons"
        style="display:none;">

    <!-- start: .mobile.main-nav -->
    @include('partial.mobile')
    <!-- end: .mobile.main-nav -->
    <div class="menu-overlay"></div>

    <!-- start: #wrapper -->
    <div id="wrapper">

        @include('partial.sidebar')

        <main id="home" class="main">
       @include('partial.intro')
       @include('partial.article')
       @include('partial.topicindex')
        </main>


        <div class="clear"></div>
        @include('partial.community')
        @include('partial.footer')
    </div>
    <!-- end: #wrapper -->

        @include('partial.changestyle')
    <a href="https://1.envato.market/ghost-zento-purchase-2" target="_blank"
        class="epcl-purchase hide-on-mobile hide-on-tablet hide-on-desktop-sm">Purchase - <b>$69</b></a>
    <a href="https://estudiopatagon.com/projects/?platform=ghost" target="_blank"
        class="epcl-themes epcl-purchase hide-on-mobile hide-on-tablet hide-on-desktop-sm">More <b>EstudioPatagon</b>
        Themes</a>

    <script defer="" src="{{ asset('assets') }}/js/scripts.min.js"></script>

    <script defer="" src="{{ asset('assets') }}/js/prism-core.min.js"></script>
    <script defer="" src="{{ asset('assets') }}/js/prism-autoloader.min.js"></script>
    <script defer="" src="{{ asset('assets') }}/js/prism-plugins.min.js"></script>




    <div id="ghost-portal-root"></div>
    <div id="sodo-search-root"></div><iframe name="__privateStripeMetricsController7610" frameborder="0"
        allowtransparency="true" scrolling="no" role="presentation" allow="payment *"
        src="/m-outer-3437aaddcdf6922d623e172c2d6f9278.html" aria-hidden="true" tabindex="-1"
        style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
@endsection
