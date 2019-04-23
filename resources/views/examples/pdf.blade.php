@extends('layout.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">

            <p>
                You can download the PDF by clicking on the link:
                <a href="{{url('examples/pdf/downloadPDF')}}" download>here</a>
            </p>
              
            <embed type="application/pdf" src="{{url('examples/pdf/generatePDF')}}" width="700px" height="600px"></embed>
            
        </div>

        @include('examples.sidebar-examples', ['currentExample' => $currentExample])

    </div>
</div>

@endsection

@push('scripts')
<script>
$(function() {

});
</script>
@endpush
