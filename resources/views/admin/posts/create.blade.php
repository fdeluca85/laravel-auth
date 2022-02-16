@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h2>Nuovo post</h2></div>
                <div class="card-body">
                    <form action="{{route("posts.store")}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="title">Titolo</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo">
                        </div>
                        <div class="form-group">
                            <label for="content">Testo</label>
                            <textarea class="form-control" id="content" name="content" placeholder="Inserisci il contenuto del post" rows="5"></textarea>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="published" name="published">                            
                            <label class="form-check-label" for="published">Pubblica</label>                            
                        </div>
                        <button type="submit" class="btn btn-primary">Crea</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection