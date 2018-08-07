<div class="tab-pane " id="companysettings" role="tabpanel" aria-expanded="false">
    <div class="ks-settings-tab">
        <div class="ks-menu">
            <ul class="nav nav-pills nav-stacked">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-toggle="tab" data-target="#companyinfo" aria-expanded="false">Company Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="tab" data-target="#addremovemembers" aria-expanded="false">Add/Remove Members</a>
                </li>
            </ul>
        </div>
        <div class="tab-content ks-setting-form-wrapper">
            <div class="tab-pane active" id="companyinfo" role="tabpanel">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h5>Company Information</h5>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <form method="post" action="/profile/{{ $data['user']->id }}/companyupdate">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label" for='compname'>Company Name:</label>
                                        <div class="col-sm-4">
                                            <div class="input-icon icon-left icon-lg icon-color-primary">
                                                <input type="text" id="'compname" class="form-control" placeholder="Company Name" name="company"
                                                       value="@if(isset($data['companyInfo']->company_name )){{$data['companyInfo']->company_name }}@endif"
                                                       disabled>
                                                <span class="icon-addon">
                                                    <span class="la la-building"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 form-control-label" for='compaddress'>Company Address:</label>
                                        <div class="col-sm-4">
                                            <div class="input-icon icon-left icon-lg icon-color-primary">
                                                <input type="text" id="compaddress" class="form-control" placeholder="Company Address" name="compaddress" value="
                                                    @if(isset($data['companyInfo']->company_address)){{ $data['companyInfo']->company_address }}@endif" required>
                                                <span class="icon-addon">
                                                    <span class="la la-envelope"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label" for='compcity'>Company City:</label>
                                        <div class="col-sm-4">
                                            <div class="input-icon icon-left icon-lg icon-color-primary">
                                                <input type="text" class="form-control" placeholder="Company City" name="compcity"
                                                       value="@if(isset($data['companyInfo']->city)){{ $data['companyInfo']->city }}@endif" required>
                                                <span class="icon-addon">
                                                    <span class="la la-envelope"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 form-control-label" for='compstate'>Company State:</label>
                                        <div class="col-sm-4">
                                            <div class="input-icon icon-left icon-lg icon-color-primary">
                                                <select name="compstate" class="form-control selectpicker">
                                                    @if(isset($data['companyInfo']->state))
                                                        <option value="{{$data['companyInfo']->stateabv}}">{{$data['companyInfo']->state}}</option>
                                                    @endif
                                                    @foreach($data['states'] as $k=>$v)
                                                        <option value="{{ $k }}">{{ $v }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label" for='compzip'>Company Zip:</label>
                                        <div class="col-sm-4">
                                            <div class="input-icon icon-left icon-lg icon-color-primary">
                                                <input type="text" class="form-control" placeholder="Company Zip" name="compzip"
                                                       value="@if(isset($data['companyInfo']->zip)){{ $data['companyInfo']->zip }}@endif" required>
                                                <span class="icon-addon">
                                                    <span class="la la-envelope"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 form-control-label" for='compphone'>Company Phone:</label>
                                        <div class="col-sm-4">
                                            <div class="input-icon icon-left icon-lg icon-color-primary">
                                                <input type="text" class="form-control" placeholder="Company Phone" name="compphone"
                                                       value="@if(isset($data['companyInfo']->phone)){{ $data['companyInfo']->phone }}@endif" required>
                                                <span class="icon-addon">
                                                    <span class="la la-phone"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 form-control-label" for='compfax'>Company Fax:</label>
                                        <div class="col-sm-4">
                                            <div class="input-icon icon-left icon-lg icon-color-primary">
                                                <input type="text" class="form-control" placeholder="Company Fax" name="compfax"
                                                       value="@if(isset($data['companyInfo']->fax)){{ $data['companyInfo']->fax }}@endif">
                                                <span class="icon-addon">
                                                    <span class="la la-fax"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <label class="col-sm-2 form-control-label" for='compcountry'>Company Country:</label>
                                        <div class="col-sm-4">
                                            <div class="input-icon icon-left icon-lg icon-color-primary">
                                                <select name="compcountry" class="form-control selectpicker">
                                                    @if(isset($data['companyInfo']->country))
                                                        <option value="{{$data['companyInfo']->countryabv}}">{{$data['companyInfo']->country}}</option>
                                                    @endif
                                                    @foreach($data['country'] as $k=>$v)
                                                        <option value="{{ $k }}">{{ $v }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row checkbox1">
                                        <div class="col-md-6">
                                            <h6 class="ks-header">Consumer / Residential<br>
                                                <small>Select all that Apply</small>
                                            </h6>
                                            <div id="section1">
                                                <input type="checkbox" name="consumer[]" value="Transportation" @if(in_array('Transportation', $data['consumer'])) checked @endif>Transportation<br>
                                                <input type="checkbox" name="consumer[]" value="Visual Communications" @if(in_array('Visual Communications', $data['consumer'])) checked @endif>Visual Communications<br>
                                                <input type="checkbox" name="consumer[]" value="Technology" @if(in_array('Technology', $data['consumer'])) checked @endif>Technology<br>
                                                <input type="checkbox" name="consumer[]" value="Home" @if(in_array('Home', $data['consumer'])) checked @endif>Home<br>
                                                <input type="checkbox" name="consumer[]" value="Consumer Goods" @if(in_array('Consumer Goods', $data['consumer'])) checked @endif>Consumer Goods<br>
                                                <input type="checkbox" name="consumer[]" value="Juvenile Products" @if(in_array('Juvenile Products', $data['consumer'])) checked @endif>Juvenile Products<br>
                                                <input type="checkbox" name="consumer[]" value="Fashion" @if(in_array('Fasion', $data['consumer'])) checked @endif>Fashion<br>
                                                <input type="checkbox" name="consumer[]" value="Action Recreation" @if(in_array('Action Recreation', $data['consumer'])) checked @endif>Action / Recreation<br>
                                                <input type="checkbox" name="consumer[]" value="">Other
                                            </div>
                                        </div>
                                        <div class="col-md-6 checkbox2">
                                            <h6 class="ks-header">Contract / Commercial<br>
                                                <small>Select all that Apply</small>
                                            </h6>
                                            <div id="section2">
                                                <input type="checkbox" name="contract[]" value="Health Care" @if(in_array('Health Care', $data['contract'])) checked @endif>Health Care<br>
                                                <input type="checkbox" name="contract[]" value="Hospitality Entertainment" @if(in_array('Hospitality Entertainment', $data['contract'])) checked @endif>Hospitality / Entertainment<br>
                                                <input type="checkbox" name="contract[]" value="Office" @if(in_array('Office', $data['contract'])) checked @endif>Office<br>
                                                <input type="checkbox" name="contract[]" value="Retail Enviroment" @if(in_array('Retail Enviroment', $data['contract'])) checked @endif>Retail Enviroment<br>
                                                <input type="checkbox" name="contract[]" value="Institutional Public Space" @if(in_array('Institutional Public Space', $data['contract'])) checked @endif>Institutional / Public Space<br>
                                                <input type="checkbox" name="contract[]" value="All of the Above" @if(in_array('All of the Above', $data['contract'])) checked @endif>All of the Above<br>
                                                <input type="checkbox" name="contract[]" value="">Other
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <input id="Submit" class="btn btn-primary btn-block" type="submit" name="update" value="Submit">
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="tab-pane" id="addremovemembers" role="tabpanel">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h5>Add or Remove Company Members</h5>
                        <div class="col-md-12">
                            <div class="col-md-12">

                                <form method="post" action="/profile/{{ $data['user']->id }}/addcompanymember">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="lastpayemnt" value="{{ $data['user']->lastpayment }}">
                                    <div class="form-group row">
                                        <label for="firstname" class="col-sm-2 form-control-label">First Name:</label>
                                        <div class="col-sm-4">
                                            <input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name" value="" required>
                                        </div>
                                        <label for="lastname" class="col-sm-2 form-control-label">Last Name:</label>
                                        <div class="col-sm-4">
                                            <input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-2 form-control-label">Username:</label>
                                        <div class="col-sm-10">
                                            <input name="username" type="text" class="form-control" id="username" placeholder="User Name" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-2 form-control-label">Password:</label>
                                        <div class="col-sm-10">
                                            <input name="password" type="password" class="form-control" id="password" placeholder="Password" value="" required>
                                        </div>
                                    </div>
                                        <input name="company" type="hidden" value="@if(isset($data['companyInfo']->company_name)){{ $data['companyInfo']->company_name }}@endif">
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 form-control-label">Email:</label>
                                        <div class="col-sm-10">
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="country" class="col-sm-2 form-control-label">Country:</label>
                                        <div class="col-sm-4">
                                            @if(isset($data['companyInfo']->country))
                                                {{ Form::select('country',$data['country'],$data['companyInfo']->country,['class'=>'form-control selectpicker', 'data-width'=>'250']) }}
                                            @else
                                                {{ Form::select('country',$data['country'], '',['class'=>'form-control selectpicker', 'data-width'=>'250']) }}
                                            @endif
                                        </div>
                                        <label  for="state" class="col-sm-2 form-control-label">State:</label>
                                        <div class="col-sm-4">
                                            @if(isset($data['companyInfo']->state))
                                                {{ Form::select('state',$data['states'], $data['companyInfo']->state,['class'=>'form-control selectpicker', 'data-width'=>'250']) }}
                                            @else
                                                {{ Form::select('state',$data['states'], '',['class'=>'form-control selectpicker', 'data-width'=>'250']) }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4">&nbsp;</div>
                                        <div class="col-md-4">
                                            <button class="btn btn-primary btn-block" type="submit" name="AddCompanyMember"
                                                @if(isset($data['companymembers']))
                                                    @if(count($data['companymembers']) >= $data['companyInfo']->company_level)
                                                    disabled
                                                    @endif
                                                @endif
                                            >Add</button>
                                            @if(isset($data['companymembers']))
                                                @if(count($data['companymembers']) >= $data['companyInfo']->company_level)
                                                    <p><small>You must remove a member before you can add another, or contact an admin about upgrading.</small></p>
                                                    @endif
                                            @endif
                                        </div>
                                        <div class="col-md-4">&nbsp;</div>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        @if(isset($data['companyInfo']->company_name))
                                        <h4>Remove members from {{ $data['companyInfo']->company_name }}</h4>
                                        @endif
                                        <div>
                                            <div class="row">
                                                <table class="table table-hover">
                                                    @if(isset($data['companymembers']) && $data['companymembers'] != '')
                                                        @foreach($data['companymembers'] as $companymember)
                                                            <tr>
                                                                <td>{{ $companymember->firstname }} {{ $companymember->lastname }}
                                                                   @if($companymember->companyAdmin != 1)
                                                                    <form method="post" action="/profile/{{ $data['user']->id }}/companymemberupdate">
                                                                        {{ csrf_field() }}
                                                                    <input type="hidden" name="memberid" value="{{ $companymember->id }}">
                                                                    <input type="hidden" name="remove" value="remove">
                                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                                        <span class="la la-remove"></span> Remove
                                                                    </button>
                                                                    </form>
                                                                    @endif
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </table>
                                            </div>
                                            <div class="form-group row">
                                                <!--<button class="btn btn-danger btn-sm" id="removeButton" >Remove</button>-->

                                                <!--<button type="submit" name="updateRemove" class="btn btn-primary" id="Submit" onclick="selectAll()">Update Members</button>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
        <div class="ks-settings-tab">
            <div class="tab-content ks-setting-form-wrapper" style="margin:auto">

            </div>
        </div>
    </div>
</div>