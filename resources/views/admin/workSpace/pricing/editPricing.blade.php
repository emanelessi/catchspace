@extends('admin.layouts.index')

@section('content')
    <style>
        .btn:hover {
            background-color: #8B62C9 !important;
        }

    </style>
    @can('provider_access')
        <div class="page-head" style="margin-bottom: 25px;">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1 style="width: 557px;height: 47px;left: 296px;top: 104px;font-style: normal;font-weight: 600;font-size: 30px;line-height: 48px;
/* or 120% */letter-spacing: -0.022em;color: #333333;font-family: Poppins-Semibold;margin-bottom: 20px;">Edit Pricing</h1>
            </div>
            <!-- END PAGE TITLE -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div>
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet bordered"
                             style="border-bottom: 1px solid #eef1f5;height: 674px;border-radius: 20px !important;">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet light bordered" style="margin: 90px 73px 200px;height: 373px;border-radius: 20px !important;background-color: #fff;    border-top-width: 3px !important;
                                            border-bottom-width: 3px !important;">
                                        <div class="portlet-body" style="padding-top: 31px;">
                                            <div class="tab-content">
                                                <!-- PERSONAL INFO TAB -->
                                                <div class="tab-pane active" id="tab_1_1">
                                                    <form role="form" action="{{route('updatePricing')}}" method="POST">
                                                        @csrf
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Price *</label>
                                                            <input type="number" name="price"
                                                                   placeholder="price"
                                                                   class="form-control" value="{{$pricing->price}}"
                                                                   style="
                                                                       height: 40px;
                                                                       /*padding: 0 12px;*/
                                                                       border-radius: 8px !important;
                                                                       border: solid 1px #d1d5db;"/>
                                                            <input type="hidden" name="id" value="{{$pricing->id}}" />
                                                            <input type="hidden" name="work_space_id" value="{{$work_space_id}}" />
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="control-label margin-left-9"
                                                                   style="color:#6B7280;">Rent Type *</label>
                                                            <select name="type" class="form-control"
                                                                    style="
                                                                       height: 40px;
                                                                       /*height: 56px;padding: 0 12px;*/
                                                                       border-radius: 8px !important;border: solid 1px #d1d5db;">
                                                                @foreach($type as $mytype)
                                                                    <option
                                                                        value="{{$mytype->id}}">{{$mytype->type}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>



                                                        <button type="submit"
                                                                class="btn btn-primary margin-top--300  m-grid-col-lg-offset-9-5 m-grid-col-md-offset-9-5 m-grid-col-xs-offset-7 "
                                                                style="
                                                               width: 125px;
                                                               height: 32.2px;
                                                               /*flex-grow: 0;*/
                                                               /*display: flex;*/
                                                               /*flex-direction: column;*/
                                                               /*justify-content: center;*/
                                                               border-color: #7952b3;
                                                               align-items: center;
                                                               /*margin: -155px 0 0 755px;*/
                                                               padding: 0;
                                                               border-radius: 8px !important;
                                                               background-color: #7952b3;
                                                               font-family: AvenirLTStd-Book;
                                                               /*font-style: normal;*/
                                                               /*font-weight: 600;*/
                                                               /*font-size: 14px;*/
                                                               /* line-height: 24px; */
                                                               color: #FFFFFF;
                                                               font-size: 13px;
                                                               letter-spacing: 1px;
                                                               ">
                                                            Save Change
                                                        </button>
                                                    </form>
                                                </div>

                                                <!-- END PERSONAL INFO TAB -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE CONTENT -->
                    </div>
                    <!-- END PORTLET MAIN -->

                </div>
                <!-- END BEGIN PROFILE SIDEBAR -->

            </div>
        </div>
        </div>
    @endcan
@endsection
