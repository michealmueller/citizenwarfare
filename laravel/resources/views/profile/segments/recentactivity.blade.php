<div class="tab-pane " id="attendedevents" role="tabpanel" aria-expanded="false">
    <div class="ks-body">
        <div class="ks-content">
            <ul>
                @if(isset($data['recent']['msg']))
                    @for($i=0; $i<= count($data['recent']['msg'])-1; $i++)
                        <li>{{ strip_tags($data['recent']['date'][$i]) }} : {{ strip_tags($data['recent']['msg'][$i]) }}<br><hr></li>
                    @endfor
                @endif
            </ul>
        </div>
    </div>
</div>