
import BannerSlider from './banner/BannerSlider'
import AllCourses from './allCourses/AllCourses'
import AboutOverview from './aboutOverview/AboutOverview'
import Partner from './partner/Partner'
import Comment from './comment/Comment'



function Home() {
  return (
    <>
      <BannerSlider></BannerSlider>
      <AllCourses></AllCourses>
      <AboutOverview></AboutOverview>
      <Comment></Comment>
      {/* <Partner></Partner> */}
    </>
  )
}

export default Home