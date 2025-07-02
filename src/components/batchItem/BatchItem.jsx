import React from 'react'
import { LiaCertificateSolid } from "react-icons/lia";
import useBatchLoader from '../../hooks/useBatchLoader';
import { FaEyeLowVision } from 'react-icons/fa6';
import { GrFormView } from 'react-icons/gr';
function BatchItem({ title, count }) {




    return (
        <div className='card  w-full bg-[#6FCF97] card-xs shadow-sm transition-transform duration-300 hover:scale-105 my-2'>

            <div className='mx-auto py-3'>
                <div className='flex flex-col sm:flex-row items-center justify-center sm:space-x-4'>
                    {/* <GrFormView className='text-5xl sm:text-4xl text-white' /> */}
                    <span className='text-center text-4xl sm:text-3xl font-semibold'>{count}+</span>
                </div>
                <div>
                    <h5 className='text-center text-2xl sm:text-xl text-white'>{title}</h5>
                </div>
            </div>


        </div>
    )
}

export default BatchItem