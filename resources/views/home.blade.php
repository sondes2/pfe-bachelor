<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>FitZone </title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin:: Global Mandatory Vendors -->

		<link href="{{ asset('vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="{{ asset('vendors/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/nouislider/distribute/nouislider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/jstree/dist/themes/default/style.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/chartist/dist/chartist.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/vendors/flaticon/css/flaticon.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/vendors/metronic/css/styles.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('vendors/vendors/fontawesome5/css/all.min.css') }}" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="{{ asset('demo/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="{{ asset('vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->
		<link rel="icon" type="image/png"href="{{ asset('images/logo/favicon.png') }}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">


		@include('layouts.header')


			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">




				<!-- BEGIN: SIDEBAR -->
				@include('layouts.sidebar')
				<!-- END: SIDEBAR -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">





					@yield('subheader')

					@yield('content')




				</div>
			</div>

			<!-- end:: Body -->

			@include('layouts.footer')
		</div>

		<!-- end:: Page -->



		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->


		<!--begin:: Global Mandatory Vendors -->
		<script src="{{ asset('vendors/jquery/dist/jquery.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/moment/min/moment.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/wnumb/wNumb.js') }}" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="{{ asset('vendors/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/inputmask/dist/inputmask/inputmask.date.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/nouislider/distribute/nouislider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/autosize/dist/autosize.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/ion-rangeslider/js/ion.rangeSlider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/summernote/dist/summernote.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/markdown/lib/markdown.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/js/framework/components/plugins/forms/jquery-validation.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/js/framework/components/plugins/base/bootstrap-notify.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/jstree/dist/jstree.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/raphael/raphael.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/morris.js/morris.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/chartist/dist/chartist.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/js/framework/components/plugins/charts/chart.init.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/vendors/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('vendors/js/framework/components/plugins/base/sweetalert2.init.js') }}" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="{{ asset('demo/base/scripts.bundle.js') }}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="{{ asset('vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="{{ asset('app/js/dashboard.js') }}" type="text/javascript"></script>
@yield('script')

<script type="text/javascript">


 function reloadgraph(datax){
	var morrisLine;

	$("#body_morris").empty();
	morrisLine =  Morris.Line({
        element: 'body_morris',
        data: datax,
        lineColors: ['#819C79', '#fc8710', '#FF6541'],
        xkey: 'period',
        ykeys: ['weight','height','bmi'],
        labels: ['PARK 1', 'PARK 2', 'PARK 3'],
        xLabels: 'day',
        xLabelAngle: 45,
        xLabelFormat: function (d) {
        var weekdays = new Array(7);
        weekdays[0] = 'SUN';
        weekdays[1] = 'MON';
        weekdays[2] = 'TUE';
        weekdays[3] = 'WED';
        weekdays[4] = 'THU';
        weekdays[5] = 'FRI';
        weekdays[6] = 'SAT';
        
        return weekdays[d.getDay()] + '-' + 
             ('0' + (d.getMonth() + 1)).slice(-2) + '-' + 
             ('0' + (d.getDate())).slice(-2);
        },
        resize: true
				});
				
				morrisLine.setData([{period: '2019-05-17', weight: 8, height: 5, bmi: 0.32},{period: '2019-05-10', weight: 84, height: 5, bmi: 3.36},{period: '2019-05-09', weight: 8, height: 5, bmi: 0.32},{period: '2019-04-12', weight: 70, height: 1.5, bmi: 31.11},{period: '2019-04-12', weight: 80, height: 1.68, bmi: 28.34},{period: '2019-04-10', weight: 80, height: 1.6, bmi: 20.4},{period: '2019-04-10', weight: 80, height: 165, bmi: 20.44},{period: '2019-04-10', weight: 80, height: 12.5, bmi: 20.4}]);
        }      
</script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
		<link href="{{ asset('vendors/vendors/fontawesome5/css/all.min.css') }}" rel="stylesheet" type="text/css" />
