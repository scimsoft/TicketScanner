@extends('layouts.app')

@section('title', 'Open Ticket')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Open New Ticket</div>

                <div class="panel-body">
                    @include('includes.flash')

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/new_ticket') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('total') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Total</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="total" value="{{ old('total') }}">

                                @if ($errors->has('total'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('total') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <select id="category" type="category" class="form-control" name="category">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('taxtotal') ? ' has-error' : '' }}">
                            <label for="priority" class="col-md-4 control-label">Tax Total</label>

                            <div class="col-md-6">
                                <input id="taxtotal" type="text" class="form-control" name="taxtotal" value="{{ old('taxtotal') }}">


                            @if ($errors->has('priority'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('taxtotal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input type="file" accept="image/*" capture="camera" />


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-ticket"></i> Open Ticket
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection