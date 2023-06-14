@extends('base')@section('main')<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Build Multi-step Form</h1>
        <div>
            <h4>Page 1</h4>
            <form method="post" action="{{ route('subscribe.store') }}"> @csrf
                <div class="textbox-container"> <label for="first_name">First Name:</label> <input type="text"
                        class="form-control" name="first_name" required/> </div>

                <div class="form-group"> <label for="last_name">Last Name:</label> <input type="text"
                        class="form-control" name="last_name" required/> </div>
        </div> <button type="submit" class="btn btn-primary-outline">Next</button>
        </form>
    </div>
</div>
</div>@endsection
