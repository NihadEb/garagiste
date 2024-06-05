<div class="m-5">
    <a class="btn " href="{{ route('pieces.create') }}" style="background-color: #23049D; color: #FFFFFF;" >@lang('Ajouter une piece')</a>
    <a href="{{route('generate-pdfp')}}">
        <button class="btn " style="background-color: #74E291; border-color: #74E291;">@lang('telecharger en pdf')</button>
    </a>


</div>




@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show mt-10" role="alert" style="background-color: #EBE645;border:#EBE645 1px solid; color:#23049D">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-striped  mt-10"style="backgound-color:#BAD1C2">
    <tr>
        <th >@lang('Action')</th>
        <th >@lang('Nom piece')</th>
        <th >@lang('Reference')</th>
        <th >@lang('Fournisseur')</th>
        <th >@lang('Prix')</th>
    </tr>
    @foreach ($pieces as $p)
        <tr id="row{{$p->id}}">
            <td>
                <button class="btnShow btn  hover:bg-yellow-100 text-black font-bold  px-2 border-b-4 border-blue-100 hover:border-yellow-100 rounded" v="{{$clt->id}}"style="color:white ;background-color: #EBE645; border-color: #EBE645;"v="{{$p->id}}">@lang('Voir')</button>
                <a class="btnEdit btn  hover:bg-green-400 text-white font-bold  px-2 border-b-4 border-blue-700 hover:border-green-500 rounded"style="background-color: #74E291; border-color: #74E291;"href="{{ route('pieces.edit',$p->id) }}">@lang('Modifier')</a>
                <button class="btnDelete btn  hover:bg-red-400 text-white font-bold px-2 border-b-4 border-red-700 hover:border-red-500 rounded" style="background-color: #E21818; color: #FFFFFF;"v="{{$p->id}}">{{ trans('Supprimer')}}</button>
            </td>
            <td>{{ $p->nompiece}}</td>
            <td>{{ $p->referencep}}</td>
            <td>{{ $p->fournisseur }}</td>
            <td>{!! $p->prix !!}</td>
        </tr>
    @endforeach
</table>


<script>
    $(document).on('click',".btnShow",function(){
        var piece_id = $(this).attr('v');
        var myData = {'piece_id': piece_id};
        var url = '{{ route("pieces.show") }}';

        axios.post(url, myData)
        .then(response => {
                $("#showP").html(response.data);
                $("#myModalShowP").show();
        })
        .catch(error => {
            console.log(error);
        });
    })

    $(document).on("click",".btnDelete",function(){
            $("#txtId").val($(this).attr('v'));
            $("#myModalDeleteP").show();
        })
</script>
