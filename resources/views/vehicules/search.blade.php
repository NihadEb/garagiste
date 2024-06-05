<div class="m-5">
    <a class="btn" style="background-color: #E21818; color: #FFFFFF;" href="{{ route('vehicules.create') }}">@lang('Ajouter un client')</a>
    <a href="{{route('generate-pdfc')}}">
        <button class="btn btn-primary" style="background-color: #74E291; border-color: #74E291;">@lang('Télécharger en PDF')</button>
    </a>
    <a href="{{ route('clients.export') }}">
        <button class="btn btn-success" style="background-color: #EBE645; border-color: #EBE645;">@lang('Exporter en Excel')</button>
    </a>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show mt-10" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p>{{ $message }}</p>
    </div>
@endif
<div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control ">
                <br>
                <button class="btn" style="background-color: #74E291">Importer Client Data</button>
            </form>
            <table class="table table-striped  mt-10" style="backgound-color:#BAD1C2">
                <tr>
        <th >@lang('Marque')</th>
        <th >@lang('Modele')</th>
        <th >@lang('typeFuel')</th>
        <th >@lang('Registration')</th>
        <th >@lang('Image')</th>
        <th >@lang('Action')</th>
    </tr>
    @foreach ($vehicules as $v)
        <tr id="row{{$v->id}}">
            <td>{{ $v->marque}}</td>
            <td>{{ $v->modele}}</td>
            <td>{{ $v->typeFuel }}</td>
            <td>{{ $v->registration }}</td>
            <td><img src="{{ asset('images/' . $v->image) }}" alt="Image du Véhicule" style="width: 100px; height: 1o0px;"></td>
            <td>
                <button class="btnShow btn bg-blue-100 hover:bg-blue-100 text-black font-bold  px-2 border-b-4 border-blue-100 hover:border-blue-100 rounded" v="{{$v->id}}">@lang('Voir')</button>
                <a class="btnEdit btn  bg-blue-500 hover:bg-blue-400 text-white font-bold  px-2 border-b-4 border-blue-700 hover:border-blue-500 rounded" href="{{ route('vehicules.edit',$v->id) }}">@lang('Modifier')</a>
                <button class="btnDelete btn  bg-red-500 hover:bg-red-400 text-white font-bold px-2 border-b-4 border-red-700 hover:border-red-500 rounded" v="{{$v->id}}">{{ trans('Supprimer')}}</button>
            </td>
        </tr>
    @endforeach
</table>


<script>
    $(document).on('click',".btnShow",function(){
        var vehicule_id = $(this).attr('v');
        var myData = {'vehicule_id': vehicule_id};
        var url = '{{ route("vehicules.show") }}';

        axios.post(url, myData)
        .then(response => {
                $("#showV").html(response.data);
                $("#myModalShowV").show();
        })
        .catch(error => {
            console.log(error);
        });
    })

    $(document).on("click",".btnDelete",function(){
            $("#txtId").val($(this).attr('v'));
            $("#myModalDeleteV").show();
        })
</script>
