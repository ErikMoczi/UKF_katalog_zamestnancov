@extends('frontend.layouts.page')

@section('content_header')
    <h1>Activity details</h1>
@endsection

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $dataShow->title }}</h3>
            <div class="box-tools pull-right">
                @include('frontend.includes.previousNextRecord')
            </div>
        </div>
        <div class="box-body">
            <dl class="dl-horizontal">
                <dt>Key</dt>
                <dd>{{ $dataShow->key }}</dd>
                <dt>Date</dt>
                <dd>{{ $dataShow->date }}</dd>
                <dt>Country</dt>
                <dd>{{ $dataShow->country }}</dd>
                <dt>Type</dt>
                <dd>{{ $dataShow->type }}</dd>
                <dt>Category</dt>
                <dd>{{ $dataShow->category }}</dd>
                <dt>Total authors</dt>
                <dd>{{ count($dataShow->employees) }}</dd>
            </dl>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            @include('frontend.includes.boxFooter.user', ['employeesList' => $dataShow->employees])
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
@endsection
