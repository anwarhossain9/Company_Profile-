import React, { useEffect, useState } from 'react'

function usePartnerLoader() {
  const [partners, setPartners] = useState([])
     const [loader, setLoader] = useState(true)
 
     useEffect(()=>{
         fetch("https://institute.dcitinstitute.com.bd/api/partner-info")
         .then(res => res.json())
         .then(data => {
             setPartners(data)
             setLoader(false)
         })
     }, [])
 
   return [partners, loader]
 }
export default usePartnerLoader