import React from 'react'
import Layout from './components/layout'
import Home from './components/home'
import About from './components/about'
import Blog from './components/blog'
import { Route, Routes } from 'react-router-dom'
import 'bootstrap/dist/css/bootstrap.css'
import './App.scss'

function App() {
  return (
    <Routes>
      <Route path='/' element={<Layout />}>
        <Route index element={<Home />} />
        <Route path='about' element={<About />} />
        <Route path='blog' element={<Blog />} />
      </Route>
    </Routes>
  )
}

export default App
