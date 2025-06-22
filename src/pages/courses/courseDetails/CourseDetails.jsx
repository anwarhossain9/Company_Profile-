import { FaList, FaUserClock } from "react-icons/fa"
import { GiVikingLonghouse } from "react-icons/gi"
import { IoMdClock } from "react-icons/io"
import { MdGroups } from "react-icons/md"
import { SlCalender } from "react-icons/sl"
import Comment from "../../home/comment/Comment"

function CourseDetails() {
    return (
        <div className="py-4">
            {/* title and short description */}
            <div>
                <h1 className="text-2xl font-bold">Web Design & Development</h1>
                <p className="text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia error consequuntur aut, explicabo veritatis inventore veniam provident. Adipisci, repellat non doloribus maxime eligendi iste fugit voluptas similique, quidem rerum minima.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas tempore laboriosam corrupti quaerat. Repellat similique sapiente eligendi tempora quis quidem, qui totam at ducimus. Laborum magni odit nihil aperiam!
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
                                <FaList /> Total Class: 72
                            </span>
                        </div>
                        <div className="card bg-lime-600 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                <IoMdClock /> Total Hours: 72
                            </span>
                        </div>
                        <div className="card bg-lime-600 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-white font-semibold">
                                <MdGroups /> Available Seats: 72
                            </span>
                        </div>
                    </div>

                    {/* Schedule Info */}
                    <div className="grid md:grid-cols-3 gap-3">
                        <div className="card border border-red-700 bg-blue-200 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                <FaUserClock /> Class Starts: 5 July
                            </span>
                        </div>
                        <div className="card border border-red-700 bg-blue-200 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                <SlCalender /> Schedule: Sun, Tue, Thu
                            </span>
                        </div>
                        <div className="card border border-red-700 bg-blue-200 px-2 py-5 shadow-md hover:shadow-lg transition">
                            <span className="flex gap-2 items-center justify-center text-gray-500 font-semibold">
                                <GiVikingLonghouse /> Venue: DCIT Campus
                            </span>
                        </div>
                    </div>

                    {/* Course Fee and Button */}
                    <div className="flex flex-col sm:flex-row justify-between items-center bg-base-200 px-4 py-3 rounded-xl shadow-md">
                        <h1 className="text-lg font-semibold text-gray-800 mb-2 sm:mb-0">Course Fee: TK. 42,900</h1>
                        <button className="btn btn-info w-full sm:w-auto">Enroll Now</button>
                    </div>
                </div>

                {/* Right: Image */}
                <div className="order-1 md:order-2">
                    <img
                        className="w-full rounded-xl shadow-md"
                        src="https://img.freepik.com/free-photo/ui-ux-representations-with-laptop_23-2150201871.jpg?semt=ais_hybrid&w=740"
                        alt="Course Preview"
                    />
                </div>
            </div>
            {/* Details */}

            <div className="grid md:grid-cols-3 gap-6 py-6">
                {/* Left Section: Course Details */}
                <div className="md:col-span-2 space-y-4">
                    <h1 className="text-2xl font-bold text-lime-600">Course Details</h1>
                    <p className="text-justify text-gray-700 leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab pariatur minima ea veritatis natus quae voluptate qui doloremque...
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
                                    <h1 className="text-lg font-bold text-gray-800">Md. Anwar Hossain</h1>
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
                            Anyone with at least a Bachelor’s degree from a UGC-approved university in any discipline. No prior Photoshop or Illustrator experience required. This course is ideal for aspiring designers in graphics, web, or motion design.
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