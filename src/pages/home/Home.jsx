
import BannerSlider from './banner/BannerSlider'
import AllCourses from './allCourses/AllCourses'
import AboutOverview from './aboutOverview/AboutOverview'
import Comment from './comment/Comment'
import CoursePanel from './coursePanel/CoursePanel'



function Home() {
  return (
    <>
      <BannerSlider></BannerSlider>
      <CoursePanel></CoursePanel>
      {/* <AllCourses></AllCourses> */}
      <AboutOverview></AboutOverview>
      <Comment></Comment>
      {/* <Partner></Partner> */}
    </>
  )
}

export default Home