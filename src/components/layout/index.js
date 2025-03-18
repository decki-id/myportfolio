import React from 'react'
import Header from '../header'
import Footer from '../footer'
import { Outlet } from 'react-router-dom'

const Layout = () => {
  return (
    <div className='App'>
      <Header />
      <Outlet />
      <Footer />
    </div>
  )
}

export default Layout
