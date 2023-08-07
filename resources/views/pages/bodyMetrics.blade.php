@extends('home')
@section('subheader')
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
	<div class="d-flex align-items-center">
		<div class="mr-auto">
			<h3 class="m-subheader__title">Body metrics</h3>
		</div>
	</div>
</div>
<!-- END: Subheader -->
@endsection
@section('content')
<div class="col-12">
	@if(Session::has('flash_message'))
	<div class="alert alert-success">
		<span>The values have been added</span>
		{{ Session::get('flash') }}
	</div>
	@endif
</div>

<div class="m-content">
	<div class="row">
		<div class="col-md-6">
			<div class="m-portlet">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								New Values
							</h3>
						</div>
					</div>
				</div>
				<form class="m-form m-form--fit m-form--label-align-right" method="POST" action="{{ Route('bodyMetricADD') }}">
					
					{{ csrf_field() }}

					<div class="m-portlet__body">
						<div class="form-group m-form__group row align-items-center">
							<div class="col-md-6">
								<label for="dateU">Date test :</label>
								<input type="date" class="form-control m-input" name="dateU" id="dateU">
							</div>
						</div>
						<div class="form-group m-form__group row align-items-center">
							<div class="col-md-6">
								<label for="weight">Weight :</label>
								<input id="weight" type="weight" class="form-control" name="weight" required>
							</div>
						</div>
						<div class="form-group m-form__group row align-items-center">
							<div class="col-md-6">
								<label for="height">Height :</label>
								<input id="height" type="weight" class="form-control" name="height" required>
							</div>
						</div>
						<div class="form-group m-form__group row align-items-center">
							<div class="col-md-6">
								<label for="bmi">Body Mass Index (BMI)</label>
								<input id="bmi" type="weight" class="form-control" name="bmi" required>
							</div>
						</div>
					</div>
					<div class="m-portlet__foot m-portlet__foot--fit">
						<div class="m-form__actions">
							<button type="submit" class="btn btn-primary"><span><i class="la la-edit"></i><span>Save values</span></span></button>
						</div>
					</div>
				</form>
			</div>
			
		</div>
		<div class="col-md-6">
			<div class="m-portlet">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								Progress Trakers
							</h3>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active show" data-toggle="tab" href="#" data-target="#m_tabs_1_1">List</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" onclick="reloadgraph({!!$data!!});" href="#m_tabs_1_2">Graphs</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active show" id="m_tabs_1_1" role="tabpanel">
							<table class="table table-striped- table-hover table-checkable dataTable no-footer dtr-inline" id="m_table_1" role="grid" aria-describedby="m_table_1_info">
								<thead>
									<tr role="row">

										<th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 65.25px;" aria-label="Country: activate to sort column ascending">Weight</th>
										<th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 65.25px;" aria-label="Country: activate to sort column ascending">height</th>
										<th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 65.25px;" aria-label="Country: activate to sort column ascending">BMI</th>
										<th class="sorting" tabindex="0" aria-controls="m_table_1" rowspan="1" colspan="1" style="width: 65.25px;" aria-label="Country: activate to sort column ascending" >Date test</th>

									</tr>
								</thead>
								<tbody>
									@foreach($Bodymetrics as $item)
									<tr>

										<td>{{$item->weight}}</td>
										<td>{{$item->height}}</td>
										<td>{{$item->bmi}}</td>
										<td>{{$item->dateU}}</td>


									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="m_tabs_1_2" role="tabpanel">
                         <div id="body_morris" style="height:500px;"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

@endsection


@section('script')

<script type="text/javascript">


  

	$( document ).ready(function() {
        
      





		$( "#height").keyup(function(  ) {
			var w = ($('#weight').val()=="") ? 0 :  parseFloat($('#weight').val());
			var h = ($('#height').val()=="") ? 0 : parseFloat($('#height').val());
			var eq = w / (h*h);

			$('#bmi').val(eq)
		});




	});
</script>
@endsection
