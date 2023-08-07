@extends('home')


@section('subheader')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title ">Messages</h3>
      </div>
   </div>
</div>
<!-- END: Subheader -->
@endsection




@section('content')

<div class="m-content">
   <div class="row">

   <div class="col-md-3">
<div class="m-portlet">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text list-title"></h3>
                      </div>
                    </div>
                  </div>
                  <div class="m-portlet__body">

									<div class="m-list-search">
															<div class="m-list-search__results lst">
															
																@foreach($liste as $l)
																<a href="#" onclick="getMessages({{$l->id}},'{{$l->first_name}} {{$l->last_name}}');" class="m-list-search__result-item user-msg-btn">
																	<span class="m-list-search__result-item-pic">
																		@if($vus[$l->id] > 0)
																		<span class="m-menu__link-badge"><span class="m-badge m-badge--danger">{{$vus[$l->id]}}</span></span>
																		@endif
																		<img class="m--img-rounded" src="{{ asset('images/users/'.$l->image.'.jpg')}}" title="">
																	</span>
																	<span class="m-list-search__result-item-text">{{$l->first_name}} {{$l->last_name}}</span>
																</a>
																@endforeach
															</div>
														</div>

                    <!--end::Section-->
                  </div>

                  <!--end::Form-->
                                    </div>
 </div>
                                    <div class="col-md-9">
                                    <div class="m-portlet msg-portlet" style="display:none">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text msg-name"> </h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body m-messenger m-messenger--message-arrow m-messenger--skin-light">
                                    <div class="m-messenger__messages m-scrollable m-scrollable--track msgBody" id="msg-scroll" data-scrollable="true" style="height: 600px">
                                   
										</div>
                                        <div class="m-messenger__seperator"></div>
																				<form action="{{route('send_msg')}}" method="post">	<div class="m-messenger__form">
							
								<div class="m-messenger__form-controls">
									<input type="hidden" id="mto" name="mto" value="">
									<input type="text" name="msg" placeholder="Type here..." class="m-messenger__form-input">
								</div>
								<div class="m-messenger__form-tools">
									<button type="submit" class="m-messenger__form-attachment">
										<i class="la la-send"></i>
</button>
								</div>
							
							</div></form>
									</div>
                                        
									</div>
								</div>



        </div>
     </div>
</div>

@endsection


@section('script')
<script>
	$('.msg-portlet').hide();
	var role='{{Auth::user()->role}}';

	if((role=='trainer')||(role=='admin')){
		$('.list-title').html('Users Liste');
	}else{
		$('.list-title').html('Coach Liste');
	}
	


	function getMessages(id,name){
		$('.msg-portlet').hide();
		$('.msgBody').html('');
		$('#mto').val(id);
		$.ajax({
  method: "POST",
  url: "/getmsgbody",
  data: { uid: id}
	}).done(function( msg ) {
		$('.msg-name').html(name);
    $('.msgBody').html(msg);
		$('#mto').val(id);
  });

		
		var objDiv = document.getElementById("msg-scroll");
		objDiv.scrollTop = objDiv.scrollHeight;
		$('.msg-portlet').show();
	}
</script>
@endsection

