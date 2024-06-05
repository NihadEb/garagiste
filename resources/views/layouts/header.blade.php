<style>
*{
    font-family: system-ui;
}

</style>

<nav class="main-header navbar navbar-expand navbar-white navbar-light fixed-top" style="border-bottom: rgb(242, 242, 242) 3px solid;height:40px">


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->


      <!-- Messages Dropdown Menu -->
      <div class="m-2">

        <select name="lstLangues" id="lstLangues">
          <option @if (app()->getLocale()=="en")
          selected
          @endif value="en">@lang('Englais')</option>
          <option @if (app()->getLocale()=="ar")
          selected
          @endif value="ar">@lang('Arabic')</option>
          <option @if (app()->getLocale()=="es")
          selected
          @endif value="es">@lang('Espagnol')</option>
          <option @if (app()->getLocale()=="fr")
          selected
          @endif value="fr">@lang('Francais')</option>
        </select>
      </div>
    </ul>
  </nav>

  <script>
    $("#lstLangues").on("change",function(){
        var locale = $(this).val();
        window.location.href = "/changeLocale/"+locale;
    })
</script>
