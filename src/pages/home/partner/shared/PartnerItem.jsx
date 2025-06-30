import React from 'react'

function PartnerItem({partner_image}) {
    return (
        <div>
            <img className='w-full p-2 mx-auto' src={partner_image} alt="" />
        </div>
    )
}

export default PartnerItem