

<style>

.preloader img {
      animation: spin 2s linear infinite;
      border-radius: 50%
    }
    </style>
     <!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('https://i.pinimg.com/564x/c2/38/ca/c238ca771e6b506dc93bf69b642559d7.jpg')}}" alt="AdminLTELogo" height="60" width="60">
  </div>
    <div class="m-5">
    <a class="btn btn-secondary" href="{{ route('mecaniciens.create') }}">@lang('Ajouter un mécanicien')</a>
    <a href="{{route('generate-pdfm')}}">
        <button class="btn"  style="background-color: #23049D">@lang('telecharger en pdf')</button>
    </a>


</div>




@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show mt-10" role="alert" style="background-color: #EBE645;border:#EBE645 1px solid; color:#23049D">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-striped table-hover mt-10">
    <tr>
        <th >@lang('Nom')</th>
        <th >@lang('prenom')</th>
        <th >@lang('adresse')</th>
        <th >@lang('telephone')</th>
        <th >@lang('Action')</th>
    </tr>
    @foreach ($mecaniciens as $meca)
        <tr id="row{{$meca->id}}">
            <td>{{ $meca->nom}}</td>
            <td>{{ $meca->prenom}}</td>
            <td>{{ $meca->adresse }}</td>
            <td>{!! $meca->telephone !!}</td>
            <td>
                <button class="btnShow btn bg-blue-100 hover:bg-blue-100 text-black font-bold  px-2 border-b-4 border-blue-100 hover:border-blue-100 rounded" v="{{$meca->id}}" style="color:white ;background-color: #EBE645; border-color: #EBE645;">@lang('Voir')</button>
                <a class="btnEdit btn  bg-blue-500 hover:bg-blue-400 text-white font-bold  px-2 border-b-4 border-blue-700 hover:border-blue-500 rounded" href="{{ route('mecaniciens.edit',$meca->id) }}" style="color:white ;background-color: #6c45eb; border-color: #EBE645;">@lang('Modifier')</a>
                <button class="btnDelete btn  bg-red-500 hover:bg-red-400 text-white font-bold px-2 border-b-4 border-red-700 hover:border-red-500 rounded" v="{{$meca->id}}" tyle="color:white ;background-color: red; border-color: red;">{{ trans('Supprimer')}}</button>
            </td>
        </tr>
    @endforeach
</table>


<script>
    $(document).on('click',".btnShow",function(){
        var mecanicien_id = $(this).attr('v');
        var myData = {'mecanicien_id': mecanicien_id};
        var url = '{{ route("mecaniciens.show") }}';

        axios.post(url, myData)
        .then(response => {
                $("#showM").html(response.data);
                $("#myModalShowM").show();
        })
        .catch(error => {
            console.log(error);
        });
    })

    $(document).on("click",".btnDelete",function(){
            $("#txtId").val($(this).attr('v'));
            $("#myModalDeleteM").show();
        })
</script>
