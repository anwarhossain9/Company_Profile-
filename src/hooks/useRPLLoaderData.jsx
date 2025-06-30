import React, { useEffect, useState } from 'react'

function useRPLLoaderData() {
    const [rplData, setRplData] = useState([])
    const [loader, setLoader] = useState(true)

    useEffect(()=>{
        fetch("https://institute.dcitinstitute.com.bd/api/rpl-info")
        .then(res => res.json())
        .then(data => {
            setRplData(data)
            setLoader(false)
        })
    }, [])

  return [rplData, loader]
}

export default useRPLLoaderData