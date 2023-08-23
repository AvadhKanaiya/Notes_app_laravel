@extends('layouts.app')
@section('content')
<div class="container">
    <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        New Note
    </button>
    @if($message=Session::get('store'))
    <div class="alert alert-success alert-dismissible fade show text-capitalize mt-3" role="alert">
        Note has been Created.😃
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif
    @if($message=Session::get('update_note'))
    <div class="alert alert-success alert-dismissible fade show text-capitalize mt-3" role="alert">
        Note has been updated.😃
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif
    @if($message=Session::get('delete'))
    <div class="alert alert-danger alert-dismissible fade show text-capitalize mt-3" role="alert">
        Note has been deleted.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create a new Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="dashboard/store" id="note_add_form">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Note Title</label>
                            <input type="text" class="form-control" id="note_title" name="note_title">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Content</label>
                            <textarea name="note_content" class="form-control" id="note_content" cols="30" rows="10"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="add_note" value="Add Note">
                    <input type="reset" class="btn btn-secondary" value="Close" data-bs-dismiss="modal">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h4 class="text-danger mt-4">Your Notes</h4>
    <div class="container">
        @foreach($notes as $note)
        <div class="card mt-3 mb-3 text-white bg-dark">
            <div class="card-body">
                <h4 class="card-title">{{$note->title}}</h4>
                <p style="font-size: 20px;" class="text-capitalize mt-3">{{$note->description}}</p>
                <a href="dashboard/{{$note->id}}/edit" class="btn btn-primary">Edit</a>
                <a href="dashboard/{{$note->id}}/delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this note?')">Delete</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection