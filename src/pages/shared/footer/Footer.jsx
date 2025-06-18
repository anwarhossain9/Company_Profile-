import { Link } from "react-router";
import { MdAddIcCall, MdOutlineEmail } from "react-icons/md";
import { TiSocialLinkedinCircular } from "react-icons/ti";
import { MdOutlineLocationOn } from "react-icons/md";
import { CiFacebook } from "react-icons/ci";
import { FaXTwitter } from "react-icons/fa6";
function Footer() {
  return (
    <footer className="footer sm:footer-horizontal  text-base-content p-10 grid md:grid-cols-4 bg-[#34A249ff] text-white hover:text-red">

      <nav>
        <img className="w-[150px]" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYciuKOtEXS_6mL30-b9Hvfxu_4Adj5xO1kQ&s" alt="" />
      
        <div className="flex justify-evenly mt-2 w-full">
          <Link to={""} className="text-xl"><CiFacebook className="text-2xl"/></Link>
          <Link to={""} className="text-xl"><TiSocialLinkedinCircular className="text-2xl" /></Link>
          <Link to={""} className="text-xl"><FaXTwitter className="text-2xl" /></Link>
        </div>
      </nav>
      <nav>
        <h6 className="footer-title text-2xl font-semibold">Important Links</h6>
        <Link to={"/about"} className="text-xl">About</Link>
        <Link to={"/"} className="text-xl">Professional Course</Link>
        <Link to={""} className="text-xl">RPL</Link>
      </nav>
      <nav>
        <h6 className="footer-title text-2xl font-semibold">Office Address</h6>
        <span className="flex  gap-1 text-xl">
            <MdOutlineLocationOn  className="text-4xl" /> 232 (2nd floor), West Agargaon, Dhaka 1207
          </span>
      </nav>
      <nav>
        <h6 className="footer-title text-2xl font-semibold">Contact Us</h6>
        <Link to="tel:01710-822207">
          <span className="flex items-center gap-1 text-xl">
            <MdAddIcCall /> +88 01710-822207
          </span>
        </Link>

        <Link to="mailto:dcithr2012@gmail.com">
          <span className="flex items-center gap-1 text-xl">
            <MdOutlineEmail /> dcithr2012@gmail.com
          </span>
        </Link>

      </nav>


    </footer>
  )
}

export default Footer