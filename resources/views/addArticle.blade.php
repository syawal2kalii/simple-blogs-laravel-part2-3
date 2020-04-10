@section("title","Add Article")
@extends("master.master")
@section("content")
    <div class="row justify-content-md-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route("article.store")}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Title</label>
                            <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Title">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" class="form-control @error('category') is-invalid @enderror" name="category" id="category">
                                <option value="politik">Politik</option>
                                <option value="hiburan">Hiburan</option>
                                <option value="education">Education</option>
                            </select>
                            @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Content</label>
                            <textarea name="contentt" class="form-control @error('contentt') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"></textarea>
                            @error('contentt')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control-file @error('imgurl') is-invalid @enderror" name="imgurl" id="" placeholder=""
                                   aria-describedby="fileHelpId">
                            @error('imgurl')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
