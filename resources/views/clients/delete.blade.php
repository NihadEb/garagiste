<div id="myModalDeleteClient" class="modal">
    <div class="modal-content" style="width:700px; margin-left:400px">
      <div class="modal-header">
        <span class=" btnClose close">&times;</span>
        <h2>@lang('Supprimer')</h2>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <form id="deleteForm" onsubmit="return submitDeleteForm(event)">
                    @csrf
                    <input type="hidden" value="" id="txtId" name="txtId" />
                </form>
                  <strong>@lang('Vous etes sur de supprimer ce client ?')</strong>
              </div>
          </div>

      </div>

      </div>
      <div class="modal-footer">
        <button  class="btnYes  text-black bg-red-600 font-bold py-2 px-4 rounded" id="close">@lang('oui supprimer !')</button>
        <button  class="btnClose  text-black  font-bold py-2 px-4 rounded" id="close" style="background: #23049D">@lang('Annuler')</button>
      </div>
    </div>
  </div>
  <script>
        $(".btnClose").on('click',function(){
            $("#myModalDeleteClient").hide();
        })

        $(".btnYes").on('click',function(){
            var formData=$('#deleteForm').serialize();
            console.log(formData);
            var url="{{route('clients.delete')}}";
            axios.post(url, formData).then(response=>{
                if(response.data=="ok"){
                    $("#myModalDeleteClient").hide();
                    $("#row"+$("#txtId").val()).remove();
                }
                else{
                    alert("erreur")
                }
            }).catch(error=>{
                    console.log(error);
            });


        })
  </script>
