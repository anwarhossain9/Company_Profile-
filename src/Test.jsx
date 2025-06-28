import React, { useEffect, useState } from 'react'

function Test() {
  const [courseData, setCourseData] = useState(null)

  useEffect(() => {
    fetch('https://institute.dcitinstitute.com.bd/api/courses/category-wise')
      .then(res => res.json())
      .then(data => setCourseData(data))
      .catch(err => console.error(err))
  }, [])

  if (!courseData) {
    return <div>Loading...</div>
  }

  const { data } = courseData

  // Flatten courses into a single array
  const courses = data.map(cate => cate.courses);
  const subCategories = courses.map(sub => sub)


  return (
    <>
      <div>test</div>
      {/* {
        subCategories.map(course => <p key={course.id}>{course.course_type}</p>)
      } */}
      {/* {
         data.map(cate => cate.courses.map(sub => <p className='border'>{sub.course_type}</p>))
      } */}

      {

        courses.map((innerArray, idx) => (
          <div key={idx}>
            <h3>Sub Array {idx + 1}:</h3>
            {innerArray.map(item => (
              <p key={item.course_type}>{item.course_type}</p>
            ))}
          </div>
        ))
      }
    </>
  )
}

export default Test
