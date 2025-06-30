import React from 'react'
import { FaListOl } from 'react-icons/fa'

function CoursePanelItem({title}) {
  return (
    <div className=' py-2 card bg-lime-100  shadow-sm px-1  '>
       <span className='flex  justify-center items-center gap-2'>
        <FaListOl /> <h1>{title}</h1>
       </span>
    </div>
  )
}

export default CoursePanelItem