import React, {Component} from 'react';
 
export default class Header extends Component {
    render(){
        return (
            <header className="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav" id="mh-header">
                <div className="overlay"></div>
                <div className="container">
                    <div className="row">
                        <nav className="navbar navbar-expand-lg mh-nav nav-btn">
                            <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span className="navbar-toggler-icon icon"></span>
                            </button>
                        
                            <div className="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul className="navbar-nav mr-auto ml-auto">
                                    <li className="nav-item"><a className="nav-link" href="#home">Home</a></li>
                                    <li className="nav-item"><a className="nav-link" href="#about">About</a></li>                              
                                    <li className="nav-item"><a className="nav-link" href="#experiences">Experiences</a></li>                              
                                    <li className="nav-item"><a className="nav-link" href="#portfolio">Portfolio</a></li>
                                    <li className="nav-item"><a className="nav-link" href="#contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
        )
    }
}