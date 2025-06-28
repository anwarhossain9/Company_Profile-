import React from 'react'
import { FaBullseye, FaEye } from 'react-icons/fa'
import { TbTargetArrow } from 'react-icons/tb'

function MissionVission({ purpose, goal }) {
    return (
        <div className='grid md:grid-cols-2 gap-6 md:space-x-10 px-2 items-center justify-center card shadow-sm py-5 '>

            <div className=' mx-auto md:px-4'>
                <span className='flex text-2xl font-bold items-center gap-4 justify-center my-2'><FaEye className=' text-3xl font-bold text-green-600' />Our Mission</span>
                <p className='text-justify'>
                    {
                        purpose
                    }
                </p>
            </div>

            <div className=' mx-auto md:px-4'>
                <span className='flex text-2xl font-bold items-center gap-4 justify-center my-2'><TbTargetArrow className=' text-3xl font-bold text-red-600' />Our Vission</span>
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