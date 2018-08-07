<div class="tab-pane" id="addeventinfo" role="tabpanel" aria-expanded="false">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="post" action="/profile/{{ $data['user']->id }}/dietupdate">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-lg-12">
                        <label>Dietary Restrictions:</label>
                        <input name="dietrestriction" type="text" class="form-control" placeholder="Dietary Restrictions"
                               value="@if($data['diet'] != null){{ $data['diet']->dietrestriction }} @endif">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-10">
                        <label>Is this your first event?</label>
                        <input name="firstevent" type="checkbox" value="1" @if($data['diet'] != null){{
                        $data['diet']->firstevent == 1 ? 'checked' : '' }}@endif>Yes
                    </div>
                </div>
                <div class="form-group row">
                    <button class="btn btn-primary btn-block">Save</button>
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>