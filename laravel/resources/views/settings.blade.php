
<!-- Overview Settings -->
<div class="tab-pane fade show active" id="overview" role="tabpanel">
    <h2 class="h4 g-font-weight-300">Manage your Notifications</h2>
    <p class="g-mb-25">Below are the notifications you may manage.</p>
    <form>
        <!-- Email Notification -->
        <div class="form-group">
            <label class="d-flex align-items-center justify-content-between">
                <span>Email notification</span>
                <div class="u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="emailNotification" type="checkbox" checked="">
                    <div class="u-check-icon-radio-v7">
                        <i class="d-inline-block"></i>
                    </div>
                </div>
            </label>
        </div>
        <!-- End Email Notification -->
        <hr class="g-brd-gray-light-v4 g-my-20">
        <!-- Comments Notification -->
        <div class="form-group">
            <label class="d-flex align-items-center justify-content-between">
                <span>Send me email notification when a user comments on my blog</span>
                <div class="u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="commentNotification" type="checkbox">
                    <div class="u-check-icon-radio-v7">
                        <i class="d-inline-block"></i>
                    </div>
                </div>
            </label>
        </div>
        <!-- End Comments Notification -->
        <hr class="g-brd-gray-light-v4 g-my-20">
        <!-- Update Notification -->
        <div class="form-group">
            <label class="d-flex align-items-center justify-content-between">
                <span>Send me email notification for the latest update</span>
                <div class="u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="updateNotification" type="checkbox" checked="">
                    <div class="u-check-icon-radio-v7">
                        <i class="d-inline-block"></i>
                    </div>
                </div>
            </label>
        </div>
        <!-- End Update Notification -->
        <hr class="g-brd-gray-light-v4 g-my-25">
        <!-- Message Notification -->
        <div class="form-group">
            <label class="d-flex align-items-center justify-content-between">
                <span>Send me email notification when a user sends me message</span>
                <div class="u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="messageNotification" type="checkbox" checked="">
                    <div class="u-check-icon-radio-v7">
                        <i class="d-inline-block"></i>
                    </div>
                </div>
            </label>
        </div>
        <!-- End Message Notification -->
        <hr class="g-brd-gray-light-v4 g-my-25">
        <!-- Newsletter Notification -->
        <div class="form-group">
            <label class="d-flex align-items-center justify-content-between">
                <span>Receive our monthly newsletter</span>
                <div class="u-check">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="newsletterNotification" type="checkbox">
                    <div class="u-check-icon-radio-v7">
                        <i class="d-inline-block"></i>
                    </div>
                </div>
            </label>
        </div>
        <!-- End Newsletter Notification -->
        <hr class="g-brd-gray-light-v4 g-my-25">
        <div class="text-sm-right">
            <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
            <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
        </div>
    </form>
</div>
<!-- End Overview Settings -->
<!-- Team Settings -->
<div class="tab-pane fade g-color-white" id="team_management" role="tabpanel">
    <h2 class="h4 g-font-weight-300 ">Team Management</h2>
    <p class="g-mb-25">Reset your password, change verifications and so on.</p>
    <form>
        <!-- Current Password -->
        <div class="form-group row g-mb-25">
            <label class="col-sm-3 col-form-label g-color-gray-light-v4-opacity-0_6 g-font-weight-700 text-sm-right g-mb-10">Team Name</label>
            <div class="col-sm-9">
                <div class="input-group g-brd-primary--focus">
                    <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password" placeholder="Current password">
                    <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                        <i class="icon-lock"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Current Password -->
        <!-- New Password -->
        <div class="form-group row g-mb-25">
            <label class="col-sm-3 col-form-label g-color-gray-light-v4-opacity-0_6 g-font-weight-700 text-sm-right g-mb-10">New password</label>
            <div class="col-sm-9">
                <div class="input-group g-brd-primary--focus">
                    <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password" placeholder="New password">
                    <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                        <i class="icon-lock"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- End New Password -->
        <!-- Verify Password -->
        <div class="form-group row g-mb-25">
            <label class="col-sm-3 col-form-label g-color-gray-light-v4-opacity-0_6 g-font-weight-700 text-sm-right g-mb-10">Verify password</label>
            <div class="col-sm-9">
                <div class="input-group g-brd-primary--focus">
                    <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="password" placeholder="Verify password">
                    <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                        <i class="icon-lock"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Verify Password -->
        <!-- Login Verification -->
        <div class="form-group row g-mb-25">
            <label class="col-sm-3 col-form-label g-color-gray-light-v4-opacity-0_6 g-font-weight-700 text-sm-right g-mb-10">Login verification</label>
            <div class="col-sm-9">
                <label class="form-check-inline u-check g-pl-25">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon=""></i>
                    </div>
                    Verify login requests
                </label>
                <small class="d-block text-muted">You need to add a phone to your profile account to enable this feature.</small>
            </div>
        </div>
        <!-- End Login Verification -->
        <!-- Password Reset -->
        <div class="form-group row g-mb-25">
            <label class="col-sm-3 col-form-label g-color-gray-light-v4-opacity-0_6 g-font-weight-700 text-sm-right g-mb-10">Password reset</label>
            <div class="col-sm-9">
                <label class="form-check-inline u-check g-pl-25">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                    <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                        <i class="fa" data-check-icon=""></i>
                    </div>
                    Require personal information to reset my password
                </label>
                <small class="d-block text-muted">When you check this box, you will be required to verify additional information before you can request a password reset with just your email address.</small>
            </div>
        </div>
        <!-- End Password Reset -->
        <!-- Save Password -->
        <div class="form-group row g-mb-25">
            <label class="col-sm-3 col-form-label g-color-gray-light-v4-opacity-0_6 g-font-weight-700 text-sm-right g-mb-10">Save password</label>
            <div class="col-sm-9">
                <label class="form-check-inline u-check mx-0">
                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="savePassword" type="checkbox">
                    <div class="u-check-icon-radio-v7">
                        <i class="d-inline-block"></i>
                    </div>
                </label>
                <small class="d-block text-muted">When you check this box, you will be saved automatically login to your profile account. Also, you will be always logged in all our services.</small>
            </div>
        </div>
        <!-- End Save Password -->
        <hr class="g-brd-gray-light-v4 g-my-25">
        <div class="text-sm-right">
            <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
            <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
        </div>
    </form>
</div>
<!-- End Security Settings -->
<!-- Billing Options -->
<div class="tab-pane fade" id="billing" role="tabpanel">
    <h2 class="h4 g-font-weight-300">Manage your Payment Settings</h2>
    <p class="g-mb-25">Below are the payment options for your account.</p>
    <form>
        <!-- Payment Options -->
        <div class="row">
            <!-- Visa Card -->
            <div class="col-md-3">
                <label class="u-check w-100 g-mb-25">
                    <strong class="d-block g-color-gray-light-v4-opacity-0_6 g-font-weight-700 g-mb-10">Visa card</strong>
                    <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments" checked="">
                    <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                        <div class="media g-pa-12">
                            <div class="media-body align-self-center g-color-blue">
                                <i class="fa fa-cc-visa g-font-size-30 align-self-center mx-auto"></i>
                            </div>
                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
            <!-- End Visa Card -->
            <!-- Master Card -->
            <div class="col-md-3">
                <label class="u-check w-100 g-mb-25">
                    <strong class="d-block g-color-gray-light-v4-opacity-0_6 g-font-weight-700 g-mb-10">Master card</strong>
                    <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments">
                    <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                        <div class="media g-pa-12">
                            <div class="media-body align-self-center g-color-lightred">
                                <i class="fa fa-cc-mastercard g-font-size-30 align-self-center mx-auto"></i>
                            </div>
                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
            <!-- End Master Card -->
            <!-- Amazon Payments -->
            <div class="col-md-3">
                <label class="u-check w-100 g-mb-25">
                    <strong class="d-block g-color-gray-light-v4-opacity-0_6 g-font-weight-700 g-mb-10">Amazon payments</strong>
                    <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments">
                    <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                        <div class="media g-pa-12">
                            <div class="media-body align-self-center g-color-orange">
                                <i class="fa fa-amazon g-font-size-30 align-self-center mx-auto"></i>
                            </div>
                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
            <!-- End Amazon Payments -->
            <!-- Paypal -->
            <div class="col-md-3">
                <label class="u-check w-100 g-mb-25">
                    <strong class="d-block g-color-gray-light-v4-opacity-0_6 g-font-weight-700 g-mb-10">Paypal</strong>
                    <input class="g-hidden-xs-up g-pos-abs g-top-10 g-right-10" type="radio" name="profilePayments">
                    <div class="g-brd-primary--checked g-bg-primary-opacity-0_2--checked g-brd-around g-brd-gray-light-v2 g-rounded-5">
                        <div class="media g-pa-12">
                            <div class="media-body align-self-center g-color-darkblue">
                                <i class="fa fa-paypal g-font-size-30 align-self-center mx-auto"></i>
                            </div>
                            <div class="d-flex align-self-center g-width-20 g-ml-15">
                                <div class="u-check-icon-radio-v5 g-pos-rel g-width-20 g-height-20"><i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>
            </div>
            <!-- End Paypal -->
        </div>
        <!-- End Payment Options -->
        <!-- Card Name and Number -->
        <div class="row">
            <!-- Card Name -->
            <div class="col-md-6">
                <div class="form-group g-mb-20">
                    <label class="g-color-gray-light-v4-opacity-0_6 g-font-weight-700 g-mb-10" for="inputGroup1_1">Name on card</label>
                    <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" placeholder="John Doe">
                        <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                            <i class="icon-user"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Name -->
            <!-- Card Number -->
            <div class="col-md-6">
                <div class="form-group g-mb-20">
                    <label class="g-color-gray-light-v4-opacity-0_6 g-font-weight-700 g-mb-10" for="inputGroup1_1">Card number</label>
                    <div class="input-group g-brd-primary--focus">
                        <input id="inputGroup1_3" class="form-control form-control-md g-brd-right-none rounded-0 g-py-13" type="text" placeholder="XXXX-XXXX-XXXX-XXXX" data-mask="9999-9999-9999-9999">
                        <div class="input-group-addon d-flex align-items-center g-color-gray-dark-v5 rounded-0">
                            <i class="icon-credit-card"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Number -->
        </div>
        <!-- End Card Name and Number -->
        <!-- Card Expiration Dates and CVV Code -->
        <div class="row">
            <!-- Expiration Month -->
            <div class="col-md-4">
                <label class="g-color-gray-light-v4-opacity-0_6 g-font-weight-700 g-mb-10" for="inputGroup1_1">Expiration month</label>
                <select class="js-custom-select u-select-v1 g-brd-gray-light-v2 g-color-gray-dark-v5 w-100 g-pt-11 g-pb-10" data-placeholder="Month" data-open-icon="fa fa-angle-down" data-close-icon="fa fa-angle-up" style="display: none;">
                    <option selected="">Month</option>
                    <option value="1">January</option>
                    <option value="1">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <div class="chosen-container chosen-container-single js-custom-select u-select-v1 g-brd-gray-light-v2 g-color-gray-dark-v5 w-100 g-pt-11 g-pb-10 chosen-container-single-nosearch" style="width: 0px;" title="">
                    <a class="chosen-single chosen-default">
                        <span>Month</span>
                        <div><b><i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i></b></div>
                    </a>
                    <div class="chosen-drop">
                        <div class="chosen-search"><input type="text" autocomplete="off" readonly=""></div>
                        <ul class="chosen-results"></ul>
                    </div>
                </div>
            </div>
            <!-- End Expiration Month -->
            <!-- Expiration Year -->
            <div class="col-md-4">
                <div class="form-group g-mb-20">
                    <label class="g-color-gray-light-v4-opacity-0_6 g-font-weight-700 g-mb-10" for="inputGroup1_1">Expiration year</label>
                    <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" placeholder="2021">
                        <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                            <i class="icon-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Expiration Year -->
            <!-- CVV Code -->
            <div class="col-md-4">
                <div class="form-group g-mb-20">
                    <label class="g-color-gray-light-v4-opacity-0_6 g-font-weight-700 g-mb-10" for="inputGroup1_1">CVV code</label>
                    <div class="input-group g-brd-primary--focus">
                        <input class="form-control form-control-md border-right-0 rounded-0 g-py-13 pr-0" type="text" placeholder="2021">
                        <div class="input-group-addon d-flex align-items-center g-bg-white g-color-gray-light-v1 rounded-0">
                            <i class="icon-lock"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End CVV Code -->
        </div>
        <!-- End Card Expiration Dates and CVV Code -->
        <!-- Billing Address -->
        <div class="form-group">
            <label class="d-block g-color-gray-light-v4-opacity-0_6 g-font-weight-700 1text-sm-right g-mb-10">Billing address</label>
            <label class="u-check g-pl-25 mb-0">
                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                <div class="u-check-icon-checkbox-v4 g-absolute-centered--y g-left-0">
                    <i class="fa" data-check-icon=""></i>
                </div>
                Same as shipping address?
            </label>
        </div>
        <!-- End Billing Address -->
        <hr class="g-brd-gray-light-v4 g-my-25">
        <div class="text-sm-right">
            <a class="btn u-btn-darkgray rounded-0 g-py-12 g-px-25 g-mr-10" href="#!">Cancel</a>
            <a class="btn u-btn-primary rounded-0 g-py-12 g-px-25" href="#!">Save Changes</a>
        </div>
    </form>
</div>
<!-- End Payment Options -->
<!-- General Settings -->
<div class="tab-pane fade" id="settings" role="tabpanel">
    <h2 class="h4 g-font-weight-300">Manage your Name, ID and Email Addresses</h2>
    <p>Below are name, email address, contacts and more on file for your account.</p>
    <ul class="list-unstyled g-mb-30">
        <!-- Name -->
        <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">

            <div id="toggleMeNameForm" class="g-pr-10 toggleable-form">
                <form class="form-inline" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="editing" value="updateName">
                    <div class="form-group">
                        <strong class="d-block d-md-inline-block g-color-gray-light-v4-opacity-0_6 g-width-200 g-pr-10">Name</strong>
                        <input type="text" class="form-control mx-sm-3" name="firstname" placeholder="First Name">
                        <input type="text" class="form-control mx-sm-3" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>

            <div id="toggleMeName" class="g-pr-10 toggleable-value">
                <strong class="d-block d-md-inline-block g-color-gray-light-v4-opacity-0_6 g-width-200 g-pr-10">Name</strong>
                @if(isset($data['user']->firstname))
                    <span class="align-top">{{ $data['user']->firstname }} {{ $data['user']->lastname }}</span>
                @else
                    <span class="align-top" style="color: red;">Redacted</span>
                @endif
            </div>
            <span>
                <button id="toggle-name" class="editButton">
                    <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                </button>
            </span>
        </li>
        <!-- End Name -->

        <!-- Your Username -->
        <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">

            <div id="toggleMeUsernameForm" class="g-pr-10 toggleable-form">
                <form class="form-inline" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="editing" value="updateUsername">
                    <div class="form-group">
                        <strong class="d-block d-md-inline-block g-color-gray-light-v4-opacity-0_6 g-width-200 g-pr-10">Username</strong>
                        <input type="text" class="form-control mx-sm-3" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>

            <div id="toggleMeUsername" class="g-pr-10 toggleable-value">
                <strong class="d-block d-md-inline-block g-color-gray-light-v4-opacity-0_6 g-width-200 g-pr-10">Username</strong>
                <span class="align-top">{{ $data['user']->username }}</span>
            </div>
            <span>
                <button id="toggle-username" class="editButton">
                    <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                </button>
            </span>
        </li>
        <!-- End Your ID -->

        <!-- Company Name -->
        <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">
            <div class="g-pr-10">
                <strong class="d-block d-md-inline-block g-color-gray-light-v4-opacity-0_6 g-width-200 g-pr-10">Team Name</strong>
                @if(isset($data['user']->team_id))
                <span class="align-top">{{ $data['team']->team_name }}</span>
                    <span>
                        <button class="editButton">
                            <i id="toggle-edit" class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                        </button>
                    </span>
                @else
                    <span class="align-top" style="color: red;">Redacted</span>
                @endif
            </div>

        </li>
        <!-- End Company Name -->

        <!-- Primary Email Address -->
        <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">

            <div id="toggleMeEmailForm" class="g-pr-10 toggleable-form">
                <form class="form-inline" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="editing" value="updateEmail">
                    <div class="form-group">
                        <strong class="d-block d-md-inline-block g-color-gray-light-v4-opacity-0_6 g-width-200 g-pr-10">Email</strong>
                        <input type="text" class="form-control mx-sm-3" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>

            <div id="toggleMeEmail" class="g-pr-10 toggleable-value">
                <strong class="d-block d-md-inline-block g-color-gray-light-v4-opacity-0_6 g-width-200 g-pr-10">Email</strong>
                <span class="align-top">{{ $data['user']->email }}</span>
            </div>
            <span>
                <button id="toggle-email" class="editButton">
                    <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                </button>
            </span>
        </li>
        <!-- End Primary Email Address -->

        <!-- Call Sign -->
        <li class="d-flex align-items-center justify-content-between g-brd-bottom g-brd-gray-light-v4 g-py-15">

            <div id="toggleMeCallsignForm" class="g-pr-10 toggleable-form">
                <form class="form-inline" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="editing" value="updateCallsign">
                    <div class="form-group">
                        <strong class="d-block d-md-inline-block g-color-gray-light-v4-opacity-0_6 g-width-200 g-pr-10">Call Sign</strong>
                        <input type="text" class="form-control mx-sm-3" name="callsign" placeholder="Call Sign">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
                </form>
            </div>

            <div id="toggleMeCallsign" class="g-pr-10 toggleable-value">
                <strong class="d-block d-md-inline-block g-color-gray-light-v4-opacity-0_6 g-width-200 g-pr-10">Call Sign</strong>
                @if(isset($data['user']->call_sign))
                    <span class="align-top">{{ $data['user']->call_sign }}</span>
                @else
                    <span class="align-top" style="color: red;">Redacted</span>
                @endif
            </div>
            <span>
                <button id="toggle-callsign" class="editButton">
                    <i class="icon-pencil g-color-gray-dark-v5 g-color-primary--hover g-cursor-pointer g-pos-rel g-top-1"></i>
                </button>
            </span>
        </li>
        <!-- End Call Sign-->
    </ul>






</div>
<!-- End General Settings-->