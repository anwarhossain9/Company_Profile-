import { Outlet } from "react-router-dom"
import Navbar from "../pages/shared/navbar/Navbar"
import Footer from "../pages/shared/footer/Footer"


function Main() {
  return (
    <>
      <Navbar></Navbar>
      <Outlet></Outlet>
      <Footer></Footer>
    </>
  )
}

export default Main