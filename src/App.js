import React, { Component } from 'react';

import Header from './components/Header';
import Footer from './components/Footer';

import Home from './contents/Home';
import About from './contents/About';
import Services from './contents/Services';
import Experiences from './contents/Experiences';
import Portfolio from './contents/Portfolio';
import Contact from './contents/Contact';

export default class App extends Component {
    render() {
        return (
            <div>
                <Header/>
                    <Home/>
                    <About/>
                    <Services/>
                    <Experiences/>
                    <Portfolio/>
                    <Contact/>
                <Footer/>
            </div>
        );
    }
}