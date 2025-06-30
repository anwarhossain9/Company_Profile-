import React, { useEffect, useState } from 'react'

function useContactLoader() {
 const [contacts, setContacts] = useState([])
      const [loader, setLoader] = useState(true)
  
      useEffect(()=>{
          fetch("https://institute.dcitinstitute.com.bd/api/contact-info")
          .then(res => res.json())
          .then(data => {
              setContacts(data)
              setLoader(false)
          })
      }, [])
  
    return [contacts, loader]
  }

export default useContactLoader