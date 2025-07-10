import React from 'react'
import { FaList } from 'react-icons/fa'

function AllCourseTitle({title}) {
  return (
   
       <div className='py-2 md:py-4  flex items-center'>
        <FaList />
         <span  className='text-2xl font-bold px-2 py-1  my-4 px-2 md:px-4 w-[50%]'>{title}</span>
 
       </div>
  )
}

export default AllCourseTitle