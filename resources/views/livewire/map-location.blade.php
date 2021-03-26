
<div>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('{{ asset('assets/startbootstrap/img/bg1.png') }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Teliti Remaja</h1>
            <span class="subheading">Website Berita Membahas Tentang Pergaulan Bebas</span>
          </div>
        </div>
      </div>
    </div>
  </header>
<div class="row">
    <div class="col-md-8" style='margin-left:330px;'>
      <div class="card">
          <div class="card-header bg-dark text-white">
              Peta Persebaran Pergaulan Bebas
          </div>
          <div class="card-body">
          <div wire:ignore id='map' style='width: 100%; height: 75vh;'></div>
          </div>
      </div>
    </div>
   
  </div>

  

</div>

@push('scripts')

<script>
    
    document.addEventListener('livewire:load', () => {
      const defaultLocation = [106.86384939495088, -6.412588194444311]

  mapboxgl.accessToken = '{{env("MAPBOX_KEY")}}';
  var map = new mapboxgl.Map({
    container: 'map',
    center: defaultLocation,
    zoom: 11.15,
  });


const loadLocations = (geoJson) => {
    geoJson.features.forEach((location) => {
      const {geometry, properties} = location
      const {iconSize, locationId, title, description} = properties

      let markerElement = document.createElement('div')
      markerElement.className = 'marker' + locationId
      markerElement.id = locationId
      markerElement.style.backgroundImage ='url(https://i.vimeocdn.com/portrait/19024629_640x640)'
      markerElement.style.backgroundSize = 'cover'
      markerElement.style.width = '50px'
      markerElement.style.height = '50px'

      const content = `
                <div style="overflow-y: auto; max-height:400px;width:100%;">
                    <table class="table table-sm mt-2">
                         <tbody>
                            <tr>
                                <td>Title</td>~
                                <td>${title}</td>
                            </tr>
                            <tr>
                                <td>Description</td>         
                                <td>${description}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                `

      const popUp = new mapboxgl.Popup({
        offset:25
      }).setHTML(content).setMaxWidth("400px")

      new mapboxgl.Marker(markerElement)
      .setLngLat(geometry.coordinates)
      .setPopup(popUp)
      .addTo(map)

    })
}

loadLocations({!! $geoJson !!})

  const style = "outdoors-v11"
        map.setStyle(`mapbox://styles/mapbox/${style}`);

  map.addControl(new mapboxgl.NavigationControl());

  


    })

</script>

@endpush
