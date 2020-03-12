import React, { Component } from 'react';

export default class Services extends Component {
    render() {
        return (
            <section className="mh-service">
                <div className="container">
                    <div className="row section-separator">
                        <div className="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <h2>What I do</h2>
                        </div>
                        <div className="col-sm-4">
                            <div className="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <i className="fa fa-bullseye purple-color"></i>
                                <h3>Ideas</h3>
                                <p>Bring the necessary solutions for optimize your project. Provide support, security, and content management.</p>
                            </div>
                        </div>
                        <div className="col-sm-4">
                            <div className="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                <i className="fa fa-code iron-color"></i>
                                <h3>Web Development</h3>
                                <p>Development of the engine architecture of your project. From the database to the features necessary.</p>
                            </div>
                        </div>
                        <div className="col-sm-4">
                            <div className="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                <i className="fa fa-object-ungroup sky-color"></i>
                                <h3>Code Quality</h3>
                                <p>Make sure that the website opens up and functioning properly. Code optimization and bug fixes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        );
    }
}