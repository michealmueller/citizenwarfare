@extends('members.profile.master')

@section('content')
    <div class="ks-column ks-page">
        <div class="ks-content">
            <div class="ks-body ks-social-profile">
                <div class="ks-header">
                    <div class="ks-user">
                        <div class="ks-info">
                                <img class="ks-avatar" src="{{ $data['member']->gravatar }}" width="100" height="100">
                            <div class="ks-body">
                                <div class="ks-name">{{ $data['member']->firstname }} {{ $data['member']->lastname }}</div>
                                <div class="ks-description">
                                    @if($data['member']->lastpayment != null)
                                        Paid Member
                                    @else
                                        Member
                                    @endif
                                </div>
                                <div class="ks-actions">
                                    <a href="/follow/{{ $data['member']->id }}"><button class="btn btn-primary">Follow</button></a>
                                    <!--<button class="btn btn-success">Send message</button>-->
                                </div>
                            </div>
                        </div>
                        <div class="ks-statistics">
                            <div class="ks-item">
                                <div class="ks-amount">{{ $data['followers'] }}</div>
                                <div class="ks-text">followers</div>
                            </div>
                            <div class="ks-item">
                                <div class="ks-amount">{{ $data['following'] }}</div>
                                <div class="ks-text">following</div>
                            </div>
                            <!--<div class="ks-item">
                                <div class="ks-amount">7</div>
                                <div class="ks-text">photos</div>
                            </div>
                            <div class="ks-item">
                                <div class="ks-amount">21</div>
                                <div class="ks-text">videos</div>
                            </div>
                            <div class="ks-item">
                                <div class="ks-amount">56</div>
                                <div class="ks-text">documents</div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="ks-tabs-container ks-tabs-default ks-tabs-no-separator ks-full ks-light">
                    <ul class="nav ks-nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-toggle="tab" data-target="#overview" aria-expanded="true">Overview</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="false">
                            <div class="ks-body">
                                <div class="ks-widgets">
                                    <div class="card panel panel-default ks-solid ks-widget ks-widget-info">
                                        <h5 class="card-header">About</h5>
                                        <div class="card-block">
                                            <div class="ks-item">
                                                <span>Username</span>
                                                <span>&#64;{{ $data['member']->username }}</span>
                                            </div>
                                            <div class="ks-item">
                                                <span>Joined</span>
                                                <span>{{ \Carbon\Carbon::parse($data['user']->created_at)->format('D, M d Y') }}</span>
                                            </div>
                                            <div class="ks-item">
                                                <span>Bio</span>
                                                {{ $data['member']->bio }}
                                            </div>
                                            <!--<div class="ks-item">
                                                <span>Birthday</span>
                                                <span>August 06, 1984</span>
                                            </div>
                                            <div class="ks-item">
                                                <span>Location</span>
                                                <span>New York, USA</span>
                                            </div>-->
                                        </div>
                                    </div>

                                    <div class="card panel panel-default ks-solid ks-widget ks-widget-tags">
                                        <h5 class="card-header">Skills</h5>
                                        <div class="card-block">
                                            @if($data['skills'])
                                                @foreach($data['skills'] as $skill)
                                                    <span class="badge badge-pill badge-default-outline">{{ $skill }}</span>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card panel panel-default ks-solid ks-widget ks-widget-social-profiles">
                                        <h5 class="card-header">Social Profiles</h5>
                                        <div class="card-block">
                                            @if($data['member']->facebook)
                                                <a href="{{ $data['member']->facebook }}" class="ks-social-profile">
                                                    <span class="la la-facebook"></span>
                                                </a>
                                            @endif
                                            @if($data['member']->twitter)
                                                <a href="{{ $data['member']->twitter }}" class="ks-social-profile">
                                                    <span class="la la-twitter"></span>
                                                </a>
                                            @endif
                                            @if($data['member']->instagram)
                                                <a href="{{ $data['member']->instagram }}" class="ks-social-profile">
                                                    <span class="la la-instagram"></span>
                                                </a>
                                            @endif
                                            @if($data['member']->linkedin)
                                                <a href="{{ $data['member']->linkedin }}" class="ks-social-profile">
                                                    <span class="la la-linkedin"></span>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="ks-feed">
                                    @if($data['memberTimelines'] != null && isset($data['memberTimelines']))
                                        @php $i=0 @endphp
                                        @foreach($data['memberTimelines'] as $postData)
                                            <div class="card panel panel-default ks-post">
                                                <div class="ks-header">
                                                    <a href="#" class="ks-user">
                                                            <img class="ks-avatar" src="{{ $data['member']->gravatar }}" width="100" height="100">
                                                        <span class="ks-name">{{ $data['member']->firstname }} {{ $data['member']->lastname }} &#64;{{ $data['member']->username }}</span>
                                                    </a>
                                                    <span class="ks-date-created">{{ $postData->created_at->format('Y-m-d') }}</span>
                                                </div>
                                                <div class="ks-body">
                                                    <div class="ks-text">
                                                        {!! nl2br($postData['post_content']) !!}
                                                    </div>
                                                    @if($postData['image_url'] != null && isset($postData['image_url']))
                                                        <div>
                                                            <img class="img-responsive img-thumbnail" src="{{ $postData['image_url'] }}" />
                                                        </div>
                                                    @endif
                                                    @foreach($postData['comments'] as $comment)
                                                        <div class="card panel panel-default ks-comments-section">
                                                            <div class="ks-comment">
                                                                <div class="ks-body">
                                                                    <div class="ks-avatar">
                                                                        @if(App\User::find($comment['user_id'])->gravatar == null)
                                                                            <img class="ks-avatar" src="/assets/img/profile/avatar_default.jpeg" width="100" height="100">
                                                                        @else
                                                                            <img src="{{ App\User::find($comment['user_id'])->gravatar }}" height="36" width="36"/>
                                                                        @endif
                                                                    </div>
                                                                    <div class="ks-comment-box">
                                                                        <div class="ks-name">
                                                                            <a href="/profile/{{ App\User::find($comment['user_id'])->username }}">
                                                                                {{ App\User::find($comment['user_id'])->firstname }}
                                                                                {{ App\User::find($comment['user_id'])->lastname }}</a>
                                                                            <span class="ks-time">{{ $comment['created_at'] }}</span>
                                                                        </div>
                                                                        <div class="ks-message">
                                                                            {!! nl2br($comment['content']) !!}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    @endforeach
                                                </div>
                                                <!-- Comment Section -->
                                                <div class="toggleHolder">
                                                    <a href="#" data-toggle="#toggled_content{{$i}}" class="toggler btn btn-primary pull-right">Comment</a>
                                                </div>
                                                <div id="toggled_content{{$i}}" style='display:none;'>
                                                    <div class="ks-feed">
                                                        <form method="post" action="/comment/timeline/{{ $postData['id'] }}">
                                                            {{ csrf_field() }}
                                                            <div class="card panel panel-default ks-post-box">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" type="text" name="comment_text" placeholder="Enter your comment"></textarea>
                                                                </div>
                                                                <div class=" ks-controls">
                                                                    <!--<div class="ks-actions">
                                                                        <a href="#" class="ks-action">
                                                                            <span class="la la-camera"></span>
                                                                        </a>
                                                                    </div>-->
                                                                    <input class="form-control btn btn-success" type="submit" name="comment" value="Comment" />
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- End Comment Section -->
                                            </div>
                                            @php $i++ @endphp
                                        @endforeach
                                        @else
                                        <div class="card panel panel-default ks-post">
                                            <div class="ks-header">
                                                <div class="ks-body">
                                                    <div class="ks-text">
                                                        This user has not written anything on there wall :(
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="ks-widgets">
                                    @if($data['advert'])
                                        <div class="card panel panel-default ks-solid ks-widget ks-widget-users">
                                            <div class="card-block">
                                                <a href="{{ $data['advert']->advert_link }}">
                                                    <img class="img-responsive img-thumbnail" src="{{ $data['advert']->advert_location }} " alt="Advertisment" />
                                                </a>
                                            </div>
                                        </div>
                                @endif
                                    <!--<div class="card panel panel-default ks-solid ks-widget ks-widget-users">
                                        <h5 class="card-header"></h5>
                                        <div class="card-block">
                                            <a href="http://colormarketing.co/event/chromazone-chicago/">
                                                <img src="/assets/img/member_profile_ad.jpg" alt="upcomming event." width="200" />
                                            </a>
                                        </div>-->
                                    </div>
                                    <!--<div class="card panel panel-default ks-solid ks-widget ks-widget-users">
                                        <h5 class="card-header">Who to follow</h5>
                                        <div class="card-block">
                                            foreach($data['followWho'] as $follow)
                                                <div class="ks-user">
                                                        <img class="ks-avatar" src="{ $follow->gravatar }}" width="100" height="100">
                                                    <div class="ks-info">
                                                        <a href="#" class="ks-name">{ $follow->firstname }} { $follow->lastname }}</a>
                                                        <span class="ks-occupation">{ $follow->company }}</span>
                                                    </div>
                                                    <a href="/follow/{ $follow->id }}" class="ks-add">+</a>
                                                </div>
                                            endforeach
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection