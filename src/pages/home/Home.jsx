
import BannerSlider from './banner/BannerSlider'
import AllCourses from './allCourses/AllCourses'
import AboutOverview from './aboutOverview/AboutOverview'
import Comment from './comment/Comment'
import CoursePanel from './coursePanel/CoursePanel'
import useAboutLoaderData from '../../hooks/useAboutLoaderData'
import InfoItem from '../about/shared/InfoItem'
import Partner from './partner/Partner'



function Home() {

  return (
    <div className='px-4'>
      <BannerSlider></BannerSlider>
      <CoursePanel></CoursePanel>
      {/* <AllCourses></AllCourses> */}
      <AboutOverview></AboutOverview>
     
      <Comment></Comment>
      <Partner></Partner>
    </div>
  )
}

export default Home