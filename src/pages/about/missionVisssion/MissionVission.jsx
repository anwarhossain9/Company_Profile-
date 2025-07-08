import React from 'react'
import { FaBullseye, FaEye } from 'react-icons/fa'
import { TbTargetArrow } from 'react-icons/tb'

function MissionVission({ purpose, goal }) {
    return (
        <div className='grid md:grid-cols-2 gap-6 md:space-x-10  items-center justify-center card shadow-sm py-5 '>

            <div className='pb-2 px-2 md:px-4 lg:px-8 mx-auto'>
                <span className='flex text-2xl  items-center gap-4 justify-center my-2 '><FaEye className=' text-3xl font-semibold text-green-500' />Our Mission</span>
                <p className='text-justify'>
                    {
                        purpose
                    }
                </p>
            </div>

            <div className='pb-2 px-2 md:px-4 lg:px-8 mx-auto '>
                <span className='flex text-2xl items-center gap-4 justify-center my-2'><TbTargetArrow className=' text-3xl text-red-600' />Our Vission</span>
                <p className='text-justify'>
                    {
                        goal
                    }
                </p>
            </div>
        </div>
    )
}

export default MissionVission