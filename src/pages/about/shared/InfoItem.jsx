import React from 'react'

function InfoItem({ description, img, orderOne, orderTwo,bgColor }) {
    return (
        <div className={`flex flex-col md:flex-row gap-6 md:space-x-10  items-center justify-center  ${bgColor}`}>

            <div className={`flex md:w-1/2  items-center justify-center md:px-4 ${orderTwo}`}>
                <img className='w-full rounded' src={img} alt="" />
            </div>
            <div className={`flex md:w-1/2 mx-auto md:px-4 ${orderOne}`}>
                <p className='text-justify text-base'>{description}</p>
            </div>


        </div>
    )
}

export default InfoItem