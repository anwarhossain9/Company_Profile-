
import BannerSlider from './banner/BannerSlider'

import AboutOverview from './aboutOverview/AboutOverview'
import Comment from './comment/Comment'
import CoursePanel from './coursePanel/CoursePanel'
import Partner from './partner/Partner'



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
        <Partner></Partner>
      </section>
    </>
  )
}

export default Home