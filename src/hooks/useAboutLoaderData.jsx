import React, { useEffect, useState } from 'react'

function useAboutLoaderData() {
   const [about, setAbout] = useState([])
       const [loader, setLoader] = useState(true)
   
       useEffect(()=>{
           fetch("https://institute.dcitinstitute.com.bd/api/about-info")
           .then(res => res.json())
           .then(data => {
               setAbout(data)
               setLoader(false)
           })
       }, [])
   
     return [about, loader]
}

export default useAboutLoaderData