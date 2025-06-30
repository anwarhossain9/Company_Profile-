import React, { useEffect, useState } from 'react'

function useCommentLoader() {
   const [comments, setComments] = useState([])
      const [loader, setLoader] = useState(true)
  
      useEffect(()=>{
          fetch("https://institute.dcitinstitute.com.bd/api/student-review-info")
          .then(res => res.json())
          .then(data => {
              setComments(data)
              setLoader(false)
          })
      }, [])
  
    return [comments, loader]
  }
export default useCommentLoader