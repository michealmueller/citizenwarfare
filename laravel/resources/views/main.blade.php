@extends('layouts.profile-master')

@section('content')
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                    </li>
                    <!--<li class="nav-item">
                        <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                    </li>-->
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
                    </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <h5 class="mb-3">{{$data['user']->username}}'s Profile</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <!--<h6>Recent badges</h6>
                                <a href="#" class="badge badge-dark badge-pill">html5</a>
                                <a href="#" class="badge badge-dark badge-pill">react</a>
                                <a href="#" class="badge badge-dark badge-pill">codeply</a>
                                <a href="#" class="badge badge-dark badge-pill">angularjs</a>
                                <a href="#" class="badge badge-dark badge-pill">css3</a>
                                <a href="#" class="badge badge-dark badge-pill">jquery</a>
                                <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                                <a href="#" class="badge badge-dark badge-pill">responsive-design</a>
                                <hr>-->
                                @if($data['user']->founder)
                                    <span class="badge badge-danger"><i class="fa fa-user"></i> Founder</span>
                                @endif
                                @if($data['user']->subscriber)
                                    <span class="badge badge-primary"><i class="fa fa-money"></i> Subscriber</span>
                                @endif
                            </div>
                            <div class="col-md-12">
                                    <h5 class="mt-2">Recent Activity</h5>
                                <table class="table table-sm table-hover table-striped">
                                    <tbody>
                                    @if(isset($data['user']->recent))

                                    @else
                                    Nothing New Here.
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--<div class="tab-pane" id="messages">
                        <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a> This is an <strong>.alert</strong>. Use this to show important messages to the user.
                        </div>
                        <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">3 hrs ago</span> Here is your a link to the latest summary report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">Yesterday</span> There has been a request on your account since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">9/10</span> Porttitor vitae ultrices quis, dapibus id dolor. Morbi venenatis lacinia rhoncus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">9/4</span> Vestibulum tincidunt ullamcorper eros eget luctus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="float-right font-weight-bold">9/4</span> Maxamillion ais the fix for tibulum tincidunt ullamcorper eros.
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>-->
                    <div class="tab-pane" id="edit">
                        <form role="form" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="formtype" value="edit">
                            <input type="hidden" name="user_id" value="{{$data['user']->id}}">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                <div class="col-lg-9">
                                    <input name="username" class="form-control" type="text" value="{{$data['user']->username}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input name="email" class="form-control" type="email" value="{{$data['user']->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Organization</label>
                                <div class="col-lg-9">
                                    <input name="organization" class="form-control" type="text" value="{{$data['user']->organization}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Website</label>
                                <div class="col-lg-9">
                                    <input name="web" class="form-control" type="url" value="{{$data['user']->web}}">
                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                <div class="col-lg-9">
                                    <input name="password" class="form-control" type="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                                <div class="col-lg-9">
                                    <input name="password_confirmation" class="form-control" type="password">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset" class="btn btn-secondary" value="Cancel">
                                    <input type="submit" class="btn btn-primary" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

                <div class="col-lg-4 order-lg-1 text-center">

                    <form method="post" id="avatar-upload" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="formtype" value="avatar">
                        <div class="col-sm-12" style="margin-bottom:20px;">
                            <img id="avatar" src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                            <label  class="btn-bs-file btn btn-sm btn-primary">
                                Browse
                                <input type="file" name="avatar" onchange="readURL(this);"/>
                            </label>
                            <button type="submit" class="btn-bs-file btn btn-block btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>

@endsection