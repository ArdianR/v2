@extends('layouts.menu')

@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE TITLE-->
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light portlet-fit portlet-form bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-black"></i>
                            <span class="caption-subject font-black sbold uppercase">SHOW USER</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <form action="#" id="form_sample_1" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Name
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        {!! Form::text('name', $users->name, array('placeholder' => 'Name','class' => 'form-control','readonly')) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        {!! Form::text('email', $users->email, array('placeholder' => 'Email','class' => 'form-control','readonly')) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Area
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        {{ Form::select('area_id[]', $area->pluck('name','id'), $area_id, ['class'=>'form-control select2-multiple','id'=>'multiple', 'multiple disabled']) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Group
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        {{ Form::select('group_id', $group->pluck('name','id'), $detailuser->group_id, ['class'=>'form-control','readonly']) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Password
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        {!! Form::password('password', ['class' => 'form-control','placeholder' => 'Password','readonly']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Confirm Password
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        {!! Form::password('password_confirmation', ['class' => 'form-control','placeholder' => 'Confirm Password','readonly']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Active
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-4">
                                        {!! Form::select('active', ['0' => 'No', '1' => 'Yes'], $users->active, ['class' => 'form-control','readonly']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="{{ route('user.index') }}" class="btn default">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END VALIDATION STATES-->
            </div>
        </div>
    </div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@endsection