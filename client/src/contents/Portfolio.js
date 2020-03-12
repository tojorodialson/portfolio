import React, { Component } from 'react';

export default class Portfolio extends Component {
    render() {
        return (
            <section className="mh-portfolio" id="portfolio">
                <div className="container">
                    <div className="row section-separator">
                        <div className="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                            <h3>Recent Portfolio</h3>
                        </div>
                        <div className="part col-sm-12 text-center">
                            <p><a href="https://www.coroflot.com/tojorodialson" className="btn btn-fill" target="_blank">Click here</a></p>                            
                        </div>
                    </div>
                </div>
            </section>
        );
    }
}