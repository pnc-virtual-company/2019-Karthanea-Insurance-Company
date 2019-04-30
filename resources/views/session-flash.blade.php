@if(session()->has('message.level'))
<div class="alert alert-{{ session('message.level') }} alert-dismissible fade show  " role='alert'  > 
    {!! session('message.content') !!}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<script src="">
   $(document.ready(function(){

    $(".alert").alert('close')
   }))
</script>
