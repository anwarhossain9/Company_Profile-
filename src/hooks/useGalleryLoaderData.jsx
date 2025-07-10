import React, { useEffect, useState } from 'react'
function useGalleryLoaderData() {

    const [galleris, setGalleris] = useState([])
    const [loader, setLoader] = useState(true)

    useEffect(() => {
        fetch("https://institute.dcitinstitute.com.bd/api/gallaries/category-wise")
            .then(res => res.json())
            .then(data => {
                setGalleris(data)
                setLoader(false)

            })
    }, [])

    return [galleris, loader]


}

export default useGalleryLoaderData