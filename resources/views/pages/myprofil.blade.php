@extends('home')


@section('subheader')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
   <div class="d-flex align-items-center">
      <div class="mr-auto">
         <h3 class="m-subheader__title ">My Profil</h3>
      </div>
   </div>
</div>
<!-- END: Subheader -->
@endsection




@section('content')

<div class="m-content">
   <div class="row">

   <div class="col-md-12">
<div class="m-portlet">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
													Profile Information
                        </h3>
                      </div>
                    </div>
                  </div>
									<form class="m-form m-form--fit m-form--label-align-right" enctype="multipart/form-data" method="POST" action="{{route('myprofil_update')}}">
									
									{{ csrf_field() }}

										<div class="m-portlet__body">

										<div class="form-group m-form__group">
												<label for="profilimg">Profile Image</label>
												<div></div>
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="customFile" name="profilimg">
													<label class="custom-file-label" for="customFile">Choose file</label>
												</div>
											</div>

										<div class="form-group m-form__group">
												<label for="username">User Name</label>
												<input type="text" class="form-control m-input" id="username" name="username" placeholder="User Name" value="{{$data->name}}">
											</div>
											<div class="form-group m-form__group">
												<label for="firstname">First Name</label>
												<input type="text" class="form-control m-input" id="firstname" name="firstname" placeholder="First Name" value="{{$data->first_name}}">
											</div>
											<div class="form-group m-form__group">
												<label for="lastname">Last Name</label>
												<input type="text" class="form-control m-input" id="lastname" name="lastname" placeholder="Last Name" value="{{$data->last_name}}">
											</div>
											<div class="form-group m-form__group">
												<label for="myemail">Email</label>
												<input type="email" class="form-control m-input" id="myemail" name="myemail" placeholder="Email" value="{{$data->email}}">
											</div>
											<div class="form-group m-form__group">
												<label for="adress">Adress</label>
												<input type="text" class="form-control m-input" id="adress" name="adress" placeholder="Adress" value="{{$data->adress}}">
											</div>
											<div class="form-group m-form__group">
												<label for="birthdate">Birthdate</label>
												<input type="date" class="form-control m-input" id="birthdate" name="birthdate" placeholder="Birthdate" value="{{$data->birthDate}}">
											</div>
											<div class="form-group m-form__group">
												<label for="newpass">New Password</label>
												<input type="password" class="form-control m-input" id="newpass" name="newpass" placeholder="New Password">
											</div>
											<div class="form-group m-form__group">
												<label for="oldpass">Confirm Old Password</label>
												<input type="password" class="form-control m-input" id="oldpass" name="oldpass" placeholder="Old Password">
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary"><span><i class="la la-edit"></i><span>Upadate</span></span></button>
											</div>
										</div>
									</form>
								</div>
 </div>
  </div>
</div>

@endsection
