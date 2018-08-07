<div class="tab-pane" id="settings" role="tabpanel" aria-expanded="false">
    <div class="ks-settings-tab">
        <div class="ks-menu">
            <ul class="nav nav-pills nav-stacked">
                <li class="nav-item">
                    <a class="nav-link active" href="" data-toggle="tab" data-target="#general" aria-expanded="false">General</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="tab" data-target="#contact" id="#contact-info" aria-expanded="false">Contact Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="tab" data-target="#skills" aria-expanded="false">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="tab" data-target="#addeventinfo" aria-expanded="false">Additional Event Information</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="ks-controls">
                <button type="button" class="btn btn-primary-outline ks-light ks-settings-menu-block-toggle" data-block-toggle=".ks-settings-tab > .ks-menu">Menu</button>
            </div>
            @include('members.profile.segments.settings.general')
            @include('members.profile.segments.settings.contactinfo')
            @include('members.profile.segments.settings.skills')
            @include('members.profile.segments.settings.eventinformation')
        </div>
    </div>
</div>