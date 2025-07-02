import React, { useEffect, useState } from 'react'

function useBatchLoader() {
    const [batches, setBatches] = useState([])
    const [loader, setLoader] = useState(true)

    useEffect(() => {
        fetch("https://institute.dcitinstitute.com.bd/api/statistic-info")
            .then(res => res.json())
            .then(data => {
                setBatches(data)
                setLoader(false)
            })
    }, [])

    return [batches, loader]

}

export default useBatchLoader