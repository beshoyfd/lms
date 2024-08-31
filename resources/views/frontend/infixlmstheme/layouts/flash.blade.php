<script src="{{asset('/public/frontend2/toaster/toastr.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/public/frontend2/toaster/toastr.min.css')}}">

<script>
    toastr.options = {"closeButton": true, "progressBar": true}


    @if(session()->has('message'))
    toastr.success("{{ session('message') }}");
    @endif

    @if(session()->has('success'))
    toastr.success("{{ session('success') }}");
    @endif


    @if(session()->has('error'))
    toastr.error("{{ session('error') }}");
    @endif


    @if(session()->has('info'))
    toastr.info("{{ session('info') }}");
    @endif

    @if(session()->has('warning'))
    toastr.warning("{{ session('warning') }}");
    @endif

    @if(session()->has('errors'))
    @foreach(session()->pull('errors') as $error)
    toastr.warning("{{ $error }}");
    @endforeach
    @endif

    @if(!is_array($errors) && $errors->any())
    @foreach($errors->all() as $error)
    toastr.warning("{{ $error }}");
    @endforeach
    @endif

    //for form errors
    @if(session()->has('form_errors'))
        @foreach(session()->pull('form_errors') as $errorData)
        @foreach($errorData as $error)
        toastr.warning("{{ $error[0] }}");
            @endforeach
        @endforeach
    @endif


</script>
