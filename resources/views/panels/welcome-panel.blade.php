@php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

@endphp

<div class="card">
    <div class="card-header @role('admin', true) bg-secondary text-white @endrole">

        Welcome {{ Auth::user()->name }}

        @role('admin', true)
            <span class="pull-right badge badge-primary" style="margin-top:4px">
                Admin Access
            </span>
        @else
            <span class="pull-right badge badge-warning" style="margin-top:4px">
                User Access
            </span>
        @endrole

    </div>
    <div class="card-body">
        <div class="container">
            <center><h1>CSMS Dashboard</h1></center> <br>
            <div class="row">
              <div class="col-sm">
                <center>
                <a href="/users/create"><button type="button" class="btn btn-success milesko">Add User</button></a>
                </center>
              </div>
              <div class="col-sm">
                <center>
                <button type="button" class="btn btn-success milesko">Text Blast</button>
                </center>
              </div>
              <div class="col-sm">
                <center>
                <button type="button" class="btn btn-success milesko">Statistics</button>
                </center>
              </div>
            </div>
            <br>
        </div>
    </div>
</div>
