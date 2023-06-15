@extends('admin.layout.app')

@section('heading', 'Edit Post')

@section('right_top_button')
<a href="{{ route('admin_post_view') }}" class="btn btn-primary"><i class="fa fa-eye"></i>View All</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_post_update',$post_data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Existing Photo</label><br>
                                    <img src="{{ asset('uploads/'.$post_data->photo) }}" alt="" class="w_200">
                                </div> 
                                <div class="mb-4">
                                    <label class="form-label">Change Photo</label>
                                    <input type="file" name="photo">
                                </div> 
                                <div class="mb-4">
                                    <label class="form-label">Heading</label>
                                    <input type="text" class="form-control" name="heading" value="{{ $post_data->heading }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Short content</label>
                                    <textarea class="form-control h_100" name="short_content" cols="40" rows="10">{{ $post_data->short_content }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Content</label>
                                    <textarea class="form-control snote" name="content" cols="40" rows="10">{{ $post_data->content }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
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