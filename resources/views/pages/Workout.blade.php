@extends('home') @section('subheader')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">Workout</h3>
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
							Programme List
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
				
<div class="m-widget5">
    @foreach($workout as $c)

  


	<div class="m-widget5__item">
		<div class="m-widget5__content">
			<div class="m-widget5__pic">
				<img class="m-widget7__img" src="{{ asset('images/training/'.$c->image.'.jpg')}}" alt="">
			</div>
			<div class="m-widget5__section">
								<h4 class="m-widget5__title">{{$c->name}}</h4>
				<span class="m-widget5__desc">{{$c->description}}</span>
				<div class="m-widget5__info">
				<span class="m-widget5__author">Goals: </span><span class="m-widget5__info-date">{{$c->goals}}</span>
				<span class="m-widget5__author">Difficulty: </span><span class="m-widget5__info-date">{{$c->difficulty}}</span>
				<span class="m-widget5__author">Days a week: </span><span class="m-widget5__info-date">{{$c->title}} nbDW</span>
				<span class="m-widget5__author">repeat: </span><span class="m-widget5__info-date">x{{$c->nbR}}</span>
                </div>
                
			</div>
        </div>
        <div class="m-widget5__content">
		<div class="m-widget5__stats1">
			
			<button type="submit" onclick="revealVideo('video{{$c->idPt}}','youtube{{$c->idPt}}')" class="btn btn-success btn-lg m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill"><i class="la la-youtube-play"></i></button>
		
<div id="video{{$c->idPt}}" class="lightbox" onclick="hideVideo('video{{$c->idPt}}','youtube{{$c->idPt}}')">
  <div class="lightbox-container">  
    <div class="lightbox-content">
      
      <button onclick="hideVideo('video{{$c->idPt}}','youtube{{$c->idPt}}')" class="lightbox-close">
        Close | ✕
      </button>
      <div class="video-container">
        <iframe id="youtube{{$c->idPt}}" width="960" height="540" src="https://www.youtube.com/embed/{{$c->video}}?showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>      
      
    </div>
  </div>
</div>
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
// Function to reveal lightbox and adding YouTube autoplay
function revealVideo(div,video_id) {
  var video = document.getElementById(video_id).src;
  document.getElementById(video_id).src = video+'&autoplay=1'; // adding autoplay to the URL
  document.getElementById(div).style.display = 'block';
}

// Hiding the lightbox and removing YouTube autoplay
function hideVideo(div,video_id) {
  var video = document.getElementById(video_id).src;
  var cleaned = video.replace('&autoplay=1',''); // removing autoplay form url
  document.getElementById(video_id).src = cleaned;
  document.getElementById(div).style.display = 'none';
}
</script>
@endsection