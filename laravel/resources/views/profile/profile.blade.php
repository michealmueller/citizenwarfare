@extends('members.profile.master')

@section('content')
    <div class="container">
    <div class="ks-column ks-page">
        <div class="ks-content">
            <div class="ks-body ks-social-profile">
                <div class="ks-header">
                    <div class="ks-user">
                        <div class="ks-info">
                                <img class="ks-avatar" src="{{ $data['user']->gravatar }}" width="100" height="100">
                            <div class="ks-body">
                                <div class="ks-name"><h3>{{ $data['user']->firstname }} {{ $data['user']->lastname }}</h3></div>
                                <div class="ks-description">{{ $data['user']->company }} 55</div>
                                <div class="ks-item">
                                    <small>
                                        <span>Membership Dues Due:</span>
                                        <span><b>{{ $data['dueDate'] }}</b></span>
                                    </small>
                                </div>
                                <div class="ks-actions nav-buttons">
                                    @if($data['userDaysLeft'] >= 1 && $data['user']->activated == 1)
                                        <a href="/members/directory"><button class="btn btn-sm btn-primary">Member Directory</button></a>
                                    @endif
                                    <a href="{{ route('logout') }}"><button class="btn btn-sm btn-danger">Logout</button></a>
                                    @if($data['user']->isAdmin)
                                        <a href="/admin"><button class="btn btn-sm btn-success">Admin Area</button></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="ks-statistics">
                            <div class="ks-item">
                                <a href="" data-toggle="modal" data-target=".bd-example-modal-lg-followers">
                                <div class="ks-amount">{{ $data['numFollowers'] }}</div>
                                <div class="ks-text">followers</div></a>
                            </div>
                            <div class="ks-item">
                               <a href="" data-toggle="modal" data-target=".bd-example-modal-lg-following">
                                <div class="ks-amount">{{ $data['numFollowing'] }}</div>
                                <div class="ks-text">following</div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ks-tabs-container ks-tabs-default ks-tabs-no-separator ks-full ks-light">
                    <ul class="nav ks-nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="" data-toggle="tab" data-target="#overview" aria-expanded="true">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" data-toggle="tab" data-target="#settings" aria-expanded="false">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="" data-toggle="tab" data-target="#attendedevents" aria-expanded="false">Recent Activity</a>
                        </li>
                        @if($data['user']->companyAdmin == 1)
                        <li class="nav-item">
                            <a class="nav-link " href="#" data-toggle="tab" data-target="#companysettings" aria-expanded="false">Company</a>
                        </li>
                        @endif
                    </ul>
                    <div class="tab-content">
                        @include('members.profile.segments.overview')
                        @include('members.profile.segments.settings')
                        @include('members.profile.segments.recentactivity')
                        @if($data['user']->companyAdmin == 1)
                            @include('members.profile.segments.companyadmin')
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
@section('javascript')
    <script>
        (function ($) {
            $(document).ready(function() {
                $.validate({
                    form : '.validate',
                    modules : 'security'
                });
            });
            $( ".change-password" ).click(function(e) {
                if($("#change_password").toggle().is(':visible')) {
                    $(this).text('Cancel');
                }else{
                    $(this).text('Change Password');
                }
                e.stopPropagation();
            });
        })(jQuery);
    </script>
    <style>
        .help-block{
            font-size: 9pt;
        }
    </style>
@stop