import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import './index.css'
import App from './App.jsx'
import { RouterProvider } from 'react-router-dom'
import { router } from './route/Router.jsx'
import Root from './root/Root.jsx'

createRoot(document.getElementById('root')).render(
  <StrictMode>
    <Root>
      <div className='container mx-auto'>
        <RouterProvider router={router}>
          
        </RouterProvider>
      </div>
    </Root>
  </StrictMode>,
)
