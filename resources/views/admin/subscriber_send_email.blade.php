@extends('admin.layout.app')

@section('heading', 'Send Email to Subscribers')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_subscriber_send_email_submit') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control h_100" name="message" cols="40" rows="10">{{ old('message') }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection