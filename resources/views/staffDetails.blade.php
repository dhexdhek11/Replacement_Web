@extends('layouts.app_admin')
@section('content')
 /*   <h1>
        Staff import:
    </h1>
<div class="card-body">
    <form action="{{ route('import_staff') }}" method="POST" name="importform" enctype="multipart/form-data">
        @csrf
        <input type="file" name="import_file" class="form-control">
        <br>
        <button class="btn btn-success">Import File</button>
    </form>
    <a href="deleteStaff">Delete</a>
</div>
    <h1>
        Timetable import:
    </h1>
<div class="card-body">
    <form action="{{ route('import_timetable') }}" method="POST" name="importform" enctype="multipart/form-data">
        @csrf
        <input type="file" name="import_file" class="form-control">
        <br>
        <button class="btn btn-success">Import File</button>
    </form>
    <a href="deleteTimetable">Delete</a>
</div>
 */
<div id="table">
 <h1>
 Staff
</h1>
{{--    <div class="panel-body">--}}
{{--        <div class="table-responsive">--}}
{{--            <table id="editable" class="table table-bordered table-striped">--}}
{{--                <thead>--}}
{{--                    <tr>--}}
{{--                        <td>Staff ID</td>--}}
{{--                        <td>First Name</td>--}}
{{--                        <td>Surname</td>--}}
{{--                        <td>Email</td>--}}
{{--                        <td>User ID</td>--}}
{{--                    </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($staff as $row)--}}
{{--                    <tr>--}}
{{--                        <td>{{$row['staff_id']}}</td>--}}
{{--                        <td>{{$row['first_name']}}</td>--}}
{{--                        <td>{{$row['surname']}}</td>--}}
{{--                        <td>{{$row['email']}}</td>--}}
{{--                        <td>{{$row['user_id']}}</td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
<style>
    .w-5 {
        display: none;
    }
</style>
