import InfoItem from './shared/InfoItem'
import SectionTitle from '../../components/section/SectionTitle'
import MissionVission from './missionVisssion/MissionVission'
import ManagementMessage from './management/ManagementMessage'
import { useLocation } from 'react-router-dom';
import { useLayoutEffect, useEffect } from 'react';
import { Element, scroller } from 'react-scroll';
import useAboutLoaderData from '../../hooks/useAboutLoaderData';
const des = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, nobis excepturi error voluptate sapiente ab sint velit quae fuga ut aliquid alias pariatur, nemo quaerat, itaque nam hic? Suscipit tempore veniam quibusdam esse nobis? Optio molestiae mollitia repudiandae atque! Labore suscipit nihil sequi velit cum tenetur sed accusamus molestias dignissimos fuga beatae fugit, explicabo officiis ipsum vel itaque quam eligendi consequatur qui tempora! Cum dolorem molestiae rerum modi vitae dolor error quis! Voluptatem blanditiis, sequi necessitatibus mollitia quasi vitae nisi obcaecati asperiores, odio enim cumque saepe dicta aspernatur sapiente! Ex modi iste assumenda, atque similique vel illo provident dignissimos quibusdam!"
const img = "https://t3.ftcdn.net/jpg/01/92/95/00/360_F_192950048_PUUtUFKtCTaiCSXbDMoo7Ex8VO0TnYK2.jpg"

function About() {

  const location = useLocation();
  const [about, loader] = useAboutLoaderData()



  // Scroll on navigation
  useLayoutEffect(() => {
    if (location.state?.scrollTo) {
      setTimeout(() => {
        scroller.scrollTo(location.state.scrollTo, {
          duration: 500,
          smooth: true,
          offset: -70,
        });
      }, 300);
    }
  }, [location]);

  // Scroll on custom event (same-page click)
  useEffect(() => {
    const handleManualScroll = (e) => {
      scroller.scrollTo(e.detail, {
        duration: 500,
        smooth: true,
        offset: -70,
      });
    };
    window.addEventListener("scrollToSection", handleManualScroll);
    return () => {
      window.removeEventListener("scrollToSection", handleManualScroll);
    };
  }, []);


  if (loader) {
    return <div className='text-center'> <span className="loading loading-spinner text-success mx-auto"></span></div>
  }

  console.log(about)

  return (
    <>
      <Element name="aboutInstitute">
        <SectionTitle title="Our Dream" />
        <InfoItem description={about[0].company_dream} img={about[0].image_related_company} orderOne="md:order-1" orderTwo="md:order-2" />
      </Element>

      <Element name="story">
        <SectionTitle title="Our Story" />
        <InfoItem description={about[0].company_story} img={about[0].story_related_image} bgColor="bg-lime-50" />
      </Element>

      <Element name="missionVission">
        <SectionTitle title="Our Mission & Vission " />
        <MissionVission   purpose = {about[0].purpose} goal={about[0].goal} />
      </Element>

      <Element name="management">
        <SectionTitle title="Message From Management" />
        <ManagementMessage ceo_name = {about[0].ceo_name} ceo_image={about[0].ceo_image}  ceo_word={about[0].ceo_word}  director_image={about[0].director_image}   director_name={about[0].director_name}   director_word={about[0].director_word} />
      </Element>
    </>
  );
}

export default About