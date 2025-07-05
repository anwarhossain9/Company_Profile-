import { GiAlarmClock } from "react-icons/gi";
import { LuCalendarDays } from "react-icons/lu";
import { NavLink, useParams } from "react-router-dom";
import { Link } from "react-scroll";
function CourseItem({course_image,course_name,deadline, duration, current_price}) {
    
    const{category} = useParams()


    return (
      <NavLink to={`/${category || 'courses'}/${course_name}`} >
          <div className="card flex flex-col h-full bg-white shadow rounded-lg bg-base-100 hover:border hover:border-[#57B87A] w-full shadow-sm bg-base-100 card-xs shadow-sm transition-transform duration-300 hover:scale-105 p-1">
            <figure>
                <img className='w-full'
                    src={course_image}
                    alt="Web design and Development" />
            </figure>
            <div className="flex flex-col h-full justify-between">
                <h2 className="text-[20px]">
                   {course_name}
                </h2>
                <div>
                    <p className="flex items-center gap-1 text-base">
                        <LuCalendarDays className="text-base" /> Deadline: {deadline}
                    </p>
                    <p className="flex items-center gap-1 text-base">
                        <GiAlarmClock className="text-base" /> Duration: {duration}
                    </p>

                </div>
                <div className="flex justify-between bg-green-50 items-center">
                    <div className="">
                        <p className='p-2 text-base'>TK. {current_price}</p>
                    </div>
                    <div className="btn bg-[#6FCF97] hover:bg-[#57B87A] text-white">Enroll Now</div>
                </div>
            </div>
        </div>
      </NavLink>
    )
}

export default CourseItem