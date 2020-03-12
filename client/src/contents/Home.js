import React, { Component } from 'react';

export default class Home extends Component {
    render() {
        return (
          <section className="mh-home image-bg home-2-img" id="home">
            <div className="img-foverlay img-color-overlay">
              <div className="container">
                <div className="row section-separator xs-column-reverse vertical-middle-content home-padding">
                  <div className="col-sm-6">
                    <div className="mh-header-info">
                      <div className="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                        <span>Hello I'm</span>
                      </div>
                      <h2 className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Tojo RODIALSON</h2>
                      <h4 className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">Backend Developer</h4>
                      <ul>
                        <li className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i className="fa fa-envelope"></i><a href="mailto:contact@rtojo.me">contact@rtojo.me</a></li>
                        <li className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i className="fa fa-linkedin"></i><a href="https://linkedin.com/in/tojorodialson" target="_blank">tojorodialson</a></li>
                      </ul>
                    </div>
                  </div>
                  <div className="col-sm-6">
                    <div className="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                      <div className="img-border"><img src="/assets/images/img.png" alt="" className="img-fluid" /></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        );
    }
}