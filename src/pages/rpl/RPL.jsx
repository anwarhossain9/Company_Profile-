import React from 'react'
import CourseItem from '../../components/coursesItem/CourseItem'
import Title from '../../components/title/Title'

function RPL() {
  return (
   <>
   <Title title="RPL " subtitle="Your Skills, Your Future — Recognized Today!"></Title>
    <div className='grid md:grid-cols-4 gap-4 py-5'>
      <CourseItem></CourseItem>
      <CourseItem></CourseItem>
      <CourseItem></CourseItem>
      <CourseItem></CourseItem>
      <CourseItem></CourseItem>
       
    </div>
   </>
  )
}

export default RPL