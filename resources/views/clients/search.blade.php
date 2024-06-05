<style>
    .m-5{
        display: flex;
        flex-direction: row;
        gap:10px;
    }
</style>
<div class="m-5">
    <a class="btn" style="background-color: #E21818; color: #FFFFFF;" href="{{ route('clients.create') }}">@lang('Ajouter un client')</a>
    <a href="{{route('generate-pdfc')}}">
        <button class="btn btn-primary" style="background-color: #74E291; border-color: #74E291;">@lang('Télécharger en PDF')</button>
    </a>
    <a href="{{ route('clients.export') }}">
        <button class="btn btn-success" style="background-color: #EBE645; border-color: #EBE645;">@lang('Exporter en Excel')</button>
    </a>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show mt-10" role="alert" style="background-color: #EBE645;border:#EBE645 1px solid; color:#23049D">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <p>{{ $message }}</p>
</div>
@endif

<div class="card-body">
            <form action="{{ route('clients.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control ">
                <br>
                <button class="btn" style="background-color: #74E291">Importer Client Data</button>
            </form>
<table class="table table-striped  mt-10" style="backgound-color:#BAD1C2">
    <tr>
        <th>@lang('Action')</th>
        <th >@lang('Nom')</th>
        <th >@lang('prenom')</th>
        <th >@lang('adresse')</th>
        <th >@lang('telephone')</th>
    </tr>
    @foreach ($clients as $clt)
        <tr id="row{{$clt->id}}">
            <td>
                <button class="btnShow btn  hover:bg-yellow-100 text-black font-bold  px-2 border-b-4 border-blue-100 hover:border-yellow-100 rounded" v="{{$clt->id}}"style="color:white ;background-color: #EBE645; border-color: #EBE645;">@lang('Voir')</button>
                <a class="btnEdit btn  hover:bg-green-400 text-white font-bold  px-2 border-b-4 border-blue-700 hover:border-green-500 rounded" href="{{ route('clients.edit',$clt->id) }}"style="background-color: #74E291; border-color: #74E291;">@lang('Modifier')</a>
                <button class="btnDelete btn  hover:bg-red-400 text-white font-bold px-2 border-b-4 border-red-700 hover:border-red-500 rounded" v="{{$clt->id}}" style="background-color: #E21818; color: #FFFFFF;">{{ trans('Supprimer')}}</button>
            </td>
            <td>{{ $clt->nom}}</td>
            <td>{{ $clt->prenom}}</td>
            <td>{{ $clt->adresse }}</td>
            <td>{!! $clt->telephone !!}</td>
        </tr>
    @endforeach
</table>


<script>
    $(document).on('click',".btnShow",function(){
        var client_id = $(this).attr('v');
        var myData = {'client_id': client_id};
        var url = '{{ route("clients.show") }}';

        axios.post(url, myData)
        .then(response => {
                $("#showClient").html(response.data);
                $("#myModalShowClient").show();
        })
        .catch(error => {
            console.log(error);
        });
    })

    $(document).on("click",".btnDelete",function(){
            $("#txtId").val($(this).attr('v'));
            $("#myModalDeleteClient").show();
        })
</script>
