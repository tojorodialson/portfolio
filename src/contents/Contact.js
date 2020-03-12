import React, { Component } from 'react';

export default class Contact extends Component {
    render() {
        return (
            <section className="mh-quates image-bg home-2-img" id="contact">
                <div className="img-color-overlay">
                    <div className="container">
                        <div className="row section-separator">
                            <div className="each-quates col-sm-12 col-md-6">
                                <h3 className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Interested to Work?</h3>
                                <p className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">If you are interested click on the button</p>
                                <a href="mailto:contact@rtojo.me" className="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        );
    }
}