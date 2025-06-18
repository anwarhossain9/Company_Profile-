import { GiAlarmClock } from "react-icons/gi";
import { LuCalendarDays } from "react-icons/lu";
function CourseItem() {
    return (
        <div className="card bg-base-100 w-full shadow-sm">
            <figure>
                <img className='w-full'
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVJ0GrRdlLFv0IGj3kJDpFxFJ-Z94dzJHUCw&s"
                    alt="Web design and Development" />
            </figure>
            <div className="card-body">
                <h2 className="card-title">
                    Web Design and Development
                </h2>
                <div>
                    <p className="flex items-center gap-1 text-xl">
                        <LuCalendarDays className="text-xl" /> Start: 10-jan-25
                    </p>
                    <p className="flex items-center gap-1 text-xl">
                        <GiAlarmClock className="text-xl" /> Duration: 360h
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
    )
}

export default CourseItem