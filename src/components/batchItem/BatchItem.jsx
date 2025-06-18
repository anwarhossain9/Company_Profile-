import React from 'react'
import { LiaCertificateSolid } from "react-icons/lia";
function BatchItem() {
    return (
        <div className='card w-full bg-base-100 card-xs shadow-sm transition-transform duration-300 hover:scale-105'>
            <div className='flex gap-2 py-5 px-2'>
                <div className='flex items-center justify-items-center'>
                    <LiaCertificateSolid className='mx-auto text-5xl text-yellow-500' />
                </div>
                <div>
                    <h2 className='text-center text-3xl'>1000</h2>
                    <h5 className='text-center text-xl text-lime-500'>Completed Batches</h5>
                </div>
            </div>
        </div>
    )
}

export default BatchItem