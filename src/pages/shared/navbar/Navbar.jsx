import React from 'react'
import { Link } from "react-router";
import { FaCaretDown, FaUserPlus } from "react-icons/fa";
function Navbar() {
  const x = ["Course 1","Course 2","Course 3","Course 4"]
  const courseItems = (
    <>
     {
      x.map(abc=> <li><a>{abc}</a></li>)
     }
    </>
  );

  return (
    <div className="navbar bg-[#34A249ff] shadow-sm">
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
                <summary>Our Courses</summary>
                <ul className="p-2">
                  {courseItems}
                </ul>
              </details>
            </li>
                 <li><Link to="/rpl" >RPL</Link></li>
                 <li><Link to="/about" >About</Link></li>
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
            <div tabIndex={0} role="button" >Our Courses</div>
            <ul className="dropdown-content menu bg-lime-100 text-black text-xl border-b-4 border-[#34A249ff] rounded-box z-[1] w-52 px-2 shadow">
              {courseItems}
            </ul>
          </li>
             <li><Link to="/rpl" >RPL</Link></li>
          <li><Link to="/about">About</Link></li>
        </ul>
      </div>

      {/* End: Action Button */}
      <div className="navbar-end">
        <a className="text-2xl pr-2 text-white"><FaUserPlus /></a>
      </div>
    </div>
  )
}

export default Navbar;
