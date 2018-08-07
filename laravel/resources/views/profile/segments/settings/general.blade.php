<div class="tab-pane active" id="general" role="tabpanel" aria-expanded="false">


        <div class="row">
            <div class="col-md-6">
                <form class="ks-form" method="post" action="/profile/{{ $data['user']->id }}/genupdate" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <h3 class="ks-main-form-header">
                    General
                </h3>
                <output id="avatar_placeholder">
                    <img class="ks-avatar" src="{{  $data['user']->gravatar }}" width="100" height="100">
                </output>
                <div class="ks-manage-avatar-body">
                    <div class="ks-manage-avatar-body-header">Your Avatar</div>
                    <div class="ks-manage-avatar-body-description">
                        A square image 100x100px is recommended
                    </div>
                    <div class="ks-manage-avatar-body-controls">
                        <label class="btn btn-primary ks-btn-file">
                            <span class="la la-cloud-upload ks-icon"></span>
                            <span class="ks-text">Choose file</span>
                            <input type="file" id="avatarInput" name="avatarInput">
                        </label>
                    </div>
                </div>
                <div>&nbsp;</div>
                <div class="ks-form-group ks-linked-accounts ks-group col-md-4">
                    <div class="form-group row">
                        <input type="submit" id="pick" class="btn btn-primary form-control" value="Save"/>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="ks-manage-avatar-body">
                    <h4>Change Password</h4>
                    <div>&nbsp;</div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary change-password">Change Password</button>
                        </div>
                    </div>
                    <form action="/profile/{{ $data['user']->id }}/change-password" class="validate" name="change_password" id="change_password" method="post" style="display: none;">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <div class="col-md-6">
                                <small>Password</small>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password" data-validation="length" data-validation-length="min5">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <small>Password confirm</small>
                                <input type="password" name="password_confirm" class="form-control" placeholder="Repeat Password" data-validation="confirmation" data-validation-confirm="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">Save New Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>