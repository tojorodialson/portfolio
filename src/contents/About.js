import React, { Component } from 'react';

export default class About extends Component {
    render() {
        return (
            <section className="mh-about" id="about">
                <div className="container">
                    <div className="row section-separator">
                        <div className="col-sm-12 col-md-6">
                            <div className="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                <img src="assets/images/ab-img.png" alt="" className="img-fluid" />
                            </div>
                        </div>
                        <div className="col-sm-12 col-md-6">
                            <div className="mh-about-inner">
                                <h2 className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">About Me</h2>
                                <p className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Hello, I'm Tojo RODIALSON, I started in 2014 the job developer and I have a great passion for it.</p>
                                <p className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">Going through the integrator job and project manager; my goal is become a CTO with very advanced technical skills.</p>

                                <p className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                    My strong points:
                                    <br/>
                                    <span className="ml-2">- be watch on technology</span><br/>
                                    <span className="ml-2">- an method organized working with a very schedule defined</span><br/>
                                    <span className="ml-2">- takes an initiative to contribute to development.</span><br/>
                                </p>

                                <div className="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                    <ul>
                                        <li><span>php</span></li>
                                        <li><span>Agile</span></li>
                                        <li><span>C#</span></li>
                                        <li><span>NodeJS</span></li>
                                        <li><span>UML</span></li>
                                        <li><span>React</span></li>
                                        <li><span>Javascript</span></li>
                                        <li><span>MySQL</span></li>
                                        <li><span>VB.Net</span></li>
                                        <li><span>Merise II</span></li>
                                        <li><span>git</span></li>
                                    </ul>
                                </div>
                                <a href="assets/resume.pdf" className="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" target="_blank">Download CV <i className="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        );
    }
}