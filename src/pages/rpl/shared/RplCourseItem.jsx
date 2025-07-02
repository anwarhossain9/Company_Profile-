import React from 'react'
import { GiAlarmClock } from 'react-icons/gi'
import { LuCalendarDays } from 'react-icons/lu'
import { NavLink, useParams } from 'react-router-dom'

function RplCourseItem({course_image,course_name,deadline, duration, current_price}) {
     
    const{title} = useParams()
 return(
    <NavLink to={`/rpl/${course_name}`} >
          <div className="card bg-base-100 w-full shadow-sm bg-base-100 card-xs shadow-sm hover:border hover:border-[#57B87A] transition-transform duration-300 hover:scale-105">
            <figure>
                <img className='w-full'
                    src={course_image}
                    alt="Web design and Development" />
            </figure>
            <div className="card-body">
                <h2 className="card-title">
                   {course_name}
                </h2>
                <div>
                    <p className="flex items-center gap-1 text-xl">
                        <LuCalendarDays className="text-xl" /> Deadline: {deadline}
                    </p>
                    <p className="flex items-center gap-1 text-xl">
                        <GiAlarmClock className="text-xl" /> Duration: {duration}
                    </p>

                </div>
                <div className="flex justify-between bg-green-50 items-center">
                    <div className="">
                        <p className='p-2 text-xl'>TK. {current_price}</p>
                    </div>
                    <div className="btn bg-[#6FCF97] text-white">Enroll Now</div>
                </div>
            </div>
        </div>
      </NavLink>
 )
}

export default RplCourseItem