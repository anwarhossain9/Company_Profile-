import { GiAlarmClock } from "react-icons/gi";
import { LuCalendarDays } from "react-icons/lu";
import { NavLink } from "react-router-dom";
import { Link } from "react-scroll";
function CourseItem({course_name, course_image, deadline,duration, total_hours,available_seat,schedule,venue,instructor_name,total_class,previous_price,current_price, eligibility, short_description,long_description}) {
    const courseDetails = {
        course_name, course_image, deadline, duration, total_hours,available_seat,schedule, venue,previous_price,instructor_name,total_class,previous_price,current_price, eligibility, short_description,long_description
    }
    return (
      <NavLink to="courseDetails" state={{courseDetails}}>
          <div className="card bg-base-100 w-full shadow-sm bg-base-100 card-xs shadow-sm transition-transform duration-300 hover:scale-105">
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
                        <p className='p-2 text-xl'>TK.50000</p>
                    </div>
                    <div className="btn btn-info">Enroll Now</div>
                </div>
            </div>
        </div>
      </NavLink>
    )
}

export default CourseItem