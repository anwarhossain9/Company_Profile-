import React from 'react'
import { FaListOl } from 'react-icons/fa'

function CoursePanelItem({title}) {
  return (
    <div className=' py-4 card border border-[#6FCF97] bg-white shadow-sm px-1  '>
       <span className='flex  justify-center items-center gap-2'>
        <FaListOl className='' /> <h1 className=' text-base'>{title}</h1>
       </span>
    </div>
  )
}

export default CoursePanelItem