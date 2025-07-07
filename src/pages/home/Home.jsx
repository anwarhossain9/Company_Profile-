
import BannerSlider from './banner/BannerSlider'

import AboutOverview from './aboutOverview/AboutOverview'

import CoursePanel from './coursePanel/CoursePanel'
import Partners from '../partners/Partners'
import StudentReview from '../../components/review/StudentReview'



function Home() {

  return (
    <>
      <section>
        <BannerSlider></BannerSlider>

      </section>

      <section>

        <CoursePanel></CoursePanel>
        <AboutOverview></AboutOverview>
        <StudentReview></StudentReview>
        <Partners></Partners>

      </section>
    </>
  )
}

export default Home