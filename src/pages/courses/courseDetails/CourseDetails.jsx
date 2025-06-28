import { FaList, FaUserClock } from "react-icons/fa"
import { GiVikingLonghouse } from "react-icons/gi"
import { IoMdClock } from "react-icons/io"
import { MdGroups } from "react-icons/md"
import { SlCalender } from "react-icons/sl"
import Comment from "../../home/comment/Comment"
import { useLocation } from "react-router-dom"
import parse from 'html-react-parser';

function CourseDetails() {

    const location = useLocation()
   const { course_name, course_image, deadline, duration, total_hours,total_class,available_seat,schedule, venue,instructor_name,previous_price,current_price, eligibility, short_description, long_description} = location.state.courseDetails

    return (
        <div className="py-4">
            {/* title and short description */}
            <div>
                <h1 className="text-2xl font-bold">{course_name}</h1>
                <p className="text-justify">{
                    parse(short_description)
                    }
                </p>
            </div>
            {/* short info */}
            <div className="grid md:grid-cols-2 gap-6 items-center py-6">
                {/* Left: Info Cards */}
                <div className="space-y-4 order-2 md:order-1">
                    {/* Stats */}
                    <div className="grid md:grid-cols-3 gap-3">
                        <div className="card bg-lime-600 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                <FaList /> Total Class: {total_class}
                            </span>
                        </div>
                        <div className="card bg-lime-600 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                <IoMdClock /> Total Hours: {total_hours}
                            </span>
                        </div>
                        <div className="card bg-lime-600 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                <MdGroups /> Available Seats: {available_seat}
                            </span>
                        </div>
                    </div>

                    {/* Schedule Info */}
                    <div className="grid md:grid-cols-3 gap-3">
                        <div className="card border border-red-700 bg-blue-200 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                <FaUserClock /> Class Starts: {deadline}
                            </span>
                        </div>
                        <div className="card border border-red-700 bg-blue-200 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                <SlCalender /> Schedule: {schedule}
                            </span>
                        </div>
                        <div className="card border border-red-700 bg-blue-200 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                <GiVikingLonghouse /> Venue: {venue}
                            </span>
                        </div>
                    </div>

                    {/* Course Fee and Button */}
                    <div className="flex flex-col sm:flex-row justify-between items-center bg-base-200 px-4 py-3 rounded-xl shadow-md">
                        <h1 className="text-lg font-semibold text-gray-800 mb-2 sm:mb-0">Regular Fee: TK. <del> {previous_price}</del></h1>
                        <h1 className="text-lg font-semibold text-gray-800 mb-2 sm:mb-0">Discount Fee: TK. {current_price}</h1>
                        <button className="btn btn-info w-full sm:w-auto">Enroll Now</button>
                    </div>
                </div>

                {/* Right: Image */}
                <div className="order-1 md:order-2">
                    <img
                        className="w-full rounded-xl shadow-md"
                        src={course_image}
                        alt="Course Preview"
                    />
                </div>
            </div>
            {/* Details */}

            <div className="grid md:grid-cols-3 gap-6 py-6">
                {/* Left Section: Course Details */}
                <div className="md:col-span-2 space-y-4">
                    <h1 className="text-2xl font-bold text-lime-600">Course Details</h1>
                    <p className="text-justify text-gray-700 leading-relaxed">{parse(long_description)}
                    </p>
                </div>

                {/* Right Section: Sidebar */}
                <div className="space-y-6">
                    {/* Instructors */}
                    <div>
                        <h1 className="text-2xl font-bold text-lime-600 mb-3">Instructors</h1>

                        <div onClick={() => document.getElementById('my_modal_3').showModal()}>
                            <div className="flex items-center gap-4 p-4 bg-base-100 rounded-lg shadow-md hover:shadow-xl hover:scale-105 transition duration-300 ease-in-out cursor-pointer">
                                <img
                                    className="w-[100px] h-[100px] object-cover rounded-full border-4 border-lime-500"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzcf_aWeQarKFcmfAVyKrZ3pDz94_m_8qTZw&s"
                                    alt="Instructor"
                                />
                                <div>
                                    <h1 className="text-lg font-bold text-gray-800">{instructor_name}</h1>
                                    <p className="text-sm text-gray-600">Senior Instructor</p>
                                </div>
                            </div>
                        </div>

                        {/* Modal */}
                        <dialog id="my_modal_3" className="modal">
                            <div className="modal-box">
                                <form method="dialog">
                                    <button className="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </form>
                                <h3 className="font-bold text-lg text-lime-600">Md. Anwar Hossain</h3>
                                <p className="py-4 text-justify text-gray-700">
                                    Md. Anwar Hossain is an experienced instructor with a strong background in graphics and web design...
                                </p>
                            </div>
                        </dialog>
                    </div>

                    {/* Who Can Join */}
                    <div>
                        <h1 className="text-2xl font-bold text-lime-600 mb-3">Who Can Join?</h1>
                        <p className="text-justify text-gray-700 leading-relaxed">
                          {eligibility}
                        </p>
                    </div>
                </div>
            </div>
            {/* comment */}
            <Comment></Comment>

            

        </div>
    )
}

export default CourseDetails