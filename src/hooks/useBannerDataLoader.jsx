import React, { useEffect, useState } from 'react'

function useBannerDataLoader() {
    const [banner, setBanner] = useState([])
    const [loader, setLoader] = useState(true)

    useEffect(() => {
        fetch("https://institute.dcitinstitute.com.bd/api/banner-info")
            .then(res => res.json())
            .then(data => {
                setBanner(data)
                setLoader(false)
            })
    }, [])

    return [banner, loader]

}

export default useBannerDataLoader