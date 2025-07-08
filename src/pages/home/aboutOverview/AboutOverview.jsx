import { Link } from 'react-router-dom'
import BatchItem from '../../../components/batchItem/BatchItem'
import Title from '../../../components/title/Title'
import useAboutLoaderData from '../../../hooks/useAboutLoaderData'
import InfoItem from '../../about/shared/InfoItem'
import Batch from '../batch/Batch'

function AboutOverview() {
    const [about, loader] = useAboutLoaderData()
    if (loader) {
        return <p>loading...</p>
    }
    return (
      <>
      <section>
          <div className=' mx-auto px-4'>
            <Title title="KNOW MORE ABOUT Institute" subtitle="About Institute"></Title>
            <InfoItem description={about[0].company_story} img={about[0].story_related_image} />
            
            <Batch></Batch>
        </div>
      </section>
      </>
    )
}

export default AboutOverview