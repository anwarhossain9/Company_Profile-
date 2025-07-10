
import useRegularDataLoader from '../../../hooks/useRegularDataLoader';
import Title from '../../../components/title/Title';
import CourseItem from '../../../components/coursesItem/CourseItem';
import SectionTitle from '../../../components/section/SectionTitle';
import NoCourse from '../../../components/noCourese/NoCourse';
import AllCourseTitle from '../../../components/allCourseTitle/allCourseTitle';

function AllRegularCourses() {
  const [regularCourses, loader] = useRegularDataLoader();

  if (loader) {
    return <>Loading...</>;
  }

  const { data } = regularCourses || {};
  const categories = data || [];

  return (
    <section className='pb-6'>
      <Title title="Regular Courses" subtitle="Learn, grow, and succeed at DCIT Institute"></Title>
      <div className='px-2 md:px-4 md:py-6 py-4 bg-[#EEF3F9]'>


        {categories && categories.length > 0 ? (
          categories.map((category, catIdx) => (
            <div key={category.id || catIdx} className='mb-8'>
              {/* Category title */}
              <AllCourseTitle title={category.course_category_name} />

              {/* Courses grid */}
              {category.courses && category.courses.length > 0 ? (
                <div className='grid md:grid-cols-4 gap-4'>
                  {category.courses.map(course => (
                    <CourseItem
                      key={course.id}
                      course_name={course.course_name}
                      course_image={course.course_image}
                      deadline={course.deadline}
                      duration={course.duration}
                      total_hours={course.total_hours}
                      total_class={course.total_class}
                      available_seat={course.available_seat}
                      schedule={course.schedule}
                      venue={course.venue}
                      instructor_name={course.instructor_name}
                      previous_price={course.previous_price}
                      current_price={course.current_price}
                      eligibility={course.eligibility}
                      short_description={course.short_description}
                      long_description={course.long_description}
                    />
                  ))}
                </div>
              ) : (
               
                <NoCourse noCourse="Comming Soon..."></NoCourse>
              )}
            </div>
          ))
        ) : (
          <SectionTitle title="No categories available" />
        )}


      </div>
    </section>
  );
}

export default AllRegularCourses;
