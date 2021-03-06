@extends('admin.layouts.index')

@section('content')
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1 style="
            font-family: 'Montserrat', sans-serif !important;
            font-size: 30px;
            letter-spacing: -0.022em;
            color: #333333;
            " class="margin-top--10 ">Add Policies</h1>
    </div>
    <div class="col-md-12 ">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet box " style="background-color: #E93A76;font-family: 'Montserrat', sans-serif !important;
font-size: 17px">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift" style="color: #ffffff"></i>Add Policies
                </div>
            </div>
            <div class="portlet-body">
                <div class="scroller" style="height:280px" data-always-visible="1" data-rail-visible="1"
                     data-rail-color="blue" data-handle-color="#E93A76">
                    <form role="form"  action="{{route('policiesStore')}}"
                          method="POST">
                        @csrf
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="form-group col-md-6">
                            <label class="control-label" style="color:#6B7280;">Title *</label>
                            <input type="text" placeholder="Title" name="title"
                                   class="form-control"
                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label" style="color:#6B7280;">Description *</label>
                            <input type="text" placeholder="description"
                                   class="form-control" name="body"
                                   style="height: 56px;padding: 0 12px;border-radius: 8px !important;border: solid 1px #d1d5db;"/>
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
                                                               border-color: #E93A76;
                                                               align-items: center;
                                                               /*margin: -155px 0 0 755px;*/
                                                               padding: 0;
                                                               border-radius: 8px !important;
                                                               background-color: #E93A76;
                                                               font-family: 'Montserrat', sans-serif !important;
                                                               /*font-style: normal;*/
                                                               /*font-weight: 600;*/
                                                               /*font-size: 14px;*/
                                                               /* line-height: 24px; */
                                                               color: #FFFFFF;
                                                               font-size: 12px;
                                                               letter-spacing: 1px;
                                                               ">
                            Save Change
                        </button>
                    </form>
                </div>
            </div>
        </div>
              </div>


@endsection


