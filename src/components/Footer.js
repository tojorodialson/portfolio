import React, {Component} from 'react';

export default class Footer extends Component {
    render(){
        return (
            <footer>
                <div className="container-fluid">
                    <div className="row">
                        <div className="map-image image-bg col-sm-12">
                            <div className="container mt-30">
                                <div className="row">
                                    <div className="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <div className="row">
                                            <div className="col-sm-6">
                                                <div className="text-left text-xs-center">
                                                    <p>Copyright ©{(new Date().getFullYear())}. All right reserved</p>
                                                </div>
                                            </div>
                                            <div className="col-sm-6">
                                                <ul className="social-icon">
                                                    <li><a href="https://linkedin.com/in/tojorodialson" target="_blank"><i className="fa fa-linkedin"></i></a></li>
                                                    <li><a href="mailto:contact@rtojo.me" target="_blank"><i className="fa fa-envelope"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        )
    }
}