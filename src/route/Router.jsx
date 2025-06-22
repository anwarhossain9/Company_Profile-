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
        path: 'login',
        element: <Login></Login>
      }, {
        path: 'register',
        element: <Register></Register>
      }, {
        path: 'courseDetails',
        element: <CourseDetails></CourseDetails>
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