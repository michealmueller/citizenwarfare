
<div class='notifications top-right'>


    @if(Session::has('success'))
        <script>
            $.notify({
                message: '{{ Session::get('success') }}',
                type:'success-solid-active'
            })
        </script>
        @php
            Session::forget('success');
        @endphp
    @endif

    @if(Session::has('info'))
        <script>
            $.notify({
                message: '{{ Session::get('info') }}',
                type:'info-solid-active'
            })
        </script>
        @php
            Session::forget('info');
        @endphp
    @endif

    @if(Session::has('warning'))
        <script>
            $.notify({
                message: '{{ Session::get('warning') }}',
                type:'warning-solid-active'
            })
        </script>
        @php
            Session::forget('warning');
        @endphp
    @endif

    @if(Session::has('error'))
        <script>
            $.notify({
                message: '{{ Session::get('error') }}',
                type:'danger-solid-active'
            })
        </script>
        @php
            Session::forget('error');
        @endphp
    @endif
    @if(Session::has('imperror'))
        <script>
            $.notify({
                message: '{{ Session::get('imperror') }}',
                type:'danger-solid-active',
                timer:5000
            })
        </script>
        @php
            Session::forget('imperror');
        @endphp
    @endif
    @if(Session::has('impinfo'))
        <script>
            $.notify({
                message: '{{ Session::get('imperror') }}',
                type:'info-solid-active',
                timer:10000
            })
        </script>
        @php
            Session::forget('impinfo');
        @endphp
    @endif
</div>