<!-- The Modal -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" data-dismiss="modal">
    <div class="modal-content bg-dark center" style="width:max-content;">       
      <div class="modal-body">
        <span class="modal-text text-white text-left"></span>
        <button type="button" class="close mb-3" data-dismiss="modal">
          <span class="text-white" aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button><hr>
		<p class="text-white">Scan the below QR Code to Download the catalog</p>
        <img src="" class="qrpreview" style="width: 100%;">
      </div>       
    </div>
  </div>
</div>

<script>  
  $(function() {
    $('.pop').on('click', function() {
      $('.qrpreview').attr('src', $(this).find('img').attr('src'));
      $('.modal-text').text($(this).find('img').attr('alt'));
      $('#imagemodal').modal('show');
    });     
  });
</script>