import { Link } from "react-router";
import { MdAddIcCall, MdOutlineEmail } from "react-icons/md";
import { TiSocialLinkedinCircular, TiSocialTwitterCircular } from "react-icons/ti";
import { MdOutlineLocationOn } from "react-icons/md";
import { CiFacebook } from "react-icons/ci";
import { FaXTwitter } from "react-icons/fa6";
import useContactLoader from "../../../hooks/useContactLoader";
import { RiTwitterXFill } from "react-icons/ri";
import { HiMiniArrowSmallRight } from "react-icons/hi2";
function Footer() {
  const [contacts, loader] = useContactLoader()

  if (loader) {
    return <p>Data is loading...</p>
  }
  return (

    <section className="bg-[#0056D2]">



      <footer className="footer sm:footer-horizontal text-base-content  py-10  grid md:grid-cols-4  text-white px-2 md:px-4 lg:px-8 mx-auto">

        <nav>
          <img className="w-[80px] card shadow-sm" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRk5pempmAZwoM_R2cnyMh4UxYqu9S2aqnHRQ&s" alt="" />

          <div className="flex justify-evenly mt-1 w-full">
            <Link target="_blank" to={contacts[0].facebook_link} ><CiFacebook className="text-[26px] md:text-[30px] hover:text-[#6FCF97]" /></Link>
            <Link target="_blank" to={contacts[0].linkedin_link} ><TiSocialLinkedinCircular className="text-[26px] md:text-[30px] hover:text-[#6FCF97]" /></Link>
            <Link target="_blank" to={contacts[0].twitter_link} ><TiSocialTwitterCircular className="text-[26px] md:text-[30px] hover:text-[#6FCF97]" /></Link>
          </div>
        </nav>
        <nav>
          <h6 className="text-[17px] text-white">Important Links</h6>
          <Link to={"/about"} className="text-[16px] opacity-75"> <span className="flex items-center gap-2"><HiMiniArrowSmallRight /> About</span></Link>
          {/* <Link to={"/"} className="text-[16px] opacity-75">Professional Course</Link> */}
          <Link to={"/rpl"} className="text-[16px] opacity-75"><span className="flex items-center gap-2"><HiMiniArrowSmallRight />RPL </span></Link>
        </nav>
        <nav>
          <h6 className="text-[17px] text-white ">Office Address</h6>
          <span className="flex  gap-1 text-[16px] opacity-75">
            <MdOutlineLocationOn className="text-4xl" /> {contacts[0].office_address}
          </span>
        </nav>
        <nav>
          <h6 className="text-[17px] text-white">Contact Us</h6>
          <Link to="tel:01710-822207">
            <span className="flex items-center gap-1 text-[16px] opacity-75">
              <MdAddIcCall /> {contacts[0].phone_no}
            </span>
          </Link>

          <Link to="mailto:dcithr2012@gmail.com">
            <span className="flex items-center gap-1 text-[16px] opacity-75">
              <MdOutlineEmail /> {contacts[0].email_link}
            </span>
          </Link>

        </nav>


      </footer>

    </section>
  )
}

export default Footer