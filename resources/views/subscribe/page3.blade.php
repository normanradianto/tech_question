@extends('base')@section('main')<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Build Multi-step Form</h1>
        <div>
            <h4>Page 3</h4>
            <table>
                <tr>
                    <td> First Name </td>
                    <td> {{$subscribe->first_name}} </td>
                </tr>
                <tr>
                    <td> Last Name </td>
                    <td> {{$subscribe->last_name}} </td>
                </tr>
                <tr>
                    <td> Favorite Color </td>
                    <td> {{$subscribe->favorite_color}} </td>
                </tr>
            </table>
    </div>
</div>
</div>@endsection
