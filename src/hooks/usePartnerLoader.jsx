import React, { useEffect, useState } from 'react'

function usePartnerLoader() {
  const [allPartners, setAllPartners] = useState([])
     const [loader, setLoader] = useState(true)
 
     useEffect(()=>{
         fetch("https://institute.dcitinstitute.com.bd/api/partner-info")
         .then(res => res.json())
         .then(data => {
             setAllPartners(data)
             setLoader(false)
         })
     }, [])
 
   return [allPartners, loader]
 }
export default usePartnerLoader