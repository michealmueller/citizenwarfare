<div class="tab-pane" id="contact" role="tabpanel" aria-expanded="false">
    <div class="alert alert-danger alert-block" id="update-contact-alert" style="display:none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Error</h4>
        <ul></ul>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="POST" id="form-contact-update" class="ks-form" action="/profile/{{ $data['user']->id }}/contactupdate"> <!-- ks-uppercase ks-light -->
                {{ csrf_field() }}
                <h3 class="ks-header">Contact Info</h3>
                <input type="hidden" name="id" value="{{$data['user']->id}}">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">First Name:</label>
                    <div class="col-sm-4">
                        <input name="firstname" type="text" class="form-control" placeholder="First Name" value="{{$data['user']->firstname}}">
                    </div>
                    <label class="col-sm-2 form-control-label">Last Name:</label>
                    <div class="col-sm-4">
                        <input name="lastname" type="text" class="form-control" placeholder="Last Name" value="{{$data['user']->lastname}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Email:</label>
                    <div class="col-sm-4">
                        <input name="email" type="email" class="form-control" placeholder="Email" value="{{ $data['user']->email }}">
                    </div>
                    <label class="col-sm-2 form-control-label">Phone Number:</label>
                    <div class="col-sm-4">
                        <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{ $data['user']->phone }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Company:</label>
                    <div class="col-sm-4">
                        <input name="company" type="text" class="form-control" placeholder="Company" value="{{ $data['user']->company }}">
                    </div>
                    <label class="col-sm-2 form-control-label">Position:</label>
                    <div class="col-sm-4">
                        <input name="position" type="text" class="form-control" placeholder="Position" value="{{ $data['user']->position }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Products & Services:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Products or Services" name="prod" value="{{ $data['user']->products_services }}" required>
                    </div>
                    <label class="col-sm-2 form-control-label">Industry:</label>
                    <div class="col-sm-4">
                        {{ Form::select('industry',$data['industry'], $data['industryvalue'], ['class'=>'form-control selectpicker','data-width'=>'250']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Company Website:</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" name="compweb" placeholder="Company Website" value="{{ $data['user']->compweb }}">
                    </div>
                    <label class="col-sm-2 form-control-label">Personal Website:</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" name="website" placeholder="Personal Website" value="{{ $data['user']->website }}">
                    </div>
                </div>
                <div class="form-group row ">
                    <label class="col-sm-2 form-control-label">Bio:</label>
                    <div class="col-lg-12">
                        <textarea name="bio" class="form-control ks-bio">{{ $data['user']->bio }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">City</label>
                    <div class="col-sm-4">
                        <input name="city" type="text" class="form-control" placeholder="City" value="{{ $data['user']->city }}">
                    </div>
                    <label class="col-sm-2 form-control-label">State/Province</label>
                    <div class="col-sm-4">
                        <select name="state" class="form-control selectpicker">
                            @if(isset($data['user']->state))
                                <option value="{{$data['user']->stateabv}}">{{$data['user']->state}}</option>
                            @endif
                            @foreach($data['states'] as $k=>$v)
                                <option value="{{ $k }}">{{ $v }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Country</label>
                    <div class="col-sm-4">
                        <select name="country" class="form-control selectpicker">
                            @if(isset($data['user']->country))
                                <option value="{{$data['user']->countryabv}}">{{$data['user']->country}}</option>
                            @endif
                            @foreach($data['country'] as $k=>$v)
                                <option value="{{ $k }}">{{ $v }}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-sm-2 form-control-label">Postal Code</label>
                    <div class="col-sm-4">
                        <input name="zip" type="text" class="form-control" placeholder="Zip" value="{{ $data['user']->zip }}">
                    </div>
                </div>
                <div class="col-md-8 paddingTop">
                    <h5>If you are a presenter/speaker in the field of color and would like to be included as a speaker in the CMG member directory select this box</h5>
                    <input type="checkbox" name="speaker" value="1" {{ $data['user']->speaker_presenter == 1 ? 'checked' : '' }}>Yes
                </div>
                <hr>
                <h3>Social Contact <small><small>I.E - Only  enter what is in bold https://facebook.com/<b><strong>www.colormarketing.org</strong></b></small></small></h3>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">https://twitter.com/</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="" name="twitter" value="{{ $data['user']->twitter }}">
                    </div>
                    <label class="col-sm-2 form-control-label">https://linkedin.com/</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="" name="linkedin" value="{{ $data['user']->linkedin }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">https://facebook.com/</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="" name="facebook" value="{{ $data['user']->facebook }}">
                    </div>
                    <label class="col-sm-2 form-control-label">https://instagram.com/</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="" name="instagram" value="{{ $data['user']->instagram }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <!-- <button type="submit" class="btn btn-success" onclick="return save_data();">Save &amp; update</button>-->
                        <button type="submit" class="btn btn-success" onclick="return validate_data();" >Save &amp; update</button>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


<script>
function validate_data() {    
    $.ajax({
        type:'POST',
        url:'/profile/check_unique',
        data: $('#form-contact-update').serialize(),
        success:function(data){
            $("#form-contact-update").submit();
        },
        error: function(xhr,status, response) {
            var error = jQuery.parseJSON(xhr.responseText);  // this section is key player in getting the value of the errors from controller.
            var info = $('#update-contact-alert');
            info.hide().find('ul').empty();
            for(var k in error.message){
                if(error.message.hasOwnProperty(k)){
                    error.message[k].forEach(function(val){
                        info.find('ul').append('<li style="color: red;">' + val + '</li>');
                    });
                    
                }
            }
            info.slideDown();
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }
    });
    return false;
}
function save_data() {   
    var id = "{!! $data['user']->id  !!}";
    var url = '/profile/'+id+'/contactupdate';
    console.log(id);
    console.log(url);
    // $.ajax({
    //     type:'POST',
    //     url:'/profile/check_unique',
        
    //     data: {
    //         "_token": "{{ csrf_token() }}",
    //         "id": '{{ $data["user"]->id }}'
    //     },
    //     success:function(data){
    //             return true;
    //     }
    // });
    return false;
}

</script>   