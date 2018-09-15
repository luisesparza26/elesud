@extends( 'pagelayout') @section( 'content' )
<div id="contenedor">
  <form>
    <input type="radio" id="Slide1" name="slider" numero="06" titulo="Inicio" autofocus="autofocus" checked="checked"/>
    <input type="radio" id="Slide2" name="slider" numero="05" titulo="Nosotros"/>
    <input type="radio" id="Slide3" name="slider" numero="04" titulo="Productos"/>
    <input type="radio" id="Slide4" name="slider" numero="03" titulo="Servicios"/>
    <input type="radio" id="Slide5" name="slider" numero="02" titulo="Marcas"/>
    <input type="radio" id="Slide6" name="slider" numero="01" titulo="Proyectos"/>
    <input type="radio" id="Slide7" name="slider" numero="S1" titulo="Contacto"/>
    <div class="labels">
      <label class="Slide" for="Slide1" id="Slide1">
        <div class="content"><h1></h1></div>
      </label>
      <label class="Slide" for="Slide2" id="Slide2">
        <div class="content"><h1></h1>
          <div class="block"></div>
        </div>
      </label>
      <label class="Slide" for="Slide3" id="Slide3">
        <div class="content">
          <h1></h1>
          <div class="block"></div>
        </div>
      </label>
      <label class="Slide" for="Slide4" id="Slide4">
        <div class="content">
          <h1></h1>
          <div class="block"></div>
        </div>
      </label>
      <label class="Slide" for="Slide5" id="Slide5">
        <div class="content">
          <h1></h1>
          <div class="block"></div>
        </div>
      </label>
      <label for="Slide6" id="Slide6">
        <div class="content">
          <h1></h1>
          <div class="block"></div>
        </div>
      </label>
      <label for="Slide7" id="Slide7">
        <div class="content">
          <h1></h1>
          <div class="block"></div>
        </div>
      </label>
    </div>
  </form>
</div>
@endsection