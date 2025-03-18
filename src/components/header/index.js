import React from 'react'
import { faReact } from '@fortawesome/free-brands-svg-icons'
import { Link, NavLink } from 'react-router-dom'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'

const Header = () => {
  return (
    <div className='navbar-area'>
      <div className='container'>
        <div className='row'>
          <div className='col-lg-12'>
            <nav className='navbar navbar-expand-lg'>
              <Link className='navbar-brand logo' to='/'>
                <FontAwesomeIcon icon={faReact} color='#5ed4f4' size='xl' />
              </Link>
              <button className='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
                aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span className='toggler-icon'></span>
                <span className='toggler-icon'></span>
                <span className='toggler-icon'></span>
              </button>
              <div className='collapse navbar-collapse sub-menu-bar' id='navbarSupportedContent'>
                <ul className='navbar-nav ms-auto' id='nav'>
                  <li className='nav-item'>
                    <NavLink exact='true' activeclassname='active' className='about-link text-decoration-none' to='/about'>
                      About
                    </NavLink>
                  </li>
                  <li className='nav-item'>
                    <NavLink exact='true' activeclassname='active' className='blogs-link text-decoration-none' to='/blog'>
                      Blog
                    </NavLink>
                  </li>
                </ul>
              </div>
              <div className='navbar-btn d-none d-sm-inline-block'>
                <Link className='main-btn text-decoration-none' data-scroll-nav='0' href='#'>Hire Me</Link>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  )
}

export default Header
