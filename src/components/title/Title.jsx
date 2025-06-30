import React from 'react'

function Title({title, subtitle}) {
  return (
    <div className='card px-4 py-10'>
        <h3 className='text-xl font-semibold'>{subtitle}</h3>
        <h1 className='text-3xl font-semibold uppercase text-[#34A249ff]'>{title}</h1>
    </div>
  )
}

export default Title