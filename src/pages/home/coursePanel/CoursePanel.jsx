import React, { useState } from 'react';
import 'react-tabs/style/react-tabs.css';
import { Tab, Tabs, TabList, TabPanel } from 'react-tabs';
import { useKeenSlider } from "keen-slider/react";
import "keen-slider/keen-slider.min.css";
import CoursePanelItem from './shared/CoursePanelItem';
import CourseItem from '../../../components/coursesItem/CourseItem';
import Title from '../../../components/title/Title';
import useRegularDataLoader from '../../../hooks/useRegularDataLoader';
import SectionTitle from '../../../components/section/SectionTitle';

function CoursePanel() {
  const [regularCourses, loader] = useRegularDataLoader();
  const [tabIndex, setTabIndex] = useState(0);

  const [sliderRef] = useKeenSlider({
    slides: {
      perView: 5,
      spacing: 15,
    },
    breakpoints: {
      "(max-width: 1280px)": {
        slides: { perView: 4, spacing: 12 },
      },
      "(max-width: 1024px)": {
        slides: { perView: 3, spacing: 10 },
      },
      "(max-width: 768px)": {
        slides: { perView: 2, spacing: 8 },
      },
      "(max-width: 480px)": {
        slides: { perView: 1, spacing: 5 },
      },
    },
  });

  if (loader) {
    return (
      <div className='text-center'>
        <span className="loading loading-spinner text-success mx-auto"></span>
      </div>
    );
  }

  const { data } = regularCourses;
  console.log("data from testing", data);

  // Build "All Courses" category by flattening all courses
  const allCourses = data.flatMap(category => category.courses || []);

  // Build categories array with "All Courses" at the beginning
  const categories = [
    { course_category_name: 'All Regular Courses', courses: allCourses },
    ...data
  ];

  return (
    <section className=' bg-[#]'>
      <div className='py-6 px-2 md:px-4 mx-auto'>
        <Title title="COURSES FROM ALL THE FIELDS" subtitle="Find all of Our Courses" />
        <Tabs selectedIndex={tabIndex} onSelect={(index) => setTabIndex(index)}>
          <TabList className="border-0 bg-[#F9FAFB] ">
            <div ref={sliderRef} className="keen-slider">
              {categories.map((cat, idx) => (
                <Tab key={idx} className="keen-slider__slide card">
                  <CoursePanelItem title={cat.course_category_name} />
                </Tab>
              ))}
            </div>
          </TabList>

          <div className='px-2 md:px-4 md:py-6 py-4 bg-[#EEF3F9]'>
            {categories.map((category, catIdx) => (
              <TabPanel key={catIdx} className=" ">
                <div className='grid md:grid-cols-4 gap-4 '>
                  {category.courses && category.courses.length > 0 ? (
                    category.courses.map(course => (
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
                    ))
                  ) : (
                    <SectionTitle title="No courses found!" />
                  )}
                </div>
              </TabPanel>
            ))}
          </div>
        </Tabs>
      </div>
    </section>
  );
}

export default CoursePanel;
