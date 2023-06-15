<script>
    @if(Session::has('message'))
    toastr.options =
    {
        "closeButton" : true,
        "progressBar" : false,
        "showDuration": "2000",
        "hideDuration": "2000",
        "timeOut": "2000",
        "extendedTimeOut": "2000",
        "positionClass": "toast-top-center",
    }
            toastr.success("{{ session('message') }}");
    @endif

    @if(Session::has('error'))
    toastr.options =
    {
        "positionClass": "toast-top-center",
        "closeButton" : true,
        "showDuration": "2000",
        "hideDuration": "2000",
        "timeOut": "2000",
        "extendedTimeOut": "2000",
    }
            toastr.error("{{ session('error') }}");
    @endif

    @if(Session::has('info'))
    toastr.options =
    {
        "positionClass": "toast-top-center",
        "closeButton" : true,
        "progressBar" : true,
        "showDuration": "2000",
        "hideDuration": "2000",
        "timeOut": "2000",
        "extendedTimeOut": "2000",

    }
            toastr.info("{{ session('info') }}");
    @endif

    @if(Session::has('warning'))
    toastr.options =
    {
        "positionClass": "toast-top-center",
        "closeButton" : true,
        "progressBar" : true,
        "showDuration": "2000",
        "hideDuration": "2000",
        "timeOut": "2000",
        "extendedTimeOut": "2000",
    }
            toastr.warning("{{ session('warning') }}");
    @endif



  </script>
