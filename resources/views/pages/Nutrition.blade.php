@extends('home')
@section('subheader')
<!-- BEGIN: Subheader -->
<!-- END: Subheader -->
@endsection
@section('content')
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title m-subheader__title--separator">Nutrition Plan</h3>
         <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
              <!-- <a href="#" class="m-nav__link m-nav__link--icon">-->
                 	<a href="{{Route('foodList_get')}}" class="m-nav__link m-nav__link--icon">
               <i class="m-nav__link-icon la la-home"></i>
               </a>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
               <a href="http://127.0.0.1:8000/foodList" class="m-nav__link">
               <span class="m-nav__link-text">Food List</span>
               </a>
            </li>
            	<li class="m-nav__separator">-</li>
         </ul>
      </div>
      <div>
         <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
            <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
            <i class="la la-plus m--hide"></i>
            <i class="la la-ellipsis-h"></i>
            </a>
            <div class="m-dropdown__wrapper">
               <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
               <div class="m-dropdown__inner">
                  <div class="m-dropdown__body">
                     <div class="m-dropdown__content">
                        <ul class="m-nav">
                           <li class="m-nav__section m-nav__section--first m--hide">
                              <span class="m-nav__section-text">Quick Actions</span>
                           </li>
                           <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                              <i class="m-nav__link-icon flaticon-share"></i>
                              <span class="m-nav__link-text">Activity</span>
                              </a>
                           </li>
                           <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                              <i class="m-nav__link-icon flaticon-chat-1"></i>
                              <span class="m-nav__link-text">Messages</span>
                              </a>
                           </li>
                           <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                              <i class="m-nav__link-icon flaticon-info"></i>
                              <span class="m-nav__link-text">FAQ</span>
                              </a>
                           </li>
                           <li class="m-nav__item">
                              <a href="" class="m-nav__link">
                              <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                              <span class="m-nav__link-text">Support</span>
                              </a>
                           </li>
                           <li class="m-nav__separator m-nav__separator--fit">
                           </li>
                           <li class="m-nav__item">
                              <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="m-content">
   <div class="row">
      <div class="col-xl-6">
         <!--begin::Portlet-->
         <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
               <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                     <span class="m-portlet__head-icon m--hide">
                     <i class="la la-gear"></i>
                     </span>
                     <h3 class="m-portlet__head-text">
                        Diet overview
                     </h3>
                  </div>
               </div>
            </div>
            <div class="m-portlet__body">
               <!--begin::Section-->
               <div class="m-section">
                  <span class="m-section__sub">
                  Nutrition plan "Durable"
                  </span>
                  <span class="m-section__sub">
                  This diet will help you lose weight with lasting results, allowing you to slim gradually while getting all the necessary nutrients. This diet is based on balanced, healthy foods in combination with a lowered energy and fats intake.
                  </span>
                  <div class="m-section__content">
                     <table class="table_plan_overview">
                        <tbody>
                           <tr>
                              <th>Goal:</th>
                              <td>65 kg (-10 kg)</td>
                           </tr>
                           <tr>
                              <th>Goal date:</th>
                              <td>19-04-2019</td>
                           </tr>
                           <tr>
                              <th></th>
                              <td></td>
                           </tr>
                        </tbody>
                     </table>

                     <div class="float_left" style="width:50%;">
                        <div style="min-height: 220px;position: relative; top: 10px;">
                           <div class="col-xs-12">
                           </div>
                           <div id="nutrition_pie" style="min-width: 400px; max-width: 400px; height: 200px;" data-highcharts-chart="0">
                              <div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 400px; height: 200px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-family: Lato, Arial;">
                                 <svg version="1.1" style="font-family:Lato, Arial;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="400" height="200">
                                    <desc>Created with Highcharts 4.0.3</desc>
                                    <defs>
                                       <clipPath id="highcharts-1">
                                          <rect x="0" y="0" width="190" height="175"></rect>
                                       </clipPath>
                                    </defs>
                                    <rect x="0" y="0" width="400" height="200" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background"></rect>
                                    <path fill="rgba(243,159,0,0.25)" d="M 0 0"></path>
                                    <g class="highcharts-series-group" zIndex="3">
                                       <g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(10,10) scale(1 1)" style="cursor:pointer;">
                                          <path fill="#ee3262" d="M 94.98421532671362 10.000001607457506 A 77.5 77.5 0 1 1 71.12162757595559 161.22973165812172 L 95 87.5 A 0 0 0 1 0 95 87.5 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                                          <path fill="#7eba01" d="M 71.04790979577098 161.20581642481466 A 77.5 77.5 0 0 1 21.32752364702405 111.55444299958323 L 95 87.5 A 0 0 0 0 0 95 87.5 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                                          <path fill="#f39f00" d="M 21.303506044268644 111.48075850828852 A 77.5 77.5 0 0 1 94.89235405479945 10.0000747590652 L 95 87.5 A 0 0 0 0 0 95 87.5 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path>
                                       </g>
                                       <g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(10,10) scale(1 1)"></g>
                                    </g>
                                    <g class="highcharts-legend" zIndex="7" transform="translate(283,28)">
                                       <g zIndex="1">
                                          <g>
                                             <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                                <text x="22" style="color:#333333;font-size:12px;font-weight:normal;cursor:pointer;font-family:Lato, Arial;font-size:12px;fill:#333333;" text-anchor="start" zIndex="2" y="15">
                                                   <tspan>Carbs (55%)</tspan>
                                                </text>
                                                <rect x="0" y="1.5" width="17" height="17" rx="3" ry="3" zIndex="3" fill="#ee3262"></rect>
                                             </g>
                                             <g class="highcharts-legend-item" zIndex="1" transform="translate(8,32)">
                                                <text x="22" y="15" style="color:#333333;font-size:12px;font-weight:normal;cursor:pointer;font-family:Lato, Arial;font-size:12px;fill:#333333;" text-anchor="start" zIndex="2">
                                                   <tspan>Proteins (15%)</tspan>
                                                </text>
                                                <rect x="0" y="1.5" width="17" height="17" rx="3" ry="3" zIndex="3" fill="#7eba01"></rect>
                                             </g>
                                             <g class="highcharts-legend-item" zIndex="1" transform="translate(8,61)">
                                                <text x="22" y="15" style="color:#333333;font-size:12px;font-weight:normal;cursor:pointer;font-family:Lato, Arial;font-size:12px;fill:#333333;" text-anchor="start" zIndex="2">
                                                   <tspan>Fats (30%)</tspan>
                                                </text>
                                                <rect x="0" y="1.5" width="17" height="17" rx="3" ry="3" zIndex="3" fill="#f39f00"></rect>
                                             </g>
                                          </g>
                                       </g>
                                    </g>
                                    <g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;font-family:Lato, Arial;font-size:13px;" transform="translate(8,34)" opacity="0" visibility="hidden">
                                       <path fill="rgba(0,0,0,0.75)" d="M 12 0 L 28 0 C 40 0 40 0 40 12 L 40 34 C 40 46 40 46 28 46 L 12 46 C 0 46 0 46 0 34 L 0 12 C 0 0 0 0 12 0"></path>
                                       <text x="8" zIndex="1" style="font-size:12px;color:#ffffff;fill:#ffffff;" y="21">
                                          <tspan style="font-weight:bold">Fats</tspan>
                                          <tspan x="8" dy="16">30%</tspan>
                                       </text>
                                    </g>
                                 </svg>
                              </div>
                           </div>
                           <script type="text/javascript">
                              $(function () {
                              	$('#nutrition_pie').highcharts({
                              		colors: ['#ee3262', '#7eba01', '#f39f00'],
                              		chart: {
                              			type: 'pie',
                              			plotBackgroundColor: null,
                              			plotBorderWidth: null,
                              			plotShadow: false,
                              			style: {
                              				fontFamily: 'Lato, Arial'
                              			},
                              			marginRight: 200
                              		},
                              		tooltip: {
                              			formatter: function () {
                              				return '<strong>' + this.point.name + '</strong><br />' + this.y + '%';
                              			},
                              			style: {
                              				color: '#ffffff',
                              				'font-family': 'Lato, Arial',
                              				'font-size': '13px'
                              			},
                              			borderRadius: 12,
                              			borderWidth: 0,
                              			shadow: false,
                              			backgroundColor: 'rgba(0,0,0,0.75)'
                              		},
                              		legend: {
                              			align: 'right',
                              			verticalAlign: 'top',
                              			x: 0,
                              			y: 18,
                              			layout: 'vertical',
                              			itemMarginBottom: 15,
                              			itemHeight: 20,
                              			itemStyle: {
                              				color: '#333333',
                              				'font-family': 'Lato, Arial',
                              				'font-size': '12px',
                              				fontWeight: 'normal'
                              			},
                              			labelFormatter: function () {
                              				return this.name + ' (' + this.y + '%)';
                              			},
                              			symbolWidth: 17,
                              			symbolHeight: 17,
                              			symbolRadius: 3
                              		},
                              		credits: {
                              			enabled: false
                              		},
                              		plotOptions: {
                              			pie: {
                              				allowPointSelect: true,
                              				cursor: 'pointer',
                              				dataLabels: {
                              					enabled: false
                              				},
                              				showInLegend: true
                              			}
                              		},
                              		series: [{
                              			data: [
                              				['Carbs', 55],
                              				['Proteins', 15],
                              				['Fats', 30]
                              			],
                              			color: '#00a2e0',
                              			tooltip: {
                              				valueSuffix: '%'
                              			}
                              		}],
                              		title: {
                              			text: ''
                              		}
                              	});
                              });
                           </script>
                          <!--- <button type="button" class="btn btn-primary btn-lg">New nutrition plan</button> !-->

                              <a href="http://127.0.0.1:8000/ExerciseHistory"  type="button" class=" btn m-btn--pill m-btn--air  btn m-btn--square  btn-info btn-lg m-nav__link  ">      Track your food   </a>
 <ul></ul>
                            <a href="http://127.0.0.1:8000/ExerciseHistory"  type="button" class=" btn m-btn--pill m-btn--air  btn m-btn--square  btn-outline-info btn-lg m-nav__link  "> New nutrition Plan </a>



                      </div>
                     </div>
                  </div>
               </div>
               <!--end::Section-->
            </div>
         </div>
         <!--end::Portlet-->
      </div>
      <div class="col-xl-6">
         <!--begin::Portlet-->
         <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
               <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                     <span class="m-portlet__head-icon m--hide">
                     <i class="la la-gear"></i>
                     </span>
                     <h1 class="m-portlet__head-text">
                        Nutrition statistics
                     </h1>
                  </div>
               </div>
            </div>
            <div class="m-portlet__body">
               <!--begin::Section-->
               <div class="m-section">
                  <div class="m-section__content">
                     <div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
                        <div class="m-demo__preview">
                           <div class="m-widget14">
                              <div class="m-widget14__header m--margin-bottom-30">
                                 <h3 class="m-widget14__title">
                                    Overview nutrition statistics
                                 </h3>
                                 <span class="m-widget14__desc">
                                 Check out each collumn for more details
                                 </span>
                              </div>
                              <div class="m-widget14__chart" style="height:120px;">
                                 <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                       <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                       <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                    </div>
                                 </div>
                                 <canvas id="m_chart_daily_sales" width="428" height="150" class="chartjs-render-monitor" style="display: block; height: 120px; width: 343px;"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--end::Section-->
            </div>
         </div>
         <!--end::Portlet-->
      </div>
   </div>
</div>


</div>
@endsection
