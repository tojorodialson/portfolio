import React, { Component } from 'react';

export default class Experiences extends Component {
    render() {
        return (
            <section className="mh-experince image-bg featured-img-one" id="experiences">
                <div className="img-color-overlay">
                    <div className="container">
                        <div className="row section-separator">
                            <div className="col-sm-12 col-md-6">
                                <div className="mh-education">
                                    <h3 className="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                                    <div className="mh-education-deatils">

                                        <div className="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                            <h4>Master From <a href="http://emit.mg" target="_blank">Emit</a></h4>
                                            <div className="mh-eduyear">2018-</div>
                                        </div>                                
                                        
                                        <div className="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                                            <h4>C# certificate From <a href="https://courses.edx.org/certificates/4b257b5bfa62448ebe31117dd0c02134" target="_blank">eDX</a></h4>
                                            <div className="mh-eduyear">2017</div>
                                        </div>                                
                                        
                                        <div className="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                            <h4>Bachelor's Degree From <a href="http://emit.mg" target="_blank">Emit</a></h4>
                                            <div className="mh-eduyear">2011-2013</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-sm-12 col-md-6">
                                <div className="mh-work">
                                    <h3>Work Experience</h3>
                                    <div className="mh-experience-deatils">
                                        
                                        <div className="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                            <h4>CTO & Co-founder <a href="https://nutrilife.io" target="_blank">NutrilifeIO</a></h4>
                                            <div className="mh-eduyear">2019-now</div>
                                        </div>                                
                                        
                                        <div className="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                                            <h4>CTO & Co-founder <a href="https://homyjob.com" target="_blank">HoMyJob</a></h4>
                                            <div className="mh-eduyear">2018-now</div>
                                        </div>                                
                                        
                                    </div>
                                </div>
                            </div>
                            <div className="col-sm-12 col-md-12 mt-5 text-center">
                                <a href="https://linkedin.com/in/tojorodialson" className="btn btn-fill" target="_blank">More Information</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
        );
    }
}