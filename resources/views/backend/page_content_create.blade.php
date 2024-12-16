@extends('layouts.dashboard')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-11 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{!empty($settings->id) ? "Edit" : "Create"}} Page Content</h4>
                    @include('backend.errors.formErrors')
                    <form method="POST" action="/admin/pageContents/store" class="forms-sample">
                        @csrf
                        @if(isset($content))
                            <input type="hidden" name="id" value="{{$content->id}}">
                        @endif
                        <div class="form-group">
                            <label for="exampleInputUsername1">Page Title</label>
                            <input type="text" name="page_title"
                                value="{{isset($content) && $content->page_title ? $content->page_title : old('page_title')}}"
                                class="form-control" id="exampleInputUsername1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Page Slug</label>
                            <input type="text" name="page_slug"
                                value="{{isset($content) && $content->page_slug ? $content->page_slug : old('page_slug')}}"
                                class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Content</label>
                            <textarea name="content"
                                id="textarea">{{!empty($content->content) ? $content->content : ''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Settings Active</label>
                            <select name="is_active" class="form-select" id="exampleSelectGender">
                                <option selected>Select Active</option>
                                <option value="1" @if(isset($content) && $content->is_active == 1) selected @endif>Yes
                                </option>
                                <option value="0" @if(isset($content) && $content->is_active == 0) selected @endif>No
                                </option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('custom_javascript')

<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
            value: 'First.Name',
            title: 'First Name'
        },
        {
            value: 'Email',
            title: 'Email'
        },
        ]
    });
</script>
@stop