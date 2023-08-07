@extends('home')
 @section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">Users</h3>
        </div>
    </div>
</div>
@endsection('Dashbord')
@section('content')

<div class="m-content">
  <div class="col-12">
  @if(Session::has('flash_message'))
  <div class="alert alert-success">
    <span>Thank you for your message</span>
      {{ Session::get('flash') }}
  </div>
  @endif
  </div>
    <div class="row">
        <div class="col-md-12">

            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--tab">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide">
                       <i class="la la-gear"></i>
                     </span>
                            <h3 class="m-portlet__head-text">
                      Edit User
                     </h3>

                        </div>
                    </div>
                </div>


                <!--begin::Form-->
                <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="{{ Route('Users.update', $user->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <label for="email" class="col-md-4 control-label">E-Mail</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                        </div>
                    </div>
                    <div class="form-group m-form__group row">
                        <label for="name" class="col-md-4 control-label">Birth date</label>

                        <div class="col-md-6">
                          <input id="birthDate" type="text" class="form-control" name="birthDate" value="{{ $user->birthDate }}" required autofocus>
                        </div>
                    </div>
                    


                    <div class="form-group m-form__group row">
                        <label for="adress" class="col-md-4 control-label">Address</label>

                        <div class="col-md-6">
                            <input id="adress" type="adressl" class="form-control" name="adress" value="{{ $user->adress }}" required>
                        </div>
                    </div>

            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary"><span><i class="la la-edit"></i><span>Edit</span></span></button>
											</div>
										</div>
            </form>

            <!--end::Form-->
        </div>

        <!--end::Portlet-->

    </div>

</div>

</div>

@endsection()
