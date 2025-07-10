import LightGallery from 'lightgallery/react';

// import styles
import 'lightgallery/css/lightgallery.css';
import 'lightgallery/css/lg-zoom.css';
import 'lightgallery/css/lg-thumbnail.css';

import lgThumbnail from 'lightgallery/plugins/thumbnail';
import lgZoom from 'lightgallery/plugins/zoom';
import Title from '../../../components/title/Title';

function GalleryDetails() {
  const img = [
    { img: "https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg", title: "Beautiful Bird" },
    { img: "https://cdn.pixabay.com/photo/2015/04/23/22/00/new-year-background-736885_1280.jpg", title: "New Year Lights" },
    { img: "https://img.freepik.com/free-photo/woman-beach-with-her-baby-enjoying-sunset_52683-144131.jpg?size=626&ext=jpg", title: "Sunset at Beach" },
    { img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmwla6vUQK67X5KHksARyVrL4Evo509hBcCA&s", title: "City Night" },
    { img: "https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_1280.jpg", title: "Beautiful Bird" },
    { img: "https://cdn.pixabay.com/photo/2015/04/23/22/00/new-year-background-736885_1280.jpg", title: "New Year Lights" },
    { img: "https://img.freepik.com/free-photo/woman-beach-with-her-baby-enjoying-sunset_52683-144131.jpg?size=626&ext=jpg", title: "Sunset at Beach" },
    { img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmwla6vUQK67X5KHksARyVrL4Evo509hBcCA&s", title: "City Night" },
    { img: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmwla6vUQK67X5KHksARyVrL4Evo509hBcCA&s", title: "City Night" },
  ];

  const onInit = () => {
    console.log('lightGallery has been initialized');
  };

  return (


    <section className='pb-6'>
      <div className='px-4 '>
        <Title title="Gallery" subtitle="Frames of Inspiration"></Title>
      </div>
      
        <div className="bg-[#EEF3F9] md:p-4 p-2">
          <LightGallery
            onInit={onInit}
            speed={500}
            plugins={[lgThumbnail, lgZoom]}
            elementClassNames="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"
          >
            {img.map((im, index) => (
              <a
                key={index}
                href={im.img}
                className="group block overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300"
              >
                <img
                  alt={im.title}
                  src={im.img}
                  className="w-full h-48 object-cover transform group-hover:scale-105 transition-transform duration-300"
                />
                <div className="bg-gray-800 bg-opacity-75 text-white text-center py-2">
                  {im.title}
                </div>
              </a>
            ))}
          </LightGallery>
     
      </div>
    </section>
  );
}

export default GalleryDetails;
