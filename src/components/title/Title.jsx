import React from 'react'

function Title({ title, subtitle }) {
  return (
    <section>
      <div className='card px-4 py-10 mx-auto'>
        <h3 className='text-xl text-[#333333] '>{subtitle}</h3>
        <h1 className='text-3xl font-semibold uppercase text-[#0056D2]'>{title}</h1>
      </div>
    </section>
  )
}

export default Title