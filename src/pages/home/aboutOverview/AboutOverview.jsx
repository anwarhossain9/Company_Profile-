import { Link } from 'react-router-dom'
import BatchItem from '../../../components/batchItem/BatchItem'
import Title from '../../../components/title/Title'
import useAboutLoaderData from '../../../hooks/useAboutLoaderData'
import InfoItem from '../../about/shared/InfoItem'

function AboutOverview() {
    const [about, loader] = useAboutLoaderData()
    if (loader) {
        return <p>data is loading...</p>
    }
    return (
        <div className='bg-lime-50 mx-auto px-10 pb-8'>

            <Title title="KNOW MORE ABOUT Institute" subtitle="About Institute"></Title>
            <InfoItem description={about[0].company_story} img={about[0].story_related_image} bgColor="bg-lime-50" />
            <div className='grid md:grid-cols-4 gap-10'>
                <BatchItem></BatchItem>
                <BatchItem></BatchItem>
                <BatchItem></BatchItem>
                <BatchItem></BatchItem>
            </div>
        </div>
    )
}

export default AboutOverview