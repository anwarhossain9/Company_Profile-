import React from 'react'
import { FaUser, FaUserPlus } from 'react-icons/fa'
import { MdAddCall, MdOutlineMail } from 'react-icons/md'
import { Link } from 'react-router-dom'
import useContactLoader from '../../../hooks/useContactLoader'

function Topbar() {

  const [contacts, loader] = useContactLoader()

  if (loader) {
    return <p>Data is loading...</p>
  }
  return (
      <section>
    <div className='flex justify-between items-center py-2 px-4 px-2 md:px-4 lg:px-8 mx-auto'>
      {/* Left side: Contact info (only shown on md+) */}
      <div className='hidden md:flex gap-3'>
        <span className='flex items-center text-md'>
          <MdAddCall className='text-[#0056D2] mr-1' />
          <Link target='_blank' to="tel:+8801710-822207">{contacts[0].phone_no}</Link>
        </span>
        <span className='flex items-center text-md'>
          <MdOutlineMail className='text-[#0056D2] mr-1' />
          <Link target='_blank' to="mailto:dcitltd2022@gmail.com">  {contacts[0].email_link}</Link>
        </span>
      </div>

      {/* Right side: Login/Register (always visible, right-aligned on small) */}
      <div className='flex gap-3 ml-auto'>
        <span className='flex items-center text-md'>
          <FaUser className='text-[#0056D2] mr-1' />
          <Link target='_blank' to="https://institute.dcitinstitute.com.bd/login">Login</Link>
        </span>
        <span className='flex items-center text-md'>
          <FaUserPlus className='text-[#0056D2] mr-1' />
          <Link to="/register">Register</Link>
        </span>
      </div>
    </div>
    </section>

  )
}

export default Topbar