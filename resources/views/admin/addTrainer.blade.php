@extends('home')
 @section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">Coachs</h3>
        </div>
    </div>
</div>
@endsection()
@section('content')


<div class="m-content">
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
                     Add new Coach
                    </h3>

                  </div>
                </div>
              </div>

              <!--begin::Form-->

              <form class="m-form m-form--fit m-form--label-align-right" enctype="multipart/form-data"  method="POST" action="{{ route('Trainers.store') }}">
                  {{ csrf_field() }}
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
<input type="text" class="form-control m-input" id="username" name="username" placeholder="User Name">
</div>
<div class="form-group m-form__group">
<label for="firstname">First Name</label>
<input type="text" class="form-control m-input" id="firstname" name="firstname" placeholder="First Name" >
</div>
<div class="form-group m-form__group">
<label for="lastname">Last Name</label>
<input type="text" class="form-control m-input" id="lastname" name="lastname" placeholder="Last Name" >
</div>
<div class="form-group m-form__group">
<label for="myemail">Email</label>
<input type="email" class="form-control m-input" id="myemail" name="myemail" placeholder="Email">
</div>
<div class="form-group m-form__group">
<label for="adress">Adress</label>
<input type="text" class="form-control m-input" id="adress" name="adress" placeholder="Adress" >
</div>
<div class="form-group m-form__group">
<label for="birthdate">Birthdate</label>
<input type="date" class="form-control m-input" id="birthdate" name="birthdate" placeholder="Birthdate" >
</div>
<div class="form-group m-form__group row">
                          <label for="valid" class="col-md-4 control-label">valid</label>
                          <div class="col-md-3">
                              <input id="valid" type="number" class="form-control" name="valid" required>
                          </div>
                      </div>
                  <div class="form-group m-form__group row">
                      <label for="specialty" class="col-md-4 control-label">Specialty</label>
                      <div class="col-md-3">
                          <input id="specialty" type="specialty" class="form-control" name="specialty" required>
                      </div>
                  </div>
</div>
<div class="m-portlet__foot m-portlet__foot--fit">
<div class="m-form__actions">
<button type="submit" class="btn btn-primary"><span><i class="la la-edit"></i><span>ADD</span></span></button>
</div>
</div>




              </form>

              <!--end::Form-->
            </div>

            <!--end::Portlet-->
          </div>



        </div>

        </div>
        @section('script')

       <script>
       <fmt:message key="device.registerFormFile"/>


       </script>
       @endsection
@endsection()
