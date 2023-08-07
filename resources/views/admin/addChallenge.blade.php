@extends('home')
 @section('subheader')
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">Challengs</h3>
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
                     Add new Challenge
                    </h3>

                  </div>
                </div>
              </div>

              <!--begin::Form-->

              <form class="m-form m-form--fit m-form--label-align-right" enctype="multipart/form-data"  method="POST" action="{{ route('Challengs.store') }}">
                  {{ csrf_field() }}

<div class="m-portlet__body">

<div class="form-group m-form__group">
<label for="challengeimg">Challenge Image</label>
<div></div>
<div class="custom-file">
<input type="file" class="custom-file-input" id="customFile" name="challengeimg">
<label class="custom-file-label" for="customFile">Choose file</label>
</div>
</div>

<div class="form-group m-form__group">
<label for="title">Title</label>
<input type="text" class="form-control m-input" id="title" name="title" placeholder="Title">
</div>
<div class="form-group m-form__group">
<label for="description">Description</label>
<textarea class="form-control m-input" id="description" name="description" placeholder="Description"></textarea>
</div>
<div class="form-group m-form__group">
<label for="startDate">Date</label>
<input type="date" class="form-control m-input" id="startDate" name="startDate" placeholder="Date" >
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
