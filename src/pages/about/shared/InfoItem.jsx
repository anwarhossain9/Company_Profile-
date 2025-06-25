import React from 'react'

function InfoItem({ description, img, orderOne, orderTwo }) {
    return (
        <div className='flex flex-col md:flex-row gap-6 md:space-x-10 px-2 items-center justify-center'>

            <div className={`flex md:w-1/2  items-center justify-center md:px-4 ${orderTwo}`}>
                <img className='w-full rounded' src={img} alt="" />
            </div>
            <div className={`flex md:w-1/2 mx-auto md:px-4 ${orderOne}`}>
                <p className='text-justify'>{description}</p>
            </div>


        </div>
    )
}

export default InfoItem