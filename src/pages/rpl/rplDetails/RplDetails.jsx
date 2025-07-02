import React from 'react'
import useRPLLoaderData from '../../../hooks/useRPLLoaderData';
import { useParams } from 'react-router-dom';
import { FaList, FaUserClock } from 'react-icons/fa';
import { IoMdClock } from 'react-icons/io';
import { MdGroups } from 'react-icons/md';
import { SlCalender } from 'react-icons/sl';
import { GiVikingLonghouse } from 'react-icons/gi';
import parse from 'html-react-parser';

function RplDetails() {

    const { details } = useParams()



    const [rplData, loader] = useRPLLoaderData();
    const course = rplData.find(course => course.course_name === details)

    if (loader) {
        return <div className='text-center'> <span className="loading loading-spinner text-success mx-auto"></span></div>
    }


    return (
        <section className=''>


            <div className="py-4 px-2 md:px-4 lg:px-8 mx-auto">
                {/* title and short description */}
                <div>
                    <h1 className="text-2xl   text-white px-2 py-1 bg-[#6FCF97] text-bold">{course.rpl_subject_name}</h1>
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
                            <div className="card px-2  bg-[#6FCF97] text-white px-2 py-5 shadow-md hover:shadow-lg transition">
                                <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                    <FaList /> Total Class: {course.total_class}
                                </span>
                            </div>
                            <div className="card px-2  bg-[#6FCF97] text-white px-2 py-5 shadow-md hover:shadow-lg transition">
                                <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                    <IoMdClock /> Total Hours: {course.total_hours}
                                </span>
                            </div>
                            <div className="card px-2  bg-[#6FCF97] text-white px-2 py-5 shadow-md hover:shadow-lg transition">
                                <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                    <MdGroups /> Available Seats: {course.available_seat}
                                </span>
                            </div>
                        </div>

                        {/* Schedule Info */}
                        <div className="grid md:grid-cols-3 gap-3">
                            <div className="card  bg-[#F9FAFB] text-[#333333]bg-blue-200 px-2 py-5 shadow-md hover:shadow-lg transition">
                                <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                    <FaUserClock /> Class Starts: {course.deadline}
                                </span>
                            </div>
                            <div className="card  bg-[#F9FAFB] text-[#333333]bg-blue-200 px-2 py-5 shadow-md hover:shadow-lg transition">
                                <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                    <SlCalender /> Schedule: {course.schedule}
                                </span>
                            </div>
                            <div className="card  bg-[#F9FAFB] text-[#333333]bg-blue-200 px-2 py-5 shadow-md hover:shadow-lg transition">
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
                            src={course.rpl_image}
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
                                    <h3 className="font-bold text-lg px-2  bg-[#6FCF97] text-white">{course.instructor_name}</h3>
                                    <p className="py-4 text-justify text-gray-700">
                                        Md. Anwar Hossain is an experienced instructor with a strong background in graphics and web design...
                                    </p>
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
                {/* comment */}
                {/* <Comment></Comment> */}



            </div>
        </section>

    )
}

export default RplDetails