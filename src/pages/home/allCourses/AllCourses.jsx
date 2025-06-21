import Title from '../../../components/title/Title'
import CourseItem from '../../../components/coursesItem/CourseItem'

function AllCourses() {
    return (
        <>
            <Title title="COURSES FROM ALL THE FIELDS" subtitle="Find all of Our Courses"></Title>
            <div className='grid md:grid-cols-4 gap-4'>
                <CourseItem></CourseItem>
                <CourseItem></CourseItem>
                <CourseItem></CourseItem>
                <CourseItem></CourseItem>
                <CourseItem></CourseItem>
                <CourseItem></CourseItem>
            </div>
        </>
    )
}

export default AllCourses