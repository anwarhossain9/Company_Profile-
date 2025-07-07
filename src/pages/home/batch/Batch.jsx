import React from 'react'
import useBatchLoader from '../../../hooks/useBatchLoader';
import BatchItem from '../../../components/batchItem/BatchItem';

function Batch() {
    const [batches, loader] = useBatchLoader();
    if (loader) {
        return <p>Data is loading...</p>
    }
    return (
        <div className='grid grid-cols-2 md:grid-cols-4 gap-2 md:gap-10 lg:gap-10 my-6'>
            {
                batches.map(batch => <BatchItem title={batch.title} count={batch.count}></BatchItem>)
            }
        </div>
    )
}

export default Batch