@extends('layouts.main')
@section('content')
    <div class="col-xs-12 col-sm-12">
        <div class="jumbotron" id="message" style="height: 500px;overflow: auto">

        </div>
        <div class="row" style="width: 75%">
            <div class="col-xs-6 col-lg-4">
                <label>
                    <textarea class="form-control input-lg" style="width: 1140px;" rows="3" id="content"></textarea>
                </label>
                <button type="button" class="btn btn-success" style="margin-left: 1086px"
                        onclick="sendMessage('hallChat')">发送
                </button>
            </div>
        </div>
    </div>
@endsection