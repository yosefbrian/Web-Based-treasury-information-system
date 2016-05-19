@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

                @role(1)
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('admin/assign/'.$mantap->id) }}">
                @endrole

                  @role(3)
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('spd/assign/'.$mantap->id) }}">
                @endrole
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                <div class="form-group">
                                  <select class="form-control" id="role_id" name="role_id">
                                    <option value="1">Super Admin</option>
                                    <option value="2">Bendahara Pengeluaran</option>
                                    <option value="3">SPD</option>
                                    <option value="4">Klien</option>
                                  </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Assign
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
