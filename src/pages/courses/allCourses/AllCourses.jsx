import React, { useContext } from 'react'
import Title from '../../../components/title/Title'
import CourseItem from '../../../components/coursesItem/CourseItem'
import { useParams } from 'react-router-dom'
import { AllCoursesContext } from '../../../assets/context/CourseContext'
import SectionTitle from '../../../components/section/SectionTitle'

function AllCourses() {
  const {category} = useParams()
  console.log(category)

  const courseInf = useContext(AllCoursesContext)
  const allCategories = courseInf.data
  // const allCourses = courseInf.data.filter(courses => courses.course_category_name === category)

const courseCategory = allCategories.find(cat => cat.course_category_name === category);
const allCourse = courseCategory ? courseCategory.courses : [];
console.log(allCourse);



  return (
    <section className=' pb-6'>
      <div className=' px-2 md:px-4 lg:px-8 mx-auto '>
          <Title title={category} subtitle="Find all of Our Courses"></Title>
            <div className='grid md:grid-cols-4 gap-4 bg-[#EEF3F9]  md:p-4 p-2'>
                
                {
                 (allCourse && allCourse.length > 0) ?  allCourse.map(course => <CourseItem course_name = {course.course_name} deadline = {course.deadline} duration = { course.duration} course_image = {course.course_image} current_price = {course.current_price}></CourseItem>)
                 :
                <SectionTitle title="No course found!"></SectionTitle>
                }
                
            </div>
    </div>
    </section>
  )
}

export default AllCourses