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
    <div className='flex justify-between items-center py-1 mx-2 px-4'>
      {/* Left side: Contact info (only shown on md+) */}
      <div className='hidden md:flex gap-3'>
        <span className='flex items-center text-md'>
          <MdAddCall className='text-lime-600 mr-1' />
          <Link target='_blank' to="tel:+8801710-822207">{contacts[0].phone_no}</Link>
        </span>
        <span className='flex items-center text-md'>
          <MdOutlineMail className='text-lime-600 mr-1' />
          <Link target='_blank' to="mailto:dcitltd2022@gmail.com">  {contacts[0].email_link}</Link>
        </span>
      </div>

      {/* Right side: Login/Register (always visible, right-aligned on small) */}
      <div className='flex gap-3 ml-auto'>
        <span className='flex items-center text-md'>
          <FaUser className='text-lime-600 mr-1' />
          <Link to="/login">Login</Link>
        </span>
        <span className='flex items-center text-md'>
          <FaUserPlus className='text-lime-600 mr-1' />
          <Link to="/register">Register</Link>
        </span>
      </div>
    </div>

  )
}

export default Topbar