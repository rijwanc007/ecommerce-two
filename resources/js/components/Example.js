import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Header from './header';
import Footer from './footer';

export default class Example extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <Header/>
                        <div className="card">
                            <div className="card-header">Example Component</div>
                        </div>
                        <Footer/>
                    </div>
                </div>
            </div>
        );
    }
}

// if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
// }
