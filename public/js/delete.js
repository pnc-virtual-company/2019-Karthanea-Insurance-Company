$('#deleteModal').on('show.bs.modal',function(event){
  var button=$(event.relatedTarget)
  var id =button.data('id')
  console.log(id);
  var title =button.data('title')
  var modal=$(this)
  modal.find('#title').text(title)
  var url = "{{url('users/')}}/"+id;
  $("#fDelete").attr('action',url);
  });