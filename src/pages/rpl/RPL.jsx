import CourseItem from '../../components/coursesItem/CourseItem'
import Title from '../../components/title/Title'
import useRPLLoaderData from '../../hooks/useRPLLoaderData'
import RplCourseItem from './shared/RplCourseItem';

function RPL() {

  const [rplData, loader] = useRPLLoaderData();

  if (loader) {
    return <div className='text-center'> <span className="loading loading-spinner text-success mx-auto"></span></div>
  }

  // course_image,course_name,deadline, duration, current_price

  console.log(rplData)
  return (
    <section className=' pb-6 '>


      <div className='px-4 '>
        <Title title="Recognition of Prior Learning (RPL)" subtitle="Your Skills, Your Future — Recognized Today!"></Title>
        <div className='grid md:grid-cols-4 gap-4 bg-[#EEF3F9] md:p-4 p-2 '>

          {
            rplData.map(rpl =>
              <RplCourseItem
                key={rpl.rpl_subject_name}   // ✅ add key
                course_image={rpl.rpl_image}
                course_name={rpl.rpl_subject_name}
                deadline={rpl.deadline}
                duration={rpl.duration}
                current_price={rpl.current_price}
              />
            )

          }




        </div>
      </div>
    </section>
  )
}

export default RPL