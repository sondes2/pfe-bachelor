@extends('home') @section('subheader')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">Challengs</h3>
			</div>
		</div>
	</div>
</div>

@endsection @section('content')
<div class="m-content">
	<div class="row">
		<div class="col-md-12">
					<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							Challengs List
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


