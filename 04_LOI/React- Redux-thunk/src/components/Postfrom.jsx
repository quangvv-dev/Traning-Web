import React, { Component } from 'react';
import { connect } from 'react-redux';
import { createPost } from '../actions/postAction';

class Postfrom extends Component {
    constructor(props){
        super(props);
        this.state = {
            title : '',
            body  : ''
        }
    }

    onChange =(e)=>{
        this.setState({[e.target.name]:e.target.value});
    }

    onSubmit = (e) =>{
        e.preventDefault();
        const post = {
            title : this.state.title,
            body  : this.state.body
        };
        // call createPost
        this.props.createPost(post);
        
    }
    render() {
        return (
            <div>
                <form onSubmit={this.onSubmit}>
                    <div className="form-group" >
                        <label>Title</label>
                        <input type="text" name="title" className="form-control" onChange={this.onChange} />
                    </div>

                    <div className="form-group" >
                        <label>Title</label>
                        <textarea className="form-control" name="body" row="5" onChange={this.onChange}></textarea>
                    </div>
                    <button className="btn btn-primary" type="submit" name="submit">POST</button>
                </form>
            </div>
        );
    }
}

export default connect(null, { createPost })(Postfrom);