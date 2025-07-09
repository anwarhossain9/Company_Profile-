import React from 'react'
import GalleyItem from './galleryItem/GalleyItem'
import Title from '../../components/title/Title'

function Gallery() {
  return (
    <section className=' pb-6'>
       <div className='px-4 '>
          <Title title="Gallery" subtitle="Frames of Inspiration"></Title>
        </div>
      <div className='grid md:grid-cols-4 gap-4 bg-[#EEF3F9] md:p-4 p-2'>
        <GalleyItem></GalleyItem>
        <GalleyItem></GalleyItem>
        <GalleyItem></GalleyItem>
        <GalleyItem></GalleyItem>
        <GalleyItem></GalleyItem>
      </div>
    </section>
  )
}

export default Gallery