import React from 'react'
import { Rating } from '@smastrom/react-rating'

import '@smastrom/react-rating/style.css'

function ReviewItem({name ,review, image,rate}) {
    return (
        <div className="keen-slider__slide py-2">
            <div className="flex items-center">
                <div className="bg-white border-2 border-[#6FCF97] rounded-2xl  overflow-hidden flex flex-col md:flex-row items-center md:items-start gap-4 p-6 hover:shadow-2xl hover:rounded-2xl transition-shadow duration-300">
                    <div className="w-24 h-24 rounded-full overflow-hidden border-4 border-lime-500 shadow-md flex-shrink-0">
                        <img
                            className="w-full h-full object-cover"
                            src={image}
                            alt={name}
                        />
                    </div>
                    <div className="flex-1">
                        <Rating
                            style={{ maxWidth: 180 }}
                            value={rate}
                            readOnly
                        />
                        <p className="text-gray-700 text-base mb-3 text-justify leading-relaxed">
                            {review}
                        </p>
                        <h2 className="text-lg font-semibold text-lime-600">{name}</h2>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default ReviewItem