@extends('provider.layouts.index')

@section('content')
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="
            font-family: AvenirLTStd-Book;
            font-size: 30px;
            letter-spacing: -0.022em;
            color: #333333;
            " class="margin-top--10 ">Edit Policies</h1>
    </div>
    <div class="col-md-12 ">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet box " style="background-color: #7952B3;font-family: AvenirLTStd-Book;
font-size: 17px">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift" style="color: #ffffff"></i>Portlet2
                </div>
            </div>
            <div class="portlet-body">
                <div class="scroller" style="height:200px" data-always-visible="1" data-rail-visible="1"
                     data-rail-color="blue" data-handle-color="#7952B3">
                    <form role="form" action="#">
                        <div class="form-group col-md-6">
                            <label class="control-label" style="color:#6B7280;">Title *</label>
                            <input type="text" placeholder="TitleTitleTitle"
                                   class="form-control"
                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" style="color:#6B7280;">description *</label>
                            <input type="text" placeholder="descriptiondescriptiondescriptiondescriptiondescription"
                                   class="form-control"
                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END Portlet PORTLET-->
    </div>


@endsection


