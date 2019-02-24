@extends('adminlte::page')

@section('content')
    <div class="box-body">
        <table class="table table-striped table-hover" id="siswa-table">
            <thead>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Verification date</th>
            </thead>
            <tbody>
            <?php $no =1;?>
            @foreach ($user as $key => $value)
                <tr>
                    <th>{{ $no++ }}</th>
                    <th>{{ $value->name }}</th>
                    <th>{{ $value->email }}</th>
                    <th>{{ $value->email_verified_at }}</th>
                    <td>
                        <a href="#">
                        <i class="fa fa-edit"></i></a>
                        /
                        <a href="#">
                        <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="box-tools">
            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add <i class="fa fa-user-plus fa-fw"></i></button>
        </div>

    </div>
    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
@endsection