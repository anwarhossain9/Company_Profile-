import React from 'react'
import { FaListOl } from 'react-icons/fa'

function CoursePanelItem({title}) {
  return (
    <div className=' py-2 card bg-[#6FCF97]  shadow-sm px-1  '>
       <span className='flex  justify-center items-center gap-2'>
        <FaListOl className='text-white text-lg' /> <h1 className='text-white text-base'>{title}</h1>
       </span>
    </div>
  )
}

export default CoursePanelItem