import React, { useEffect, useState } from 'react'


function useRegularDataLoader() {
  const [regularCourses, setRegularCourses] = useState([])
     const [loader, setLoader] = useState(true)
 
     useEffect(()=>{
         fetch("https://institute.dcitinstitute.com.bd/api/courses/category-wise")
         .then(res => res.json())
         .then(data => {
             setRegularCourses(data)
             setLoader(false)
         })
     }, [])
 
   return [regularCourses, loader]
 }

export default useRegularDataLoader