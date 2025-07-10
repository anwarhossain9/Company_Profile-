import {
  createBrowserRouter
} from "react-router-dom";
import Main from "../layout/Main";
import Home from "../pages/home/Home";
import About from "../pages/about/About";
import RPL from "../pages/rpl/RPL";
import Login from "../pages/login/login/Login";
import Register from "../pages/login/register/Register";
import CourseDetails from "../pages/courses/courseDetails/CourseDetails";
import Test from "../test"
import AllCourses from "../pages/courses/allCourses/AllCourses";
import RplDetails from "../pages/rpl/rplDetails/RplDetails";
import Gallery from "../pages/gallery/Gallery";
import AssectProject from "../pages/assectProject/AssectProject";
import AssectProjectDetails from "../pages/assectProject/assectProjectDetails/AssectProjectDetails";
import GalleryDetails from "../pages/gallery/galleryDetails/GalleryDetails";
import AllRegularCourses from "../pages/courses/allRegularCourses/AllRegularCourses";




export const router = createBrowserRouter([
  {
    path: "/",
    element: <Main></Main>,
    children: [
      {
        path: '/',
        element: <Home></Home>
      },
      {
        path: 'about',
        element: <About></About>
      }, {
        path: 'rpl',
        element: <RPL></RPL>
      }, {
      }, {
        path: 'rpl/:title',
        element: <RplDetails></RplDetails>
      }, {
        path: 'login',
        element: <Login></Login>
      }, {
      }, {
        path: 'assect-project',
        element: <AssectProject></AssectProject>
      }, {
      }, {
        path: 'assect-project/:assectTitle',
        element: <AssectProjectDetails></AssectProjectDetails>
      }, {
        path: 'register',
        element: <Register></Register>
      }, {
        path: '/:category',
        element: <AllCourses></AllCourses>

      }, {
        path: '/:category/:details',
        element: <CourseDetails></CourseDetails>
      }, {
      }, {
        path: '/all-regular-courses',
        element: <AllRegularCourses></AllRegularCourses>
      }, {
        path: 'gallery',
        element: <Gallery></Gallery>
      },
 {
        path: 'gallery-details',
        element: <GalleryDetails></GalleryDetails>
      },
      { 
        path: 'test',
        element: <Test></Test>
      }
    ]
  },
  // {
  //   path:'dashboard',
  //   element:<Dashboard></Dashboard>,
  //   children:[
  //     {
  //       path:'adduser',
  //       element:<AddUser></AddUser>
  //     },
  //      {
  //       path:'viewuser',
  //       element:<ViewUser></ViewUser>
  //     }
  //   ]
  // }
]);