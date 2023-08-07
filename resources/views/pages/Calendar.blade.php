@extends('home')

		@section('content')



		<div class="m-subheader ">
								<div class="d-flex align-items-center">
									<div class="mr-auto">
										<h3 class="m-subheader__title m-subheader__title--separator">Basic Calendar</h3>
									</div>
								</div>
							</div>



		<div class="m-content">
			<div class="row">
				<div class="col-lg-12">
					<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon">
													<i class="flaticon-map-location"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Portlet Action Icons
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">


										<div class="panel panel-primary">
											<div class="panel-body">
	 <form class="col-md-12" action="{{Route('Calendar.add')}}" method="POST">
		 {{ csrf_field() }}

														<div class="row">
															 <div class="col-xs-12 col-sm-12 col-md-12">
																	@if (Session::has('success'))
																		 <div class="alert alert-success">{{ Session::get('success') }}</div>
																	@elseif (Session::has('warnning'))
																			<div class="alert alert-danger">{{ Session::get('warnning') }}</div>
																	@endif

																</div>

															<div class="col-xs-2 col-sm-2 col-md-2">
																<div class="form-group">
																   <label for="Title">Title:</label>
																     <div class="col-md-12">
																        <input id="Title" type="text" class="form-control" name="Title"  required>
																     </div>
															 </div>
															</div>


															<div class="col-xs-3 col-sm-3 col-md-3">
																<div class="form-group">
																						 <label for="StartDate" class="col-md-4 control-label">StartDate:</label>
																		 <div class="col-md-12">
																				<input id="StartDate" type="datetime-local" class="form-control" name="StartDate"  required>
																		 </div>
															 </div>
															</div>

															<div class="col-xs-3 col-sm-3 col-md-3">
																	<div class="form-group">
																							 <label for="EndDate" class="col-md-4 control-label">EndDate:</label>
																			 <div class="col-md-12">
																					<input id="EndDate" type="datetime-local" class="form-control" name="EndDate" required>
																			 </div>
																 </div>

															</div>
															<div class="col-xs-2 col-sm-2 col-md-2">
																<div class="form-group">
																						 <label for="Description" class="col-md-4 control-label">Description:</label>
																		 <div class="col-md-12">
																				<input id="Description" type="text" class="form-control" name="Description"  required>
																		 </div>
															 </div>
															</div>
															<div class="col-xs-2 col-sm-2 col-md-2">
																<div class="form-group">
																						 <label for="Type" class="col-md-4 control-label">Type:</label>
																		 <div class="col-md-12">
																				<input id="Type" type="text" class="form-control" name="Type"  required>
																		 </div>
															 </div>
															</div>

															<div class="m-form__group row">
															                      <div class="col-md-6 col-md-offset-4">
															                        <button type="submit" class="btn m-btn--square  btn-primary btn-lg">ADD event</button>



															                        </button>
															                      </div>


</div>
														</div>
												</form>
										 </div>

										</div>

									</div>
								</div>
				</div>
				<div class="col-lg-12">

					<!--begin::Portlet-->
					<div class="m-portlet" id="m_portlet">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<span class="m-portlet__head-icon">
										<i class="flaticon-map-location"></i>
									</span>
									<h3 class="m-portlet__head-text">
										Basic Calendar
									</h3>
								</div>
							</div>

						</div>
						<div class="m-portlet__body">
							<div id="m_calendar"></div>
						</div>
					</div>

					<!--end::Portlet-->
				</div>
			</div>
		</div>
@endsection

@section('script')
<script>
var calendarInit = function() {
		if ($('#m_calendar').length === 0) {
				return;
		}

		var todayDate = moment().startOf('day');
		var YM = todayDate.format('YYYY-MM');
		var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
		var TODAY = todayDate.format('YYYY-MM-DD');
		var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

		$('#m_calendar').fullCalendar({
				isRTL: mUtil.isRTL(),
				header: {
						left: 'prev,next today',
						center: 'title',
						right: 'month,agendaWeek,agendaDay,listWeek'
				},
				editable: true,
				eventLimit: true, // allow "more" link when too many events
				navLinks: true,
				events: {!! $_JSON !!},

				eventRender: function(event, element) {
						if (element.hasClass('fc-day-grid-event')) {
								element.data('content', event.description);
								element.data('placement', 'top');
								mApp.initPopover(element);
						} else if (element.hasClass('fc-time-grid-event')) {
								element.find('.fc-title').append('<div class="fc-description">' + event.description + '</div>');
						} else if (element.find('.fc-list-item-title').lenght !== 0) {
								element.find('.fc-list-item-title').append('<div class="fc-description">' + event.description + '</div>');
						}
				}
		});
}
calendarInit();
</script>
@endsection
