import {
  createBrowserRouter
} from "react-router-dom";
import Main from "../layout/Main";
import Home from "../pages/home/Home";
import About from "../pages/about/About";
import RPL from "../pages/rpl/RPL";


export const router = createBrowserRouter([
  {
    path: "/",
    element: <Main></Main>,
    children:[
        {
            path:'/',
            element:<Home></Home>
        },
         {
            path:'about',
            element:<About></About>
        }, {
            path:'rpl',
            element:<RPL></RPL>
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