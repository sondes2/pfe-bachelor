@extends('home')


@section('subheader')

<!-- BEGIN: Subheader -->

<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">Contact</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="#" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>

            </ul>
        </div>
        <div>
            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                    <i class="la la-plus m--hide"></i>
                    <i class="la la-ellipsis-h"></i>
                </a>
                <div class="m-dropdown__wrapper">
                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                    <div class="m-dropdown__inner">
                        <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                                <ul class="m-nav">
                                    <li class="m-nav__section m-nav__section--first m--hide">
                                        <span class="m-nav__section-text">Quick Actions</span>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-share"></i>
                                            <span class="m-nav__link-text">Activity</span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                            <span class="m-nav__link-text">Messages</span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-info"></i>
                                            <span class="m-nav__link-text">FAQ</span>
                                        </a>
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                            <span class="m-nav__link-text">Support</span>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator m-nav__separator--fit">
                                    </li>
                                    <li class="m-nav__item">
                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- END: Subheader -->
@endsection




@section('content')
<div class="col-12">
@if(Session::has('flash_message'))
<div class="alert alert-success">
  <span>Thank you for your message</span>
    {{ Session::get('flash') }}
</div>
@endif
</div>

<div class="m-content">

    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <blood class="m-portlet__head-text">
                        Contact Us
                    </blood>
                </div>
            </div>

        </div>
        <div class="m-portlet__body">

            <div class="col-12 col-md-6">
                <blood class "text-muted">If you having trouble with our application please <a href="mailto:admin@admin.com">ask for help</a></blood>



                <form class="m-form m-form--fit m-form--label-align-right" method="POST" action="{{ Route('contact_getMail') }}">
                    {{ csrf_field() }}

                    <div class="form-group m-form__group row">
                        <label for="Name">Name: </label>
                        <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
                    </div>


                    <div class="form-group m-form__group row">
                        <label for="email">Email: </label>
                        <input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
                    </div>


                    <div class="form-group m-form__group row">
                        <label for="message">message: </label>
                        <textarea type="text" class="form-control luna-message" rows="10" cols="10" id="message" placeholder="Type your messages here" name="message" required></textarea>
                    </div>

                    <div class="form-group m-form__group row">
                        <button type="submit" class="btn btn-primary" value="Send">Send &raquo;</button>
                    </div>
                </form>

            </div>
        </div>
      </div>
    </div>



        <!--begin: Datatable -->



@endsection
