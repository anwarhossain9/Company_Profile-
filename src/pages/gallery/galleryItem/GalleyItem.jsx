import React from 'react'
import { Link } from 'react-router-dom'

function GalleyItem({gallery_category_image,gallery_category_name}) {

    

    return (
      <Link to={"/gallery-details"}>
          <div className="card bg-base-100 w-full shadow-md rounded-2xl overflow-hidden hover:shadow-xl hover:scale-105 transition-all duration-300 border border-transparent hover:border-[#57B87A]">
            <div
                className="relative hero min-h-[250px] md:min-h-[300px] lg:min-h-[350px]"
                style={{
                    backgroundImage: `url(${gallery_category_image})`,
                    backgroundSize: "cover",
                    backgroundPosition: "center",
                }}
            >
                {/* Gradient Overlay */}
                <div className="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent"></div>

                <div className="relative hero-content flex flex-col items-center justify-end text-center text-white p-4">
                    <h1 className="mb-3 text-2xl md:text-3xl lg:text-4xl font-extrabold drop-shadow">
                       {gallery_category_name}
                    </h1>

                    {/* Badge or Label */}
                    <div className="mb-2 px-3 py-1 bg-[#57B87A]/90 rounded-full text-xs md:text-sm font-medium shadow-inner">
                        Featured Event
                    </div>

                    {/* Bottom Info */}
                    <div className="bg-black/50 px-3 py-2 rounded-md shadow-md w-full max-w-[85%] mt-2">
                        <h2 className="text-center text-sm md:text-lg font-semibold">
                           Number of images
                        </h2>
                    </div>
                </div>
            </div>
        </div>
      </Link>

    )
}

export default GalleyItem