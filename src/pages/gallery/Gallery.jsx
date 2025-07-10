import React from 'react'
import GalleyItem from './galleryItem/GalleyItem'
import Title from '../../components/title/Title'
import useGalleryLoaderData from '../../hooks/useGalleryLoaderData'

function Gallery() {

  const [galleris, loader] = useGalleryLoaderData();

  if (loader) {
    return <> </>
  }

  const galleryImages = galleris.data

  const galleryInfo = galleryImages.map(gallery => ({
    gallery_category_name: gallery.gallery_category_name,
    gallery_category_image: gallery.gallery_category_image
  }))
  // const galleryCategoryImg = galleryImages.map(gallery => gallery.gallery_category_image)



  return (
    <section className='pb-6'>
      <div className='px-4 '>
        <Title title="Gallery" subtitle="Frames of Inspiration"></Title>
      </div>
      <div className='grid md:grid-cols-4 gap-4 bg-[#EEF3F9] md:p-4 p-2'>

        {
          galleryInfo.map(gallery =>
            <GalleyItem
              key={gallery.gallery_category_name}
              gallery_category_name={gallery.gallery_category_name}
              gallery_category_image={gallery.gallery_category_image}
            />
          )
        }
      </div>
    </section>
  )
}

export default Gallery