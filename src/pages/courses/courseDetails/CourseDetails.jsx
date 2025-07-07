import { FaList, FaUserClock } from "react-icons/fa"
import { GiVikingLonghouse } from "react-icons/gi"
import { IoMdClock } from "react-icons/io"
import { MdGroups, MdOutlineMail } from "react-icons/md"
import { SlCalender } from "react-icons/sl"
import { Link, useParams } from "react-router-dom"
import parse from 'html-react-parser';
import { useContext } from "react"
import { AllCoursesContext } from "../../../assets/context/CourseContext"
import StudentReview from "../../../components/review/StudentReview"
import { CiFacebook } from "react-icons/ci"
import { TiSocialLinkedinCircular, TiSocialTwitterCircular } from "react-icons/ti"

function CourseDetails() {


    const { details } = useParams()


    const courseInf = useContext(AllCoursesContext)
    const allCategories = courseInf.data
    const allCourse = allCategories.flatMap(category => category.courses)
    const course = allCourse.find(course => course.course_name === details)
    console.log(course)
    return (
        <div className="py-4  px-2 md:px-4 lg:px-8 mx-auto " >
            {/* title and short description */}
            <div>
                <h1 className="text-2xl  bg-[#6FCF97] text-white px-2 py-1 text-bold mb-4">{course.course_name}</h1>
                <p className="text-justify">{
                    parse(course.short_description)
                }
                </p>
            </div>
            {/* short info */}
            <div className="grid md:grid-cols-2 gap-6 items-center py-6">
                {/* Left: Info Cards */}
                <div className="space-y-4 order-2 md:order-1">
                    {/* Stats */}
                    <div className="grid md:grid-cols-3 gap-3">
                        <div className="card px-2 bg-[#6FCF97] text-white px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                <FaList /> Total Class: {course.total_class}
                            </span>
                        </div>
                        <div className="card px-2 bg-[#6FCF97] text-white px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                <IoMdClock /> Total Hours: {course.total_hours}
                            </span>
                        </div>
                        <div className="card px-2 bg-[#6FCF97] text-white px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                <MdGroups /> Available Seats: {course.available_seat}
                            </span>
                        </div>
                    </div>

                    {/* Schedule Info */}
                    <div className="grid md:grid-cols-3 gap-3">
                        <div className="card  bg-[#F9FAFB] text-[#333333] px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                <FaUserClock /> Class Starts: {course.deadline}
                            </span>
                        </div>
                        <div className="card  bg-[#F9FAFB] text-[#333333] px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                <SlCalender /> Schedule: {course.schedule}
                            </span>
                        </div>
                        <div className="card  bg-[#F9FAFB] text-[#333333] px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                <GiVikingLonghouse /> Venue: {course.venue}
                            </span>
                        </div>
                    </div>

                    {/* Course Fee and Button */}
                    <div className="flex flex-col sm:flex-row justify-between items-center bg-[#F9FAFB] text-[#333333] px-4 py-3 rounded-xl shadow-md">
                        <h1 className="text-lg  text-[#333333] mb-2 sm:mb-0">Regular Fee: TK. <del> {course.previous_price}</del></h1>
                        <h1 className="text-lg  text-[#333333] mb-2 sm:mb-0">Discount Fee: TK. {course.current_price}</h1>
                        <button className="btn bg-[#6FCF97] text-white hover:bg-[#57B87A] w-full sm:w-auto">Enroll Now</button>
                    </div>
                </div>

                {/* Right: Image */}
                <div className="order-1 md:order-2">
                    <img
                        className="w-full rounded-xl shadow-md"
                        src={course.course_image}
                        alt="Course Preview"
                    />
                </div>
            </div>
            {/* Details */}

            <div className="grid md:grid-cols-3 gap-6 py-6">
                {/* Left Section: Course Details */}
                <div className="md:col-span-2 space-y-4">
                    <h1 className="text-2xl font-bold px-2  bg-[#6FCF97] text-white">Course Details</h1>
                    <p className="text-justify text-gray-700 leading-relaxed">{parse(course.long_description)}
                    </p>
                </div>

                {/* Right Section: Sidebar */}
                <div className="space-y-6">
                    {/* Instructors */}
                    <div>
                        <h1 className="text-2xl font-bold px-2  bg-[#6FCF97] text-white mb-3">Instructors</h1>

                        <div onClick={() => document.getElementById('my_modal_3').showModal()}>
                            <div className="flex items-center gap-4 p-4 bg-base-100 rounded-lg shadow-md hover:shadow-xl hover:scale-105 transition duration-300 ease-in-out cursor-pointer">
                                <img
                                    className="w-[100px] h-[100px] object-cover rounded-full border-4 border-lime-500"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzcf_aWeQarKFcmfAVyKrZ3pDz94_m_8qTZw&s"
                                    alt="Instructor"
                                />
                                <div>
                                    <h1 className="text-lg font-bold text-gray-800">{course.instructor_name}</h1>
                                    <p className="text-sm text-gray-600">{course.instructor_designation}</p>
                                </div>
                            </div>
                        </div>

                        {/* Modal */}
                        <dialog id="my_modal_3" className="modal">
                            <div className="modal-box">
                                <form method="dialog">
                                    <button className="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </form>
                                <div>
                                    <h3 className="font-bold text-lg px-2  bg-[#6FCF97] text-white">{course.instructor_name}</h3>
                                    <p className="py-4 text-justify text-gray-700">
                                        {
                                            course.instructor_designation
                                        }

                                    </p>
                                    <p className="py-4 text-justify text-gray-700">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, dolorem?
                                    </p>
                                    <div className="md:col-span-1 w-full">

                                        <div>
                                            <img className="w-[80px] card shadow-sm" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk5pempmAZwoM_R2cnyMh4UxYqu9S2aqnHRQ&s" alt="" />

                                            <div className="flex gap-1 mt-1 w-full">
                                                <Link target="_blank" to={course.instructor_email_link} ><MdOutlineMail className="text-[26px] md:text-[30px] hover:text-[#6FCF97]" /></Link>
                                                <Link target="_blank" to={course.instructor_facebook_link} ><CiFacebook className="text-[26px] md:text-[30px] hover:text-[#6FCF97]" /></Link>
                                                <Link target="_blank" to={course.instructor_linkdin_link} ><TiSocialLinkedinCircular className="text-[26px] md:text-[30px] hover:text-[#6FCF97]" /></Link>
                                                <Link target="_blank" to={course.instructor_twiter_link}><TiSocialTwitterCircular className="text-[26px] md:text-[30px] hover:text-[#6FCF97]" /></Link>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </dialog>
                    </div>

                    {/* Who Can Join */}
                    <div>
                        <h1 className="text-2xl font-bold px-2  bg-[#6FCF97] text-white mb-3">Who Can Join?</h1>
                        <p className="text-justify text-gray-700 leading-relaxed">
                            {course.eligibility}
                        </p>
                    </div>
                </div>
            </div>

            <div className="py-6">
                <StudentReview></StudentReview>
            </div>
            {/* Student comment */}




        </div>


    )
}

export default CourseDetails