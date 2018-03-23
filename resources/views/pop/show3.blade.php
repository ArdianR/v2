@extends('layouts.menu')

@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light portlet-fit portlet-form bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">Show Pop</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                    <!-- BEGIN FORM-->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::open(array('class' => 'form-horizontal')) !!}
                        {{ csrf_field() }}
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Area
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    {{ Form::text('area_id', $pop->area->name, ['class'=>'form-control','readonly']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Store
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    {{ Form::text('store_id', $pop->store->name, ['class'=>'form-control','readonly']) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Ilustrasi Pemasangan
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    @foreach ($pop->photopop->where('type',1) as $photopop)
                                    <a data-fancybox class="thumbnail" href="{{ url(asset($photopop->photo)) }}">
                                        <img src="{{ url(asset($photopop->photo)) }}" class="img-responsiv" />
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @if ($pop->status_id == 4 || $pop->status_id == 6)
                            <div class="form-group">
                                <label class="control-label col-md-3">Foto Pemasangan
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    @foreach ($pop->photopop->where('type',2) as $photopop)
                                    <a data-fancybox class="thumbnail" href="{{ url(asset($photopop->photo)) }}">
                                        <img src="{{ url(asset($photopop->photo)) }}" class="img-responsiv" />
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label class="control-label col-md-3">Posisi
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    {!! Form::select('posisi', ['0' => 'No', '1' => 'Yes'], $pop->posisi, ['class' => 'form-control','readonly']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Ukuran
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-4">
                                    {!! Form::select('ukuran', ['0' => 'No', '1' => 'Yes'], $pop->ukuran, ['class' => 'form-control','readonly']) !!}
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover dt-responsive" width="100%">
                                <thead>
                                    <tr>
                                        <th class="all">No</th>
                                        <th class="desktop">Product Name</th>
                                        <th class="desktop">Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detailpop as $detailpop)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $detailpop->product->name }}</td>
                                        <td>{{ $detailpop->qty }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="{{action('PopController@list3')}}" class="btn grey-salsa btn-outline">Cancel</a>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <!-- END FORM-->
                    </div>
                <!-- END VALIDATION STATES-->
                </div>
            </div>
        </div>
    </div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" >
$(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });
});
</script>
@endsection