import LightGallery from 'lightgallery/react';

// import styles
import 'lightgallery/css/lightgallery.css';
import 'lightgallery/css/lg-zoom.css';
import 'lightgallery/css/lg-thumbnail.css';

import lgThumbnail from 'lightgallery/plugins/thumbnail';
import lgZoom from 'lightgallery/plugins/zoom';
function GalleryDetails() {


  const onInit = () => {
    console.log('lightGallery has been initialized');
  };

  return (
    <div className="App  md:p-4 p-2">
      <LightGallery
        onInit={onInit}
        speed={500}
        plugins={[lgThumbnail, lgZoom]}
      >
          <a href="https://www.shutterstock.com/image-photo/water-drop-img-260nw-1194035020.jpg">
            <img alt="img1" src="https://www.shutterstock.com/image-photo/water-drop-img-260nw-1194035020.jpg" />
            <h1>hello world</h1>
          </a>
          <a href="https://www.shutterstock.com/image-photo/water-drop-img-260nw-1194035020.jpg">
            <img alt="img1" src="https://www.shutterstock.com/image-photo/water-drop-img-260nw-1194035020.jpg" />
            <h1>hello world</h1>
          </a>
  

      </LightGallery>
    </div>


  )
}

export default GalleryDetails