import React, { useState } from 'react'
import 'react-tabs/style/react-tabs.css';
import { Tab, Tabs, TabList, TabPanel } from 'react-tabs';
import { useKeenSlider } from "keen-slider/react"
import "keen-slider/keen-slider.min.css"
import CoursePanelItem from './shared/CoursePanelItem';
import CourseItem from '../../../components/coursesItem/CourseItem';
import Title from '../../../components/title/Title';


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

  return (
    <>
      <Title title="COURSES FROM ALL THE FIELDS" subtitle="Find all of Our Courses"></Title>
      <section className='py-6'>
        <Tabs selectedIndex={tabIndex} onSelect={(index) => setTabIndex(index)}>
          <TabList>
            <div ref={sliderRef} className="keen-slider">
              {/* <Tab className="keen-slider__slide "><CoursePanelItem title="All Courses "></CoursePanelItem></Tab> */}
              {/* <Tab className="keen-slider__slide "><CoursePanelItem title="Web & Software "></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Graphic Design"></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Digital Marketing"></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Data Science"></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Spoken English"></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Artificial intelligence"></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Machine Learning"></CoursePanelItem></Tab> */}

              {
                categoryData.map(cat => <Tab className="keen-slider__slide "><CoursePanelItem title={cat.category}></CoursePanelItem></Tab>)
              }

            </div>
          </TabList>
          <div className='mt-6'>
            {/* <TabPanel>

                        <div className='grid md:grid-cols-4 gap-4'>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                        </div>
                    </TabPanel>
                    <TabPanel>
                        <div className='grid md:grid-cols-4 gap-4'>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                        </div>

                    </TabPanel>
                    <TabPanel><div className='grid md:grid-cols-4 gap-4'>
                        <CourseItem></CourseItem>
                    </div>

                    </TabPanel>
                    <TabPanel><div className='grid md:grid-cols-4 gap-4'>
                        <CourseItem></CourseItem>
                        <CourseItem></CourseItem>
                        <CourseItem></CourseItem>
                    </div>

                    </TabPanel>
                    <TabPanel>
                        <div className='grid md:grid-cols-4 gap-4'>
                            <CourseItem></CourseItem>
                        </div>

                    </TabPanel>
                    <TabPanel>
                        <div className='grid md:grid-cols-4 gap-4'>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                        </div>

                    </TabPanel> */}

            <div className='mt-6'>
              {categoryData.map((cat, catIdx) => (
                <TabPanel key={catIdx}>
                  <div className='grid md:grid-cols-4 gap-4'>
                    {cat.items.map((item, idx) => (
                      <CourseItem key={idx} title={item.title} description={item.description} />
                    ))}
                  </div>
                </TabPanel>
              ))}
            </div>


          </div>
        </Tabs>
      </section>
    </>
  );
}

export default CoursePanel