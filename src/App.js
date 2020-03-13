import React, { Component } from 'react';
import { BrowserRouter } from 'react-router-dom';

import Header from './components/Header';
import Footer from './components/Footer';
import GA from './components/GoogleAnalytics';

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
                <BrowserRouter>
                    { GA.init() && <GA.RouteTracker /> }
                </BrowserRouter>
            </div>
        );
    }
}