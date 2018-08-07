<div class="tab-pane" id="skills" role="tabpanel" aria-expanded="false">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="POST" class="ks-form" action="/profile/{{ $data['user']->id }}/skillsupdate">
                {{ csrf_field() }}
                <div class="col-md-12">
                    <label for="skills">Skills<small>Separate each skill with a comma</small></label>
                    <div class="form-group">
                        <input id="skills" class="form-control" name="skills" placeholder="Skills" value="{{ $data['skills_edit'] }}">
                    </div>
                    <!--<div class="col-md-12">
                        <div class="form-group">
                            <label>Skills</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Skill 1" name="Skill1" value="">
                            </div>
                            <div class="input_fields_wrap">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class=" col-md-6 ">
                                <a href="#" class="add_field_button">
                                    <button class="btn btn-info"><span class="fa fa-plus-circle">Add More</span></button>
                                </a>
                            </div>
                        </div>
                    </div>-->
                    <div class="form-group ">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-success">Save &amp; update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>