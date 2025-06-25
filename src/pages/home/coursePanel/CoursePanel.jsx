import React, { useState } from 'react'
import 'react-tabs/style/react-tabs.css';
import { Tab, Tabs, TabList, TabPanel } from 'react-tabs';
import { useKeenSlider } from "keen-slider/react"
import "keen-slider/keen-slider.min.css"
import CoursePanelItem from './shared/CoursePanelItem';
import CourseItem from '../../../components/coursesItem/CourseItem';
import Title from '../../../components/title/Title';


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
                        <Tab className="keen-slider__slide "><CoursePanelItem title="All Courses "></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Web & Software "></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Graphic Design"></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Digital Marketing"></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Data Science"></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Spoken English"></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Artificial intelligence"></CoursePanelItem></Tab>
                        <Tab className="keen-slider__slide "><CoursePanelItem title="Machine Learning"></CoursePanelItem></Tab>


                    </div>
                </TabList>
                <div className='mt-6'>
                    <TabPanel>

                        <div className='grid md:grid-cols-3 gap-4'>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                        </div>
                    </TabPanel>
                    <TabPanel>
                        <div className='grid md:grid-cols-3 gap-4'>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                        </div>

                    </TabPanel>
                    <TabPanel><div className='grid md:grid-cols-3 gap-4'>
                        <CourseItem></CourseItem>
                    </div>

                    </TabPanel>
                    <TabPanel><div className='grid md:grid-cols-3 gap-4'>
                        <CourseItem></CourseItem>
                        <CourseItem></CourseItem>
                        <CourseItem></CourseItem>
                    </div>

                    </TabPanel>
                    <TabPanel>
                        <div className='grid md:grid-cols-3 gap-4'>
                            <CourseItem></CourseItem>
                        </div>

                    </TabPanel>
                    <TabPanel>
                        <div className='grid md:grid-cols-3 gap-4'>
                            <CourseItem></CourseItem>
                            <CourseItem></CourseItem>
                        </div>

                    </TabPanel>
                    <TabPanel>
                        <div className='grid md:grid-cols-3 gap-4'>
                            <CourseItem></CourseItem>
                        </div>

                    </TabPanel>
                </div>
            </Tabs>
        </section>
      </>
    );
}

export default CoursePanel