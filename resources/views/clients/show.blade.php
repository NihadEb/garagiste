<div id="myModalShowClient" class="modal">
    <!-- Modal content -->
    <div class="modal-content" style="width:700px; margin-left:400px">
        <div class="modal-header">
            <span class=" btnCloseShow close" style="color: #23049D;">&times;</span>
            <h2 style="ba">@lang('Show')</h2>
        </div>
        <div class="modal-body">
            <table class="table" style="border: 1px solid #FAEF5D;">
                <thead style="background-color: #FAEF5D;">
                    <tr>
                        <th>@lang('Numero')</th>
                        <th>@lang('Nom')</th>
                        <th>@lang('Prenom')</th>
                        <th>@lang('Adresse')</th>
                        <th>@lang('Telephone')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->nom}}</td>
                        <td>{{$client->prenom}}</td>
                        <td>{{$client->adresse}}</td>
                        <td>{{$client->telephone}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button class="btnCloseShow  text-white font-bold py-2 px-4 rounded" style="background-color: #23049D;">@lang('Fermer')</button>
        </div>
    </div>
</div>
<script>
       $(".btnCloseShow").on('click',function(){
          $("#myModalShowClient").hide();
      })
</script>
