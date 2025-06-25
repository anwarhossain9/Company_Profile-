import InfoItem from './shared/InfoItem'
import SectionTitle from '../../components/section/SectionTitle'
import MissionVission from './missionVisssion/MissionVission'
import ManagementMessage from './management/ManagementMessage'

const des = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, nobis excepturi error voluptate sapiente ab sint velit quae fuga ut aliquid alias pariatur, nemo quaerat, itaque nam hic? Suscipit tempore veniam quibusdam esse nobis? Optio molestiae mollitia repudiandae atque! Labore suscipit nihil sequi velit cum tenetur sed accusamus molestias dignissimos fuga beatae fugit, explicabo officiis ipsum vel itaque quam eligendi consequatur qui tempora! Cum dolorem molestiae rerum modi vitae dolor error quis! Voluptatem blanditiis, sequi necessitatibus mollitia quasi vitae nisi obcaecati asperiores, odio enim cumque saepe dicta aspernatur sapiente! Ex modi iste assumenda, atque similique vel illo provident dignissimos quibusdam!"
const img = "https://t3.ftcdn.net/jpg/01/92/95/00/360_F_192950048_PUUtUFKtCTaiCSXbDMoo7Ex8VO0TnYK2.jpg"

function About() {
  return (
    <>
      <SectionTitle title="Our Company Dream"></SectionTitle>
      <InfoItem description={des} img={img} orderOne="md:order-1" orderTwo="md:order-2"></InfoItem>

      <SectionTitle title="Our Mission & Vission"></SectionTitle>
      <InfoItem description={des} img={img}></InfoItem>
      <SectionTitle title="Our Company Dream"></SectionTitle>
      <MissionVission></MissionVission>
      <SectionTitle title="Message Form Management"></SectionTitle>
      <ManagementMessage></ManagementMessage>




    </>
  )
}

export default About