import { useEffect, useState } from "react";
import { Link, useNavigate } from "react-router-dom";




function Navbar() {

   const [courses, setCourses] = useState([]);
   const [category, setCcategory] = useState([]);

  useEffect(() => {
    fetch('https://jsonplaceholder.typicode.com/users') // path is relative to `public/`
      .then((response) => response.json())
      .then((data) => setCourses(data))
      .catch((error) => console.error('Error fetching courses:', error));
  }, []);



const names = courses.reduce((acc, course) => {
  acc.push(course.name);
  return acc;
}, []);

console.log(names)

  const x = names
  const courseItems = (
    <>
      {
        x.map(abc => <li><a>{abc}</a></li>)
      }
    </>
  );

  const navigate = useNavigate();

const handleScrollTo = (target) => {
  if (window.location.pathname === "/about") {
    const event = new CustomEvent("scrollToSection", { detail: target });
    window.dispatchEvent(event);
  } else {
    navigate("/about", { state: { scrollTo: target } });
  }
};


  return (
    <div className="navbar bg-[#34A249ff] shadow-sm sticky top-0 z-50">
      {/* Start: Logo & Mobile Menu */}
      <div className="navbar-start">
        <div className="dropdown lg:hidden">
          <div tabIndex={0} role="button" className="btn btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" className="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
          </div>
          <ul tabIndex={0} className="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52 ">
            <li><Link to="/">Home</Link></li>
            <li tabIndex={0}>
              <details>
                <summary>Regular Courses</summary>
                <ul className="p-2">
                  {courseItems}
                </ul>
              </details>
            </li>
            <li><Link to="/rpl" >RPL</Link></li>
            <li><Link to="/about" >About Us</Link></li>
          </ul>
        </div>

        <div>
          <Link to={""}>
            <h1 className='text-3xl font-bold text-white'>ABCD</h1>
          </Link>
        </div>
      </div>

      {/* Center: Desktop Menu */}
      <div className="navbar-center hidden lg:flex">
        <ul className="menu menu-horizontal px-1 text-2xl text-white">
          <li><Link to="/">Home</Link></li>
          <li className="dropdown dropdown-hover">
            <div tabIndex={0} role="button" >Regular Courses</div>
            <ul className="dropdown-content menu bg-lime-100 text-black text-xl border-b-4 border-[#34A249ff] rounded-box z-[1] w-52 px-2 shadow">
              {courseItems}
            </ul>
          </li>
          <li><Link to="/rpl" >RPL</Link></li>
          {/* <li><Link to="/about">About Us</Link></li> */}
          <li className="dropdown dropdown-hover">
            <div tabIndex={0} role="button" >About Us</div>
            <ul className="dropdown-content menu bg-lime-100 text-black text-xl border-b-4 border-[#34A249ff] rounded-box z-[1] w-52 px-2 shadow">
              <li><a onClick={() => handleScrollTo("aboutInstitute")}>About Institute</a></li>
              <li><a onClick={() => handleScrollTo("story")}>Our Story</a></li>
              <li><a onClick={() => handleScrollTo("missionVission")}>Mission & Vission</a></li>
              <li><a onClick={() => handleScrollTo("management")}>Management</a></li>

            </ul>
          </li>
        </ul>
      </div>

      {/* End: Action Button */}
      <div className="navbar-end">
        <Link to={""}>
          <h1 className='text-3xl font-bold text-white'>ABCD</h1>
        </Link>
      </div>
    </div>
  )
}

export default Navbar;
