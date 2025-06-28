import React, { useState } from 'react'
import 'react-tabs/style/react-tabs.css';
import { Tab, Tabs, TabList, TabPanel } from 'react-tabs';
import { useKeenSlider } from "keen-slider/react"
import "keen-slider/keen-slider.min.css"
import CoursePanelItem from './shared/CoursePanelItem';
import CourseItem from '../../../components/coursesItem/CourseItem';
import Title from '../../../components/title/Title';
import useRegularDataLoader from '../../../hooks/useRegularDataLoader';


const categoryData = [
  {
    category: "Web Development",
    items: [
      { title: "HTML", description: "Structure of webpages." },
      { title: "CSS", description: "Style and layout." },
      { title: "JavaScript", description: "Dynamic interactivity." },
    ],
  },
  {
    category: "Graphic Design",
    items: [
      { title: "Photoshop", description: "Image editing tool." },
      { title: "Illustrator", description: "Vector graphics design." },
    ],
  },
  {
    category: "Marketing",
    items: [
      { title: "SEO", description: "Search engine optimization." },
      { title: "SEO", description: "Search engine optimization." },
      { title: "SEO", description: "Search engine optimization." },
      { title: "Email Marketing", description: "Email campaigns and automation." },
    ],
  },
  {
    category: "Machine Learning",
    items: [
      { title: "AI", description: "Search engine optimization." },
      { title: "ML", description: "Search engine optimization." },
      { title: "ML", description: "Search engine optimization." },
      { title: "Data Science", description: "Search engine optimization." },
      { title: "Email Marketing", description: "Email campaigns and automation." },
    ],
  },
  {
    category: "Cyber Security",
    items: [
      { title: "Cyber Security Beggner", description: "Search engine optimization." },
      { title: "Cyber Security Advance", description: "Search engine optimization." },

    ],
  },
];


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
        slides: {
          perView: 4,
          spacing: 12,
        },
      },
      "(max-width: 1024px)": {
        slides: {
          perView: 3,
          spacing: 10,
        },
      },
      "(max-width: 768px)": {
        slides: {
          perView: 2,
          spacing: 8,
        },
      },
      "(max-width: 480px)": {
        slides: {
          perView: 1,
          spacing: 5,
        },
      },
    },
  })


  if (loader) {
    return <div className='text-center'> <span className="loading loading-spinner text-success mx-auto"></span></div>
  }

  const { data } = regularCourses
  const categories = data.map(dta => dta.course_category_name)
  

  return (
    <>
      <Title title="COURSES FROM ALL THE FIELDS" subtitle="Find all of Our Courses"></Title>
      <section className='py-6'>
        <Tabs selectedIndex={tabIndex} onSelect={(index) => setTabIndex(index)}>
          <TabList>
            <div ref={sliderRef} className="keen-slider">

              {
                categories.map(cat => <Tab className="keen-slider__slide "><CoursePanelItem title={cat}></CoursePanelItem></Tab>)
              }

            </div>
          </TabList>
         
            {
              <div className='mt-6'>
                {data.map((category, catIdx) => (
                  <TabPanel key={catIdx}>
                    <div className='grid md:grid-cols-4 gap-4'>
                      {category.courses.map(course => (
                        <CourseItem
                         key={course.id} 
                         course_name={course.course_name} 
                         course_image={course.course_image} 
                         deadline = {course.deadline} 
                         duration = {course.duration}
                         total_hours = {course.total_hours}
                         total_class = {course.total_class}
                         available_seat = {course.available_seat}
                         schedule = {course.schedule}
                         venue = {course.venue}
                         instructor_name = {course.instructor_name}
                         previous_price = {course.previous_price}
                         current_price = {course.current_price}
                         eligibility = {course.eligibility}
                         short_description = {course.short_description}
                         long_description = {course.long_description}
                         
                         />
                      ))}
                    </div>
                  </TabPanel>
                ))}
              </div>
            }

       
        </Tabs>
      </section>
    </>
  );
}

export default CoursePanel