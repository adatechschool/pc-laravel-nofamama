
        @extends('layouts.app')

        @section('content')
            <div class="container mt-5">
                <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Put your picture url</label>
                        <input type="url" id="img_url" name="img_url" size="80">
                    </div>
                    <div class="form-group">
                        <label>Post Description</label>
                        <textarea rows="4" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>User ID</label>
                        <textarea rows="1" class="form-control" name="user_id"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>

        @endsection


