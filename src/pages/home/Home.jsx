
import BannerSlider from './banner/BannerSlider'

import AboutOverview from './aboutOverview/AboutOverview'
import Comment from './comment/Comment'
import CoursePanel from './coursePanel/CoursePanel'
import Partners from '../partners/Partners'



function Home() {

  return (
    <>
      <section>
        <BannerSlider></BannerSlider>

      </section>

      <section>

        <CoursePanel></CoursePanel>
        <AboutOverview></AboutOverview>

        <Comment></Comment>
        <Partners></Partners>
      </section>
    </>
  )
}

export default Home