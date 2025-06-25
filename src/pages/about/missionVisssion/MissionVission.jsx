import React from 'react'
import { FaBullseye, FaEye } from 'react-icons/fa'
import { PiTarget } from 'react-icons/pi'
import { TbTargetArrow } from 'react-icons/tb'

function MissionVission() {
    return (
        <div className='grid md:grid-cols-2 gap-6 md:space-x-10 px-2 items-center justify-center card shadow-sm'>

            <div className=' mx-auto md:px-4'>
                <span className='flex text-2xl font-bold items-center gap-4 justify-center my-2'><FaEye className=' text-3xl font-bold text-green-600' />Our Mission</span>
                <p className='text-justify'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sed in ipsa reiciendis explicabo dolores aut vel maiores officia iusto, nulla quas ducimus sapiente ut obcaecati modi hic error ipsum esse voluptatibus sint! Eligendi dolorum id quasi perferendis eveniet voluptatum repudiandae, est eos porro earum. Dolorem adipisci esse eaque sint perspiciatis nobis saepe ducimus odit iusto quibusdam voluptatum laboriosam molestias asperiores, temporibus cumque autem sit dolores quo sunt optio at unde? Vitae sit praesentium earum ullam rerum veniam et asperiores reiciendis corporis suscipit, nemo quasi nesciunt eaque accusantium quia quos, facilis sint? Cupiditate temporibus similique iusto nobis ut maxime ab.
                </p>
            </div>

            <div className=' mx-auto md:px-4'>
                <span className='flex text-2xl font-bold items-center gap-4 justify-center my-2'><TbTargetArrow className=' text-3xl font-bold text-red-600' />Our Vission</span>
                <p className='text-justify'>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sed in ipsa reiciendis explicabo dolores aut vel maiores officia iusto, nulla quas ducimus sapiente ut obcaecati modi hic error ipsum esse voluptatibus sint! Eligendi dolorum id quasi perferendis eveniet voluptatum repudiandae, est eos porro earum. Dolorem adipisci esse eaque sint perspiciatis nobis saepe ducimus odit iusto quibusdam voluptatum laboriosam molestias asperiores, temporibus cumque autem sit dolores quo sunt optio at unde? Vitae sit praesentium earum ullam rerum veniam et asperiores reiciendis corporis suscipit, nemo quasi nesciunt eaque accusantium quia quos, facilis sint? Cupiditate temporibus similique iusto nobis ut maxime ab.
                </p>
            </div>
        </div>
    )
}

export default MissionVission