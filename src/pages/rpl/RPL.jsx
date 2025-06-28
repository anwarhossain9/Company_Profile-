import CourseItem from '../../components/coursesItem/CourseItem'
import Title from '../../components/title/Title'
import useRPLLoaderData from '../../hooks/useRPLLoaderData'

function RPL() {

  const [rplData, loader] = useRPLLoaderData();

  if (loader) {
    return <div className='text-center'> <span className="loading loading-spinner text-success mx-auto"></span></div>
  }
 
  console.log(rplData)
  return (
    <>
      <Title title="Recognition of Prior Learning (RPL)" subtitle="Your Skills, Your Future — Recognized Today!"></Title>
      <div className='grid md:grid-cols-4 gap-4 py-5'>
        <CourseItem></CourseItem>
        {/* <CourseItem></CourseItem>
      <CourseItem></CourseItem>
      <CourseItem></CourseItem>
      <CourseItem></CourseItem> */}


      </div>
    </>
  )
}

export default RPL