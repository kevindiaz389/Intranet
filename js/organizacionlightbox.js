//Obtener galeria de imagenes
const getImages = container => [...container.container.querySelectorAll('img')];

//Obtener arreglo de las rutas de las imagenes grandes
const getLargeImage = gallery => gallery
                                    .map ( el => el.src)
                                    .map ( el => el.replace('thumb', 'large'));


//Obtener las descripciones de las imagenes
const getDescriptions = gallery => gallery.map ( el => el.alt);

//Capturar el evento clip en la galeria para abrir el lightbox
const openLightboxEvent = (container,gallery,larges,descriptions) =>{
    container.addEventListener('click', e =>{
        let el = e.target,
            i = gallery.indexOf(el);
        if (el.tagName === 'IMG'){
            openLightboxEvent(gallery,i,larges,descriptions);
        }
    })
};

//Imprimir overlay del lightbox en el body
const openLightbox = (gallery,i,larges,descriptions) =>{
    let lightboxElement = document.createElement('div');
        lightboxElement.innerHTML = `
        <div class="lightbox-overlay">
  <figure class="lightbox-container">
    <div class="close-modal">\u2716</div>
    <img src="${larges[i]}" class="lightbox__img">
    <figcaption>
      <p class="lightbox__descriptions">${descriptions[i]}</p>
      <nav class="lightbox-nav">
        <a href="" class="nav__button prev">\u2B29C</a>
        <a href="" class="nav__button next">\u2B9E</a>
        <span class="nav__counter">Imagen ${i+ 1} de ${gallery.length}</span>
      </nav>
    </figcaption>
  </figure>
</div>
        
        `

        lightboxElement.id = 'lightbox';
        document.body.appendChild(lightboxElement);
        closeModal(lightboxElement);
};

//Cerrar Modal
const closeModal = modalElement =>{
    let closeModal = modalElement.querySelector('close-modal');
    closeModal.addEventListener('click', e => {
        e.preventDefault();
        document.body.removeChild(modalElement);
    })
};

//Navegar en el modal
const NavigateLightbox = (lightboxElement,i,larges,descriptions) => {
    let prevButton = lightboxElement.querySelector('.prev'),
    prevButton = lightboxElement.querySelector('.next'),
    image = lightboxElement.querySelector('img'),
    descriptions = lightboxElement.querySelector('p'),
    counter = lightboxElement.querySelector('span'),
    closeButton = lightboxElement.querySelector('.closeModal');

    lightboxElement.addEventListener('click', e => {
        let target = e.target;

        if (target === prevButton) {
            if (i > 0){
                image.src = larges [i - 1];
                i--
            } ellse {
                image.src = larges[larges.length - 1];
                i = larges.length - 1;
            }
        }
    })

}













const lightbox = container => {
    let images = getImages(container),
    larges = getLargeImages(images),
    descriptions = getDescriptions(images);
    openLightbox(container,gallery,larges,descriptions);
};