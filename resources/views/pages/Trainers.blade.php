@extends('home')
@section('subheader')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">Coachs</h3>
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
                        Coaching lists
                    </blood>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="{{Route('Trainers.create')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                            <span>
													<i class="flaticon-add-circular-button"></i>
													<span>Add a new coach</span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
        <div class="dataTables_length" id="m_table_1_length">
            <!--begin: Datatable -->
            <div id="m_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div id="m_table_1_filter" class="dataTables_filter">
                            <label>Search:
                                <input id="general-search" type="search" class="form-control form-control-sm" placeholder="" aria-controls="m_table_1">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                    <div class="m_datatable" id="auto_column_hide"></div>
                       
                </div>
            </div>

   
            <div class="col-md-2">
                @if(Session::has('success'))
                <div class="alert alert-brand m-alert m-alert--icon m-alert--air m-alert--square m--margin-bottom-30" role="alert">

                    <div class="m-alert__icon">
                        <i class="flaticon-exclamation-1"></i>
                    </div>
                    <div class="m-alert__text">
                        success
                    </div>
                    {{ Session::get('success') }}
                    @endif
                </div>

            </div>
        </div>
    </div>

    <!-- END EXAMPLE TABLE PORTLET-->
</div>

@endsection



@section('script')
<script>
var DatatableAutoColumnHideDemo= {
    init:function() {
        $(".m_datatable").mDatatable( {
            data: {
                type:"remote", source: {
                    read: {
                        url: "{{route('TrainerApi')}}",
                        method: 'GET'
                    }
                }
                , pageSize:10, saveState:!1, serverPaging:!0, serverFiltering:!0, serverSorting:!0
            }
            , sortable:!0, pagination:!0, toolbar: {
                items: {
                    pagination: {
                        pageSizeSelect: [10, 20, 30, 50, 100]
                    }
                }
            }
            , search: {
                input: $("#general-search")
            }
            , rows: {
                autoHide: !0
            }
            , columns:[ {
                field:"name", title:"Trainer", width:150, template:function(t) {
                    return '<div class="m-card-user m-card-user--sm">'+
                                    '<div class="m-card-user__pic">'+
                                        '<img src="images/users/'+t.image+'.jpg" class="m--img-rounded m--marginless" alt="photo">'+
                                    '</div>'+
                                    '<div class="m-card-user__details">'+
                                        '<span class="m-card-user__name">'+t.name +'</span>'+
                                        '<span  class="m-card-user__email">' + t.first_name + ' ' + t.last_name+'</span>'+
                                    '</div>'+
                                '</div>';
                }

            }
            , {
                field: "email", title: "Email"
            }
            , {
                field: "adress", title: "Adress"
            }
            , {
                field: "birthDate", title: "Birth Date", type: "date", format: "MM/DD/YYYY"
            }
            , {
                field: "specialty", title: "Specialty"
            }, {
                field: "id", title: "Actions", template:function(t) {
                    return '<a href="/Trainers/'+t.id+'/edit" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">'+
                          '<i class="la la-edit"></i>'+
                        '</a>'+
                        '<a href="/Trainers/'+t.id+'/destroy" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">'+
                          '<i class="la la-trash"></i>'+
                        '</a>';
                }
            }
            ]
        }
        )
    }
}

;
jQuery(document).ready(function() {
    DatatableAutoColumnHideDemo.init()
}

);
</script>
@endsection




