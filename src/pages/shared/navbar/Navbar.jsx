import { useEffect, useState } from "react";
import { Link, NavLink, useNavigate } from "react-router-dom";
import useRegularDataLoader from "../../../hooks/useRegularDataLoader";
import dcit from "../../../assets/images/DCIT Logo.png"
import nsda from "../../../assets/images/NSDA.png"



function Navbar() {

  const [courses, setCourses] = useState([]);
  const [regularCourses, loader] = useRegularDataLoader();



  const navigate = useNavigate();

  const handleScrollTo = (target) => {
    if (window.location.pathname === "/about") {
      const event = new CustomEvent("scrollToSection", { detail: target });
      window.dispatchEvent(event);
    } else {
      navigate("/about", { state: { scrollTo: target } });
    }
  };


  if (loader) {
    return <p></p>
  }
  const { data } = regularCourses
  const categories = data.map(dta => dta.course_category_name)

// Build "All Courses" category by flattening all courses
  //  const allCourses = data.flatMap(category => category.courses || []);

  // Build categories array with "All Courses" at the beginning
  // const categories = [
  //   { course_category_name: 'All Courses', courses: allCourses },
  //   ...data
  // ];



  const courseItems =
    <>
      {
        categories.map(category => <li><Link className="text-[17px]" to={`/${category}`} state={{ category: category }}>{category}</Link></li>)
      }
    </>
    ;
  return (

    <section className="bg-[#0056D2] shadow-sm sticky top-0 z-50">


      <div className="navbar  px-2 md:px-4 lg:px-8 mx-auto">
        {/* Start: Logo & Mobile Menu */}
        <div className="navbar-start">
          <div className="dropdown lg:hidden">
            <div tabIndex={0} role="button" className="btn btn-ghost">
              <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h8m-8 6h16" />
              </svg>
            </div>
            <ul tabIndex={0} className="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 ">
              <li><Link to="/" className="text-[16px]">Home</Link></li>
              <li tabIndex={0}>
                <details>
                  <summary className="text-[16px]">Regular Courses</summary>
                  <ul className="p-2">
                    {courseItems}
                  </ul>
                </details>
              </li>
              <li><Link to="/rpl" className="text-[16px]">RPL</Link></li>
              <li><Link to="/assect-project" className="text-[16px]">Assect Project</Link></li>
              <li><Link to="/gallery" className="text-[16px]">Gallery</Link></li>
              <li><Link to="/about" className="text-[16px]">About Us</Link></li>
            </ul>
          </div>

          <div>
            <Link to={"/"}>
              {/* <h1 className='text-3xl font-bold text-white'>ABCD</h1> */}
              <img className="w-[60px]" src={dcit} alt="DCIT Institute" />
            </Link>
          </div>
        </div>

        {/* Center: Desktop Menu */}
        <div className="navbar-center hidden lg:flex">
          <ul className="menu menu-horizontal px-1 text-[17px] text-white">
            <li><Link to="/">Home</Link></li>
            <li className="dropdown dropdown-hover">
              <div tabIndex={0} role="button" >Regular Courses</div>
              <ul className="dropdown-content menu bg-white text-black text-[16px] border-b-4 border-[#0056D2] rounded-box z-[1] w-68  shadow">
                {courseItems}
              </ul>
            </li>
            <li><Link to="/rpl" >RPL</Link></li>
            <li><Link to="/assect-project" >Assect Project</Link></li>
            <li><Link to="/gallery" >Gallery</Link></li>
            {/* <li><Link to="/about">About Us</Link></li> */}
            <li className="dropdown dropdown-hover">
              <div tabIndex={0} role="button" >About Us</div>
              <ul className="dropdown-content menu bg-white text-black text-[16px] border-b-4  border-[#0056D2] rounded-box z-[1] w-52 px-2 shadow">
                <li><a onClick={() => handleScrollTo("aboutInstitute")}>About Institute</a></li>
                <li><a onClick={() => handleScrollTo("story")}>Our Story</a></li>
                <li><a onClick={() => handleScrollTo("missionVission")}>Mission & Vission</a></li>
                <li><a onClick={() => handleScrollTo("management")}>Management</a></li>
                <li><a
                  href="NSDA Certificate_DCIT Institute.pdf"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  NSDA Certificate
                </a></li>

              </ul>
            </li>
          </ul>
        </div>

        {/* End: Action Button */}
        <div className="navbar-end">
          <Link target="_blank" to="https://nsda.gov.bd/">
            {/* <h1 className='text-3xl font-bold text-white'>ABCD</h1> */}

            <img className="w-[60px]" src={nsda} alt="NSDA" />

          </Link>
        </div>
      </div>

    </section>
  )
}

export default Navbar;
