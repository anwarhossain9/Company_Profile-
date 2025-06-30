import React, { useContext } from 'react'
import { AllCoursesContext } from './assets/context/CourseContext'

function Test() {
  const contextData = useContext(AllCoursesContext)
  console.log(contextData)
  return (
    <div>Test</div>
  )
}

export default Test