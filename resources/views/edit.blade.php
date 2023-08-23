@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="container-fluid">
        @if($message=Session::get('update_note'))
        <div class="alert alert-success alert-dismissible fade show text-capitalize mt-3" role="alert">
            Note has been updated.😃
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-dark mb-3">Edit {{$edit_notes->title}}</h4>
                <form method="post" action="{{ route('note.update',['id'=>$edit_notes->id]) }}" id="note_edit_form">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Note Title</label>
                        <input type="text" class="form-control" id="note_title" name="note_title" value="{{$edit_notes->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Content</label>
                        <textarea name="note_content" class="form-control" id="note_content" cols="30" rows="10">{{$edit_notes->description}}</textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" name="edit_note" value="Edit Note">
                    <a href="/" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection