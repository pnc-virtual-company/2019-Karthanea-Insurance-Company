<div id="frmModalDeleteConfirmation" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">@lang('Delete confirmation')</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>@lang('Are you sure that you want to delete this object?')</p>
        </div>
        <div class="modal-footer">
                <form action="{{route('users.destroy',$user->id)}}" method="POST" class="text-center">
                        @csrf
                        @method("delete")   
                    <button type="submit"  class="btn-danger btn">@lang('Yes')</button>
                    <button id="cmdDeleteCancellation" type="button" class="btn bg-primary text-white" data-dismiss="modal">@lang('No')</button>
                </form>
                                                 
        </div>
        </div>
    </div>
</div>
      