import React from 'react'

function CommentItem() {
  return (
    <div className="keen-slider__slide py-2">
      <div className=" px-4 md:px-10 flex items-center">
        <div className="bg-white rounded-2xl shadow-xl overflow-hidden flex flex-col md:flex-row items-center md:items-start gap-4 p-6 hover:shadow-2xl transition-shadow duration-300">
          <div className="w-24 h-24 rounded-full overflow-hidden border-4 border-lime-500 shadow-md flex-shrink-0">
            <img
              className="w-full h-full object-cover"
              src="https://thumbs.dreamstime.com/b/child-girl-schoolgirl-elementary-school-student-123686003.jpg"
              alt={`Photo of`}
            />
          </div>
          <div className="flex-1">
            <p className="text-gray-700 text-base mb-3 text-justify leading-relaxed">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, ratione possimus ex cumque perspiciatis voluptatum, delectus velit atque autem, veniam illum? Praesentium adipisci illo cum possimus? Repudiandae aliquam commodi deleniti.
            </p>
            <h2 className="text-lg font-semibold text-lime-600">{"name"}</h2>
          </div>
        </div>
      </div>
    </div>
  )
}

export default CommentItem