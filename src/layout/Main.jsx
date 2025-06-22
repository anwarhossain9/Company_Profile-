import { Outlet } from "react-router-dom"
import Navbar from "../pages/shared/navbar/Navbar"
import Footer from "../pages/shared/footer/Footer"
import Topbar from "../pages/shared/topbar/Topbar"


function Main() {
  return (
    <>
      <Topbar></Topbar>
      <Navbar></Navbar>
      <Outlet></Outlet>
      <Footer></Footer>
    </>
  )
}

export default Main