import React from 'react'
import useAboutLoaderData from '../../../hooks/useAboutLoaderData'

function ManagementMessage({ceo_name,ceo_image, ceo_word, director_image, director_name,director_word}) {
  const [about, loader] = useAboutLoaderData();

  if (loader) {
    return <p>Data is loading...</p>
  }

  return (
    <div className="grid md:grid-cols-2 gap-6 md:space-x-10  items-center justify-center   ">
      {/* Card 1 */}
      <div className='pb-2 px-2 md:px-4 lg:px-8 mx-auto'>
        <div className="flex flex-col sm:flex-row items-start sm:items-end gap-4 mb-4">
          <img className="w-32 sm:w-[150px] rounded" src={ceo_image} alt={ceo_name} />
          <div>
            <h1 className="text-lg sm:text-xl md:text-2xl text-[#333333]">{ceo_name}</h1>
            <h2 className="text-base sm:text-lg">CEO</h2>
          </div>
        </div>
        <p className="text-justify text-sm md:text-base">
          {ceo_word}
        </p>
      </div>

      {/* Card 2 */}
      <div className='pb-2 px-2 md:px-4 lg:px-8 mx-auto'>
        <div className="flex flex-col sm:flex-row items-start sm:items-end gap-4 mb-4">
          <img className="w-32 sm:w-[150px] rounded" src={director_image} alt={director_name} />
          <div>
            <h1 className="text-lg sm:text-xl md:text-2xl text-[#333333]">{director_name}</h1>
            <h2 className="text-base sm:text-lg">Director</h2>
          </div>
        </div>
        <p className="text-justify text-sm md:text-base">
          {about[0].director_word}
        </p>
      </div>
    </div>

  )
}

export default ManagementMessage