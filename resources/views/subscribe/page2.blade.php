@extends('base')@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Build Multi-step Form</h1>
        <div>
            <h4>Page 2</h4>
            <form method="post" action="{{ route('subscribe.update', $subscribe->id) }}"> @method('PATCH') @csrf
                <div class="form-group"> <label for="favorite_color">Favorite Color:</label> <input type="text"
                        class="form-control" name="favorite_color" required /> </div>
                <div class="button-container">
                    <button type="button" class="btn btn-primary" onclick="goBack()">Back</button>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script>
    function goBack() {
        window.history.back();
    }
</script>
