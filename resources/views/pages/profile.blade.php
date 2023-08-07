@extends('home') @section('subheader')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">My profile</h3>
			</div>
		</div>
	</div>
</div>

@endsection @section('content')
<div class="m-content">
	<div class="row">
		<div class="col-md-3">
						<div class="m-portlet m-portlet--full-height">
				<div class="m-portlet__body">
					<div class="m-card-profile">
						<div class="m-card-profile__title m--hide">
							Your Profile
						</div>
						<div class="m-card-profile__pic">
							<div class="m-card-profile__pic-wrapper">
								<img src="{{ asset('images/users/'.Auth::user()->image.'.jpg')}}" alt="">
							</div>
						</div>
						<div class="m-card-profile__details">
							<span class="m-card-profile__name">{{Auth::user()->last_name}} {{ Auth::user()->first_name}}</span>
							<a href="" class="m-card-profile__email m-link">{{Auth::user()->email}}</a>
						</div>
					</div>
					<ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
						<li class="m-nav__separator m-nav__separator--fit"></li>
						<li class="m-nav__section m--hide">
							<span class="m-nav__section-text">Section</span>
						</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<i class="m-nav__link-icon fab fa-hotjar"></i>

								<span class="m-nav__link-title">
									<span class="m-nav__link-wrap">
										<span class="m-nav__link-text">Calories burned</span>
										<h3 class="m-nav__link-badge ">600</h3>
									</span>
								</span>

							</a>

						</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<i class="m-nav__link-icon fa fa-clock"></i>
								<span class="m-nav__link-title">
									<span class="m-nav__link-wrap">
										<span class="m-nav__link-text">minutes of exercise</span>
										<h3 class="m-nav__link-badge ">130</h3>
									</span>
								</span>

							</a>
						</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<i class="m-nav__link-icon fa fa-walking"></i>
								<span class="m-nav__link-title">
									<span class="m-nav__link-wrap">
										<span class="m-nav__link-text">Km travelled</span>
										<h3 class="m-nav__link-badge ">9</h3>
									</span>
								</span>

							</a>
						</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<i class="m-nav__link-icon socicon-draugiem"></i>
								<span class="m-nav__link-title">
									<span class="m-nav__link-wrap">
										<span class="m-nav__link-text">Fitness points </span>
										<h3 class="m-nav__link-badge ">1.04</h3>
									</span>
								</span>

							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>

		<div class="col-md-4">
						<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">Progress</h3>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">

					<!--begin::Widget 6-->
					<div class="m-widget15">
						<div class="m-widget15__chart" style="height:180px;">
							<div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
								<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
									<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
								</div>
								<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
									<div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
								</div>
							</div>
							<canvas id="progress" width="405" height="225" class="chartjs-render-monitor" style="display: block; height: 180px; width: 324px;"></canvas>
						</div>
						<div class="m-widget15__items">
							<div class="row">
								<div class="col">
									<div class="m-widget15__item">
										<span class="m-widget15__stats">
                                        {{$w}}%
										</span>
										<span class="m-widget15__text">
											Weight
										</span>
										<div class="m--space-10"></div>
										<div class="progress m-progress--sm">
											<div class="progress-bar bg-danger" role="progressbar" style="width: {{$w}}%;" aria-valuenow="{{$w}}" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
								<div class="col">
									<div class="m-widget15__item">
										<span class="m-widget15__stats">
                                        {{$h}}%
										</span>
										<span class="m-widget15__text">
											Height
										</span>
										<div class="m--space-10"></div>
										<div class="progress m-progress--sm">
											<div class="progress-bar bg-warning" role="progressbar" style="width: {{$h}}%;" aria-valuenow="{{$h}}" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
													<div class="col-md-12 m-scrollable m-scroller ps ps--active-y" data-scrollable="true" data-height="380" data-mobile-height="300" style="height: 380px; overflow: hidden;">

						<!--Begin::Timeline 2 -->
						<div class="m-timeline-2">
							<div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                                @foreach($body as $b)
                                    <div class="m-timeline-2__item m--margin-top-30">
									    <span class="m-timeline-2__item-time">{{str_replace("2019-", "", $b->dateU)}}</span>
                                        <div class="m-timeline-2__item-cricle">
                                            <i class="fa fa-genderless m--font-brand"></i>
                                        </div>
									<div class="m-timeline-2__item-text m--padding-top-5">
                                    weight: {{$b->weight}}, height: {{$b->height}}, bmi: {{$b->bmi}}
									</div>
                                </div>
                                @endforeach


							</div>
						</div>

						<!--End::Timeline 2 -->
						<div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 380px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 276px;"></div></div></div>
							</div>
							

			<!--end:: Widgets/Sales Stats-->
		</div>
	</div>
	</div>
	</div>
		</div>
		<div class="col-md-5">
					<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Challengs
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
				
<div class="m-widget5">
    @foreach($challengs as $c)
	<div class="m-widget5__item">
		<div class="m-widget5__content">
			<div class="m-widget5__pic">
				<img class="m-widget7__img" src="{{ asset('images/events/'.$c->image.'.jpg')}}" alt="">
			</div>
			<div class="m-widget5__section">
				<h4 class="m-widget5__title">
					{{$c->title}}
				</h4>
				<span class="m-widget5__desc">
                {{$c->description}}
				</span>
				<div class="m-widget5__info">
				<span class="m-widget5__author">
						Date:
					</span>
					<span class="m-widget5__info-date m--font-info">
                    {{$c->startDate}}
					</span>
					<span class="m-widget5__author">
					participants :
					</span>
					<span class="m-widget5__info-date">
                    {{$participants[$c->id]}}
					</span>
                </div>
			</div>
        </div>
        <div class="m-widget5__content">
		<div class="m-widget5__stats1">
		<form name="f{{$c->id}}" action="{{route('challenge_sub')}}" method="post">
		{!! csrf_field() !!}
		<input type="hidden" name="id_challenge" value="{{$c->id}}">
		@if($challengsin[$c->id] == 0)
		<input type="hidden" name="action" value="add">
		<button type="submit" class="btn btn-success btn-lg m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill"><i class="la la-calendar-plus-o"></i></button>
		@else
		<input type="hidden" name="action" value="del">
		<button type="submit" class="btn btn-danger btn-lg m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill"><i class="la la-calendar-times-o"></i></button>
		@endif
		</form>

		</div>
		</div>
	</div>
    @endforeach
	
</div>

				</div>
			</div>
		</div>

	</div>
</div>

@endsection


@section('script')
<script>
	var e= {
		type:"line",
		data: {
			{!! $data !!}
		}
		,
		options: {
			title: {
				display: !1
			}
			,
			tooltips: {
				intersect: !1, mode: "nearest", xPadding: 10, yPadding: 10, caretPadding: 10
			}
			,
			legend: {
				display:!1,
				labels: {
					usePointStyle: !1
				}
			}
			,
			responsive:!0,
			maintainAspectRatio:!1,
			hover: {
				mode: "index"
			}
			,
			scales: {
				xAxes:[ {
					display:!1,
					gridLines:!1,
					scaleLabel: {
						display: !0, labelString: "Month"
					}
				}
				],
				yAxes:[ {
					display:!1,
					gridLines:!1,
					scaleLabel: {
						display: !0, labelString: "Value"
					}
				}
				]
			}
			,
			elements: {
				point: {
					radius: 3, borderWidth: 0, hoverRadius: 8, hoverBorderWidth: 2
				}
			}
		}
	};
	new Chart($("#progress"), e)
</script>
@endsection