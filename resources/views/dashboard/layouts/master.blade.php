<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>ARAMIS | @yield('title') </title>
		<meta charset="utf-8" />
		<meta name="description" content="aramis v2"/>
		<meta name="keywords" content="aramis v2" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - v2" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Metronic by Keenthemes" />
		<link rel="shortcut icon" href="https://aramis.insuranceservices.mx/apple-touch-icon.png" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/leaflet/leaflet.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
		<!--begin::Theme mode setup on page load-->
		<script>
            var defaultThemeMode = "light"; 
            var themeMode; 
            if ( document.documentElement ) { 
                if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { 
                    themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); 
                } else { 
                    if ( localStorage.getItem("data-bs-theme") !== null ) { 
                        themeMode = localStorage.getItem("data-bs-theme"); 
                    } else { 
                        themeMode = defaultThemeMode; 
                    } } 
                    
                    if (themeMode === "system") { 
                        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; 
                    } 
                    document.documentElement.setAttribute("data-bs-theme", themeMode); 
                }
        </script>
		<!--end::Theme mode setup on page load-->

        <div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Aside-->
                @include("dashboard/layouts/aside")
                <!--end::Aside-->
                <!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
                    @include("dashboard/layouts/header")
                    <!--end::Header-->

                    @yield('content')

					@include('dashboard/asegurados/asegurado-nuevo')
					@include('dashboard/components/calculadora-prima')
					@include('dashboard/components/avatar-aramis')

                    <!--begin::Footer-->
                    @include("dashboard/layouts/footer")
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
        </div>

		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/locales/de_DE.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/data/countries.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/data/countries2.js"></script>
		<script src="assets/plugins/custom/leaflet/leaflet.bundle.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/select-location.js') }}"></script>
		<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
		<script src="{{ asset('assets/js/avatar-animated.js') }}"></script>
		<script src="{{ asset('assets/js/calculadora-prima.js') }}"></script>
		<script>
			
		</script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
		@stack('js')
	</body>
	<!--end::Body-->
</html>